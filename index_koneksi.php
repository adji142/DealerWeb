
<?php

$_HOST="localhost";
$_USER="root";
$_PASS="";
$_DBNM="dbpuma";
$konek=mysql_connect($_HOST,$_USER,$_PASS);
if($konek){
	$buka=mysql_select_db($_DBNM);
	if($buka) {
	    die ("Koneksi ke database berhasil");
	} else {
	    echo "Koneksi gagal";
	}
} else {
	die ("Server tidak terhubung");
	}
?>

