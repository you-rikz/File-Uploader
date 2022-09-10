<?php
$success = $_GET['success'] ?? null;
$error = $_GET['error'] ?? null;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Document</title>
    <style>
        .table{
            padding-left: 350px;
        }
        .header{
            padding-left: 500px;
            padding-bottom: 50px;
            padding-top: 20px;
        }
    </style>
</head>
<body>
    <header class="header">
        <h1> Registration Form</h1>
    </header>
    <div class="table">
        <form method="POST" enctype="multipart/form-data" action="form-handler.php">
            <div class="form-group row">
                <label for="cname" class= "col-sm-2 col-form-label">Complete Name</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" id="cname" name="cname">
                </div>
            </div>

            <div class="form-group row">
                <label for="email" class= "col-sm-2 col-form-label">Email Address</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" id="email" name="email">
                </div>
            </div>

            <div class="form-group row">
                <label for="pass" class= "col-sm-2 col-form-label">Password</label>
                <div class="col-sm-5">
                    <input type="password" class="form-control" id="pass" name="pass">
                </div>
            </div>

            <div class="form-group row">
                <label for="cpass" class= "col-sm-2 col-form-label">Confirm Password</label>
                <div class="col-sm-5">
                    <input type="password" class="form-control" id="cpass" name="cpass">
                </div>
            </div>

            <div class="form-group row">
                <label for="picture" class= "col-sm-2 col-form-label">Picture</label>
                <div class="col-sm-5">
                    <input type="file" class="form-control" id="picture" name="picture">
                </div>
            </div>

            <div class="form-group row">
                    <input class="btn btn-primary btn-lg" type="submit" value="Submit" style="margin-left: 300px;">
                </div>
            </div>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>