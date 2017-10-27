<?
include "koneksi.php";
?>
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

</div>
<div id="aplikasi">
<div id="xaplikasi">
<h1>TABEL USER</h1>
<div class="tbl-header">
    <table cellpadding="0" cellspacing="0" border="0">
      <thead>
    <tr>	
			<td>no</td>
			<td>id_user</td>
			<td>password</td>
			<td>nama</td>
			<td>kategori</td>
			<td>ACTION</td>
    </tr>
	</thead>
    </table>
  </div>
  <div class="tbl-content">
    <table cellpadding="0" cellspacing="0" border="0">
      <tbody>
<?php
$view="select * from user order by no";
$sql=mysql_query($view,$koneksi);
$total=mysql_num_rows($sql); 
while($data = mysql_fetch_array($sql))
{
$nomer++;
?>	
    <tr>
	<td><?php echo $nomer;?></td>
	<td><?php echo $data['id_user'];?></td>
	<td><?php echo $data['password'];?></td>
	<td><?php echo $data['nama'];?></td>
	<td><?php echo $data['kategori'];?></td>
	<td><a href="delete_data_user.php?no=<?php echo $data['no'];?>">Delete </a>| <a href="edit_data_user.php?no=<?php echo $data['no'];?>">Edit</a></td> 
	<tr>
	</tr>
	
<?php	
}	
?>
</tbody>
    </table>
  </div>
  <div class="tbl-header">
    <table cellpadding="0" cellspacing="0" border="0">
      <thead>
    <tr>	
			<td><a href="input_data_user.php">Tambah</a></td>
    </tr>
	</thead>
    </table>
  </div>
</div>
</div>

</body>
</html>