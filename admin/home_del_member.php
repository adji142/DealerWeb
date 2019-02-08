<?php
$show_query=mysql_query("select * from member where mid='$mid'");
$show_detail=mysql_fetch_array($show_query);
$mid="$show_detail[mid]";
$user="$show_detail[user]";

				 ?>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr align="left" valign="top">
    <td width="10" height="10"><img src="../img/spacer_white.gif"  width="1" height="1"></td>
    <td width="974">&nbsp;
      Jangan Lupa Logout jika sudah menggunakan halaman ini
      <p align="left">
                  <?php
include "koneksi.php";

$sql = mysql_query("DELETE FROM member WHERE mid=$mid");
echo "Data dengan nama=$user telah di hapus";

?>
                  <br>
                  <br>
                <p align="center">
                <p align="center"><br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                <p align="center"><br>
                    <br>
                    <br>
              </td>
  </tr>
  <tr align="left" valign="top">
    <td width="10"></td>
    <td>&nbsp;</td>
  </tr>
  <tr align="left" valign="top">
    <td width="10">&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
