<?
include ("koneksi.php");
?>
<?

if($kode=="" ||$nama=="" ||type=="" ||$harga=="")
{
$msg0 = "<div class=\"txt-judul\">Data untuk upload belum lengkap.</div>";
if($kode==""){
$msg1 = "<li>Kode produk belum diisi.</li>";
}if($nama=""){
$msg2 = "<li>Nama produk belum diisi.</li>";
}if($type==""){
$msg3 = "<li>Type produk belum diisi.</li>";
}if($harga==""){
$msg4 = "<li>Harga produk belum diisi.</li>";
} if($keterangan==""){
$msg5 = "<li>Keterangan belum diisi.</li>";
}
} else {
$tgl= date("d m y");
$bk_path = "gambar/$file_gambar_name";
$path2 = $_FILES['file_gambar']['name'];
copy($file_gambar,"../gambar/$path2");

$add=mysql_query("UPDATE produk SET
tanggal='$tgl', kode='$kode',nama='$nama',type='$type',harga='$harga',gambar='$bk_path',keterangan='$keterangan' where kode='$kode'");
} if ($add) {
echo "<div class=\"txt-judul\">Data telah diubah.</div><ul type=\"square\">
	<li>Kode 	    : <strong>$kode</strong></li>
	<li>Nama		: <strong>$nama</strong></li>
	<li>Type	    : <strong>$type</strong></li>
	<li>Harga		: <strong>$harga</strong></li>
	<li>Keterangan	: <strong>$keterangan</li></ul>";
} else {
echo "<div class=\"txt-list-warn\">$msg0 <ul type=\"square\">
	$msg1
	$msg2
	$msg3
	$msg4
	$msg5</ul>";
}
?>