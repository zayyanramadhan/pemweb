<?php
include "koneksi.php";
class ib{
public $nama_barang=nama_barang;
public $stok=stok;
public $harga=harga;
public $conn;
public $error;
public $prep;
private function connect(){
			$this->conn = new mysqli('localhost','root','','kc');
			if(!$this->conn){
				$this->error = "Fatal Error: Can't connect to database".$this->conn->connect_error;
				return false;
			}
		}

public function input($a,$b,$c){
$insert= $this->connect("INSERT INTO barang(nama_barang,stok,harga)
VALUES($a,$b,$c)");
mysql_query($insert);
}
}
if($_POST["simpan"])
{
$oop = new ib();
$a=$_POST["nama_barang"];
$b=$_POST["stok"];
$c=$_POST["harga"];
$oop->input($a,$b,$c);

?>
<script>

</script>
<?

}
?>

<html>
<head>
<meta charset="utf-8">
<title>Edit BARANG</title>
<link rel="stylesheet" href="inputan_user.css">
</head>

<body>
<form method='post' action='input_barang.php' 
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
         <input type='submit' value='SAVE' name='simpan'>
</div>
</form>
</body>
</html>