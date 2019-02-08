<?
require ("koneksi.php");
$hasil=mysql_query("SELECT * FROM berita WHERE id=$id");
$data=mysql_fetch_array($hasil);
//$head=str_replace("<br>","\r\n", $data[head]);
//$isi=str_replace("<br>","\r\n", $data[isi]);
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
.style1 {
	font-family: "Times New Roman", Times, serif;
	font-size: 12pt;
	color: #000000;
}
.style4 {font-size: 12px; font-weight: bold; }
-->
</style>
</head>

<body>
<table cellpadding="0" cellspacing="0" border="0" height="479">
  <tr>
    <td valign="top">&nbsp;</td>
  </tr>
  <tr>
    <td width="513" height="415" background="images/bgutama.jpg" style="background-repeat:no-repeat;padding-left:20px;padding-right:20px;" valign="top"><div class="cap1 style1" style="padding-top:5px;">
      <div align="center">Ubah Berita </div>
    </div>
        <div class="txt">
          <table width="435" border="1" align="center" cellpadding="1" cellspacing="1" bordercolor="#009900" bgcolor="#FF9900">
            <tr>
              <td width="590" bgcolor="#0000FF"><form action="?page=editberita-act.html&amp;sesi_get=<?=$sesi_get?>&amp;" method="post" enctype="multipart/form-data" name="berita" id="berita" >
                  <table width="435" border="0" cellspacing="2" cellpadding="2">
                    <tr>
                      <td width="103" align="right" bordercolor="#0000FF" bgcolor="#00FFFF" class="style4"><span class="style4">Judul Berita</span></td>
                      <td width="321" align="left" bordercolor="#0000FF" bgcolor="#00FFFF" class="txt"><input name="judul" type="text" id="judul" size="40" maxlength="30" value="<?php echo "$data[judul]";?>"/>
                      <input name="id" type="hidden" id="id" value="<?php echo "$data[id]";?>"/></td>
                    </tr>
                    <tr>
                      <td align="right" bordercolor="#0000FF" bgcolor="#00FFFF" class="style4"><span class="style4">Kategori </span></td>
                      <td align="left" bordercolor="#0000FF" bgcolor="#00FFFF" class="txt"><select name="kategori" size="1" id="kategori">
                          <option>Berita</option>
                          <option>Event</option>
                          <option>Resensi Buku</option>
                          <option>Pengumuman</option>
                        </select>                      </td>
                    </tr>
                    <tr>
                      <td align="right" bordercolor="#0000FF" bgcolor="#00FFFF" class="style4"><span class="style4">Penulis</span></td>
                      <td align="left" bordercolor="#0000FF" bgcolor="#00FFFF" class="txt"><input name="penulis" type="text" id="penulis" size="40" maxlength="30" value="<?php echo "$data[penulis]";?>"/>                      </td>
                    </tr>
                    
                    <tr>
                      <td align="right" valign="top" bordercolor="#0000FF" bgcolor="#00FFFF" class="style4"><span class="style4">Isi Berita </span></td>
                      <td align="left" bordercolor="#0000FF" bgcolor="#00FFFF" class="txt"><textarea name="isi" cols="35" rows="5" id="isi"><?php echo "$data[isi]";?></textarea>                      </td>
                    </tr>
                    <tr>
                      <td bordercolor="#0000FF" bgcolor="#00FFFF" class="txt">&nbsp;</td>
                      <td height="35" valign="middle" bordercolor="#0000FF" bgcolor="#00FFFF" class="txt"><input name="upload" type="submit" id="upload" value="Update Berita" />
                          <input type="reset" name="Reset" value="Batal" /></td>
                    </tr>
                  </table>
              </form></td>
            </tr>
          </table>
          <p>&nbsp;</p>
      </div></td>
  </tr>
</table>
</body>
</html>
