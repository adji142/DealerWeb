<?
include"koneksi.php";
include ("inc/cek_sesi.php");
$mem_user = mysql_escape_string($_POST['mem_user']);
$mem_pass = mysql_escape_string($_POST['mem_pass']);
$sesi =md5("$mem_user:$mem_pass");
$cek_user = mysql_query("select * from member where sesi='$sesi'");
$view_user = mysql_fetch_array($cek_user);
$user_aktif = $view_user[user];
$user_nama = $view_user[nama];
$user_sesi = $view_user[sesi];
if ($sesi==$user_sesi) {
$tgl_login=date("d M Y");
$hostname=gethostbyaddr($REMOTE_ADDR);
$user_update = mysql_query("update member set tgl_login='$tgl_login',online='1',hostname='$hostname' where sesi='$user_sesi'");
session_start();
$_SESSION["user_aktif"] = $user_aktif;
$log_info = "Selamat Datang, <strong>$user_nama</strong>, Anda Telah Login di Putra Utama Motor Sukoharjo.<br />
Klik Logout jika akan menutup halaman ini.";
} else {
$log_info = "<div class=\"txt-list-warn\">User atau password salah, atau anda belum daftar.</div>";
}
?>
<table width="100%" border="0" cellpadding="0">
<tr align="left" valign="top">
<td width="10" height="10"><img src=img/spacer_white.gif" width="1" height="1"></td>
<td width="974"></td>
</tr>
<tr align="left" valign="top">
<td width="10"></td>
<td><?=$log_info?></td>
</tr>
<tr align="left" valign="top">
<td width="10">&nbsp;</td>
<td>&nbsp;</td>
</tr>
</table>