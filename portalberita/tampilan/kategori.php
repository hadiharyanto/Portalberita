<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Kategori</title>
</head>

<body>
	<h2> Kategori Berita <?php echo ucwords($_GET['kategori']) ?> </h2>
	<?php
	$id_kategori=$_GET['id_kategori'];
	$query=mysqli_query($koneksi,"select* from berita where id_kategori='$id_kategori'");
	while($populer=mysql_fetch_array($query))
	{
		$jmlkomen=mysqli_num_rows(mysqli_query($koneksi,"select*from komentar where id_berita='$populer[id_berita]'"));
		echo "
		<a href='index.php?tampilan=detailberita&id_berita=$populer[id_berita]'>
		<h3>$populer[judul]</h3>
		<span class='small'>Tgl Posting : ".tgl_ina2($populer['tgl_posting'])." <br>
		dilihat : $populer[dilihat] kali .  Komentar : $jmlkomen</span>
		<img src=’gambar/$populer[gambar]’ width='300px' height='300px'>
		</a><hr>";
	}
	?>
</body>
</html>