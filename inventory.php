<!DOCTYPE html>
<!-- 
Template Name: BRILLIANT Bootstrap Admin Template
Version: 4.5.6
Author: WebThemez
Website: http://www.webthemez.com/ 
-->
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta content="" name="description" />
    <meta content="webthemez" name="author" />
    <title>Inventory</title>
    <!-- Bootstrap Styles-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FontAwesome Styles-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- Morris Chart Styles-->
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
    <!-- Custom Styles-->
    <link href="assets/css/custom-styles.css" rel="stylesheet" />
    <!-- Google Fonts-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <link rel="stylesheet" href="assets/js/Lightweight-Chart/cssCharts.css"> 
</head>

<body>
    <div class="container">
        <center> <h2>Data Barang</h2>
        <h4></h4></center>
    <div style="margin-bottom:5px">
        <a class="btn btn-primary" href="home.php?halaman=inventory&act=tambah">Tambah Data</a>
    </div>
    <table id="example1" class="table table-bordered table-striped">
        <thead>
          <tr>
              <tr>
                <th>No</th>
                <th>Nama Barang</th>
                <th>Merk</th>
                <th>No Seri</th>
                <th>Satuan</th>
                <th>Harga</th>
                <th>Aksi</th>
              </tr>
          </tr>
        </thead>
    <tbody>      
         <?php
        include 'koneksi.php';
        $film = mysqli_query($koneksi, "SELECT * from barang");
        $nomor = 1;
      while ($row=mysqli_fetch_array($film)){
            echo "<tr>
                <td>".$nomor."</td>
                <td>".$row['namaBarang']."</td>
                <td>".$row['merk']."</td>
                <td>".$row['noSeri']."</td>
                <td>".$row['satuan']."</td>
                <td>".$row['harga']."</td>
          <td><a class='btn btn-success btn-sm' href='?halaman=inventory&act=edit&id_barang=$row[id_barang]'>Edit</a>
          <a class='btn btn-danger btn-sm' href='hapusbarang.php?no=$row[id_barang]' onclick=\"return confirm('Yakin mau dihapus?');\">HAPUS</a></td>
                  </tr>";
            $nomor++;
        }
        ?>
        </tbody>  
    </table>
    </div> 
       
        <!-- /. NAV SIDE  -->
      
 
    <!-- /. WRAPPER  -->
    <!-- JS Scripts-->
    <!-- jQuery Js -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!-- Bootstrap Js -->
    <script src="assets/js/bootstrap.min.js"></script>
   
    <!-- Metis Menu Js -->
    <script src="assets/js/jquery.metisMenu.js"></script>
    <!-- Morris Chart Js -->
    <script src="assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="assets/js/morris/morris.js"></script>
  
  
  <script src="assets/js/easypiechart.js"></script>
  <script src="assets/js/easypiechart-data.js"></script>
  
   <script src="assets/js/Lightweight-Chart/jquery.chart.js"></script>
  
    <!-- Custom Js -->
    <script src="assets/js/custom-scripts.js"></script>

      
    <!-- Chart Js -->
    <script type="text/javascript" src="assets/js/Chart.min.js"></script>  
    <script type="text/javascript" src="assets/js/chartjs.js"></script> 

</body>

</html>