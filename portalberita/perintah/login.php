<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>LOGIN</title>
</head>

<body>
	<?php
	include"../pengaturan/koneksi.php";
	include"../fungsi/fungsi.php";
	$email=$_POST['email'];
	$password=md5($_POST['password']);
	$tampil=mysqli_query($koneksi, "select*from anggota where email='$email' and password='$password' and aktif='1'");
	$jumlahdata=mysqli_num_rows($tampil);
	$anggota=mysqli_fetch_array($tampil);
	if($jumlahdata>0)
	{
		session_start();
		$_SESSION['id_anggota']=$anggota['id_anggota'];
		$_SESSION['nama_lengkap']=$anggota['nama_lengkap'];
		$_SESSION['email']=$anggota['email'];
		$_SESSION['login']=1;
		header('location:../');
	}
	else
	{
		msgbox("gagal login","../");
	}
	?>
</body>
</html>