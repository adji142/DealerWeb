<style type="text/css">
<!--
.style3 {font-size: 14px; }
.txt {font-family:Tahoma; font-size:10px; color:#283F48;padding-left:15px;padding-top:5px;padding-right:15px;}
.style4 {color: #0080C0}
-->
</style>
<table width="400">
  <tr> 
                <td valign="top" bgcolor="#00FFFF"> <div align="center"><strong> </strong> 
                    <p class="kontenbiasa style4"><strong>BERITA 
                      DEALER PUTRA UTAMA MOTOR </strong></p>
    </div></td>
  </tr>
  
  <tr>
    <td width="100%" height="35" valign="top" class="border"><p align="left" class="style3">
      <span class="style3">
      <?

include"koneksi.php";
$id=$_GET['id'];
$hasil=mysql_query("SELECT * FROM berita WHERE id=$id");

while($data=mysql_fetch_array($hasil))
{
list($tahun, $bulan, $hari)=split("[-]",$data[tgl]);
$data[tgl]="$hari/$bulan/$tahun";
echo("<b>$data[judul]</b><br><i>$data[tgl]</i><br>$data[penulis]<br><br>$data[isi]<br>");
}
echo("<b><a href=\"javascript:history.go(-1)\">Kembali &raquo;</a></b>");
?></span></p>
      <p class="kontenbiasa" align="center">&nbsp;</p></td>
  </tr>
</table>
