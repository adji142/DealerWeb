<?
	include"koneksi.php";
	$sql = mysql_query("SELECT * FROM bukutamu ORDER BY id DESC");
	$jumlah = mysql_num_rows($sql);
	echo "Jumlah Pengunjung : $jumlah";
	while($hasil = mysql_fetch_array($sql)) {
		echo "<br>";
		echo "<br>";
		 $id=($hasil['id']);
		 $nama = stripslashes($hasil['nama']);
		 $date = stripslashes($hasil['tgl']);
		 $alamat = stripslashes($hasil['alamat']);
		 $email = stripslashes($hasil['e-mail']);
		 $komentar = stripslashes($hasil['komentar']);


	?>
	  <div align="center"><font face="Calibri"><strong><strong><font color="#FF0000"><? echo $nama;?></font></strong></
	    strong> - <strong>date</strong>:<? echo $date ?> - <strong>alamat</
	    strong>:<? echo $alamat ?>  <strong>email</strong>:<a href="mailto:<?
echo $email ?>"><? echo $email?> </a> 
      <br
 <? echo $time ?><br>
	    <? echo nl2br($komentar); ?> <br>
      <? }
		?>
	    </font>
	    </div>
      </font></div>
