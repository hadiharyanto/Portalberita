<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Cari Berita</title>
</head>

<body>
	<h2> Cari Judul Berita <b style="background:#FFFF00"><?php echo $_POST['judul']; ?></b> </h2>
	<?php
	$judul=$_POST['judul'];
	$query=mysqli_query($koneksi,"select*from berita where judul like '%$judul'");
	while($berita=mysqli_fetch_array($query))
	{
		$jmlkomen=mysqli_num_rows(mysqli_query($koneksi,"select*from komentar where id_berita='$berita[id_berita]'"));
		echo "
		<a href='index.php?tampilan=detailberita&id_berita=$berita[id_berita]'><h3>$berita[judul]</h3>
		<span class='small'>Tgl Posting : ".tgl_ina2($berita['tgl_posting'])."<br>
		dilihat : $berita[dilihat] kali. Komentar : $jmlkomen</span>
		<img src='gambar/$berita[gambar]' width='300px' height='300px'></a><hr>";
	}
	?>
</body>
</html>