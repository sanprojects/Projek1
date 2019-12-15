<?php 
	//melakukan koneksi ke database
	include 'koneksi.php';

	//menangkap data yang dikirim dari daftar.php
	$fname = $_POST['fname'];
	$lname = " ";
	$alamat = $_POST['alamat'];
	$nohp = $_POST['nohp'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	
	//untuk mengatur id_user berdasarkan tahun, bulan dan total user

	$select = mysqli_query($db,"select * from user");
	$count = mysqli_num_rows($select);
	$idx = date(y.m);
	$count++;
	$id_user = $idx.sprintf("%02s",$count);

	
	/*
	$cek = mysqli_num_rows(mysqli_query($db, "select * from user where id_user='$id_user'"));
	if($cek>0){
		$id_user = $idx.sprintf("%02s",$count-1);
	}
	
	echo "$id_user";*/

	//proses input ke database
	$query = mysqli_query($db,"insert into user(id_user, nama_depan, nama_belakang, handphone, alamat, username, password) values('$id_user','$fname','$lname','$nohp','$alamat','$username','$password')");
	if (condition) {
		# code...
	}
	header("location:../data-pelanggan.php?pesan=success")

 ?>