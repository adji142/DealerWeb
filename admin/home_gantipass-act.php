<?php
include "koneksi.php";
session_start();
$perintah = "SELECT * FROM 'admin' WHERE 'username' = '".$_SESSION['username']."'";
$hasil= mysql_query($perintah);
if ($row = mysql_fetch_array($hasil) or die(""))
{
$username = $row[username];
}
?>
<?php
$pass1=$_POST['passbaru1'];
$pass2=$_POST['passbaru2'];
$dulu=$_POST['passdulu'];

$query = "select password from admin where username='".$_SESSION['username']."'";
$result = mysql_query($query)
or die ('Query Failed: '.mysql_error());
$num_result = mysql_num_rows($result);
$row = mysql_fetch_assoc($result);
if ($dulu == $row['password'] && $pass1 == $pass2 {
$query2 = "update admin set password='". $pass2. "' where username='". $_SESSION['username']."admin";
$result2 = mysql_query($query2)
or die('Query Failed: 'mysql_error());
}
?>
<html>
<body>
Password Berhasil diganti klik <a href="view_admin.php">menu admin</a>
untuk kembali ke menu admin
</body>
</html>


