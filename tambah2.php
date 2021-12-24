<?php
include("koneksi.php");
mysqli_query($koneksi, "INSERT INTO barang(id_barang,namaBarang,merk,noSeri,satuan,harga) 
VALUES (	
							'$_POST[id_barang]',
							'$_POST[namaBarang]',
							'$_POST[merk]',
							'$_POST[noSeri]',
							'$_POST[satuan]',
							'$_POST[harga]')");


		header('location:home.php?halaman=inventory'); //kode ini supaya jika data setelah ditambahkan form kembali menuju tabel data siswa

?>