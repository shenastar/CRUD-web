<!DOCTYPE html>
<html>
<head>
 <title>Daftar Produk</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td, tr,th {
            border: 3px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }

        body {
            background-color : #99ccff;
        }

        table {
            border : 1px;
            margin:0 auto;
            width:90%
        }

        .container {
            background-color : white;
            background-repeat: repeat;
            background-attachment: scroll;
            background-clip: border-box;
            background-origin: padding-box;
            background-position-x: 100%;
            background-position-y: 100%;
            background-size: auto auto;
            height:900px
        }
        .title{
            background-color:#DDD6FF;
            background-position: 100%;
            background-position-y: 100%;
            background-size: auto auto;
        }
    </style>
</head>
<body>

<div class = "container">
<br>
<div class = "title"><center><h2><br>Daftar Produk</h2></center><br></div><br>
<div class="card mt-3">
	  <div class="card-body">
	    <table class="table table-bordered table-striped">
	    	<tr>
	    		<th>No.</th>
	    		<th>Nama Produk</th>
	    		<th>Keterangan</th>
	    		<th>Harga</th>
          <th>Jumlah</th>
	    		<th>Edit</th>
          <th>Delete</th>
	    	</tr>
	    	<?php
          include "connect.php";
	    		$no = 1;
          $sql = "SELECT id_produk, nama_produk, keterangan, harga, jumlah "."FROM produk";
          $run = mysqli_query ($connect,$sql);
          while ($col = mysqli_fetch_array($run)){
            echo "<tr>";
            echo "<td>".$no++."</td>";
            echo "<td>".$col['nama_produk']."</td>";
            echo "<td>".$col['keterangan']."</td>";
            echo "<td>".$col['harga']."</td>";
            echo "<td>".$col['jumlah']."</td>";
            echo "<td><center><a href='edit.php?id=".$col['id_produk']."'"."class='btn btn-warning'> Edit </a></center>";
            echo "<td><center><a href='delete.php?id=".$col['id_produk']."'".
            "onclick='return confirm(".'"Apakah yakin ingin menghapus data ini?")'."'".
            "class='btn btn-danger'> Delete </a></center>";
            echo "</td>";
            echo "</tr>";
          }
	    	?>
      </table>
      <center>
          <a href="tambah.php" class="btn btn-success" id = "tombol" type="submit">Tambah</a>
      </center>
	  </div>
	</div>
</div>
</body>
</html>

