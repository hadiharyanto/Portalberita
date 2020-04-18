<?php
session_start();
include "../pengaturan/koneksi.php";
include "../pengaturan/waktu.php";
include "../fungsi/fungsi.php";
$nm_perusahaan=$_POST['nm_perusahaan'];
$email=$_POST['email'];
$link=$_POST['link'];
$teks_iklan=$_POST['teks_iklan'];
$tgl_mulai=$_POST['tgl_mulai'];
$gambar=$_FILES['gambar']['name'];
$sumber_gambar=$_FILES['gambar']['tmp_name'];
$id_admin=$_SESSION['id_admin'];
$aksi=$_GET['aksi'];
if($aksi=="tambah")
{
    $simpan=mysqli_query($koneksi,"insert into iklan(nm_perusahaan,email,link,gambar,isi_iklan,tgl_mulai,tgl_akhir,hargasewa,lamasewa,totalharga, aktif,id_admin)
    values('$nm_perusahaan','$email','$link','$gambar','$teks_iklan','$tgl_mulai','$tgl_akhir','$hargasewa','$lamasewa','$totalharga','0','$id_admin')");
    move_uploaded_file($sumber_gambar,"../gambar/".$gambar);
    if($simpan)
    msgbox("berhasil dibuat","../admin.php?tampilan=kelola_iklan");
    else
    msgbox("Gagal terdafar","../admin.php?tampilan=kelola_iklan");
}
else if($aksi=="edit")
{
    $id_iklan=$_POST['id_iklan'];
    if(empty($gambar))
{
    $simpan=mysqli_query($koneksi,"update iklan set nm_perusahaan='$nm_perusahaan', email='$email', isi_iklan='$teks_iklan',link='$link',tgl_mulai='$tgl_mulai',tgl_akhir='$tgl_akhir',
    hargasewa='$hargasewa',lamasewa='$lamasewa',totalharga='$totalharga' where id_iklan='$id_iklan'");
}
else
{
    $berita=mysqli_fetch_array(mysqli_query($koneksi,"select gambar from iklan where id_iklan ='$id_iklan'"));
    unlink('../gambar/'.$berita['gambar']);
    $simpan=mysqli_query($koneksi,"update iklan set nm_perusahaan='$nm_perusahaan', email='$email', isi_iklan='$teks_iklan',link='$link',tgl_mulai='$tgl_mulai',tgl_akhir='$tgl_akhir',
    hargasewa='$hargasewa',lamasewa='$lamasewa',totalharga='$totalharga', gambar='$gambar' where id_iklan='$id_iklan'");
    move_uploaded_file($sumber_gambar,"../gambar/".$gambar);
}
if($simpan)
msgbox("berhasil dibuat","../admin.php?tampilan=kelola_iklan");
else
msgbox("Gagal terdafar","../admin.php?tampilan=kelola_iklan");
}
else if($aksi=="hapus")
{
    $id_iklan=$_GET['id_iklan'];
    $iklan=mysqli_fetch_array(mysqli_query($koneksi,"select gambar from iklan where id_iklan='$id_iklan'"));
    unlink('../gambar/'.$iklan['gambar']);
    $hapus=mysqli_query("delete from iklan where id_iklan='$id_iklan'");
    if($hapus)
    rdir("../admin.php?tampilan=kelola_iklan");
    else
    rdir("../admin.php?tampilan=kelola_iklan");
}
?>