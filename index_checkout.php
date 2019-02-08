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
$error = "<div align=\"center\" class=\"txt-list-warn\">Maaf, Anda belum bisa memasuki halaman ini. Silahkan Login dulu.</div>";
?>
<script>
<alert('Anda Belum Bisa Mengakses halaman ini,\Silahakan login dulu.');
window.location.href='index.php';
</script>
<? } ?>

<?

$view_pesan = mysql_query("select * from belanja_motor where or_user='$user_id' and or_pesan='0'");
$row_pesan = mysql_num_rows($view_pesan);
$g=0;
while($d=mysql_fetch_row($view_pesan)) {
$a[$g][0] = $d[0];
$a[$g][1] = $d[1];
$a[$g][2] = $d[2];
$a[$g][3] = $d[3];
$a[$g][4] = $d[4];
$a[$g][5] = $d[5];
$a[$g][6] = $d[6];
$a[$g][7] = $d[7];
$a[$g][8] = $d[8];
$a[$g][9] = $d[9];
$g++;
}
$hitung = mysql_query("select sum(or_total) from belanja_motor where or_user='$user_id' and or_pesan='0'");
$hitung = mysql_fetch_array($hitung);
$hitung = $hitung["sum(or_total)"];
$hitung = str_replace(",",".",number_format($hitung));
$hitung = "total yang harus dibayar: <strong>Rp $hitung,-</strong></li></ul>";
?>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr align="left" valign="top">
    <td width="10" height="10"><img src="img/spacer_white.gif" width="1" height="1" /></td>
    <td width="450"><div align="center">
      <table width="100%" border="0" cellspacing="0" cellpaddding="0">
        <tr>
          <td><?=$error?></td>
        </tr>
        <tr>
          <td class="daftar"><div align="center" style="padding: 6px; border: 1px solid #666666"><strong> Sebelum mengirim pesanan, pastikan anda telah membaca dan memahami aturan serta syarat pembelian di Putra Utama Motor Sukoharjo online.</strong></div>
                <br />
                <div>
                  <?
echo "<ol>";
for($i=0;$i<$row_pesan;$i++) {
$total_item = number_format($a[$i][6]);
$total_item = str_replace(",",".", $total_item);
echo "<li><strong> ".$a[$i][3]."</strong>, ".$a[$i] [5]."buah, Rp $total_item,-</li>";
}
echo"</ol>";
echo"$hitung";
?>
                </div>
            <br />
                <div align="center" style="padding: 3px; border: 1px solid #666666"><strong>Data Pemesan :</strong></div>
            <ul type="square">
                  <li>Nama : <strong>
                    <?=$user_nama?>
                  </strong></li>
              <li>Email :
                <?=$user_email?>
                  </li>
              <li>Telepon :
                <?=$user_telp?>
                /
                <?=$user_hp?>
                <br />
                <br />
                <strong>Mohon Pesanan di atas dikirim ke alamat:</strong></li>
              <li>
                    <?=$user_alamat?>
                    <br />
                    <form id="form1" name="form1" method="post" action="?page=checkout-act.html">
                      <p><strong class="daftar"> metoda pembayaran</strong>:<br />
                          <select name="metoda" id="metoda">
                            <option value="BCA" selected="selected">Transfer Rekening BCA</option>
                            <option value="Mandiri">Transfer Rekening Mandiri</option>
                            <option value="BNI">Transfer Rekening BNI</option>
                          </select>
                          <br />
                          <br />
                          <input name="submit" type="submit"   class="butbelanja"   value="kirim pesanan" />
                      </p>
                    </form>
              </li>
            </ul></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
        </tr>
      </table>
    </div></td>
  </tr>
  <tr align="left" valign="top">
    <td><div align="center"></div></td>
  </tr>
  <tr align="left" valign="top">
    <td><div align="center"></div></td>
  </tr>
</table>

