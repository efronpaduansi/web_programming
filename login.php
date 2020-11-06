<?php 
require 'functions.php';

if( isset($_POST["submit"]) ){

    $username = $_POST["username"];
    $password = $_POST["password"];

    //Mengecek bahwa user sudah ada didalam database
    $result = mysqli_query($conn, "SELECT * FROM users WHERE username = '$username'");

    //Cek Username
    if( mysqli_num_rows($result) === 1){

        //Cek Password
        $row = mysqli_fetch_assoc($result);
       if( password_verify($password, $row["password"]) ){

            header("Location: member.php?loginsuccess");
           exit();

       }

    }

    $error = true;


}


?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>UTS Web | Login</title>
    <style>
        body{
            background-color: #4B0082;
            color: white;
        }
        .container{
            width: 40%;
            margin-top: 5%;
            box-shadow: 0 3px 20px rgba(0,0,0,0.5);
            padding: 40px;
            border-radius: 10px;
            background-color: white;
            color: black;
        }

    </style>

  </head>
  <body>
    <!-- form Login -->
        <h4 class="text-center mt-5">Login Page</h4><hr>
        <div class="container col-sm-6 mt-5">
            <h5 class="text-center mt-3">Sign in to Continue</h5><hr>
            <form action="" method="post">
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" class="form-control" name="username" id="username" placeholder="Username" autocomplete="off" autofocus>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="form-control" id="password" placeholder="Password" autocomplete="off">
                </div>
                <button type="submit" name="submit" class="btn btn-primary">Sign in</button>
                <h5 class="mt-3">Don't have an account? <a href="index.php">Sign up</a></h5>
            </form>
        </div>

    <!-- End form login -->

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </body>
</html>