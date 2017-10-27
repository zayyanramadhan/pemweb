<?
include "koneksi.php";
?>
<?php
if($_POST["id_user"])
{
$id_user=$_POST["id_user"];
$password=$_POST["password"];
$nama=$_POST["nama"];
$kategori=$_POST["kategori"];
$insert="INSERT INTO user(id_user,password,nama,kategori)
VALUES('$id_user','$password','$nama','$kategori')";
$sql=mysql_query($insert,$koneksi);


?>
<script>
location.href='view_data_user.php';
</script>
<?

}
?>

<html>
<head>
<meta charset="utf-8">
<title>Inputan Data User</title>
<link rel="stylesheet" href="inputan_user.css">
</head>

<body>
<form method='post' action='input_data_user.php'>
<div id="utama" style="margin-top:10%">
<div id="judul">
Halaman Inputan User
</div>
<div id="inputan">
<div action="" method="post">
<div>
<input type="text" name="id_user" placeholder="ID USER" class="lg"/>
</div>
<div style="margin-top:10px;">
 <input type="password" name="password" placeholder="PASSWORD" class="lg"/>
 <div style="margin-top:10px;">
 <input type="text" name="nama" placeholder="NAMA" class="lg"/>
 <div style="margin-top:10px;">
<select name="kategori">
		<option selected>PILIH</option>
		<option value="admin" select>ADMIN</option>
		<option value="pegawai" select>PEGAWAI kategori 1</option>
		<option value="pegawai2" select>PEGAWAI kategori 2</option>
		<option value="pegawai3" select>PEGAWAI kategori 3</option>
		<option value="pegawai4" select>PEGAWAI kategori 4</option>
		</select>
        </div>
         <div style="margin-top:10px;">
         <input type='submit' value='SAVE' name='simpan'>
</div>
</div>
</div>
</div>
</div>
</body>
</html>


