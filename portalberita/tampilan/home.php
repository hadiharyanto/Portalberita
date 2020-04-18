<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>HOME</title>
</head>

<body>
	<h1>Berita terbaru</h1><span class="small">
	<?php echo hari_ina(date('l')).",".tgl_ina($tgl_skrg).".:::.".$jam_skrg;?></span><hr>
	
	<?php
	$querynews=mysqli_query($koneksi, "select*from berita ordey by id_berita desc limit 0,5");
	$jmlberita=mysqli_num_rows(mysqli_query($koneksi, "select*from berita"));
	echo "<div class='jcarousel-wrapper'>
	<div class='jcarousel'><ul>";
	while($berita=mysqli_fetch_array($querynews))
	{
		echo"<li><h3>".ucwords($berita['judul'])."<h3>";
		echo"<span class='small'>".tgl_ina2($berita['tgl_posting'])."<br>Diposting oleh : ".nama($berita['id_admin'])."</span>";
		
		if(empty($berita['gambar']))
		{
			$gambar="nopic.jpg";
		}
		else
		{
			$gambar=$berita['gambar'];
		}
		
		echo "<div><img src='gambar/$gambar' width='300px' height='200px'></div>
		<p>$berita[teks_berita]</p>
		<br>
		</li>";
		
		echo selisihwaktu($berita['tgl_posting']);
	}
	echo "</ul></div>";
	?>
	<a href="#" class="jcarousel-control-prev">&lsaquo;</a>
	<a href="#" class="jcarousel-control-next">&rsaquo;</a>
	</div><!--tutup bingkai 2-->
</body>
</html>