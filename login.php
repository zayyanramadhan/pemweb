<?
include "koneksi.php";
?>
<?php
session_start();
if ($_POST["login"]) 
{
$id_user=$_POST['id_user'];
$password=$_POST['password'];
if (empty($id_user) && empty($password))
	{
		header('location:login.php?error=1');	
		break;
	}
else if (empty($id_user))
	{
		header('location:login.php?error=2');	
		break;
	}
else if (empty($password))
	{
		header('location:login.php?error=3');
		break;
	}
	$sql="SELECT * FROM user WHERE id_user='$id_user'
	and password='$password'"; 
	
	$qry = mysql_query($sql,$koneksi) or die ("SQL Error:
	".mysql_error());
	$data = mysql_fetch_array($qry);
	if (mysql_num_rows($qry) == 1)
		{
	if ("SELECT * FROM user WHERE kategori = 'admin' ") 
	
	{
		$_SESSION["login"]=$data["kategori"];
		$_SESSION["nama"]=$data["nama"];
		header('location:index.php'); 
	}
	else if ("SELECT * FROM user WHERE kategori = 'pegawai' ")
	{
		$_SESSION["login"]=$data["kategori"];
		$_SESSION["nama"]=$data["nama"];
		header('location:index.php');
	}
	}
	else
		{
			header('location:login.php?error=4');
		}
	
}

?>
<html>
<Head>
<meta charset="UTF-8">
<link rel="stylesheet" href="Login.css">
</head>
<body>
<div class="login-wrap">
  <h2>Login</h2>
<?php
	if (!empty($_GET['error']))
	{
		if ($_GET['error'] == 1)
		{	echo 'Username dan Password Belum Diisi';	}
		else if ($_GET['error'] == 2)
		{	echo 'Username Belum Diisi';	}
		else if ($_GET['error'] == 3)
		{	echo '<h3>Pasword Belum Diisi</h3>';	}
		else if ($_GET['error'] == 4)
		{	echo 'Username dan Password Tidak Terdaftar';	}
	}
?>
<form name="form1" method="post" action="login.php">
<div class="form">
     <input type="text" placeholder="Username" name="id_user" id="id_user"/>
    <input type="password" placeholder="Password" name="password" id="password" />
    <input name="login" id="login" type="submit" placeholder="Login" />
    </div>
	</form>
	</div>
	</body>
	</html>