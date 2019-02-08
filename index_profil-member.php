<? 
include"koneksi.php";
include ("inc/cek_sesi.php");
$cek_user = mysql_query("select * from member where user='$user_aktif'");
$view_user = mysql_fetch_array($cek_user);
$user_nama = $view_user[nama];
$user_email = $view_user[email];
$user_alamat1 = $view_user[alamat1];
$user_alamat2 = $view_user[alamat2];
$user_telp = $view_user[telepon];
$user_hp = $view_user[hp];
?>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr align="left" valign="top"> 
    <td width="10" height="10"><img src="img/spacer_white.gif"  width="1" height="1"></td>
    <td width="974"></td>
  </tr>
  <tr align="left" valign="top"> 
    <td width="10"></td>
    <td> 
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr align="left" valign="top"> 
    <td width="10" height="10"><img src="img/spacer_white.gif"  width="1" height="1"></td>
    <td width="974"><div align="center">
      <table width="100%" border="0" cellpadding="4" cellspacing="0">
        <tr>
          <td colspan="2" class="katalog"><div align="center"><strong>Profil Member </strong></div></td>
          </tr>
        <tr>
          <td width="19%" class="katalog">&nbsp;</td>
          <td width="81%" class="katalog">&nbsp;</td>
        </tr>
        <tr>
          <td class="katalog"><strong>Nama</strong></td>
          <td class="katalog"><?=$user_nama?></td>
        </tr>
        <tr>
          <td class="katalog"><strong>Email</strong></td>
          <td class="katalog"><?=$user_email?></td>
        </tr>
        <tr>
          <td class="katalog"><strong>Telepon</strong></td>
          <td class="katalog"><?=$user_telp?>
            /
              <?=$user_hp?></td>
        </tr>
        <tr>
          <td class="katalog"><strong>Alamat 1 </strong></td>
          <td class="katalog"><?=$user_alamat1?></td>
        </tr>
        <tr>
          <td class="katalog"><strong>Alamat 2 </strong></td>
          <td class="katalog"><?=$user_alamat2?></td>
        </tr>
      </table>
    </div></td>
  </tr>
  <tr align="left" valign="top"> 
    <td width="10"></td>
                            <td> <div align="center"></div></td>
  </tr>
  <tr align="left" valign="top"> 
    <td width="10">&nbsp;</td>
    <td><div align="center"></div></td>
  </tr>
</table>    </td>
  </tr>
  <tr align="left" valign="top"> 
    <td width="10">&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
