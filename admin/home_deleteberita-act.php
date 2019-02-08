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
    <td valign="top"><img src="images/slogan_hapusberita.jpg" width="513" height="73" /></td>
  </tr>
  <tr>
    <td width="513" height="415" background="images/bgutama.jpg" style="background-repeat:no-repeat;padding-left:20px;padding-right:20px;" valign="top"><div class="cap1" style="padding-top:5px;">Konfirmasi Penghapusan Data  Berita </div>
        <div class="txt">
          <?
include "koneksi.php";

$show_query=mysql_query("select * from berita where id='$id'");
$data=mysql_fetch_array($show_query);
$id="$data[id]";
$judul="$data[judul]";
?>
          <?
$hapus=mysql_query("DELETE FROM berita WHERE id=$id");

if($hapus){
echo ("Data Berita Dengan Judul : <b>$judul</b> Berhasil Di Hapus <br><br>");
echo("<b> [ <a href=\"?page=lihatberita.html&amp;sesi_get=<?=$sesi_get?>&amp;&amp;&quot;&Aacute;&Eacute;&Chi;&Phi;&psi;\">Kembali &raquo;</a> ] </b>");
}else{
echo ("Data Berita Dengan Judul : <b>$judul</b> Gagal Di Hapus <br>");
echo ("Berita tidak dapat dihapus kemungkinan terjadi kegagalan koneksi ke MySQL.<br><br><b>[ <a href=\"?page=lihatberita.html&amp;sesi_get=<?=$sesi_get?>&amp;&amp;&quot;&Aacute;&Eacute;&Chi;&Phi;&psi;\">Silahkan diulang kembali &raquo;</a> ]</b>");

}
?>
          <p>&nbsp;</p>
      </div></td>
  </tr>
</table>
</body>
</html>
