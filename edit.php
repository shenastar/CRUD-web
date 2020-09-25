<!DOCTYPE html>
<html lang="en">
<head>
    <title>Edit Produk</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<style>
        body {
            background-color : #99ccff;
        }
	
        #content{
            background-color : white;
        }

        #isi {
            margin-top:50px;
            margin-bottom:50px;
            margin-right:60px;
            margin-left:60px;
        }

        #title {
            background-color:#DDD6FF;
            background-position: 100%;
            background-position-y: 100%;
            background-size: auto auto;
        }

        #tombol{
            color:white;
        }
	</style>
</head>
<body>
    <?php
        include "connect.php";
        $id = $_GET['id'];
        session_start();
        $_SESSION['id'] = $id;
        $sql = "SELECT * FROM produk WHERE id_produk='".$id."'";
        $run = mysqli_query ($connect,$sql);
        $col = mysqli_fetch_array($run);
    ?>
    <br>
    <div class="container" id = "content">
        <div  class="row" id = "isi">
            <div class=row  id = "title">		
            <center><h2>Edit Produk</h2></center>
        </div>
        <br>
        <div style="margin-left:10px:margin-right:10px">
            <form action="update.php" method="POST" enctype="multipart/form-data">
                <div class="row">
                    <div class="form-group">
                        <label class="col-sm-2">ID</label>
                        <div class="col-sm-10">
                            <?php
                                echo '<input class="form-control" type="text" name="id_produk" value='.$col['id_produk'].' disabled>';
                            ?>
                        </div>
                    </div>
                </div>
				<br>
                <div class="row">
                    <div class="form-group">
                        <label class="col-sm-2">Nama</label>
                        <div class="col-sm-10">
                            <?php
                                echo '<input type="text" class="form-control" name="name" required value='.$col['nama_produk'].'>';
                            ?>
                        </div>
                    </div>
                </div>
				<br>
				<div class="row">
                    <div class="form-group">
                        <label class="col-sm-2">Keterangan </label>
                        <div class="col-sm-10">
                            <?php
                                echo '<input type="text" class="form-control" name="ket" required value='.$col['keterangan'].'>';
                            ?>
                        </div>
                    </div>
                </div>
				<br>
                <div class="row">
                    <div class="form-group">
                        <label class="col-sm-2">Harga </label>
                        <div class="col-sm-10">
                            <?php
                                echo '<input type="number" class="form-control" name="price" required value='.$col['harga'].'>';
                            ?>
                        </div>
                    </div>
                </div>
                <br>
			    <div class="row">
                    <div class="form-group">
                        <label class="col-sm-2">Jumlah </label>
                        <div class="col-sm-10">
                            <?php
                                echo '<input type="number" class="form-control" name="sum" required value='.$col['jumlah'].'>';
                            ?>
                        </div>
                    </div>
                </div>
				<br>
                <div class="form-group">
                    <center>
                        <div>
                            <button id = "tombol" type="submit" class="btn btn-warning">Edit</button>
                            <a href="index.php" class="btn btn-danger" id = "tombol" type="submit">Kembali</a>
                        </div>
                    </center>
					</DIV>
                </div>
            </form>
        </div>
</div>
</body>
</html>