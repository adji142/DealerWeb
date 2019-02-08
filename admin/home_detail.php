<?php

include "koneksi.php";
$cek_user = mysql_query("select * from member where user='$user'");
$view_user = mysql_fetch_array($cek_user);
$view_row = mysql_num_rows($cek_user);
$user_id = $view_user[user];
$user_email = $view_user[email];
$user_nama = $view_user[nama];
$user_telp = $view_user[telepon];
$user_hp = $view_user[hp];
$user_alamat = $view_user[alamat1];
// menampilkan pesanan
$view_pesan =mysql_query("select * from belanja_motor where or_user='$user' and or_pesan='1'");
$row_pesan=mysql_num_rows($view_pesan);
$g=0;
while($d=mysql_fetch_row($view_pesan)){
$a[$g][0] = $d[0]; //id
$a[$g][1] = $d[1]; //katalog id
$a[$g][2] = $d[2]; //user
$a[$g][3] = $d[3]; //judul
$a[$g][4] = $d[4]; //harga
$a[$g][5] = $d[5]; //qty
$a[$g][6] = $d[6]; //total
$g++;
}
// menghitung total pesanan
$hitung = mysql_query("select sum(or_total) from belanja_motor where or_user='$user' and or_pesan='1'");
$hitung = mysql_fetch_array($hitung);
$hitung = $hitung["sum(or_total)"];
$hitung = str_replace(",",".",number_format($hitung));
$hitung = "<br />Total yang harus dibayar: <strong>Rp $hitung,-</strong></li></ul>";
?>
<style type="text/css">
<!--
.style1 {
	font-family: Georgia;
	font-weight: bold;
	font-size: 18px;
}
-->
</style>

<table width="100%" border="0" cellpadding="0" cellspacing="0" id="table_isi">
  <tr>
    <td height="40" class="title"><span class="style1">Lihat Pesanan Motor </span></td>
  </tr>
  <tr>
    <td><table width="100%" border="0" cellspacing="2" cellpadding="3">
      <tr>
        <td class="katalog"><br />
              <div align="center" id="h5"><strong>Berikut Motor yang dipesan oleh
                <?=$user_nama?>
                :</strong></div>
          <div>
                <?
				  echo "<ul type=\"square\">";
				  for($i=0;$i<$row_pesan;$i++){
					$total_item = number_format($a[$i][6]);
					$total_item = str_replace(",", ".", $total_item);
					echo "<li>".$a[$i][3].", ".$a[$i][5]." buah, Rp $total_item,-</li>";
					}
				  echo"$hitung";
				  ?>
              </div>
          <br />
              <div align="center" id="h5deui"><strong>Data Pemesan :</strong> </div>
          <ul type="square">
                <li>Nama:
                  <?=$user_nama?>
                </li>
            <li>Email:
              <?=$user_email?>
                </li>
            <li>Telepon:
              <?=$user_telp?>
              /
              <?=$user_hp?>
              <br />
              <br />
              <strong>Mohon pesanan di atas dikirim ke alamat:</strong></li>
            <li>
                  <?=$user_alamat?>
                  <br />
                </li>
          </ul></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
</table>
