<!DOCTYPE html>
<html lang="en">
<head>
    <title>Tambah Produk</title>
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
    <br>
    <div class="container" id = "content">
        <div  class="row" id = "isi">
            <div class=row  id = "title">		
            <center><h2>Tambah Produk</h2></center>
        </div>
        <br>
        <div style="margin-left:10px:margin-right:10px">
            <form action="insert.php" method="POST" enctype="multipart/form-data">
                <div class="row">
                    <div class="form-group">
                        <label class="col-sm-2">Nama</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="name" required>
                        </div>
                    </div>
                </div>
				<br>
				<div class="row">
                    <div class="form-group">
                        <label class="col-sm-2">Keterangan </label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="ket" required>
                        </div>
                    </div>
                </div>
				<br>
                <div class="row">
                    <div class="form-group">
                        <label class="col-sm-2">Harga </label>
                        <div class="col-sm-10">
                            <input type="number" min="100" class="form-control" name="price" required>
                        </div>
                    </div>
                </div>
                <br>
			    <div class="row">
                    <div class="form-group">
                        <label class="col-sm-2">Jumlah </label>
                        <div class="col-sm-10">
                            <input type="number" min = "1" class="form-control" name="sum" required>
                        </div>
                    </div>
                </div>
				<br>
                <div class="form-group">
                    <center>
                        <div>
                            <button id = "tombol" type="submit" class="btn btn-success">Tambah</button>
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