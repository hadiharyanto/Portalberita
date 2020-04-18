<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
//fungsi untuk mengambil/ id admin untuk dirubah nilainya ke dalam bentuk nama
function nama($parameter){
$data=mysqli_fetch_array(mysqli_query($koneksi,"select nama_lengkap from admin where
id_admin='$parameter'"));
return $data[0]; //ini sama saja dengan mengetik $data[nama_lengkap]
}

//fungsi untuk mengacak angka
function random()
{
echo rand(0,999); // menampilkan 1 angka acak dari 0 sampai 999
}

//fungsi untuk memberikan msgbox
function msgbox($msg,$url){
echo "<script>window.alert('$msg');window.location=('$url');</script>";
}

//fungsi untuk redirect
function rdir($url){
header("location:$url");
}

//fungsi untuk menampilkan status
function status($parameter){
if($parameter==1)
$status="Aktif";
else
$status="Non Aktif";
return $status;
}

//membuat angka menjadi format rupiah
function rupiah($parameter){
 $rupiah="<sup>Rp</sup>".number_format($parameter,0,',','.');
 return $rupiah;
}
function selisihwaktu($waktupembuatan){ //memasukan parameter waktupembuatan
$waktusekarang=date("Y-m-d h:i:s");
$datetime1 = new DateTime($waktusekarang); //penggunaan class Datetime yg sudah ada di php5
$datetime2 = new DateTime($waktupembuatan);
$interval = $datetime1->diff($datetime2);
return $selisih; //mengubah nilai parameter menjadi nilai selisih
}
function tgl_ina($parameter){ //ini untuk mengubah format 2015-06-15 ke dalam format 15 Juni 2015
$thn=substr($parameter,0,4); //menngambil 4 digit dari kiri, 0 adalah index pertama dari tahun (angka 2 dari 2015), 4 banyaknya digit yg diambil
$b=substr($parameter,5,2); //mengambil 2 digit, index 5 adalah angka 0 dari 06
$tgl=substr($parameter,-2); //mengambil 2 digit dari kanan
if($b==1) {$bln="Januari";}
else if($b==2) {$bln="Februari";}
else if($b==3) {$bln="Maret";}
else if($b==4) {$bln="April";}
else if($b==5) {$bln="Mei";}
else if($b==6) {$bln="Juni";}
else if($b==7) {$bln="Juli";}
else if($b==8) {$bln="Agustus";}
else if($b==9) {$bln="September";}
else if($b==10){$bln="Oktober";}
else if($b==11){$bln="November";}
else if($b==12){$bln="April";}
$tanggal=$tgl . " ".$bln ." ".$thn;
return $tanggal;
}
function tgl_ina2($parameter1){ //ini untuk mengubah format 2015-06-15 17:00:00 ke dalam format 15/06/2015 >> 17:00:))
$parameter2=substr($parameter1,0,10); //10 digit dari kiri,ini untuk peroleh nilai 2015-06-15 dari nilai 2015-06-15 17:00:00
$parameter3=substr($parameter1,-8); //10 digit dari kanan,ini untuk peroleh 17:00:00 dari nilai 2015-06-15 17:00:00
$thn=substr($parameter2,2,2); //menngambil 2 digit dari kiri, 2 adalah index ketiga dari tahun(angka 1 dari 2015), 2 banyaknya digit yg diambil
$bln=substr($parameter2,5,2);
$tgl=substr($parameter2,-2); //mengambil 2 digit dari kanan
$tanggal=$tgl . "/".$bln ."/".$thn ;
$jam=$parameter3;
$waktu=$tanggal . " .:::. ". $jam;
return $waktu;
}

// copy-paste-edit dari yg atas, kegunaaan dari function ini adalah untuk penyusunan laporan
function tgl_ina3($parameter){
$thn=substr($parameter,2,2);
$bln=substr($parameter,5,2);
$tgl=substr($parameter,-2);
$tanggal=$tgl . "/".$bln ."/".$thn ;
$waktu=$tanggal;
return $waktu;
}
//mengubah hari bahasa inggiris ke dalam bahasa indonesia
function hari_ina($day)
{
if ($day=="Monday")
{$hari="Senin";}
else if ($day=="Tuesday")
{$hari="Selasa";}
else if ($day=="Wednesday")
{$hari="Rabu";}
else if ($day=="Thursday")
{$hari="Kamis";}
else if ($day=="Friday")
{$hari="Jumat";}
else if ($day=="Saturday")
{$hari="Sabtu";}
else if ($day=="Sunday")
{$hari="Minggu";}
return $hari;
}
function jangkawaktu($waktu1,$waktu2){
$start_date = new DateTime($waktu1);
$end_date = new DateTime($waktu2);
$interval = $start_date->diff($end_date);
$selisih= $interval->d;
$jangkawaktu= $selisih+1; // ditambah 1 karena yg dihitung bukan selisih hari,
//tapi jangka waktu, dari tgl 11 sampai 13 adalah 3 hari.
//bukan 13-11= 2 hari
return $jangkawaktu;
}
?>
</body>
</html>