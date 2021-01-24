<?php 

//hubungkan ke file functions.php

require 'connection.php';

$npm = $_GET  ["npm"];
 
 if (delete ($npm) > 0) {

 	echo "
 			<script> 
 			alert ('Data berhasil dihapus!')
 			document.location.href = 'index.php';
 			</script>
 	";
 } else {
 	echo "
 			<script> 
 				alert ('Data gagal dihapus!')
 				document.location.href = 'index.php';
 			</script>
 	";
 }



?>