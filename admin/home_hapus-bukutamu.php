<?php
include"koneksi.php";
$minta = "SELECT * FROM bukutamu WHERE id='$id'";
$eksekusi = mysql_query($minta);
$show_detail=mysql_fetch_array($eksekusi);
$id_tamu="$show_detail[id_tamu]";
$tgl_entry="$show_detail[tgl_entry]";
$nm_tamu="$show_detail[nm_tamu]";
$email="$show_detail[email]";
$komentar="$show_detail[komentar]";

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link href="adm_style.css" rel="stylesheet" type="text/css" />
</head>

<body>
<table width="80%" border="0" cellpadding="0" cellspacing="0" id="table_isi">
  <tr>
    <td><img src="images/ln_bar.gif" alt=" " width="457" height="4" /></td>
  </tr>
  <tr>
    <td height="40" class="title"><strong>HAPUS BUKU TAMU </strong></td>
  </tr>
  <tr>
    <td><table width="100%" border="0" cellpadding="3" cellspacing="2" class="upload">

      <tr>
        <td width="100%" height="30"><div align="center" class="txt-judul"><br />
        Data ini akan DIHAPUS </div></td>
        </tr>
      <tr>
        <td class="katalog"><div align="center"><span class="txt-judul"><strong><?echo"$nm_tamu";?><br />
          <br />
        </strong></span></div></td>
      </tr>
      <tr>
        <td class="katalog"><div align="center"><a href="?page=hapus-bukutamu-act.html&amp;sesi_get=<?echo"$sesi_get";?>&amp;id=<?echo"$id";?>">HAPUS SEKARANG</a> <a href="javascript:history.back();">KEMBALI</a> </div></td>
        </tr>


    </table></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
</table>
</body>
</html>
