<?
include"koneksi.php";
$show_query=mysql_query("select * from produk where id='$id'");
$show_detail=mysql_fetch_array($show_query);
$id="$show_detail[id]";
$kode="$show_detail[kode]";
$hit_lihat="$show_detail[hit_lihat]";
$nama="$show_detail[nama]";
$type="$show_detail[type]";
$harga="$show_detail[harga]";
$path="$show_detail[gambar]";
$keterangan="$show_detail[keterangan]";

?>
<style type="text/css">
<!--
.style4 {color: #000000; font-weight: bold; }
-->
</style>

<table width="300" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td colspan="2" bgcolor="#CC3366"><div align="center">
	<? echo "$nama";?>
	</div></td>
  </tr>
  <tr>
    <td colspan="2" bgcolor="#FFFF33">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2" bgcolor="#FFFF33"><div align="center"><img src="../<? echo "$path";?>"
	alt="<? echo "$id";?>" width="100" height="130" title ="<? echo "$id";?>"
	/></div></td>
  </tr>
  <tr>
    <td width="75" bgcolor="#FFFF33"><span class="style4">Kode</span></td>
    <td width="225" bgcolor="#CCFF33"><? echo "$kode";?>&nbsp;</td>
  </tr>
  <tr>
    <td bgcolor="#FFFF33"><span class="style4">Type</span></td>
    <td bgcolor="#CCFF33"><? echo "$type";?>&nbsp;</td>
  </tr>
  <tr>
    <td bgcolor="#FFFF33"><span class="style4">Harga </span></td>
    <td bgcolor="#CCFF33"><? echo "$harga";?>&nbsp;</td>
  </tr>
  <tr>
    <td bgcolor="#FFFF33"><span class="style4">Keterangan</span></td>
    <td bgcolor="#CCFF33"><? echo "$keterangan";?>&nbsp;</td>
  </tr>
  <tr>
    <td bgcolor="#CC9933">&nbsp;</td>
    <td bgcolor="#CC9933">&nbsp;</td>
  </tr>
</table>
