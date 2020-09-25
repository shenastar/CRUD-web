<?php
	include "connect.php";
    
    session_start();
    $id = $_SESSION['id'];
	$nama = $_POST['name'];
	$keterangan = $_POST['ket'];
	$harga = $_POST['price'];
	$jumlah = $_POST['sum'];

    $update = "UPDATE produk SET nama_produk='$nama',keterangan='$keterangan',harga='$harga',jumlah='$jumlah' WHERE id_produk = '$id'";
				
	$run = mysqli_query ($connect,$update);

	if ($run){
        echo '<script type="text/javascript">alert("Produk berhasil diedit!") 
        window.location.href = "index.php";</script>';
	}
	else{
        echo '<script type="text/javascript">alert("Produk gagal diedit!") 
        window.location.href = "edit.php";</script>';
	} 
	mysqli_close($connect);
?>

