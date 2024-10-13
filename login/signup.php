<?php
  $showAlert = false;
  $showError = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
include 'partials/_dbconnect.php';
$email = $_POST["email"];
$username = $_POST["username"];
$password= $_POST["password"];
$confirmPassword = $_POST["confirmPassword"];
$exists=false;
if(($password == $confirmPassword && $exists==false)){
$sql = "INSERT INTO `users`.`users` (`email`, `username`, `Password`, `confirmPassword`, `dt`) VALUES ( '$email', '$username', '$password', '$confirmPassword', current_timestamp());";
$result = mysqli_query($conn, $sql);
if ($result){
  $showAlert = true;
}
}
else{$showError = "Password do not match";}
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>singup</title>
  </head>
  <body>
    <?php require 'partials/_nav.php' ?>
    <?php
    if($showAlert){
echo '
    <div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>success!</strong> You account is created and you can login.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
    }

    if($showError){
      echo '
          <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error!</strong>'.$showError.'
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>';
          }



    ?>


    <div class="container">
        <h1 class="text-center">signup to our gym</h1>

   


    <form action="http://localhost/login/signup.php" method="post">
  <div class="form-group">
    <label for="username">Email</label>
    <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>

  <div class="form-group">
    <label for="username">username</label>
    <input type="text" form-control class="form-control" id="username" name="username" aria-describedby="emailHelp">
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="password" name="password">

  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">confirm Password</label>
    <input type="password" class="form-control" id="confirmPassword" name="confirmPassword">
    <small id="emailHelp" class="form-text text-muted">Make sure to type the same password</small>
  </div>



  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">singup</button>
</form>


</div>










    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>
</body>
</html>