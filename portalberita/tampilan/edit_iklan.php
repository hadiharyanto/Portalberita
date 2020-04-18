<?php
$id_iklan=$_GET['id_iklan'];
$iklan=mysqli_fetch_array(mysqli_query($koneksi,"select*from iklan where id_iklan='$id_iklan'"));
?>
<h2> Edit Iklan</h2>
<form action="perintah/kelola_iklan.php?aksi=edit" method="post" enctype="multipart/formdata" name="form1">
<input type="hidden" name="id_iklan" value="<?php echo $id_iklan; ?>">
<table width="50%" border="1" cellspacing="0" cellpadding="0">
<tr>
<td>Nama perusahaan</td>
<td><input type="text" name="nm_perusahaan" required value="<?php echo $iklan['nm_perusahaan']; ?>"></td>
</tr>
<tr>
<td>Email</td>
<td><input type="email" name="email" required value="<?php echo $iklan['email']; ?>"></td>
</tr>
<tr>
<td>Link</td>
<td><input type="text" name="link" required value="<?php echo $iklan['link']; ?>" ></td>
</tr>
<tr>
<td>Teks Iklan</td>
<td><label>
<textarea name="teks_iklan" id="textarea" cols="45" rows="5" required><?php echo $iklan['isi_iklan']; ?></textarea>
</label></td>
</tr>
<tr>
<td>Tgl Mulai</td>
<td><label>
<input type="date" name="tgl_mulai" id="tmulai" placeholder='yyyy-mm-dd' required value="<?php echo $iklan['tgl_mulai']; ?>">
</label></td>
</tr>
<tr>
<td>Tgl Akhir</td>
<td><input type="date" name="tgl_akhir" id="takhir" placeholder='yyyy-mm-dd' required value="<?php echo $iklan['tgl_akhir']; ?>"></td>
</tr>
<tr>
<td>Harga Sewa</td>
<td><input type="text" name="hargasewa" required value="<?php echo $iklan['hargasewa'];
?>" ></td>
</tr>
<tr>
<td>Gambar</td>
<td> <img src="gambar/<?php echo $iklan['gambar']; ?>" width="70" height="50"> <input type="file" name="gambar"></td>
</tr>
<tr>
<td><button type="submit"> Simpan </button></td>
<td><button type="button" onClick="location=('admin.php?tampilan=kelola_iklan')"> Kembali
</button></td>
</tr>
</table>
</form>