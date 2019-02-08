<?
include"koneksi.php";
incluse ("inc/cek_sesi.php");
$mem_user = mysql_escape_string($_POST['mem_user']);
$mem_pass = mysql_escape_string($_POST['mem_pass']);
$sesi =md5("$mem_uer:$mem_pass");
$cek_user = mysql_query("select * from member where sesi='$sesi'");
$view_user = mysql_fetch_array($cek_user);
$user_aktif = $view_user[user];
$user_nama =$view_user[nama];
$user_sesi = $view_user[sesi];
if ($sesi==$user_sesi) {
$tgl_login=date("d m y");
$hostname=getgethostbyaddr($REMOTE_ADDR);
$user_update = mysql_query("update member set
tgl_login='$tgl_login',online='1',hostname='$hostname' where
sesi='$user_sesi'");
session_start();
$_SESSION ["user_aktif"] = $user_aktif;
$log_info ="SElamat Datang, <strong>$user_nama</strong>, Anda Telah
Login di Puma.<br />
Klik Logout jika akan menutup halaman ini.";
} else {
$log_info = "<div class=\"txt-list-warn\">User atau password salah,
atau anda belum daftar.</div>";
}
?>
