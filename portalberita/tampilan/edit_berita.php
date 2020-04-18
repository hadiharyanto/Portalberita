<?php
$id_berita=$_GET['id_berita'];
$berita=mysqli_fetch_array(mysqli_query($koneksi,"select*from berita where id_berita='$id_berita'"));
?>
<h2> Edit Berita</h2>
<form action="perintah/kelola_berita.php?aksi=edit" method="post" enctype="multipart/formdata" name="form1">
<input type="hidden" name="id_berita" value="<?php echo $id_berita?>">
<table width="100%" border="1" cellspacing="0" cellpadding="0">
<tr>
<td>Judul</td>
<td><input type="text" name="judul" value="<?php echo $berita['judul'] ?>"></td>
</tr>
<tr>
<td>Kategori Berita</td>
<td> <select name="kategori"> <option value="">-pilih</option><?php
$query=mysqli_query("select*from kategori");
while($kategori=mysqli_fetch_array($query)){
if($berita['id_kategori']==$kategori['id_kategori'])
{$status="selected";}
else {$status="";}
echo "<option value='$kategori[id_kategori]' $status>$kategori[kategori]</option>";
}
?></select></td>
</tr>
<tr>
<td>Gambar</td>
<td> <img src="gambar/<?php echo $berita['gambar']; ?>" width="70" height="50"><input
type="file" name="gambar"></td>
</tr>
<tr>
<td>Teks</td>
<td><textarea name="teks"><?php echo $berita['teks_berita']; ?></textarea></td>
</tr>
<tr>
<td><button type="submit"> Simpan </button></td>
<td><button type="button" onClick="location=('admin.php?tampilan=kelola_berita')"> Kembali
</button></td>
</tr>
</table>
</form>