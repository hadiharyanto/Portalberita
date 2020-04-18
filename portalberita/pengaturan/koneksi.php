<?php
$server="localhost";
$username="root";
$password="";
$database="materi_portalberita";

$koneksi = mysqli_connect("$server","$username","$password","$database");
if(!$koneksi){
die("Gagal, Database tidak ditemukan".mysqli_connect_eror());
}
?>