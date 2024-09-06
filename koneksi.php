<?php
	$username = "root";
	$password = "";
	$db	= "smandagiri";
	$server = "localhost";

	$konek= new mysqli($server, $username, $password, $db);

	if ($konek-> connect_error){
		die("Maaf Koneksi Gagal".$connect->connect_error);
	}
?>
