<?php
$success = $_GET['success'] ?? null;
$error = $_GET['error'] ?? null;
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<style>
    .container {
    margin-right: auto;
  width: 500px;
  clear: both;
}

.container input {
  width: 100%;
  clear: both;
}
.contrainer button {

}
</style>

</head>
<body>

<form action="/action_page.php">
<?php if (!is_null($success)): ?>
  <div class="container">
    <h1>Register Form</h1>
    <hr>

    
    <label for="Cname"><b>Complete Name</b></label>
    <input type="text" name="Cname" id="Cname" required><br><br>
    

    <label for="email"><b>Email Address</b></label>
    <input type="text" name="email" id="email" required><br><br>

    <label for="psw"><b>Password</b></label>
    <input type="password" name="psw" id="psw" required><br><br>

    <label for="c-psw"><b>Confirm Password</b></label>
    <input type="password" name="c-psw" id="c-psw" required><br><br>

    <label for="pic"><b>Picture</b></label>
    <input type="file" name="pic" id="pic" required>

    <hr>

    <button type="submit" class="registerbtn">Submit Registration</button>
  </div>
  <?php endif ?>
  

</form>

</body>
</html>
