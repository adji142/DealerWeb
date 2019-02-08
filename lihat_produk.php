<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>
</
include"koneksi.php"
if($short=="id") {
$cari"select * from mebel order by id desc";
} else if ($short=="kdmebel") {
$cari"select * from mebel order by kdmebel asc";
} else if ($short=="name") {
$cari"select * from mebel order by name asc";
} else if ($short=="kategori") {
$cari"select * from mebel order by kategori asc";
} else if ($short=="harga") {
$cari"select * from mebel order by harga asc";
} else {
$cari"select * from mebel order by id desc";
}
$cari"select * from mebel order by id desc";
}
$cari_query=mysql_query($cari);
$cari_mebel=mysql_num_row($cari);
$jml=0;
while ($show_mebel=mysql_fatch_row ($cari_query) {
$lihat[$jml][0] = $show_mebel[0];
$lihat[$jml][1] = $show_mebel[1];
$lihat[$jml][2] = $show_mebel[2];
$lihat[$jml][3] = $show_mebel[3];
$lihat[$jml][4] = $show_mebel[4];
$lihat[$jml][5] = $show_mebel[5];
$lihat[$jml][6] = $show_mebel[6];
$lihat[$jml][7] = $show_mebel[7];
$jml++;
}
?>
		<?
	$hal= 1;
	for ($s=0;$s<$jml_mebel;$s+=5) {
	if ($jml_mebel>5) {
	echo"<a
href=\"?page=lihat_mebel,html$amp;sesi_get=$sesi_get$amp;p=$amp;jml_mebel=$jml_mebel\">$hal </a>";
	$hal++;
	}else {
	echo "1";
	}
	}
	?>
		<?
	$1=$p+5;
	if ($p=="" ||!eregi("^[0-9]"'$p)||$p>$jml_mebel) {
	$p=0;
	}
	if($jml_mebel<=$1) {
		<li><strong>Kategori</strong>:",lihat[$1][3],"</li>
		<li><strong>Harga</strong>:",lihat[$1][5],"</li>
		<a href=?page=edit_mebel.html$amp;sesi_get=$sesi_get$amp;id=",$lihat[Si][0],">EDIT</a>
		<a href=?page=del_mebel.html$amp;sesi_get=$sesi_get$amp;id=",$lihat[Si][0],">HABUS</a>
		<a href=?page=lihat_mebel_detail.html$amp;sesi_get=$sesi_get$amp;id=",$lihat[Si][0],">DETAIL</a>
					</tr>";
		}
		?>
