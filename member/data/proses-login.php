<?php

session_start();

include 'koneksi.php';
 
$username = $_POST['username'];
$password = $_POST['password'];
 
$query = mysqli_query($db,"select * from user where username='$username' and password='$password'");
$cek = mysqli_num_rows($query);
if($cek > 0 ){
	$_SESSION['username'] = $username;
	$_SESSION['status'] = "login";
	header("location:../dashboard.php");
}else{
	header("location:../login.php?pesan=failed");
}
?>