<?php 

//Koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "dbuser");

function registrasi($data){

	global $conn;

	$fullname = $data["fullname"];
	$username = strtolower(stripcslashes($data["username"]));
	$password = mysqli_real_escape_string($conn, $data["password"]);
	$password2 = mysqli_real_escape_string($conn, $data["password2"]);

	//cek konfirmasi password
	if( $password !== $password2) {
		echo "<script>
					alert('konfirmasi Password Salah!');
			   </script>";
		return false;
	}

	//Enkripsi Password
	$password = password_hash($password, PASSWORD_DEFAULT);

	//Tambahkan data baru ke dalam database
	mysqli_query($conn, "INSERT INTO users VALUES('3', '$fullname', '$username', '$password')");
	
	return mysqli_affected_rows($conn);
	
}

 ?>