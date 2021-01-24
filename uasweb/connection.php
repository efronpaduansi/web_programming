
<?php 
    
    //Efronius Paduansi
    //1810214001159
    
    //koneksi ke database


    $conn = mysqli_connect("localhost", "root", "", "Akademik");



    function query ($query) {
        global $conn;
        $result = mysqli_query($conn, $query);
        $rows = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $rows [] = $row;

        }
        return $rows;
    }

    function insert ($data) {
        global $conn;

        //Ambil data setiap elemen dalam form
        //htmlspecialchars untuk menyaring syntax html yang berbahaya
        $npm = htmlspecialchars($data ["npm"]);
        $Nama = htmlspecialchars($data ["Nama"]);
        $TanggalLahir = htmlspecialchars($data ["TanggalLahir"]);
        $Jurusan = htmlspecialchars($data ["Jurusan"]);
        $Alamat = htmlspecialchars($data ["Alamat"]);

        //query insert data
        $query = "INSERT INTO DataMahasiswa VALUES 
                    ('$npm', '$Nama', '$TanggalLahir', '$Jurusan', '$Alamat')
                ";
        mysqli_query ($conn, $query);

        return mysqli_affected_rows ($conn);

    }

    function delete ($npm) {
        global $conn;
        mysqli_query($conn, "DELETE FROM DataMahasiswa WHERE npm = $npm");

        return mysqli_affected_rows ($conn);
    }


    function update ($data) {

        global $conn;

    //Ambil data setiap elemen dalam form
    //htmlspecialchars untuk menyaring syntax html yang berbahaya

    $npm = $data ["npm"];

    $Nama = htmlspecialchars($data ["Nama"]);
    $TanggalLahir = htmlspecialchars($data ["TanggalLahir"]);
    $Jurusan = htmlspecialchars($data ["Jurusan"]);
    $Alamat = htmlspecialchars($data ["Alamat"]);

    //query insert data
    $query = "UPDATE DataMahasiswa SET 
                Nama = '$Nama',
                TanggalLahir = '$TanggalLahir',
                Jurusan = '$Jurusan',
                Alamat = '$Alamat',
                
            WHERE npm = $npm ";


    mysqli_query ($conn, $query);

    return mysqli_affected_rows ($conn);

    }


 ?>













