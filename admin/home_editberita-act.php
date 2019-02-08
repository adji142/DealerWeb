<?
require ("koneksi.php");
$hasil=mysql_query("SELECT * FROM berita WHERE id=$id");
$data=mysql_fetch_array($hasil);
//$head=str_replace("<br>","\r\n", $data[head]);
//$isi=str_replace("<br>","\r\n", $data[isi]);
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
.style1 {font-family: Tahoma; font-weight: bold; font-size: 12pt; color: #283F48; text-decoration: underline; padding-left: 15px; padding-top: 9px; }
.style2 {
	font-family: "Times New Roman", Times, serif;
	color: #000000;
}
.style3 {color: #000000}
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
      <div align="center" class="style2">Konfirmasi Perubahan Berita </div>
    </div>
        <div class="txt">
          <span class="style3">
          <?php
include "koneksi.php";

//$head=str_replace("\r\n","<br>", $head);
//$isi=str_replace("\r\n","<br>", $isi); 
$id=$_POST['id'];
$judul=$_POST['judul'];
$kategori=$_POST['kategori'];
$penulis=$_POST['penulis'];
$isi=$_POST['isi'];

$query=mysql_query("UPDATE berita SET judul='$judul', penulis='$penulis', kategori='$kategori', isi='$isi' WHERE id='$id'");

if($query){
echo "<b>Selamat, Data Telah Berhasil Di Update</b><br>
Judul : <b>$judul</b> <br>
Penulis : <b>$penulis</b> <br>
Kategori : <b>$kategori</b>
Isi : $isi";
echo "<br><a href=\"?page=lihatberita.html&amp;sesi_get=<?=$sesi_get?&amp;&nbsp;&amp;\"><b>[ Lihat Berita &raquo; ]</b></a>";
} else {
echo ("BERITA GAGAL DI UPDATE ! Waduh Gagal Maning.... Gagal Maning Soon, soon !");
echo ("[ <a href=\"admin.php?page=lihatberita.html&amp;sesi_get=<?=$sesi_get?>&amp;&nbsp;&amp;\"><b>[ Kembali &raquo; ]</b></a> ]");
}
?>
          </span>
          <p>&nbsp;</p>
      </div></td>
  </tr>
</table>
</body>
</html>
