<?php
	include "connect.php";

    $id = $_GET['id'];

    $delete = "DELETE FROM produk WHERE id_produk = '$id'";
				
	$run = mysqli_query ($connect, $delete);

	if ($run){
		echo '<script type="text/javascript">alert("Produk berhasil dihapuskan!") 
        window.location.href = "index.php";</script>';
	}
	else{
		echo '<script type="text/javascript">alert("Produk gagal dihapuskan!") 
        window.location.href = "index.php";</script>';
	} 
	mysqli_close($connect);
?>