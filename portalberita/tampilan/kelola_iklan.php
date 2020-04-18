<br>
<a href="admin.php?tampilan=tambah_iklan"><button>Tambah</button> </a>
<table width="100%" border="1" cellspacing="0" cellpadding="0">
<tr>
<td width="2%" bgcolor="#CCCCCC">No.</td>
<td width="7%" bgcolor="#CCCCCC">Nama Perusaan</td>
<td width="6%" bgcolor="#CCCCCC">Teks Iklan</td>
<td width="5%" bgcolor="#CCCCCC">Gambar</td>
<td width="8%" bgcolor="#CCCCCC">Email</td>
<td width="8%" bgcolor="#CCCCCC">Link</td>
<td width="8%" bgcolor="#CCCCCC">Tgl Mulai</td>
<td width="8%" bgcolor="#CCCCCC">Tgl akhir</td>
<td width="11%" bgcolor="#CCCCCC">Harga Sewa</td>
<td width="12%" bgcolor="#CCCCCC">Lama Sewa</td>
<td width="10%" bgcolor="#CCCCCC">Total</td>
<td width="13%" bgcolor="#CCCCCC">Status</td>
<td colspan="2" bgcolor="#CCCCCC"><div align="center">Aksi</div></td>
</tr>
<?php
$n=1;
$query=mysqli_query($koneksi, "select* from iklan order by id_iklan desc");
while($iklan=mysqli_fetch_array($query)){
?>
<tr>
<td><?php echo $n; ?></td>
<td><?php echo $iklan['nm_perusahaan']; ?></td>
<td><?php echo $iklan['isi_iklan']; ?></td>
<td><?php echo "<img src=gambar/$iklan[gambar] width='300px'>"; ?></td>
<td><?php echo $iklan['email']; ?></td>
<td><?php echo $iklan['link']; ?></td>
<td><?php echo tgl_ina3($iklan['tgl_mulai']); ?></td>
<td><?php echo tgl_ina3($iklan['tgl_akhir']); ?></td>
<td><?php echo rupiah($iklan['hargasewa']); ?></td>
<td><?php echo $iklan['lamasewa'] . " hari"; ?></td>
<td><?php echo rupiah($iklan['totalharga']); ?></td>
<td><?php echo status($iklan['aktif']); ?></td>
<td width="18%"><?php echo "<a href=admin.php?tampilan=edit_iklan&id_iklan=$iklan[id_iklan]> <button> Edit </button></a>";
?></td>
<td width="18%"><?php echo "<a href=perintah/kelola_iklan.php?aksi=hapus&id_iklan=$iklan[id_iklan]> <button> Hapus
</button></a>"; ?></td>
</tr>
<?php
$total=$total+$iklan['totalharga'];
$n++; }
?>
<tr>
<td colspan="10">Total Pendapatan</td>
<td><h3><?php echo rupiah($total); ?></h3></td>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
</table>