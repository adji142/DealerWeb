<html>
<head>
<title>.:: List Buku Tamu ::.</title>
<LINK REL="stylesheet" TYPE="text/css" HREF="../template/style_user.css">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"><style type="text/css">
<!--
body {
	background-color: #FFFFFF;
}
-->
</style></head>

<body>
<p><strong>Daftar Buku Tamu Dan Komentar Pada Dealer Putra Utama Motor Sukoharjo</strong></p>
<table width="100%" border="0" align="center">
  <tr> 
    <td width="11%" height="47"> 
    <div align="left"><strong>Tanggal&nbsp;</strong></div></td>
    <td><div align="left"><strong>Nama</strong></div></td>
    <td><div align="left"><strong>Email</strong></div></td>
    <td><div align="left"><strong>Komentar</strong></div></td>
	<td><div align="left"><strong>Hapus</strong></div></td>
  </tr>
  <?php
  include"koneksi.php";
  $minta = "SELECT * FROM bukutamu ORDER BY id";
  $eksekusi = mysql_query($minta);
  while($hasil=mysql_fetch_array($eksekusi))
  {
  ?>
  <tr align="left" valign="top"> 
    <td colspan="5"><hr></td>
  </tr>
  <tr align="left" valign="top"> 
    <td><?php echo "$hasil[tgl]"; ?></td>
    <td width="14%"><?php echo "$hasil[nama]"; ?></td>
    <td width="11%"><?php echo "$hasil[email]"; ?></td>
    <td width="49%"><?php echo "$hasil[komentar]"; ?></td>
	<td width="15%"><?php echo "<a href=\"home.php?page=hapus-bukutamu.html&amp;sesi_get=$sesi_get&amp;id=",$hasil[id],"\">HAPUS</a>"; ?></td>

  </tr>
  <? } ?>
</table>
</body>
</html>
