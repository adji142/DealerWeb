<?
include"koneksi.php";
$show_query=mysql_query("select * from produk where id='$id'");
$show_detail=mysql_fetch_array($show_query);
$id="$show_detail[id]";
$kode="$show_detail[kode]";
$nama="$show_detail[nama]";
$type="$show_detail[type]";
$harga="$show_detail[harga]";
$path="$show_detail[path]";
$keterangan="$show_detail[keterangan]";
?>
<table widht="100%" border="0" cellspacing="0" cellpadding="0">
<tr align="left" valign="top">
<td width="10" height="10"><img src="../img/spacer_white.gif"
width="1" height="1"></td>
<td width="974"></td>
</tr>
<tr align="left" valign="top">
<td width="10"></td>
<td><table widht="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="#FFFFCC">
<tr align="left" valign="top">
<td width="99%" height="10" align="center"><div align="center">
<span class="snavybluebesar">--- === HAPUS PRODUK ===--- </span> </div></td>
</tr>
<tr align="left" valign="top">
<td height="10" align="center"><div align="center">
<span class="snavybluebesar">Data Ini akan Dihapus </span> </div></td>
</tr>
<tr>
<td class="katalog"><div align="center"><span class="txt-judul"><storng><?echo"$nama";?>
</div></td>
</tr>
<tr>
<td celspan="2" class="katalog"><div align="center"><img src="../<? echo "$path";?>"
	alt="<? echo "$id";?>" width="100" height="130" title ="<? echo "$id";?>"></div></td>
</tr>
<tr>
<td class="katalog"><div align="center"><a href=?page=hapus-act.html&amp:sesi_get=<? echo"$sesi_get";?>&amp;id=<? echo"$id";?>">HAPUS SEKARANG</a> | <a href="javascript:history.back();">HAPUS NANTI </a></div></td>
</tr>
</table></td>
<td></td>
</tr>
<tr>
<td></td>
<tr>
</table>

