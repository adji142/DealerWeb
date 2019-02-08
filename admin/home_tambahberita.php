<?php
include "koneksi.php";
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css">
<!--
.cap1 {font-family:Tahoma; font-weight:bold; font-size:10px; color:#283F48;text-decoration:underline;padding-left:15px;padding-top:9px;}
.txt {font-family:Tahoma; font-size:10px; color:#283F48;padding-left:15px;padding-top:5px;padding-right:15px;}
.style5 {font-size: 12pt; font-weight: bold; }
.style7 {font-size: 12pt; font-weight: bold; font-family: "Times New Roman", Times, serif; }
.style8 {font-size: 12pt}
-->
</style>
</head>

<body>
<table cellpadding="0" cellspacing="0" border="0" height="479">
  <tr>
    <td valign="top">&nbsp;</td>
  </tr>
  <tr>
    <td width="513" height="415" background="images/bgutama.jpg" style="background-repeat:no-repeat;padding-left:20px;padding-right:20px;" valign="top"><div class="cap1" style="padding-top:5px;">
      <div align="center" class="style8">MASUKKAN BERITA DAN ARTIKEL </div>
    </div>
        <div class="txt">
          <table width="441" border="1" align="center" cellpadding="1" cellspacing="1" bordercolor="#009900" bgcolor="#009900">
            <tr>
              <td bgcolor="#BEE7FB"><form action="?page=tambahberita-act.html&amp;sesi_get=<?=$sesi_get?>&amp;" id="berita" name="berita" method="post" >
                  
                <div align="center">
                  <table width="435" border="0" cellspacing="1" cellpadding="1">
                    <tr>
                      <td width="111" align="right" bgcolor="#00FFFF" class="style5"><span class="style7">Judul Berita</span></td>
                      <td width="333" align="left" bgcolor="#00FFFF" class="txt"><input name="judul" type="text" id="judul" size="40" maxlength="30" /></td>
                    </tr>
                    <tr>
                      <td align="right" bgcolor="#00FFFF" class="style7">Kategori</td>
                      <td align="left" bgcolor="#00FFFF" class="txt"><select name="kategori" size="1" id="kategori">
                        <option>Berita</option>
                        <option selected="selected">Event</option>
                        <option>IT</option>
                      </select></td>
                    </tr>
                    <tr>
                      <td align="right" bgcolor="#00FFFF" class="style5"><span class="style7">Penulis</span></td>
                      <td align="left" bgcolor="#00FFFF" class="txt"><input name="penulis" type="text" id="penulis" size="40" maxlength="30" />                      </td>
                    </tr>
                    <tr>
                      <td align="right" valign="top" bgcolor="#00FFFF" class="style5"><span class="style7">Isi Berita </span></td>
                      <td align="left" bgcolor="#00FFFF" class="txt"><textarea name="isi" cols="35" rows="5" id="isi"></textarea>                      </td>
                    </tr>
                    <tr>
                      <td bgcolor="#00FFFF" class="txt">&nbsp;</td>
                      <td height="35" valign="middle" bgcolor="#00FFFF" class="txt"><input name="upload" type="submit" id="upload" value="Upload Berita" />
                      <input type="reset" name="Reset" value="Batal" /></td>
                    </tr>
                  </table>
                </div>
              </form></td>
            </tr>
          </table>
          <div align="center"></div>
          <div align="center"></div>
          <p>&nbsp;</p>
      </div></td>
  </tr>
</table>
</body>
</html>
