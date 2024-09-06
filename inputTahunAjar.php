<?php 
	include "koneksi.php";

	$periode = $_POST['periode'];	
	$keterangan = $_POST['keterangan'];
	$ALGORITHM = "AES-128-CBC";
	$password = "passwordku";
	$IV = "1906ghkfny56vf23";

	$periodeEncrypt = openssl_encrypt($periode, $ALGORITHM, $password, 0, $IV);
	$keteranganEncrypt = openssl_encrypt($keterangan, $ALGORITHM, $password, 0, $IV);

	$SQL= mysqli_query($konek, "INSERT INTO tahunajar values (' ','$periodeEncrypt', '$keteranganEncrypt')")
	or die(mysqli_error($konek));
	

	if($SQL){	
        echo "
        <script>
            document.location.href = 'TahunAjar.php';
        </script> ";
	}
	else{
		echo "Proses Input GAGAL";
	}
 ?>