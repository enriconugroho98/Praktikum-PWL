<html>
<head>
<title>Pengolahan Data - Form Metode POST</title>
</head>
<body>
<h3>Informasi Biodata</h3>
<table width="600px">
<tr>
<td width="30%">Nama</td>
<td width="2%">:</td>
<td><?php echo $_POST ['txtNama']; ?></td>
</tr>
<tr>
<td>Alamat</td>
<td>:</td>
<td><?php echo $_POST ['txtAlamat']; ?></td>
</tr>
<tr>
<td>Jenis Kelamin</td>
<td>:</td>
<td><?php echo $_POST ['rdJenisKelamin']; ?></td>
</tr>
<tr>
<td>Agama</td>
<td>:</td>
<td>
<?php
if($_POST ['cbAgama']=="is"){
echo "Islam";
} else if($_POST ['cbAgama']=="kk"){
echo "Kristen Katolik";
} else if($_POST ['cbAgama']=="kp"){
echo "Kristen Protestan";
} else if($_POST ['cbAgama']=="hd"){
echo "Hindu";
} else if($_POST ['cbAgama']=="bd"){
echo "Budha";
} else {
echo "Tidak ditentukan";
}
?>
</td>
</tr>
</table>
</body>
</html>