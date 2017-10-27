<?
include "koneksi.php";
?>
<?php
if ($_POST["simpan"])
{
$id_user=$_POST["id_user"];
$password=$_POST["password"];
$nama=$_POST["nama"];
$kategori=$_POST["kategori"];

$update="update user set 
id_user='$id_user',
password='$password',
nama='$nama',
kategori='$kategori'
where no=".$_GET["no"];
mysql_query($update,$koneksi) or die ("sql error".mysql_error());

?>
<script>
location.href='view_data_user.php';
</script>
<?

}


$view="select * from user where no=".$_GET["no"];
$sql=mysql_query($view,$koneksi);
$data = mysql_fetch_array($sql);

?>


<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Edit Data User</title>
<link rel="stylesheet" href="inputan_user.css">
</head>

<body>
<form method='post' action="edit_data_user.php?no=<?php echo $data['no'];?>"> 
<div id="utama" style="margin-top:10%">
<div id="judul">
EDIT DATA USER
</div>
<div id="inputan">
<div action="" method="post">
<div>
ID USER
<input type='text' name='id_user' value="<?php echo $data['id_user'];?>"class="lg">
</div>
<div style="margin-top:10px;">
PASSWORD
<input type='password' name='password'>
</div>
<div style="margin-top:10px;">
NAMA USER
<input type='text' name='nama' value="<?php echo $data['nama'];?>"class="lg">
</div>
 <div style="margin-top:10px;">
<select name="kategori">
		<option selected>PILIH</option>
		<option value="ADMIN" select>ADMIN</option>
		<option value="PEGAWAI" select>PEGAWAI</option>
		<option value="PELANGGAN" select>PELANGGAN</option>
		</select></div>
        </div>
        
         <div style="margin-top:10px;">
         <input type='submit' value='SAVE' name='simpan'>
</div>
</form>
</body>
</html>
