<html>
    <html>
    <head>
        <title>data Barang</title>
        <link rel="stylesheet" href="css/bootstrap.min.css">    
        <link rel="stylesheet" href="css/dataTables.bootstrap.css">
    </head>
    <body>
		<div class="container">

	<p><h1  align="center">Tambah Barang</h1></p>

		<form name="form1" method="post" action="tambah2.php?halaman=inventory&act=tambah">
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
						<input class="form-control" type="text" name="namaBarang" required>
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
						<input class="form-control" type="text" name="merk" required>
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
						<input class="form-control" type="text" name="noSeri" required>
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
						<input class="form-control" type="text" name="satuan" required>
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
						<input class="form-control" type="text" name="harga" required>
					</div>
				</div>
			</div>
			
			<div class="form-group">
				<input type="submit" class="btn btn-info btn-lg" value="SIMPAN">
				<input type="button" class="btn btn-warning btn-lg" value="BATAL" onclick=self.history.back()>
			</div>
		</form>

	</div>  
          <script src="js/jquery-1.11.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>