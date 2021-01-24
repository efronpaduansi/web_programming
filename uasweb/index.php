<?php 

//Koneksi ke halaman koneksi

    require 'connection.php';

    $mahasiswa = query ("SELECT * FROM DataMahasiswa");


?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Data Mahasiswa|UASWeb</title>
  </head>

    <style>
        
        body{
            background-color: #F5F5F5;
        }
    </style>


  <body>
    <!-- Navbar -->
        <!-- Just an image -->
        <nav class="navbar navbar-light bg-success">
          <a class="navbar-brand" href="#">
            <img src="img/logoeresha.png" width="70" height="70" alt="" loading="lazy">
          </a>
        </nav>

    <!-- Tutup Navbar -->





    
    <div class="container text-center mt-5">
        
        <h2>DATA MAHASISWA</h2> <hr>
        <h4>UAS PEMROGRAMAN WEB</h4>

    </div>
    <div class="container">
        
        <button type="button" class="btn btn-dark"> <a href="insert.php">Tambah Data</a></button>
    </div>
       

    <!-- Table data mahasiswa -->
        <div class="container">

            <table class="table mt-5 table-bordered">
                <thead class="thead-dark">

                    <tr>
                      <th scope="col">Nomor</th>
                      <th scope="col">NPM</th>
                      <th scope="col">Nama Lengkap</th>
                      <th scope="col">TTL</th>
                      <th scope="col">Jurusan</th>
                      <th scope="col">Alamat</th>
                      <th scope="col">Proses</th>
                    </tr>
              </thead>

              <tbody>
                <?php $i= 1; ?>
                 <?php foreach ($mahasiswa as $row) : ?>
                <tr>
                 
                  <th scope="row"> <?php echo $i; ?></th>
                  <td> <?php echo $row["npm"]; ?></td>
                  <td> <?php echo $row["Nama"]; ?></td>
                  <td><?php echo $row["TanggalLahir"]; ?></td>
                  <td><?php echo $row["Jurusan"]; ?></td>
                  <td><?php echo $row["Alamat"]; ?></td>
                  <td>
                      <a href="edit.php?npm= <?php echo $row ["npm"]; ?>">Edit</a> | 
                         <a href="delete.php?npm= <?php echo $row ["npm"]; ?>" onclick = "
                    return confirm ('Apakah anda yakin untuk menghapus data ini ?');">Delete</a>

                  </td>
                </tr>
                <?php $i++; ?>
                
              </tbody>
          <?php endforeach; ?>

        </table>
    </div>



    <!-- Tutup Table-->




















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
  <br><br><br>

  <footer class="text-center">
      <p>UAS PEMROGRAMAN WEB|&copy; Efron Paduansi</p>
  </footer>

</html>