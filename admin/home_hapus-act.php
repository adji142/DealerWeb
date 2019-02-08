<?php
include "koneksi.php";
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
<table width="80%" border="0" cellpadding="0" cellspacing="o0" id="table_isi">
<tr>
<td><table width="100%" border="0" cellpadding="3" cellspacing="2" class="upload">
<tr>
</table></td></tr>
<tr>
<?
$act_hapus = mysql_query("DELETE from produk WHERE id='$id'");
if ($act_hapus) {
echo"Data Produk Dengan Nama= $nama telah Dihapus.";
} else {
echo"Data Produk dengan nama $nama gagal dihapus.";
}
?>
<td>
</td>
</tr>
<tr>
<td><div align="right"><span class="snavblue">[</span><a href="?page=lihat_produk.html"
target="_self" class="anavymerah">Product</a><span class="snavyblue">] [</span><a href="?page=home.html"
target="_self" class="anavymerah">Admin</a><span class="snavyblue">]</span></div></td>
</tr>
</table>