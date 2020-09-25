<?php
	$user = 'root';
	$pass = '';
	$host = 'localhost';
	$db = 'arkademy';

	$connect= mysqli_connect($host,$user,$pass,$db);

	if (mysqli_connect_errno()){
		echo "koneksi gagal";
		exit;
	}
?>
