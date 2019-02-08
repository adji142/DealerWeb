<?php
include("koneksi.php");




$kode = $_POST ['kode'];
$nama = $_POST ['nama'];
$type = $_POST ['type'];
$harga = $_POST ['harga'];
$gambar_size = filesize($file_gambar];
$keterangan = $_POST ['keterangan'];
if($kode==""||$nama==""||$type==""||$harga=="")
{
$mag0="<divclass=\"txt-judul\">Data untuk upload belum lengkap.</div>";
if($kode==""){
$mag1 ="<li>Kode belum diisi.</li>";
}if($nama==""){
$mag2 ="<li>Nama belum diisi.</li>";
}if($type==""){
$mag3 ="<li>Type belum diisi.</li>";
}if($harga==""){
$mag4 ="<li>Harga belum diisi.</li>";
}if(!eregi("^[0-9]",$harga)){
$mag5 ="<li>Harga harus ditulis dengan angka.</li>";
}if($file_gambar==""){
$mag6 ="<li>File gambar masih kosong, atau ukuran file gambar terlalu besar(maksimal 50 Kbytes).</li>";
}if($keterangan==""){
$mag11 ="<li>Descreption belum diisi.</li>";
}
} else {
$tanggal= date("d m y");
$bk_path = "gambar/$file_gambar_name";
#path2 = $FILES['file_gambar']['nane'];
copy($file_gambar,"../gambar/$path2");

$add=mysql1_query("insert into produk (tanggal,kode,nama,type,harga,gambar,keterangan)
VOLUES ('$tanggal','kode','$namai','$type','$harga','$bk_path','$keterangan')");
} if ($add) {
echo "<div class=\"text-judul\">Data telah diupload.</div><ul type=|"square\'>
	<li>Kode : <strong>$kode</strong></li>
	<li>Nama : <strong>$nama</strong></li>
	<li>Type : <strong>$type</strong></li>
	<li>Harga : <strong>$harga</strong></li>
	<li>Nama file gambar : <strong>$file gambar name</strong></li>

} else {
echo "div clase=\"text-list-warn\">$msg0<ul type=\"square\">
	$msg1
	$msg2
	$msg3
	$msg4
	$msg5
	$msg6</ul>";

echo ("<br><br><br>");
echo ("<p class=snavyblue>");
echo ("Data gagal di upload koneksi gagal");
echo ("<br>");
echo ("<ahref=?page=tambah_mebel.html target=_self>isi data mebel kembali</a></p>");
}


?>
<body>
</body>
</html>
