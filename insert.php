<?php
	include "connect.php";

	$nama = $_POST['name'];
	$keterangan = $_POST['ket'];
	$harga = $_POST['price'];
	$jumlah = $_POST['sum'];

	$insert = "INSERT INTO produk (nama_produk, keterangan, harga, jumlah )"
				."VALUES ('$nama','$keterangan','$harga', '$jumlah')";
				
	$run = mysqli_query ($connect,$insert);

	if ($run){
		echo '<script type="text/javascript">alert("Produk berhasil ditambahkan!") 
        window.location.href = "index.php";</script>';
	}
	else{
		echo '<script type="text/javascript">alert("Produk gagal ditambahkan!") 
        window.location.href = "index.php";</script>';
	} 
	mysqli_close($connect);
?>

