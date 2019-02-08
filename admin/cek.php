<?php
session_start ();
include "koneksi.php";
$username = $_POST ['username'];
$password = $_POST ['password'];
$passwordhash = md5 ($password);
$perintahnya = "select username, password from admin where username = '$username' and password = '$password'";
$jalankanperintahnya = mysql_query($perintahnya);
$cari =mysql_num_rows($jalankanperintahnya);
if ($cari >=1)
{
$_SESSION ['username'] = $username;
header("location: home.php");
}
else
header("location: index.php");
?>
