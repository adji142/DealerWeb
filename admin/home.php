<?
session_start ();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>putra utama motor</title>
<style type="text/css">
<!--
.style7 {font-family: Georgia, "Times New Roman", Times, serif; font-size: 12pt; font-weight: bold; }
.style9 {color: #FFFFFF; }
.style13 {
	color: #0000FF;
	font-weight: bold;
	font-family: Rockwell;
}
.style22 {
	color: #0000FF;
	font-family: Rockwell;
}
.style24 {color: #0000FF; font-weight: bold; font-size: 14px; font-family: Rockwell; }
.style27 {
	font-size: 12pt;
	font-family: Rockwell;
	font-weight: bold;
}
.style28 {color: #0000FF}
.style108 {
	color: #FF0000;
	font-size: 12pt;
	font-weight: bold;
}
a:link {
	text-decoration: none;
}
a:visited {
	text-decoration: none;
}
a:hover {
	text-decoration: underline;
}
a:active {
	text-decoration: none;
}
-->
</style>
</head>

<body>
<div align="center">
  <table width="800" border="1" cellspacing="0" cellpadding="0">
    <tr>
      <td width="800" height="150"><div align="center"><img src="../header.jpg" width="800" height="150" /></div></td>
    </tr>
    <tr>
      <td><div align="center">
        <table width="800" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="149" bgcolor="#CCCCCC"><div align="center" class="style27"><a href="?page=depan.html" class="style28">HOME</a></div></td>
            <td width="262" bgcolor="#CCCCCC"><div align="center" class="style9"></div></td>
            <td width="255" bgcolor="#CCCCCC"><div align="center" class="style9"><span class="style7"><a href="../?page=produk.html"></a></span></div></td>
            <td width="43" bgcolor="#CCCCCC"><div align="center" class="style9"><span class="style7"><a href="../?page=kontak.html"></a></span></div></td>
            <td width="43" bgcolor="#CCCCCC"><div align="center" class="style9"><span class="style7"><a href="../?page=bukutamu.html"></a> </span></div></td>
            <td width="48" bgcolor="#CCCCCC"><div align="center" class="style9"><span class="style7"><a href="../?page=lapkredit.html"></a> </span></div></td>
          </tr>
        </table>
      </div></td>
    </tr>
    <tr bgcolor="#00FFFF">
      <td width="800" height="400" valign="top"><table width="100%" height="400" border="0" cellpadding="0" cellspacing="0" bordercolor="#00FFFF">
        <tr bgcolor="#000099">
          <td width="184" valign="top" bgcolor="#0080C0"><table width="100%" border="1" align="center" cellpadding="0" cellspacing="0" bordercolor="#FFFF00" frame="void">
            <tr>
              <td colspan="2" bgcolor="#999999"><span class="style13">MENU UTAMA</span></td>
              </tr>
            <tr>
              <td width="11%" bgcolor="#999999">&nbsp;</td>
              <td width="89%" bgcolor="#999999"><span class="style24"><a href="?page=home.html">HOME</a></span></td>
            </tr>
            <tr>
              <td bgcolor="#999999">&nbsp;</td>
              <td bgcolor="#999999"><span class="style24"><a href="?page=lihat-bukutamu.html">LIHAT BUKU TAMU </a></span></td>
            </tr>
            <tr>
              <td bgcolor="#999999">&nbsp;</td>
              <td bgcolor="#999999"><strong><span class="style22"><a href="?page=tambahproduk.html">TAMBAH PRODUK </a></span></strong></td>
            </tr>
            <tr>
              <td bgcolor="#999999">&nbsp;</td>
              <td bgcolor="#999999"><span class="style24"><a href="?page=lihat_produk.html">LIHAT PRODUK </a></span></td>
            </tr>
            <tr>
              <td bgcolor="#999999">&nbsp;</td>
              <td bgcolor="#999999"><a href="?page=tambahberita.html"><span class="style24">TAMBAH BERITA </span></a></td>
            </tr>
            <tr>
              <td bgcolor="#999999">&nbsp;</td>
              <td bgcolor="#999999"><a href="?page=lihatberita.html"><span class="style24">LIHAT BERITA </span></a></td>
            </tr>
            <tr>
              <td bgcolor="#999999">&nbsp;</td>
              <td bgcolor="#999999"><a href="?page=lihat-member.html">LIHAT MEMBER</a> </td>
            </tr>
            <tr>
              <td bgcolor="#999999">&nbsp;</td>
              <td bgcolor="#999999"><span class="style24"><a href="?page=datapesanan.html">DATA PESANAN </a></span></td>
            </tr>
            <tr>
              <td bgcolor="#999999">&nbsp;</td>
              <td bgcolor="#999999"><span class="style24"><a href="?page=gantipass.html">GANTI PASSWORD </a></span></td>
            </tr>
            <tr>
              <td bgcolor="#999999">&nbsp;</td>
              <td bgcolor="#999999"><span class="style24"><a href="keluar.php">LOGUOT</a></span></td>
            </tr>
          </table></td>
          <td width="616" valign="top" bgcolor="#0080C0"><div align="left">
            <?
				$page = $_GET['page'];
				$page = str_replace(".html","",$page);
				$file = "home_$page.php";
				if (!file_exists($file)) {
				include ("home_depan.php");
				} else if ($page=="" || $page=="home"){
				include ("home_depan.php");
				} else {
				include ("home_$page.php");
				}
				?>
          </div></td>
        </tr>
      </table></td>
    </tr>
    <tr bgcolor="#999999">
      <td width="800" height="50"><div align="center" class="style108">copyright2010@DEALER PUTRA UTAMA MOTOR SUKOHARJO</div></td>
    </tr>
  </table>
</div>
</body>
</html>
