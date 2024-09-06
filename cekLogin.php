<?php
	
	include "koneksi.php";

	$email = $_POST['email'];
	$password = md5($_POST['password']);

	$query = mysqli_query($konek, "SELECT * FROM `register` WHERE `email` = '$email' && `password` = '$password'") or die (mysqli_error($konek));

	$cek = mysqli_num_rows($query);
	if($cek > 0){
		session_start();
		$_SESSION['email'] = $email;
		$_SESSION['password'] = $password;
		header("location:index.html");
	}
	else{
		header("location:login.php?pesan=gagal");
	}
 ?>
