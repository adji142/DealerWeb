<?
include"koneksi.php";
$judul=$_REQUEST['judul'];
$isi=$_REQUEST['isi'];
mysql_query($artikel);
$artikel="insert into artikel (judul,isi)
values ('$judul','$isi')";
?>