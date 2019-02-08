<?php
include "koneksi.php";
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css">
<!--
.cap1 {font-family:Tahoma; font-weight:bold; font-size:10px; color:#283F48;text-decoration:underline;padding-left:15px;padding-top:9px;}
.txt {font-family:Tahoma; font-size:10px; color:#283F48;padding-left:15px;padding-top:5px;padding-right:15px;}
.style1 {font-family: Tahoma; font-weight: bold; font-size: 12px; color: #283F48; text-decoration: underline; padding-left: 15px; padding-top: 9px; }
.style2 {font-size: 12pt}
-->
</style>
</head>

<body>
<table cellpadding="0" cellspacing="0" border="0" height="479">
  <tr>
    <td valign="top">&nbsp;</td>
  </tr>
  <tr>
    <td width="513" height="415" background="images/bgutama.jpg" style="background-repeat:no-repeat;padding-left:20px;padding-right:20px;" valign="top"><div class="style1" style="padding-top:5px;">
      <div align="center" class="style2">Konfirmasi Berita </div>
    </div>
        <div class="txt">
          <?
include "koneksi.php";

$judul = $_POST['judul'];
$kategori = $_POST['kategori'];
$penulis = $_POST['penulis'];
$isi = $_POST['isi'];

//$head=str_replace("\r\n","<br>", $head);
//$isi=str_replace("\r\n","<br>", $isi);

if($judul=="" || $kategori=="" || $penulis=="" || $isi=="" )
{$kesalahan=TRUE;}

if (!$kesalahan){
$hasil=mysql_query("INSERT INTO berita(id,tgl,judul,kategori,penulis,isi) VALUES ('',now(),'$judul','$kategori','$penulis','$isi')");

if($hasil){

echo("
<html>
<head>
<title>Berita Berhasil Dimasukkan</title>
</head>

<body>

<br>Berita Berhasil Dimasukkan.<br>
<br>
<br>
<li>Judul : $judul</li>
<li>Kategori : $kategori</li>
<li>Penulis : $penulis</li>
<br>
<br>
<br> [ <a href=\"?page=tambahberita.html&amp;sesi_get=<?=$sesi_get?>\">Form Input Berita</a> ]
<br> [ <a href=\"?page=lihatberita.html&amp;sesi_get=<?=$sesi_get?>&amp;&amp;&amp;\">Lihat Semua Berita Yang Di Masukkan</a> ]

</body>
</html>
");

} else {
echo("
<html>
<head>
<title>Berita Gagal dimasukkan</title>
</head>

<body>
<br>Berita gagal dimasukkan.<br>
<br><a href=\"javascript:history.go(-1)\">Balik&raquo</a>

</body>
</html>
");
}

}else {
echo("
<html>
<head>
<title>Terjadi Kesalahan</title>
</head>

<body>
<br>
");
if($judul==""){
echo"<li>Judul berita belum diisi.</li>";
}if($kategori==""){
echo"<li>Kategori berita masih kosong.</li>";
}if($penulis==""){
echo"<li>Penulis berita masih kosong.</li>";
}if($head==""){
echo"<li>Headline berita masih kosong.</li>";
}if($isi==""){
echo"<li>Isi berita masih kosong.</li>";
}
echo("
<br>
<br><a href=\"javascript:history.go(-1)\">Kembali&raquo</a>
</body>
</html>
");
}
?>
          <p>&nbsp;</p>
      </div></td>
  </tr>
</table>
</body>
</html>
