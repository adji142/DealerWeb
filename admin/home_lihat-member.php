
<?
include"koneksi.php";
$cari="select * from member order by tgl_daftar desc"; //mengurutkan berdasarkan tanggal
$cari_query=mysql_query($cari); //ambil data member dari database
$jml_member=mysql_num_rows($cari_query); //melihat jumlah record
$jml=0; 
while($show_member=mysql_fetch_row($cari_query)){ 
$lihat[$jml][0] = $show_member[0]; // id
$lihat[$jml][1] = $show_member[1]; // user id
$lihat[$jml][4] = $show_member[4]; // nama lengkap
$lihat[$jml][5] = $show_member[5]; // alamat 1
$lihat[$jml][6] = $show_member[6]; // alamat 2
$lihat[$jml][7] = $show_member[7]; // email
$lihat[$jml][8] = $show_member[8]; // tgl daftar
$lihat[$jml][9] = $show_member[9]; // tgl login
$lihat[$jml][10] = $show_member[10]; // telp
$lihat[$jml][11] = $show_member[11]; // hp
$jml++;
}
?>

<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="100%" height="40" class="title"><strong>LIHAT MEMBER</strong></td>
  </tr>
  <tr>
    <td><table width="100%" border="0" cellpadding="3" cellspacing="2">
      <tr>
        <td class="katalog" scope="col">TERDAPAT <strong><?echo"$jml_member";?></strong> MEMBER DEALER PUTRA UTAMA MOTOR SUKOHARJO </td>
      </tr>
      <tr>
        <td class="katalog" scope="col">Diurutkan berdasarkan tanggal daftar. </td>
      </tr>
      <tr>
        <td class="katalog">Halaman :
          <?
	$hal= 1;
	for($s=0;$s<$jml_member;$s+=10){
	if($jml_member>10){
	echo"<a href=\"admin.php?page=member.html&amp;sesi_get=$sesi_get&amp;p=$s&amp;jml_member=$jml_member\"> $hal </a> ";
	$hal++;
	}else {
	echo "1";
	}
	}
	?>
              </span></td>
      </tr>
      <?
	$l=$p+5;
	if ($p=="" || !eregi("^[0-9]",$p) || $p>$jml_member) {
	$p = 0;
	}
	if($jml_member<=$l){
	$n=$jml_member;
	}else{
	$n=$l;
	}
	for ($i=$p;$i<$n;$i++){ 
	echo "<tr>
        <td class=\"katalog\"><ul type=\"square\">
		<li><strong>User Name</strong> : ",$lihat[$i][1],"</li>
        <li><strong>Nama Lengkap</strong> : ",$lihat[$i][4],"</li>
		<li><strong>Email</strong> : ",$lihat[$i][7],"</li>
        <li><strong>Alamat 1</strong> : ",$lihat[$i][5],"</li>
		<li><strong>Alamat 2</strong> : ",$lihat[$i][6],"</li>
        <li><strong>Tanggal Daftar</strong> : ",$lihat[$i][8],"</li>
		<li><strong>Telp.</strong> : ",$lihat[$i][10]," - ",$lihat[$i][11],"</li></ul>
        <a href=\"admin.php?page=del_member.html&amp;sesi_get=$sesi_get&amp;kd_cus=",$lihat[$i][0],"\">HAPUS</a></td>
        </tr>";
      }
	  ?>
    </table></td>
  </tr>
  
</table>

