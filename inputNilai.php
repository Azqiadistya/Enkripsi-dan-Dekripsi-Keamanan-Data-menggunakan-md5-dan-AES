<?php 
	include "koneksi.php";
    $nama = $_POST['nama'];
	$mapel = $_POST['mapel'];
	$nilai = $_POST['nilai'];	
    

	$ALGORITHM = "AES-128-CBC";
	$password = "passwordku";
	$IV = "1906ghkfny56vf23";

	$nilaiEncrypt = openssl_encrypt($nilai, $ALGORITHM, $password, 0, $IV);

	$SQL= mysqli_query($konek, "INSERT INTO nilai values ('','$nama','$mapel','$nilaiEncrypt')")
	or die(mysqli_error($konek));

	if($SQL){	
	        echo "
            <script>
                document.location.href = 'nilai.php';
            </script> ";
	}
	else{
		echo "Proses Input GAGAL";
	}
 ?>