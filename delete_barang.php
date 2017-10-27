<?
include "koneksi.php";
?>
<?php
$hapus= $_GET['id_barang']; 
$sql="DELETE FROM barang WHERE id_barang='$hapus'";
mysql_query($sql,$koneksi) or die ("sql error".mysql_error());
?>