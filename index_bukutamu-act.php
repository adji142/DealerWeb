<style type="text/css">
<!--
.style1 {
	color: #000000;
	font-family: calibri;
	font-size: 12pt;
	font-weight: bold;
}
.style2 {font-family: calibri}
-->
</style>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
   <tr align="left" valign="top">
     <td widht="10" height="10"><img src=img/spacer_white.gif" widht="1" height="1"></td>
     <td widht="974"><div align="left">
       <span class="style2">
<?
include"koneksi.php";


$query ="INSERT INTO bukutamu
values ('',now(),'$nama','$alamat','$email','$komentar')";
$sql = mysql_query ($query);
     if($sql) {
	echo "<font size :12 <h1>Data berhasil diinput</font size>";
     } else {
	   echo "Data tidak berhasil diinput";
     }

?>
    </span>
	<p class="style1">Kembali Ke <a href="?page=home.html">Menu Utama</a> <br>
	  Kembali Ke<a href="?page=bukutamu.html"> Buku Tamu</a></p>
	  <span class="style1">Melihat <a href="?page=lihat_bukutamu.html"> Buku Tamu</a>
	  </p>
      <div>
	  </span>
     <td>
  </tr>
    <tr align="left" valign="top">
      <td><div align="center"></div></td>
    </tr>
      <tr align="left" vlaign="top">
      <td><div align="center"></div></td>
    </tr>
 </table>
