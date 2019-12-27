<?php 
	//melakukan koneksi ke database
	include 'koneksi.php';

	//menangkap data yang dikirim dari daftar.php
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$alamat = $_POST['alamat'];
	$nohp = $_POST['nohp'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	
	//untuk mengatur id_user berdasarkan tahun, bulan dan total user

	$select = mysqli_query($db,"select * from user");
	$count = mysqli_num_rows($select);
	$count++;

	$idx = date(y.m);

	$id_user = $idx.sprintf("%02s",$count+1);
	echo "$id_user";

	//proses input ke database
	$query = mysqli_query($db,"insert into user(id_user, nama_depan, nama_belakang, handphone, alamat, username, password) values('$id_user','$fname','$lname','$nohp','$alamat','$username','$password')");
	if (condition) {
		# code...
	}
	header("location:../daftar.php?pesan=success")

 ?>