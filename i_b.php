<?php
	require_once "class.php";
	$conn = new db_class();
	if(ISSET($_POST['save'])){
		$nama_barang = $_POST['nama_barang'];
		$stok = $_POST['stok'];
		$harga = $_POST['harga'];
		$conn->save($nama_barang, $stok, $harga);
		echo '<script>alert("Successfully saved!")</script>';
		//echo '<script>window.location= "view_barang.php"</script>';
	}	
?>
<html>
<head>
<meta charset="utf-8">
<title>Edit BARANG</title>
<link rel="stylesheet" href="inputan_user.css">
</head>

<body>
<form method='post' action='i_b.php'>
<div id="utama" style="margin-top:10%">
<div id="judul">
INPUT DATA BARANG
</div>
<div id="inputan">
<div action="" method="post">
<div>
<input type='text' name='nama_barang' placeholder="NAMA BARANG" class="lg">
</div>
<div style="margin-top:10px;">
<input type='text' name='stok' placeholder="STOK" class="lg">
</div>
<div style="margin-top:10px;">
<input type='text' name='harga' placeholder="HARGA" class="lg">
</div>
         <div style="margin-top:10px;">
         <input type='submit' value='SAVE' name='save'>
</div>
</form>
</body>
</html>