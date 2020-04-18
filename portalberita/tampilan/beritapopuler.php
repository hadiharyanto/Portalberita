<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Berita Populer</title>
</head>

<body>
	<br><br>
	<h1>Berita Populer</h1>
	<?php
	$query=mysqli_query($koneksi,"select*from berita order by dilihat desc");
	while($populer=mysqli_fetch_array($query))
	{
		$jmlkomen=mysqli_num_rows(mysqli_query($koneksi,"select*from komentar where id_berita='$populer'"));
		echo "
		<a href='index.php?tampilan=detailberita&id_berita=$populer[id_berita]'>
		<h2>$populer[judul]</h2>
		<p><span class='small'>Tgl Posting : ".tgl_ina2($populer['tgl_posting'])." <br>
		dilihat : $populer[dilihat] kali .  Komentar : $jmlkomen</span>
		<img src='gambar/$populer[gambar]' width='100px'  ></a></p><hr>";
	}
	?>
</body>
</html>