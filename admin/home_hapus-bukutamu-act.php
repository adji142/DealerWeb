<?
include"koneksi.php";
$show_query=mysql_query("select * from bukutamu where id='$id'");
$show_detail=mysql_fetch_array($show_query);
$id="$show_detail[id]";
$nama="$show_detail[nama]";
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
        <td width="100%" height="30"><div align="center" class="txt-judul">
		<?
		$act_hapus = mysql_query("DELETE from bukutamu WHERE id='$id'");
		if ($act_hapus) {
		echo"<img src=\"images/ic_yes.gif\" alt=\"WARNING\" width=\"23\" height=\"23\" /><br />
        Data Tamu dengan nama : $nama telah DIHAPUS.";
		} else {
		echo"<img src=\"images/ic_warn.gif\" alt=\"WARNING\" width=\"23\" height=\"23\" /><br />
        Data tamu dengan nama : $nama gagal dihapus.";
		} 
		?>
		</div></td>
        </tr>



    </table></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
</table>
</body>
</html>
