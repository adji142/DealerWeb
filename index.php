<?
session_start();
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>putra utama motor</title>
<style type="text/css">
<!--
.style7 {font-family: Georgia, "Times New Roman", Times, serif; font-size: 12pt; font-weight: bold; }
a:visited {
	color: #0000FF;
}
.style21 {font-family: Rockwell; font-weight: bold; font-size: 14px; color: #0000FF; }
.style22 {
	color: #0000FF;
	font-weight: bold;
	font-family: Rockwell;
}
.style23 {
	font-family: Rockwell;
	font-size: 12pt;
	color: #0000FF;
}
.style25 {
	font-family: Rockwell;
	color: #0000FF;
}
.style26 {font-family: "Monotype Corsiva"}
body {
	background-color: #FFFFFF;
}
.style37 {font-weight: bold; color: #330000;}
.style40 {color: #330000}
.style41 {color: #00CC00}
.style42 {color: #00FF00}
.style43 {color: #CC0000}
.style44 {
	font-size: 24px;
	color: #FFCC00;
}
.style46 {
	font-weight: bold;
	font-family: Arial, Helvetica, sans-serif;
	color: #666666;
}
.style47 {color: #000066}
.style108 {	color: #FF0000;
	font-size: 12pt;
	font-weight: bold;
}
-->
</style>
</head>

<body>
<div align="center">
  <table width="800" height="582" border="0" cellpadding="0" cellspacing="0" bordercolor="#0080C0">
    <tr>
      <td width="800" height="150"><div align="center"><img src="header.jpg" width="800" height="150" /></div></td>
    </tr>
    <tr bgcolor="#FFFFFF">
      <td height="20"><table width="800" height="38" border="0" align="center" cellpadding="0" cellspacing="0" bordercolor="#FFFFFF" bgcolor="#999999" frame="void">
        <tr bgcolor="#66FFFF">
          <td height="19" colspan="7" bgcolor="#0080C0" class="style26"><span class="style43">
            <marquee>
            <span class="style44">Putra Urama Motor Sukoharjo Kepuasan Anda Kebanggaan Kami </span>
              </marquee>
          </span> </td>
          </tr>
        <tr bgcolor="#9999FF">
          <td width="126" height="19" bordercolor="#00FF00"><div align="center" class="style42"><span class="style46"><a href="?page=mainmenu.html"><blink><span class="style47">MAIN MENU</span></blink></a> </span></div></td>
          <td width="119"><div align="center"><a href="?page=home.html" class="style21">HOME</a></div></td>
          <td width="103"><div align="center"><a href="?page=profil.html" class="style21">PROFIL</a></div></td>
          <td width="107"><div align="center"><a href="?page=lihat_produk.html" class="style21">PRODUK</a></div></td>
          <td width="122"><div align="center"><a href="?page=kontak.html" class="style21">KONTAK</a></div></td>
          <td width="122"><div align="center"><a href="?page=bukutamu.html"><span class="style21">BUKU TAMU</span></a></div></td>
          <td width="101"><div align="center"><a href="?page=lihatberita.html"><span class="style21">BERITA </span></a></div></td>
        </tr>
      </table></td>
    </tr>
    <tr bgcolor="#FFFFFF">
      <td height="316" bgcolor="#00FFFF"><div align="center">
        <table width="800" height="316" border="0" align="left" cellpadding="0" cellspacing="0" bordercolor="#0080C0" bgcolor="#0080C0" rules="rows">
          <tr bordercolor="#0080C0">
            <td width="25" bgcolor="#9999FF"><div align="center" class="style22">
              <div align="right">&gt;::</div>
            </div></td>
            <td width="148" bgcolor="#9999FF"><div align="center" class="style7">
                <div align="left"><span class="style23"><a href="?page=home.html">HOME</a></span></div>
            </div></td>
            <td width="619" rowspan="7" valign="top" bgcolor="#0080C0"><?
				$page = $_GET['page'];
				$page = str_replace(".html","",$page);
				$file = "index_$page.php";
				if (!file_exists($file)) {
				include ("index_home.php");
				} else if ($page=="" || $page=="index"){
				include ("index_home.php");
				} else {
				include ("index_$page.php");
				}
				?></td>
            </tr>
          <tr bordercolor="#0080C0" bgcolor="#9999FF">
            <td><div align="right"><strong><span class="style25">&gt;::</span></strong></div></td>
            <td><div align="left"><a href="?page=profil.html" class="style21">PROFIL</a></div></td>
            </tr>
          <tr bordercolor="#0080C0" bgcolor="#9999FF">
            <td><div align="right"><strong><span class="style25">&gt;::</span></strong></div></td>
            <td><div align="left"><a href="?page=lihat_produk.html" class="style21">PRODUK</a></div></td>
            </tr>
          <tr bordercolor="#0080C0" bgcolor="#9999FF">
            <td><div align="right"><strong><span class="style25">&gt;::</span></strong></div></td>
            <td><div align="left"><a href="?page=kontak.html" class="style21">KONTAK</a></div></td>
            </tr>
          <tr bordercolor="#0080C0" bgcolor="#9999FF">
            <td><div align="right"><strong><span class="style25">&gt;::</span></strong></div></td>
            <td><div align="left"><a href="?page=bukutamu.html"><span class="style21">BUKU TAMU</span></a></div></td>
            </tr>
          
          <tr bordercolor="#0080C0" bgcolor="#9999FF">
            <td><div align="right"><span class="style22">&gt;::</span></div></td>
            <td><div align="left"><span class="style21"><a href="?page=lihatberita.html">BERITA</a></span></div></td>
            </tr>
          
          <tr bgcolor="#9999FF">
            <td height="182" colspan="2"><form id="form1" name="form1" method="post" action="?page=login.html">
              <table width="176" border="0">
                <tr bgcolor="#E7D8DC">
                  <td width="170"><div align="center" class="style37">MEMBER LOGIN </div></td>
                </tr>
                <tr bgcolor="#E7D8DC">
                  <td><span class="style40">username</span></td>
                </tr>
                <tr bgcolor="#E7D8DC">
                  <td><label>
                    <input name="mem_user" type="text" id="mem_user" />
                  </label></td>
                </tr>
                <tr bgcolor="#E7D8DC">
                  <td><span class="style40">password</span></td>
                </tr>
                <tr bgcolor="#E7D8DC">
                  <td><input name="mem_pass" type="password" id="mem_pass" /></td>
                </tr>
                <tr bgcolor="#E7D8DC">
                  <td><span class="style41"><span class="style42"><a href="?page=daftar.html">Daftar</a> 
                        <label>                      </label>
                  </span></span>
                    <span class="style42">
                    <label>                    </label>
                    </span>
                    <label>
                    <input type="submit" name="Submit" value="login" />
                    </label></td>
                </tr>
              </table>
              </form>            </td>
          </tr>
        </table>
      </div></td>
    </tr>
    <tr bordercolor="#FFFFFF" bgcolor="#00FFFF">
      <td width="800" height="19" valign="top" bgcolor="#0080C0">&nbsp;</td>
    </tr>
    <tr>
      <td width="800" height="50" bgcolor="#999999"><div align="center"><span class="style108">copyright2010@DEALER PUTRA UTAMA MOTOR SUKOHARJO</span></div></td>
    </tr>
  </table>
</div>
</body>
</html>
