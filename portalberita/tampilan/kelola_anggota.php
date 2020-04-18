<table width="100%" border="1" cellspacing="0" cellpadding="0">
<tr>
<td width="2%" bgcolor="#CCCCCC">No </td>
<td width="31%" bgcolor="#CCCCCC">Nama </td>
<td width="16%" bgcolor="#CCCCCC">Email</td>
<td width="23%" bgcolor="#CCCCCC">Status</td>
<td bgcolor="#CCCCCC"><div align="center">Aksi</div></td>
</tr>
<?php
$n=1;
$query=mysqli_query($koneksi, "select* from anggota order by id_anggota desc");
while($anggota=mysqli_fetch_array($query)){
?>
<tr>
<td><?php echo $n; ?></td>
<td><?php echo $anggota['nama_lengkap']; ?></td>
<td><?php echo $anggota['email']; ?></td>
<td><?php echo status($anggota['aktif']); ?></td>
<td width="28%"><?php
if($anggota['aktif']=='1')
echo "<a href=perintah/kelola_anggota.php?aksi=blokir&id_anggota=$anggota[id_anggota]> <button> Blokir </button></a>";
else
echo "<a href=perintah/kelola_anggota.php?aksi=aktifkan&id_anggota=$anggota[id_anggota]> <button> Aktifkan </button></a>";
?></td>
</tr>
<?php
$n++; }
?>
</table>