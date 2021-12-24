<?php
include ("koneksi.php");

//pemeriksaan session
/*if (isset($_SESSION['admin'])) { //jika sudah login
 //menampilkan isi session
  }else { 
  //session belum ada artinya belum login
  die ("<script>location='indexco.php';</script>");
  }*/

$sql = "DELETE FROM barang WHERE id_barang='$_GET[no]'";
mysqli_query($koneksi,$sql);
//echo $sql;				
header('location:home.php?halaman=inventory');
?>