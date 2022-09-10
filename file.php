<?php

class File
{
	protected $id;
	protected $complete_name;
	protected $email;
	protected $password;
	protected $picture_path;

	const TYPE_DOCUMENT = 'document';
	const TYPE_IMAGE = 'uploads/';

	const DIRECTORY_DOCUMENTS = 'documents/';
	const DIRECTORY_IMAGES = 'images/';

	public function __construct(
		$complete_name,
		$email,
		$password,
		$picture_path = null,
	)
	{
		$this->complete_name = $complete_name;
		$this->email = $email;
		$this->password = $password;
		$this->picture_path = $picture_path;
	}

	public function getCname()
	{
		return $this->complete_name;
	}

	public function getEmail()
	{
		return $this->email;
	}

	public function getPass()
	{
		return $this->password;
	}

	public function getPicture()
	{
		return $this->picture_path;
	}

	public function save()
	{
		global $pdo;
		try {

			$sql = "INSERT INTO files SET complete_name=:complete_name, email=:email, password=:password, picture_path=:picture_path";
			$statement = $pdo->prepare($sql);

			return $statement->execute([
				':complete_name' => $this->getCname(),
				':email' => $this->getEmail(),
				':password' => $this->getPass(),
				':picture_path' => $this->getPic()
			]);

		} catch (Exception $e) {
			error_log($e->getMessage());
		}
	}

	public static function handleUpload($fileObject)
	{
		try {
			$base_dir = getcwd() . '/';
			$target_dir = $base_dir . static::DIRECTORY_DOCUMENTS;

			$check = getimagesize($fileObject['tmp_name']);
			if ($check !== false) {
				$target_dir = $base_dir . static::DIRECTORY_IMAGES;
			}

			if (is_uploaded_file($fileObject['tmp_name'])) {
				$target_file_path = $target_dir . $fileObject['name'];
				if (move_uploaded_file($fileObject['tmp_name'], $target_file_path)) {
					$save_file_type = static::TYPE_DOCUMENT;
					if (strpos($target_file_path, static::DIRECTORY_IMAGES)) {
						$save_file_type = static::TYPE_IMAGE;
					}
					return [
						'picture_path' => $target_file_path,
						'save_path' => $save_file_path
					];
				}
			}
		} catch (Exception $e) {
			error_log($e->getMessage());
			return false;
		}
	}
}