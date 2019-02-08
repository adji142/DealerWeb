<? 
include"koneksi.php";
include ("inc/cek_sesi.php");
$cek_user = mysql_query("select * from member where user='$user_aktif'");
$view_user = mysql_fetch_array($cek_user);
$view_row = mysql_num_rows($cek_user);
$user_id = $view_user[user];
$user_email = $view_user[email];
if ($view_row==0) {
$error = "<div align=\"center\" class=\"txt-list-warn\">Maaf, Anda belum bisa memasuki halaman ini. Silakan login dulu.</div>";
?>
<script>
alert('Anda belum bisa mengakses halaman ini,\nSilakan login dulu.');
window.location.href='index.php';
</script>
<?
} else {
//cari mebel
$cek_mebel=mysql_query("select * from produk where id='$nama'");
$view_mebel=mysql_fetch_array($cek_mebel);
$kat_id=$view_mebel[id];
$kat_name=$view_mebel[nama];
$kat_harga=$view_mebel[harga];
//cek produk di database belanja_mebel
$cek_pesanan=mysql_query("select * from belanja_motor where or_nama='$kat_name' and or_user='$user_id' and or_pesan='0'");
$row_pesan=mysql_num_rows($cek_pesanan);
}
//masukkan pesanan
if ($item=="add" && $row_pesan==0 && $view_row!=0) {
$kat_qty=1;
$or_tgl=date("d M Y");
$or_total=$kat_harga*$kat_qty;
$add_pesan=mysql_query("insert into belanja_motor (katid,or_user,or_nama,or_harga,or_qty,or_total,or_tgl) values('$nama','$user_id','$kat_name','$kat_harga','$kat_qty','$or_total','$or_tgl')");
$pesan = "";
$pesan2="<center><b>Berikut pemesanan Anda di Keranjang Belanja.</b></center>";
}
//delete dan ubah pesanan
if ($act=="Hapus") {
$del=mysql_query("DELETE FROM belanja_motor WHERE katid='$nama' and or_user='$user_id' and or_pesan='0'");
$pesan = "";
$pesan2="<center><b>Berikut pemesanan Anda di Keranjang Belanja.</b></center>";
} else if ($act=="Ubah") {
$or_total=$kat_harga*$qty;
$update_pesan=mysql_query("update belanja_motor set or_qty='$qty',or_total='$or_total' where katid='$nama' and or_user='$user_id' and or_pesan='0'");
$pesan = "";
$pesan2="<center><b>Berikut pemesanan Anda di Keranjang Belanja.</b></center>";
}
//menampilkan pesanan
$view_pesan =mysql_query("select * from belanja_motor where or_user='$user_id' and or_pesan='0'");
$row_pesan=mysql_num_rows($view_pesan);
$g=0;
while($d=mysql_fetch_row($view_pesan)){
$a[$g][0] = $d[0]; //id
$a[$g][1] = $d[1]; //katalog id
$a[$g][2] = $d[2]; //user
$a[$g][3] = $d[3]; //name mebel
$a[$g][4] = $d[4]; //harga
$a[$g][5] = $d[5]; //qty
$a[$g][6] = $d[6]; //total
$a[$g][7] = $d[7]; //tanggal
$a[$g][8] = $d[8]; //banyak pesan
$a[$g][9] = $d[9]; //metode pembayaran
$g++;
}
if($row_pesan==0){
$pesan="<font color=\"#CC0000\"><b><center>Tidak ada produk yang dipesan di keranjang belanja.</font></b></center>";
$link="";
$pesan2="";
} else {
$link = "<a href=\"?page=lihat_produk.html\">Lanjutkan Belanja</a> 
<a href=\"?page=checkout.html\">Checkout</a>";
$pesan="";
$pesan2="<center><b>Berikut pemesanan Anda di Keranjang Belanja<br />Jumlah mebel yang dipesan: $row_pesan mebel.</b></center>";
}
//cekout
?>

<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr align="left" valign="top"> 
    <td width="10" height="10"><img src="img/spacer_white.gif"  width="1" height="1"></td>
    <td width="974"></td>
  </tr>
  <tr align="left" valign="top"> 
    <td width="10"></td>
    <td>
	<?
echo"$error$pesan$pesan2<hr size=\"1\" noshade color=\"#CCCCCC\" />";
for($i=0;$i<$row_pesan;$i++){
$harga = number_format($a[$i][4]);
$harga = str_replace(",", ".", $harga);
$total = $a[$i][4]*$a[$i][5];
$total_crn = number_format($total);
$total_crn = str_replace(",", ".", $total_crn);
echo"<form action=\"?page=belanja.html&amp;item=add&amp;nama=".$a[$i][1]."\" method=\"post\" name=\"form1\" id=\"form1\">
                <table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"3\" class=\"daftar\">
                  <tr>
                    <td width=\"25%\" valign=\"top\"><div align=\"right\">Jenis Mebel :
                    </div></td>
                    <td width=\"75%\" valign=\"top\"><strong>".$a[$i][3]."</strong></td>
                  </tr>
                  <tr>
                    <td><div align=\"right\">Harga Satuan :</div></td>
                    <td>Rp $harga,-</td>
                  </tr>
                  <tr>
                    <td><div align=\"right\">Jumlah Pesanan : </div></td>
                    <td><input name=\"qty\" value=\"".$a[$i][5]."\" type=\"text\" size=\"2\" maxlength=\"2\" /></td>
                  </tr>
                  <tr>
                    <td><div align=\"right\">Total : </div></td>
                    <td>Rp $total_crn,-</td>
                  </tr>
                  <tr>
                    <td style=\"border-bottom: 1px #F9D7B7 solid\">&nbsp;</td>
                    <td style=\"border-bottom: 1px #F9D7B7 solid\"><input type=\"submit\"  class=\"butbelanja\" name=\"act\" value=\"Ubah\" />
                      <input type=\"submit\" class=\"butbelanja\" name=\"act\" value=\"Hapus\" /></td>
                  </tr>
                </table>
                  </form>";
}
// menghitung total pesanan
$hitung = mysql_query("select sum(or_total) from belanja_motor where or_user='$user_id' and or_pesan='0'");
$hitung = mysql_fetch_array($hitung);
$hitung = $hitung["sum(or_total)"];
$hitung = str_replace(",",".",number_format($hitung));
$hitung = "Total yang harus dibayar: <strong>Rp $hitung,-</strong><hr noshade />";
echo"<div class=\"link01\" align=\"right\">$hitung$link</div>";
?>
	</td>
  </tr>
  <tr align="left" valign="top"> 
    <td width="10">&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>