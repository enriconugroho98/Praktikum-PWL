<?php
session_start();
include("koneksi.php");
$sql = "SELECT username FROM user ";
$sql.= "WHERE username='".$_POST['txtUsername']."' ";
$sql.= "AND password='".$_POST['txtPassword']."' ";
$hasil = mysql_query($sql) or exit("Error query : <b>".$sql."</b>.");
if(mysql_num_rows($hasil)>0){
$data = mysql_fetch_array($hasil);
$_SESSION['username'] = $data['username'];
header("Location:Latihan_10.php");
exit();
} else { ?>
<h2>Sorry..</h2>
<p>
Username atau password salah.
Klik <a href="Latihan_11.php">disini</a> untuk kembali login.
</p>
<?php
}
?>