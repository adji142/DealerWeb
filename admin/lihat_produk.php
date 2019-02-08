<?
include"koneksi.php"
if($short=="id") {
$cari"select * from produk order by id desc";
} else if ($short=="kode") {
$cari"select * from produk order by kode asc";
} else if ($short=="nama") {
$cari"select * from produk order by nama asc";
} else if ($short=="type") {
$cari"select * from produk order by type asc";
} else if ($short=="harga") {
$cari"select * from produk order by harga asc";
} else if ($short=="gambar") {
$cari"select * from produk order by gambar asc";
} else if ($short=="keterangan") {
$cari"select * from produk order by keterangan asc";
} else {
$cari"select * from produk order by id desc";
}
$cari"select * from produk order by id desc";
}
$cari_query=mysql_query($cari);
$cari_produk=mysql_num_row($cari);
$jml=0;
while ($show_produk=mysql_fatch_row ($cari_query) {
$lihat[$jml][0] = $show_produk[0];
$lihat[$jml][1] = $show_produk[1];
$lihat[$jml][2] = $show_produk[2];
$lihat[$jml][3] = $show_produk[3];
$lihat[$jml][4] = $show_produk[4];
$lihat[$jml][5] = $show_produk[6];
$lihat[$jml][7] = $show_produk[7];
$jml++;
}
?>
		<style type="text/css">
<!--
.style1 {
	font-family: Rockwell;
	font-weight: bold;
}
-->
</style>
<table width="95%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td colspan="3" bgcolor="#00FFFF"><div align="center" class="style1">LIHAT PRODUK YAMAHA </div></td>
  </tr>
  <tr>
    <td width="6%">&nbsp;</td>
    <td width="88%"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td><div align="center"><span class="style1">Terdapat Jenis Produk Dalam Database </span></div></td>
      </tr>
      <tr>
        <td><div align="left">
          <table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td>
			  Halaman :
	<?
	$hal= 1;
	for ($s=0;$s<$jml_produk;$s+=5) {
	if ($jml_produk>5) {
	echo"<a
href=\"?page=lihat_produk,html$amp;sesi_get=$sesi_get$amp;p=$amp;jml_produk=$jml_produk\">$hal </a>";
	$hal++;
	}else {
	echo "1";
	}
	}
	?>
	
			  </td>
            </tr>
				<?
	$1=$p+5;
	if ($p=="" ||!eregi("^[0-9]"'$p)||$p>$jml_produk) {
	$p=0;
	}
	if($jml_produk<=$1) {
		<li><strong>Type</strong>:",lihat[$1][3],"</li>
		<li><strong>Harga</strong>:",lihat[$1][5],"</li>
		<a href=?page=edit_produk.html$amp;sesi_get=$sesi_get$amp;id=",$lihat[Si][0],">EDIT</a>
		<a href=?page=del_produk.html$amp;sesi_get=$sesi_get$amp;id=",$lihat[Si][0],">HABUS</a>
		<a href=?page=lihat_produk_detail.html$amp;sesi_get=$sesi_get$amp;id=",$lihat[Si][0],">DETAIL</a>
					</tr>";
		}
		?>
          </table>
        </div></td>
      </tr>
    </table></td>
    <td width="6%">&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>
	 </td>
    <td>&nbsp;</td>
  </tr>
</table>
