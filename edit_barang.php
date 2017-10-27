<?
include "koneksi.php";
?>
<?php
if ($_POST["simpan"])
{
$nama_barang=$_POST["nama_barang"];
$stok=$_POST["stok"];
$harga=$_POST["harga"];

$update="update barang set 
nama_barang='$nama_barang',
stok='$stok',
harga='$harga'
where id_barang=".$_GET["id_barang"];
mysql_query($update,$koneksi) or die ("sql error".mysql_error());

?>
<script>
location.href='view_barang.php';
</script>
<?

}


$view="select * from barang where id_barang=".$_GET["id_barang"];
$sql=mysql_query($view,$koneksi);
$data = mysql_fetch_array($sql);

?>


<html>
<head>
<meta charset="utf-8">
<title>Edit BARANG</title>
<link rel="stylesheet" href="inputan_user.css">
</head>

<body>
<form method='post' action="edit_barang.php?id_barang=<?php echo $data['id_barang'];?>"> 
<div id="utama" style="margin-top:10%">
<div id="judul">
EDIT DATA BARANG
</div>
<div id="inputan">
<div action="" method="post">
<div>
NAMA BARANG
<input type='nama_barang' name='nama_barang' value="<?php echo $data['nama_barang'];?>"class="lg">
</div>
<div style="margin-top:10px;">
STOK
<input type='text' name='stok' value="<?php echo $data['stok'];?>"class="lg">
</div>
<div style="margin-top:10px;">
HARGA
<input type='text' name='harga' value="<?php echo $data['harga'];?>"class="lg">
</div>
         <div style="margin-top:10px;">
         <input type='submit' value='SAVE' name='simpan'>
</div>
</form>
</body>
</html>