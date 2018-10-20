<?php
	$server = "localhost";
	$username = "root";
	$password = "";
	$db = "db_mahasiswabaru";
	$koneksi = mysqli_connect($server,$username,$password,$db);

	if(!$koneksi){
		echo "KONEKSI GAGAL!!!!!";
	}
?>