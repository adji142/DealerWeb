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
-->
</style>
</head>

<body>
<table cellpadding="0" cellspacing="0" border="0" height="479">
  <tr>
    <td valign="top">&nbsp;</td>
  </tr>
  <tr>
    <td width="513" height="415" background="images/bgutama.jpg" style="background-repeat:no-repeat;padding-left:20px;padding-right:20px;" valign="top"><div class="cap1" style="padding-top:5px;">Hapus Data  Berita </div>
        <div class="txt">
          <table width="430" border="1" align="center" cellpadding="2" cellspacing="2" bordercolor="#0099FF" bgcolor="#FF9900">
            <tr>
              <td height="35" align="center" bgcolor="#BEE7FB"><strong class="txt"><font color="#FF0000">-:[ Konfirmasi Penghapusan Berita ]:-</font></strong></td>
            </tr>
            <tr>
              <td align="center" bgcolor="#BEE7FB" class="txt"><?php
include "koneksi.php";

$minta="SELECT * FROM berita WHERE id='$id'";
$eksekusi=mysql_query($minta);
$data=mysql_fetch_array($eksekusi);
$id="$data[id]";
$date="$data[tgl]";
$judul="$data[judul]";
$kategori="$data[kategori]";
$penulis="$data[penulis]";
$head="$data[head]";
$isi="$data[isi]";
?>
                  <strong><font color="#CC0000"><? echo $judul;?></font></strong> - <strong>Tanggal : </strong><? echo $date; ?> - <strong>Kategori : </strong><? echo $kategori; ?> - <strong>Penulis : </strong><? echo $penulis;?> - <strong>Head :</strong><? echo $head;?><br />
                  <br />
                  <strong><? echo $isi; ?></strong><br />
                  <br />
                [ <font color="#FF0000"><strong>Yakin Data Ini Di Hapus ?</strong></font> ]<br />
                <strong>[ <a href="?page=deleteberita-act.html&amp;sesi_get=<?echo"$sesi_get";?>&amp;id=<?echo"$id";?>">Hapus Sekarang &raquo;</a> ]</strong> <strong>[ <a href="javascript:history.back();">Kembali &raquo;</a> ]</strong>
                </p>
              </td>
            </tr>
            <tr>
              <td bgcolor="#BEE7FB">&nbsp;</td>
            </tr>
          </table>
          <p>&nbsp;</p>
      </div></td>
  </tr>
</table>
</body>
</html>
