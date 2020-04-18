<?php
//taruh script 1. halaman index.php
error_reporting(0); //menonaktifkan warning dan notice
session_start();
$id_anggota=$_SESSION['id_anggota'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">

<head>
	<title>Yoginewsportal</title>
	<meta http-equiv="Content-Type" content="text/html;charset=iso-8859-1" />
	<link rel="stylesheet" type="text/css" href="aset/style.css"/> <!-- style css adalah file yg mengatur tampilan desain / layout -->
    <link rel="stylesheet" type="text/css" href="aset/fontawesome/css/font-awesome.css"/> <!-- style css adalah file yg mengatur tulisan berbentuk icon -->
    
     <!-- Example assets -->
       <link rel="stylesheet" type="text/css" href="aset/carousel_basic/jcarousel.basic.css">
      
      <script type="text/javascript" src="aset/jquery-2.1.4.js"></script>
       <script type="text/javascript" src="aset/carousel_basic/jquery.jcarousel.min.js"></script>
		<script type="text/javascript" src="aset/carousel_basic/jcarousel.basic.js"></script>
    
    
    
</head>

<?php
// taruh skrip 2 halaman index.php

include"pengaturan/koneksi.php"; //memanggil halaman koneksi.php
include"pengaturan/waktu.php"; //memanggil halaman waktu.php
include"fungsi/fungsi.php"; //memanggil halaman fungsi.php
?>
<body>
	<div id="container">
		<div id="header">
			<b>Yoginewsp<i class="fa fa-compass"></i>rtal</b>
			<h2>Portal Berita Nomor 1</h2>
		</div>
		
		<div id="horizontal">
			<?php 
			//taruh skrip 3 halaman index.php
			include"tampilan/menu.php"; 
			?>
		</div>

		<div id="right-column">
			<div id="searchbox">
				<form action="index.php?tampilan=cariberita" method="post">
    <input type="text" size="15"  name="judul" placeholder="Input Judul Berita"><button type="submit" class="button">Cari</button>
    </form>
				
</div>

<br>
<?php 
//taruh skrip 4. halaman index.php
include "tampilan/statuslogin.php";
?>	
</br>
<?php
//taruh skrip 5 halaman index.php 
include "tampilan/tampiliklan.php";
?>	
</div>

		<div id="content">
			
			<p>
<?php
//taruh skrip 6 halaman index.php
 include "perintah/tampilkonten.php";
 echo "<div style='height:100px'></div><hr>"; //ini untuk pembatas antara konten dengna berita populer yg selalu tampil
 include "tampilan/beritapopuler.php";
  ?>

			</p>
			

			
		</div>

	<div id="footer">
		&copy; 2015 yoginewsportal
	</div>
	
</div>

</body>
</html>