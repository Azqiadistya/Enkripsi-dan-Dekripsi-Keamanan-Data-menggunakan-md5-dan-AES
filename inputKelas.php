<?php 
	include "koneksi.php";

	$peminatan = $_POST['peminatan'];	
	$kelas = $_POST['kelas'];

	$ALGORITHM = "AES-128-CBC";
	$password = "passwordku";
	$IV = "1906ghkfny56vf23";

	$peminatanEncrypt = openssl_encrypt($peminatan, $ALGORITHM, $password, 0, $IV);
	$kelasEncrypt = openssl_encrypt($kelas, $ALGORITHM, $password, 0, $IV);

	$SQL= mysqli_query($konek, "INSERT INTO kelas values (' ','$peminatanEncrypt', '$kelasEncrypt')")
	or die(mysqli_error($konek));

	if($SQL){	
        echo "
        <script>
            document.location.href = 'kelas.php';
        </script> ";
	}
	else{
		echo "Proses Input GAGAL";
	}
 ?>