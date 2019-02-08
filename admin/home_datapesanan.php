<?php
include "koneksi.php";
$cari="select distinct or_user from belanja_motor where or_pesan='1' order by bid desc";
$cari_query=mysql_query($cari);
$jml_pesanan=mysql_num_rows($cari_query);
$jml=0;
while($show_pesanan=mysql_fetch_row($cari_query)){
$lihat[$jml][0] = $show_pesanan[0];
$lihat[$jml][2] = $show_pesanan[2];
$lihat[$jml][7] = $show_pesanan[7];
$jml++;
}
?>

<table width="100%" border="0" cellpadding="0" cellspacing="0" id "table_isi:>
<tr>
<td height="40" class="tittle"><strong>Lihat Pesanan Motor </strong>
</td>
</tr>
<tr>
<td><table width="100%" border="0" cellpadding="3" cellspacing="2">
<tr>
<td class="katalog" scope="col">Terdapat <strong>
<?echo"$jml_pesanan";?></strong> pesanan di Putra Utama Motor Sukoharjo.</td>
</tr>
<tr>
<td class="katalog" scope="col">diurutkan berdasarkan tanggal pesanan.</td>
</tr>
<tr>
<td class="katalog">halaman : 
<? 
$hal = 1;
for($s=0;$s<$jml_pesanan;$s+=20){
if($jml_pesanan>20) {
echo "<a href=?page=lihat_member.html&amp;sesi_get=$sesi_get&amp;p=$s&amp;jml_pesanan=$jml_pesanan\">$hal";
$hal++;
} else {
echo "1";
}
}
?>
</td><span></td>
</tr>
<?
$l=$p+20;
if ($p=="" ||!eregi("^[0-9]",$p) || $p>$jml_pesanan) {
$p = 0;
}
if($jml_pesanan<=$l){
$n=$jml_pesanan;
} else{
$n=$l;
}
for ($i=$p;$i<$n;$i++){
echo "<tr>
<td class=\"katalog\"><a href=?page=detail.html&amp;sesi_get=$sesi_get&amp;user=", $lihat[$i][0],">
Lihat Pemesanan Motor dari : ",$lihat[$i][0],"</a>";
}
?>
</table></td>
</tr>
<tr>
<td>&nbsp;</td>
</tr>
</table>
