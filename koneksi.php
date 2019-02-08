<?php
$_HOST="localhost";
$_USER="root";
$_PASS="root";
$_DBNM="dbpuma";
$konek=mysql_connect($_HOST,$_USER,$_PASS);
if($konek){
	$buka=mysql_select_db($_DBNM);
} else {
	die ("Server tidak terhubung");
	}
?>

