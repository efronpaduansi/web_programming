<?php 

    //Koneksi DMBMS
    require 'connection.php';

//ambil data di URL
$npm = $_GET ["npm"];

//query data mahasiswa berdasarkan id
$mhs = query ("SELECT * FROM DataMahasiswa WHERE npm = $npm") [0] ;



//Cek apakah tombol submit sudah ditekan atau belum

if(isset($_POST ["submit"])) {


    //mengecek keberhasilan ubah data dari form
    if (update ($_POST) >0) {

        //menampikan alert dengan menggunakan script
        echo "
                <script>
                    alert ('Data berhasil diubah!')
                    document.location.href = 'index.php';
                </script>
        ";
    } else {
        echo "
            <script>
                    alert ('Data gagal diubah!')
                    document.location.href = 'index.php';
            </script>
        ";
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Insert|UASWeb</title>

    <style>
        
        body{
            background-color: #F5F5F5;
        }
    </style>


  </head>
  <body>


    <!-- Navbar -->
        <!-- Just an image -->
        <nav class="navbar navbar-light bg-success">
          <a class="navbar-brand" href="#">
            <img src="img/logoeresha.png" width="70" height="70" alt="" loading="lazy">

          </a>
        </nav>

    <!-- Tutup Navbar -->

    
    <div class="container text-center mt-3">
        <h2>Update Data Mahasiswa</h2>
        <hr>
        <h4>UAS PEMROGRAMAN WEB</h4>
    </div>

    <!-- FORMS -->

    <div class="container col-sm-6 mt-5">
        <form action="" method="POST">

            <!-- kirimkan data id agar bisa dipanggil dihalaman functions.php -->
            <input type="hidden" name="id" value="<?php echo $mhs ["npm"]; ?>">
            
            <div class="form-group">
                <label for="npm">NPM :</label>
                <input type="text" class="form-control" name="npm" id="npm" required="" autofocus="" autocomplete="" value="<?php echo $mhs["npm"]; ?>">
            </div>

            <div class="form-group">
                <label for="Nama">Nama Lengkap :</label>
                <input type="text" class="form-control" name="Nama" id="Nama" required="" autocomplete="" value="<?php echo $mhs["Nama"]; ?>">
            </div>

            <div class="form-group">
                <label for="TanggalLahir"> TTL :</label>
                <input type="text" class="form-control" name="TanggalLahir" id="TanggalLahir" required="" autocomplete="" value="<?php echo $mhs["TanggalLahir"]; ?>">
            </div>

            <div class="form-group">
                <label for="Jurusan">Jurusan :</label>
                <input type="text" class="form-control" name="Jurusan" id="Jurusan" required="" value="<?php echo $mhs["Jurusan"]; ?>">
            </div>

            <div class="form-group">
                <label for="Alamat">Alamat :</label>
                <input type="text" class="form-control" name="Alamat" id="Alamat" required="" autocomplete="" value="<?php echo $mhs["Alamat"]; ?>">
            </div>

            <button type="submit" name="submit" class="btn btn-primary">Update</button>
            <a href="index.php">Kembali</a>

           
        </form>
    </div>

    <br>
    <br> <br>




    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
  </body>
</html>