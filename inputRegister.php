<?php 
	include "koneksi.php";

	$firstName = $_POST['firstName'];	
	$lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirmPassword'];

	//enkripsi dengan md5
	$password = md5($password);
	$confirmPassword = md5($confirmPassword);

	$SQL= mysqli_query($konek, "INSERT INTO register values (' ','$firstName', '$lastName', '$email', '$password','$confirmPassword')")
	or die(mysqli_error($konek));

	if($SQL){	
	        echo "
            <script>
                document.location.href = 'login.php';
            </script> ";
	}
	else{
		echo "Proses Input GAGAL";
	}
 ?>