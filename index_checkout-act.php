<?
include"koneksi.php";
include ("inc/cek_sesi.php");

$cek_user = mysql_query("select * from member where user='$user_aktif'");
$view_user = mysql_fetch_array($cek_user);
$view_row = mysql_num_rows($cek_user);
$user_id = $view_user[user];
$user_email = $view_user[email];
$user_nama = $view_user[nama];
$user_telp = $view_user[telepon];
$user_hp = $view_user[hp];
$user_alamat = $view_user[alamat1];
if ($view_row==0) {
$error = "<div align=\"center\" class=\"txt-list-warn\">Maaf, anda Belum bisa memasuki halaman ini. silahkan login dulu.</div>";
?>
<script>
alert('anda belum bisa mengakses halaman ini,\silahkan login dulu.');
window.location.href='index.php';
</script>
<? } ?>
<?

$kirim_pesan = mysql_query("update belanja_motor set or_pesan='1', or_metoda='$metoda' where or_user='$user_id' and or_pesan='0'");
if ($kirim_pesan) {
$info_pesan = "terima kasih, <strong>$user_nama</strong>, data pesanan anda telah dikirim dengan metoda pembayaran <strong>transfer rekening $metoda</strong>. jangan lupa untuk memberi konfirmasi kepada kami jika sudah melakukan pembayaran.";
}
?>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
<tr>
<td><?=$info_pesan?></td>
</tr>
</table>
 