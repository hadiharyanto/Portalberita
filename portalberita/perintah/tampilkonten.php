<?php
$tampilan=$_GET['tampilan'];
switch($tampilan)
{
 case "kategori":
 include "tampilan/kategori.php";
 break;

 case "detailberita":
 include "tampilan/detailberita.php";
 break;

 case "layananiklan":
 include "tampilan/layananiklan.php";
 break;

 case "login":
 include "tampilan/login.php";
 break;

 case "daftar": 
 include "tampilan/daftar.php"; 
 break;

 case "kelola_berita": 
 include "tampilan/kelola_berita.php";
 break;

 case "tambah_berita":
 include "tampilan/tambah_berita.php";
 break;

 case "edit_berita":
 include "tampilan/edit_berita.php"; 
 break;

 case "kelola_iklan":
 include "tampilan/kelola_iklan.php"; 
 break;

 case "tambah_iklan":
 include "tampilan/tambah_iklan.php"; 
 break;

 case "edit_iklan":
 include "tampilan/edit_iklan.php"; 
 break;

 case "kelola_anggota":
 include "tampilan/kelola_anggota.php"; 
 break;
 default: 
 include "tampilan/home.php";

}

?>
