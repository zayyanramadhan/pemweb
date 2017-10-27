<?
include "koneksi.php";
?>
<?php
$hapus= $_GET['no']; 
$sql="DELETE FROM user WHERE pasien='$no'";
mysql_query($sql,$koneksi) or die ("sql error".mysql_error());
?>