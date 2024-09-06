<?php 
	include "koneksi.php";

	$mapel = $_POST['mapel'];	
	$guru = $_POST['guru'];
	$ALGORITHM = "AES-128-CBC";
	$password = "passwordku";
	$IV = "1906ghkfny56vf23";

	$mapelEncrypt = openssl_encrypt($mapel, $ALGORITHM, $password, 0, $IV);
	$guruEncrypt = openssl_encrypt($guru, $ALGORITHM, $password, 0, $IV);


	$SQL= mysqli_query($konek, "INSERT INTO mapel values (' ','$mapelEncrypt', '$guruEncrypt')")
	or die(mysqli_error($konek));

	if($SQL){	
	        echo "
            <script>
                document.location.href = 'mapel.php';
            </script> ";
	}
	else{
		echo "Proses Input GAGAL";
	}
 ?>