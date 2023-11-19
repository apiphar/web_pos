<?php
	$koneksi = mysqli_connect("localhost","root","","pos_web");

	if (mysqli_connect_errno()){ 
		echo "Koneksi database gagal:". mysqli_connect_error();
		}

?>