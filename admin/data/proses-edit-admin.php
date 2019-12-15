<?php 
	//melakukan koneksi ke database
	include 'koneksi.php';

	//menangkap data yang dikirim dari daftar.php
	$id_admin = $_POST['id_admin'];
	$nama = $_POST['nama'];
	$nohp = $_POST['handphone'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	

	//proses update ke database
	$query = mysqli_query($db,"update admin set nama='$nama', handphone='$nohp', username='$username', password='$password' where id_admin='$id_admin'");
	if (condition) {
		# code...
	}
	header("location:../data-administrator.php?pesan=edited")

 ?>