<? 
include"koneksi.php";
include ("inc/cek_sesi.php");

?>

<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr align="left" valign="top"> 
    <td width="10" height="10"><img src="img/spacer_white.gif"  width="1" height="1"></td>
       <td valign="top"><div align="center">
        <?
		$warn = $_GET['warn'];
		if ($warn == "try") {
		echo "<img src=\"images/ic_warn.gif\" alt=\"Warning\" width=\"23\" height=\"23\" /><br><strong>User atau password salah.</strong><br /><br />";
		}
		else if ($warn == "logout") {
		echo "<img src=\"images/ic_yes.gif\" alt=\"Warning\" width=\"23\" height=\"23\" /><br><strong>Anda telah logout dengan sukses. <br />Silakan masukkan user dan password jika ingin login lagi.</strong><br /><br />";
		} else if ($warn == "logerror") {
		echo "<img src=\"images/ic_warn.gif\" alt=\"Warning\" width=\"23\" height=\"23\" /><br><strong>Logout gagal.</strong><br /><br />";
		}  
		else {
		echo "";
		}
		?>
        </div></td>
  </tr>
  <tr align="left" valign="top"> 
    <td width="10"></td>
                            <td>
                              <div align="left"></div></td></tr>
  <tr align="left" valign="top"> 
    <td width="10">&nbsp;</td>
    <td height="300" valign="top"><form id="login" name="login" method="post" action="?page=member_login.html">
          <table width="80%" border="0" cellpadding="0" cellspacing="0" class="login" id="table_login">
            <tr>
              <td colspan="3"><div align="center">LOGIN USER </div></td>
            </tr>
            <tr>
              <td width="130"><div align="right"><strong>User</strong></div></td>
              <td width="12">:</td>
              <td width="256"><input name="user" type="text" id="user" /></td>
            </tr>
            <tr>
              <td><div align="right"><strong>Password</strong></div></td>
              <td>:</td>
              <td><input name="pass" type="password" id="pass" /></td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td><input name="imageField" type="image" src="img/but_login.gif" alt="Login" /></td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
          </table>
                </form>        </td>  </tr>
</table>