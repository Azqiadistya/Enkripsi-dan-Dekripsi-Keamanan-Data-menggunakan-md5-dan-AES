<?php 
	include "koneksi.php";
	$nis = $_POST['nis'];
	$nama = $_POST['nama'];	
    $kelas = $_POST['kelas'];

	$ALGORITHM = "AES-128-CBC";
	$password = "passwordku";
	$IV = "1906ghkfny56vf23";

	$kelasEncrypt = openssl_encrypt($kelas, $ALGORITHM, $password, 0, $IV);

	$SQL= mysqli_query($konek, "INSERT INTO siswa values ('$nis','$nama','$kelasEncrypt')")
	or die(mysqli_error($konek));

	if($SQL){	
	        echo "
            <script>
                document.location.href = 'siswa.php';
            </script> ";
	}
	else{
		echo "Proses Input GAGAL";
	}
 ?>