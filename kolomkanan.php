<?php
$halaman = isset($_GET["halaman"])?$_GET["halaman"]:"";
$act = isset($_GET["act"])?$_GET["act"]:"";
if ($halaman=="beranda"){
	include("index.php");
}
elseif ($halaman=="home") {
	if ($act=="")
		include("dashboard.php");
	elseif ($act=="siswa")
		include("dasboard.php");
}
elseif ($halaman=="inventory") {
	if ($act=="")
		include("inventory.php");
	elseif ($act=="tambah") 
		include("tambahBarang.php");
	elseif ($act=="edit") 
		include("editBarang.php");
}
elseif ($halaman=="admin") {
	if ($act=="")
		include("daftaradmin.php");
	elseif ($act=="tambah") 
		include("tambahinduk.php");
	elseif ($act=="editlhob")
		include("editlhob.php");
}

elseif ($halaman=="upt") {
	if ($act=="")
		include("uptverifikasi.php");
	elseif ($act=="status") 
		include("status.php");
}

?>