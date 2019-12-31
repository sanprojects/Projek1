<?php 
	//melakukan koneksi ke database
	include 'koneksi.php';

	//menangkap data yang dikirim dari daftar.php
	$id_user = $_POST['id_user'];
	$fname = $_POST['nama_depan'];
	$lname = $_POST['nama_belakang'];
	$alamat = $_POST['alamat'];
	$nohp = $_POST['handphone'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	

	//proses update ke database
	$query = mysqli_query($db,"update user set nama_depan='$fname', nama_belakang='$lname', handphone='$nohp', alamat='$alamat', username='$username', password='$password' where id_user='$id_user'");
	if (condition) {
		# code...
	}
	header("location:../data-pelanggan.php?pesan=edited")

 ?>