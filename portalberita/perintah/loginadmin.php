<?php
include "../pengaturan/koneksi.php";
include "../fungsi/fungsi.php";
$username=$_POST['username'];
$password=md5($_POST['password']);
$tampil=mysqli_query($koneksi,"select*from admin where username='$username' and password='$password'");
$jumlahdata=mysqli_num_rows($tampil);
$admin=mysqli_fetch_array($tampil);
if($jumlahdata>0)
{
    session_start(); 
    $_SESSION['id_admin']=$admin['id_admin']; 
    $_SESSION['nama_lengkap']=$admin['nama_lengkap'];
    $_SESSION['loginadmin']=1;
    header('location:../admin.php?tampilan=kelola_berita');
}
else
{
msgbox("gagal login","../");
}
?>