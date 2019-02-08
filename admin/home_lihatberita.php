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
.style1 {font-family: Arial, Helvetica, sans-serif; font-weight: bold; font-size: 12pt; color: #283F48; text-decoration: underline; padding-left: 15px; padding-top: 9px; }
.style8 {font-size: 12pt; font-weight: bold; }
.style9 {font-size: 12pt}
.style10 {font-family: "Times New Roman", Times, serif}
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
      <div align="center">Data Berita </div>
    </div>
        <div class="txt">
          <table width="430" border="1" align="center" cellpadding="1" cellspacing="1" bordercolor="#009900" bgcolor="#FFFFFF">
            <tr>
              <td width="120" height="30" align="center" valign="middle" bgcolor="#009900" class="txt"><div align="center" class="style10"><span class="style8">Penulis</span></div></td>
              <td width="150" align="center" valign="middle" bgcolor="#009900" class="txt"><div align="center" class="style10"><span class="style8">Judul</span></div></td>
              <td width="100" align="center" valign="middle" bgcolor="#009900" class="txt"><div align="center" class="style10"><span class="style8">Tanggal</span></div></td>
              <td width="60" align="center" valign="middle" bgcolor="#009900" class="txt"><div align="center" class="style10"><span class="style8">Detail</span></div></td>
              <td width="60" align="center" valign="middle" bgcolor="#009900" class="txt"><div align="center" class="style10"><span class="style8">Edit</span></div></td>
              <td width="60" align="center" valign="middle" bgcolor="#009900" class="txt"><div align="center" class="style10"><span class="style8">Hapus</span></div></td>
            </tr>
            <tr>
              <td colspan="6" valign="top" bgcolor="#009900" class="txt"><div align="center" class="style10"><span class="style9">
                <?

require "koneksi.php";

$hasil=mysql_query("SELECT * FROM berita ORDER BY id desc");
while($data=mysql_fetch_array($hasil))
{
echo("
<tr>
<td width=\"120\" valid=\"top\" align=\"left\">$data[penulis]</td>
<td width=\"130\" valid=\"top\" align=\"left\">$data[judul]</td>
<td width=\"100\" valid=\"top\" align=\"center\">$data[tgl]</td>
<td width=\"60\" valid=\"top\" align=\"center\"><a href=\"?page=lihatberita_detail.html&amp;sesi_get=<?$sesi_get?>&amp;&amp;id=$data[id]\">Detail &raquo;</a></td>
<td width=\"60\" valid=\"top\" align=\"center\"><a href=\"?page=editberita.html&amp;sesi_get=<?$sesi_get?>&amp;id=$data[id]\">Edit &raquo;</a></td>
<td width=\"60\" valid=\"top\" align=\"center\"><a href=\"?page=deleteberita.html&amp;sesi_get=<?$sesi_get?>&amp;id=$data[id]\">Hapus &raquo;</a></td>
</tr>
");
}

?>
              </span></div></td>
            </tr>
          </table>
          <p>&nbsp;</p>
      </div></td>
  </tr>
</table>
</body>
</html>
