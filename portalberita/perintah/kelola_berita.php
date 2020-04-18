<?php
session_start();
include "../pengaturan/koneksi.php";
include "../pengaturan/waktu.php";
include "../fungsi/fungsi.php";
$judul=$_POST['judul'];
$kategori=$_POST['kategori'];
$teks=$_POST['teks'];
$gambar=$_FILES['gambar']['name'];
$sumber_gambar=$_FILES['gambar']['tmp_name'];
$id_admin=$_SESSION['id_admin'];
$aksi=$_GET['aksi'];
if($aksi=="tambah")
{
    $simpan=mysqli_query($koneksi,"insert into berita(judul,id_kategori,teks_berita,gambar,id_admin,tgl_posting)values('$judul','$kategori','$teks','$gambar','$id_admin',now())");
    move_uploaded_file($sumber_gambar,"../gambar/".$gambar); 
    if($simpan)
    msgbox("berhasil dibuat","../admin.php?tampilan=kelola_berita");
    else
    msgbox("Gagal terdafar","../admin.php?tampilan=kelola_berita");
}
else if($aksi=="edit")
{
    $id_berita=$_POST['id_berita'];
    if(empty($gambar))
{
    $simpan=mysqli_query($koneksi,"update berita set judul='$judul', id_kategori='$kategori',
    teks_berita='$teks' where id_berita='$id_berita'");
    }
    else
    {
    $berita=mysqli_fetch_array(mysqli_query($koneksi,"select gambar from berita where id_berita='$id_berita'"));
    unlink('../gambar/'.$berita['gambar']);
    $simpan=mysqli_query("update berita set judul='$judul', id_kategori='$kategori', teks_berita='$teks', gambar='$gambar' where id_berita='$id_berita'");
    move_uploaded_file($sumber_gambar,"../gambar/".$gambar);
    }
    if($simpan)
    msgbox("berhasil dibuat","../admin.php?tampilan=kelola_berita");
    else
    msgbox("Gagal terdafar","../admin.php?tampilan=kelola_berita");
    }
    else if($aksi=="hapus")
    {
    $id_berita=$_GET['id_berita'];
    $berita=mysqli_fetch_array(mysqli_query("select gambar from berita where id_berita='$id_berita'"));
    unlink('../gambar/'.$berita['gambar']);
    $hapus=mysqli_query("delete from berita where id_berita='$id_berita'");
    if($hapus)
    rdir("../admin.php?tampilan=kelola_berita");
    else
    rdir("../admin.php?tampilan=kelola_berita");
}
?>