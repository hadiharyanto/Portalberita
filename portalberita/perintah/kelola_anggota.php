<?php
session_start();
include "../pengaturan/koneksi.php";
include "../pengaturan/waktu.php";
include "../fungsi/fungsi.php";
$aksi=$_GET['aksi'];
$id_anggota=$_GET['id_anggota'];
if($aksi=="blokir")
{
    $blokir=mysqli_query($koneksi,"update anggota set aktif=0 where id_anggota='$id_anggota'");
    if($blokir)
    rdir("../admin.php?tampilan=kelola_anggota");
    else
    rdir("../admin.php?tampilan=kelola_anggota");
}
else if($aksi=="aktifkan")
{
    $blokir=mysqli_query($koneksi,"update anggota set aktif=1 where id_anggota='$id_anggota'");
    if($blokir)
    rdir("../admin.php?tampilan=kelola_anggota");
    else
    rdir("../admin.php?tampilan=kelola_anggota");
}
?>