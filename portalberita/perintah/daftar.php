<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>daftar</title>
</head>

<body>
	<?php
	include"../pengaturan/koneksi.php";
	include"../fungsi/fungsi.php";
	
	$nama=$_POST['nama'];
	$email=$_POST['email'];
	$password=md5($_POST['password']);
	$kode1=$_POST['kode1'];
	$kode2=$_POST['kode2'];
	
	if($kode1==$kode2)
	{
		$simpan=mysqli_query($koneksi, "insert into anggota(nama_lengkap, email, password, aktif) values('$nama','$email','$password',1)");
		
		if($simpan)
		msgbox("berhasil terdaftar","../");
		
		else
		msgbox("Gagal Terdaftar","../index.php?tampilan=daftar");
	}
	
	else
	{
		msgbox("kode berbeda","../index.php?tampilan=daftar");
	}
		
	?>
</body>
</html>