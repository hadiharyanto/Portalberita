<br>
<a href="admin.php?tampilan=tambah_berita"><button>Tambah</button> </a>
<table width="100%" border="1" cellspacing="0" cellpadding="0">
<tr>
<td width="2%" bgcolor="#CCCCCC">No.</td>
<td width="7%" bgcolor="#CCCCCC">Judul</td>
<td width="6%" bgcolor="#CCCCCC">Kategori</td>
<td width="5%" bgcolor="#CCCCCC">Gambar</td>
<td width="8%" bgcolor="#CCCCCC">tgl Posting</td>
<td width="8%" bgcolor="#CCCCCC">Dilihat</td>
<td width="8%" bgcolor="#CCCCCC">Jml Komentar</td>
<td colspan="2" bgcolor="#CCCCCC"><div align="center">Aksi</div></td>
</tr>
<?php
$n=1;
$query=mysqli_query($koneksi,"select* from berita inner join kategori on berita.id_kategori=kategori.id_kategori order by berita.id_berita desc");
while($berita=mysqli_fetch_array($query))
{
    $jmlkomen=mysqli_num_rows(mysql_query($koneksi,"select*from komentar where id_berita='$berita[id_berita]'"));
?>
<tr>
<td><?php echo $n; ?></td>
<td><?php echo $berita['judul']; ?></td>
<td><?php echo $berita['kategori']; ?></td>
<td><?php echo "<img src=gambar/$berita[gambar] width='300px'>"; ?></td>
<td><?php echo tgl_ina2($berita['tgl_posting']); ?></td>
<td><?php echo $berita['dilihat']; ?></td>
<td><?php echo $jmlkomen; ?></td>
<td width="18%"><?php echo "<a href=admin.php?tampilan=edit_berita&id_berita=$berita[id_berita]> <button> Edit
</button></a>"; ?></td>
<td width="18%"><?php echo "<a href=perintah/kelola_berita.php?aksi=hapus&id_berita=$berita[id_berita]> <button> Hapus
</button></a>"; ?></td>
</tr>
<?php
$n++; }
?>
</table>