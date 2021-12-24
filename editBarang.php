<?php

    include 'koneksi.php';
	$id_barang = $_GET["id_barang"];
	$sql = "SELECT * FROM barang WHERE id_barang='$id_barang'";
	$barang = mysqli_query($koneksi, $sql);
	$sdf=mysqli_fetch_array($barang);
	$id_barang = $sdf["id_barang"];
	$namaBarang = $sdf["namaBarang"];
	$merk = $sdf["merk"];
	$noSeri = $sdf["noSeri"];
	$satuan = $sdf["satuan"];
	$harga = $sdf["harga"];
	?>
<html>
    <head>
        <title>Buku Induk</title>
        <link rel="stylesheet" href="css/bootstrap.min.css">    
        <link rel="stylesheet" href="css/dataTables.bootstrap.css">
	<link rel="stylesheet" href="css/bootstrap-datepicker.min.css">
    </head>
<body>
	<div class="container">

	<p><h1 align="center">Edit Data Barang</h1></p>
		<form name="form1" method="post" action="edit2.php">
		<input type="hidden" name="id_barang" value="<?php echo $id_barang; ?>"/>
			<div class="row">
              	<div class="col-xs-2">
					<div class="form-group">
						<label>Nama Barang </label>
					</div>
				</div>
				<div class="col-xs-1">
					<div class="form-group">
						<label>:</label>
					</div>
				</div>
				<div class="col-xs-3">
					<div class="form-group">
						<input class="form-control" type="text" name="namaBarang" value="<?php echo $namaBarang;?>" required>
					</div>
				</div>
			</div>
			<div class="row">
              	<div class="col-xs-2">
					<div class="form-group">
						<label>Merk</label>
					</div>
				</div>
				<div class="col-xs-1">
					<div class="form-group">
						<label>:</label>
					</div>
				</div>
				<div class="col-xs-3">
					<div class="form-group">
						<input class="form-control" type="text" name="merk" value="<?php echo $merk;?>" required>
					</div>
				</div>
			</div>
		<div class="row">
              	<div class="col-xs-2">
					<div class="form-group">
						<label>No Seri</label>
					</div>
				</div>
				<div class="col-xs-1">
					<div class="form-group">
						<label>:</label>
					</div>
				</div>
				<div class="col-xs-3">
					<div class="form-group">
						<input class="form-control" type="text" name="noSeri" value="<?php echo $noSeri;?>" required>
					</div>
				</div>
			</div>
		<div class="row">
              	<div class="col-xs-2">
					<div class="form-group">
						<label>Satuan</label>
					</div>
				</div>
				<div class="col-xs-1">
					<div class="form-group">
						<label>:</label>
					</div>
				</div>
				<div class="col-xs-3">
					<div class="form-group">
						<input class="form-control" type="text" name="satuan" value="<?php echo $satuan;?>" required>
					</div>
				</div>
			</div>
		<div class="row">
              	<div class="col-xs-2">
					<div class="form-group">
						<label>Harga</label>
					</div>
				</div>
				<div class="col-xs-1">
					<div class="form-group">
						<label>:</label>
					</div>
				</div>
				<div class="col-xs-3">
					<div class="form-group">
						<input class="form-control" type="text" name="harga" value="<?php echo $harga;?>" required>
					</div>
				</div>
			</div>
	
				<input type="submit" class="btn btn-info btn-lg" value="SIMPAN">
				<input type="button" class="btn btn-warning btn-lg" value="BATAL" onclick=self.history.back()>
			</div>
		</form>

	</div>  
       <script src="js/jquery-1.11.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="plugins/datepicker/bootstrap-datepicker.min.js"></script>
	<script type="text/javascript"> $(function(){$(".datepicker").datepicker({format: 'yyyy-mm-dd',autoclose: true,todayHighlight: true,});});</script>
    </body>
</html>