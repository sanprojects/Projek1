<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
</head>
<body>
	<?php
	session_start();
	if($_SESSION['status']!="login"){
		header("location:login.php?pesan=belum-login");
	} 
 ?>
<p>Selamat Datang!</p>
<p><a href="data/proses-logout.php">LogOut</a></p>
</body>
</html>