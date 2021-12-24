<?php
include 'koneksi.php';
$username = $_POST['username'];
$password = $_POST['password'];
$login = mysqli_query($koneksi,"SELECT * from user where username='$username' and password='$password'");
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);

if(isset($_POST['Login'])) {
$username = $_POST['username'];
$password = $_POST['password'];
$sql = mysqli_query($koneksi,"SELECT * FROM user WHERE username='$username' &&
password='$password'");
$num = mysqli_num_rows($sql);
if($num==1) {
// login benar //
$_SESSION['username'] = $username;
$_SESSION['password'] = $password;
?>
<script language="JavaScript">alert('LOGIN SUKSES');
document.location=('home.php?halaman=home')</script>
<?php
}
else {
// jika login salah //
echo "<script>
eval(\"parent.location='index.php '\");
alert (' Maaf Login Gagal, Silahkan Isi Username dan Password Anda Dengan Benar');
</script>";
}
}
?>