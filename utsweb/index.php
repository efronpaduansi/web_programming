<?php 

    //Koneksi ke halaman functions
    require 'functions.php';


    if(isset($_POST["register"])) {

        if( registrasi($_POST) > 0 ){

            echo "<script> 
                    alert('registrasi berhasil!');
                  </script>";
        }else {
            echo mysqli_error($conn);
        }
    }
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

    <title>UTS Web|Sign up</title>
    <style>
        body{
            background-color: #4B0082;
            color:white;
        }  
        .container{
            width: 40%;
            margin-top: 5%;
            box-shadow: 0 3px 20px rgba(0,0,0,0.5);
            padding: 40px;
            border-radius: 5px;
            background-color: white;
            color: black;
        }
        footer{
            color: black;
            padding: 10px;         
        }
    </style>
  </head>
  <body>
    <h4 class="text-center mt-5">Registration Page</h4><hr>
    <!-- Forms -->
        <div class="container mt-5 col-sm-6">
            <h4 class="text-center">Sign up for Free</h4> <hr>
            <form action="" method="post">
                <div class="form-group">
                    <label for="fullname">Full Name</label>
                    <input type="text" class="form-control" name="fullname" id="fullname" placeholder="Fullname" autocomplete="off" autofocus>
                </div>
                 <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" class="form-control" name="username" id="username" placeholder="Username" autocomplete="off">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                </div>
                <div class="form-group">
                    <label  for="password2">Confirm Password</label>
                    <input type="password" class="form-control" name="password2" id="password2" placeholder="Confirm Password">
                </div>
                <button type="submit" name="register" class="btn btn-primary">Sign up</button>
                <h5 class="mt-3">Have an account? <a href="login.php">Sign in</a></h5>
            </form>
        </div> <br><br>

    <!-- Forms -->

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script type="text/javascript" href="assets/js/bootstrap.min.js"></script>

    -->
  </body>
  <footer class="bg-light text-center">
      <p>&copy; 2020 Pemrograman Web 1 | Efron Paduansi</p>
  </footer>
</html>