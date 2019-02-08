<?php
session_start();
if (!$_SESSION["user_aktif"]) {
$info_login = "User: <strong>Guest</strong> | Anda Belum Login";
$link_login = "?page=member_login.html";
} else {
$info_login = "&raquo; User: <strong>$user_aktif</strong> |
<a href=\"?page=profil-member.html\">&raquo; Profil Anda</a>
<a href=\logout.php\">&raquo; Logout</a>";
$link_login= "?page=member_login.html";
}
if ($memuser=="logout") {
unset ($_SESSION["user_aktif"]);
$info_login = "<strong>Anda Telah Logout.</strong>";
$link_login = "?page=member_login.html";
}
?>
