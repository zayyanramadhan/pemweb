<?php
session_start();
if ($_SESSION["login"]=="") 
{
header('location:login.php');
}
?> 

<html>
<head>
<meta charset="utf-8">
<title>Klinik kecantikan</title>
<link rel="stylesheet" href="Menu.css">
</head>
<body>
<?
$kat=$_SESSION ["login"];
$nam=$_SESSION ["nama"];
?>
<div class="petunjuk">
^<br>|<br>KLIK FOR MENU
</div>
<input type="checkbox" id="check">
<label id="icone" for="check"><div id="formus"><br>WELCOME<br><br><? echo $kat;?><br><br><?echo $nam;?></div>
								</div></label>

<div class="icon">

<nav>
<?
			if ($_SESSION ["login"]=="admin")
						{
						?>
						<a href="index.php"><div class="link">Home</div></a>
						<a href="view_data_user.php"><div class="link">User</div></a>
						<a href="view_barang.php"><div class="link">Data Barang</div></a>
<?

			}
			?>
			<?
			if ($_SESSION ["login"]=="pegawai")
						{
						?>
						
						<?

			}
			?>
 <a href="logout.php"><div class="link">LogOut</div></a>
</nav>

</div>
</body>
</html>

