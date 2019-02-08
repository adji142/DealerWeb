<?
include"koneksi.php";
include ("inc/cek_sesi.php");
//cek apakah user id sudah ada yang memakai atau belum
$mem_userid = mysql_escape_string ($_POST['mem_userid']);
$cek_user = mysql_query("select user from member where user='$mem_userid'");
$cek_data = mysql_num_rows ($cek_user);
?>
<?
if($mem_userid==""||$mem_pass1==""||$mem_pass2==""||$mem_nama==""||
$mem_email==""||$mem_alamat1=="" || $cek_data!= 0){
$msq0 = "div calss=\"txt-judul\">Pengisian formulir belum lenkap.
</div>";
if($sem_userid==""){
$mysql = "<li>User Id masih kosong.</li>";
}if ($cek_data!= 0){
$msq2 = "<li> Mohon maaf, User Id <strong>$mem_userid</strong>sudah ada yamg memakai. Silakan ganti dengan yang lain.</li>";
} if($mem_pass==""){
$msq3 ="<li>Password masih kosong.</li>";
}if($mem_pass2==""){
$msq4 = "<li>Konfirmasi password masih kosong.</li>";
}if($mem_pass1=$mem_pass2){
$msq5 = "<li>Password dan konfirmasi pasword harus sama.</li>";
}if($mem_nama==""){
$msq6 = "<li>Nama lengkap masih kosong.</li>";
}if($mem_alamat1==""){
$msq7 = "<li>Alamat belum diisi.</li>";
}if ($mem_alamat2==""){
$msq8 = "<li>Email belum diisi/</li>";
}
}else {
$tgl_daftar=date(" d M Y");
$sesi = md5 ("$mem_userid:$mem_pass1");
$hostnama=gethostbyaddr($REMOTE_ADDR);
$add_user=mysql_query("insert into member
(user,pass,sesi,nama,alamat1,alamat2,email,tgl_daftar,telepon,hp,hostname)
values('$mem_userid','$mem_pass1','$sesi','$mem_nama','$mem_alamat1','$mem_alamat2','$mem_email','$tgl_daftar','$mem_tlp','$mem_hp','$hostnama')");
}if ($add_user) {
	echo "<ul type=\"square\">Terima kasih, <strong>$mem_nama</strong>,
Anda telah bergabung Sebagai Member Puma.<br />
	Berikut data Anda.<br/><br />
	<li>User Id : <strong>$mem_userid $user_data</strong></li>
	<li>Nama : <strong>$mem_nama</strong></li>
	<li>Email : <strong>$mem_email</strong></li>
	<li>Telepon : <stong>$mem_telp/$mem_hp</strong></li>
	<li>Alamat : <strong>1. $mem_alamat1 2. $mem_alamat2</strong></li></ul>";
}else {
echo "<ul type=\"square\"><div class=\"txt-list-warn\">$msg0</div><br
/>
	$msq1
	$msq2
	$msq3
	$msq4
	$msq5
	$msq6
	$msq7
	<ul>";
	}
	?>
