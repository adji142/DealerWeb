<?
include"koneksi.php";
if($short=="id") {
$cari="select * from produk order by id desc";
} else if ($short=="kode") {
$cari="select * from produk order by kode asc";
} else if ($short=="nama") {
$cari="select * from produk order by nama asc";
} else if ($short=="type") {
$cari="select * from produk order by type asc";
} else if ($short=="harga") {
$cari="select * from produk order by harga asc";
} else if ($short=="gambar") {
$cari="select * from produk order by gambar asc";
} else if ($short=="keterangan") {
$cari="select * from produk order by keterangan asc";
} else {
$cari="select * from produk order by id desc";
}
$cari_query=mysql_query($cari);
$jml_produk=mysql_num_rows($cari_query);
$jml=0;
while($show_produk=mysql_fetch_row($cari_query)) {
$lihat[$jml][0] = $show_produk[0];
$lihat[$jml][1] = $show_produk[1];
$lihat[$jml][2] = $show_produk[2];
$lihat[$jml][3] = $show_produk[3];
$lihat[$jml][4] = $show_produk[4];
$lihat[$jml][5] = $show_produk[5];
$lihat[$jml][6] = $show_produk[6];
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
              <td><form name="form1" method="post" action="">
                <label>
                <input name="sub_short" type="submit" id="sub_short" value="Urutkan Berdasarkan">
                </label>
                                          <label>
                                          <select name="short" id="short">
                                            <option>Kode</option>
                                            <option>Nama</option>
                                            <option>Type</option>
                                            <option>Harga</option>
                                          </select>
                                          </label>
              </form>
              </td>
            </tr>
            <tr>
              <td>
			  Halaman :
	<?
	$hal= 1;
	for ($s=0;$s<$jml_produk;$s+=5) {
	if ($jml_produk>5) {
	echo"<a
href=\"?page=lihat_produk,html&amp;sesi_get=$sesi_get&amp;p=&amp;jml_produk=$jml_produk\">$hal </a>";
	$hal++;
	}else {
	echo "1";
	}
	}
	?>
	
			  </td>
            </tr>
				<?
	$l=$p+5;
	if($p=="" ||!eregi("^[0-9]",$p)||$p>$jml_produk) {
	$p=0;
	}
	if($jml_produk<=$l) {
	$n=$jml_produk;
	}else{
	$n=$l;
	}
	for ($i=$p;$i<$n;$i++) {
	echo "<tr>
	<td class=\"txt\"><ul type=\"square\">
	<li><strong>Kode</strong> : ",$lihat[$i][2],"</li>
	<li><strong>Nama</strong> : ",$lihat[$i][3],"</li>
		<li><strong>Type</strong>:",$lihat[$i][4],"</li>
		<li><strong>Harga</strong>:",$lihat[$i][5],"</li>
		<a href=?page=editproduk.html&amp;sesi_get=$sesi_get&amp;id=",$lihat[$i][0],">EDIT</a>
		<a href=?page=hapus.html&amp;sesi_get=$sesi_get&amp;id=",$lihat[$i][0],">HAPUS</a>
		<a href=?page=lihatdetail.html&amp;sesi_get=$sesi_get&amp;id=",$lihat[$i][0],">DETAIL</a>
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
