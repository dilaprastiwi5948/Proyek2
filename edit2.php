<?php

include("koneksi.php");
mysqli_query($koneksi,  "UPDATE barang SET namaBarang='$_POST[namaBarang]', merk='$_POST[merk]', noSeri='$_POST[noSeri]',  satuan='$_POST[satuan]', harga='$_POST[harga]' where id_barang='$_POST[id_barang]'");

				
header('location:home.php?halaman=inventory');
?>