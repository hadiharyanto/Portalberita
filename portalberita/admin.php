<?php
error_reporting(0);
session_start();
$id_admin=$_SESSION['id_admin'];
include"fungsi/fungsi.php";
include"pengaturan/koneksi.php";
include"pengaturan/waktu.php";

if(empty($_SESSION['loginadmin'])){ // klo belum login sebagai admin
msgbox("Tidak berhak mengakses");
}
// tulis skrip 1 halaman admin.php

?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Ruang Admin</title>
</head>
<link rel="stylesheet" href="aset/style1.css">

<link rel="stylesheet" href="aset/jquery_ui.custom/jquery-ui.css">
<script src="aset/jquery-2.1.4.js" type="text/javascript"></script>
<script src="aset/jquery_ui.custom/jquery-ui.js" type="text/javascript"></script>

<script>
  $(function() { //untuk mengatur tanggal mulai, format waktu dan tampillan
    $( "#tmulai" ).datepicker({
      changeMonth: true, //bulan bisa diganti
      changeYear: true, //tahun bisa diganti
	 dateFormat: "yy-mm-dd" 
    });
	
	  $( "#takhir" ).datepicker({
      changeMonth: true,
      changeYear: true,
	 dateFormat: "yy-mm-dd" 
    });
	
	
  });
  </script>
  


<body>

<table width="100%" border="1" cellspacing="0" cellpadding="0" id="wrap">
  <tr>
    <td><h1>Ruang Admin yoginewsportal</h1></td>
  </tr>
  <tr>
    <td><h2>Selamat Datang, <?php // taruh skrip 2 halaman admin.php disini
	echo $_SESSION['nama_lengkap']; ?></h2></td>
  </tr>
  <tr>
    <td><?php 
	//taruh skrip 3 halaman admin.php disini
	include "tampilan/menuadmin.php";?></td>
  </tr>
  <tr>
    <td><?php
	//taruh skrip 4 halaman admin.php disini
	 include "perintah/tampilkonten.php"; ?></td>
  </tr>
</table>


</body>
</html>
