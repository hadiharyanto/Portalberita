<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Logout</title>
</head>

<body>
	<?php
	session_start();
	unset($_SESSION['id_anggota']);
	unset($_SESSION['nama_lengkap']);
	unset($_SESSION['login']);
	unset($_SESSION['loginadmin']);
	unset($_SESSION['id_admin']);
	session_destroy();
	header('location:../');
	?>
</body>
</html>