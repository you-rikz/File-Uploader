<?php
$success = $_GET['success'] ?? null;
$error = $_GET['error'] ?? null;
?>
<!doctype html>
<html lang="en">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<title>File Upload Handler in PHP</title>
</head>
<body>
<div class="container-sm">

  <?php if (!is_null($success)): ?>
  <div class="alert alert-success" role="alert">
    Your file was successfully uploaded
  </div>
  <?php endif ?>

  <?php if (!is_null($error)): ?>
  <div class="alert alert-danger" role="alert">
    Unable to upload your file
  </div>
  <?php endif ?>

  <h1>PDC10 - File Uploader</h1>
  <form method="POST" enctype="multipart/form-data" action="upload-handler.php">
    <div class="mb-3">
      <label for="input_file" class="form-label">Upload your file</label>
      <input name="input_file" class="form-control" type="file" id="input_file">
    </div>
    <input type="submit" value="Upload the file" class="btn btn-secondary btn-lg" />
  </form>

</div>

<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
-->
</body>
</html>