<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Menu</title>
</head>

<body>
	<?php
	$query=mysqli_query($koneksi,"select * from kategori");
	echo "<span class='menu'><a href='index.php'>HOME</a></span>";
	while($kategori=mysqli_fetch_array($query))
	{
		echo "<span class='menu'>
		<a href='index.php?tampilan=kategori&id_kategori=$kategori[id_kategori]&kategori=$kategori[kategori]'>".strtoupper($kategori['kategori'])."</a>   </span>";
	}
	echo   "<span   class='menu'><a   href='index.php?tampilan=layananiklan'>   LAYANAN   IKLAN   </a> </span> "; ?>
</body>
</html>