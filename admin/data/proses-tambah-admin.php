<?php 
	//melakukan koneksi ke database
	include 'koneksi.php';

	//menangkap data yang dikirim dari daftar.php
	$nama = $_POST['nama'];
	$nohp = $_POST['nohp'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	
	//untuk mengatur id_user berdasarkan tahun, bulan dan total user

	$select = mysqli_query($db,"select * from admin");
	$count = mysqli_num_rows($select);
	$idx = "ASN";
	$count++;
	$id_admin = $idx.sprintf("%03s",$count);


	/*$cek = mysqli_num_rows(mysqli_query($db, "select * from user where id_admin='$id_admin'"));
	if($cek>0){
		$id_user = $idx.sprintf("%02s",$count-1);
	}else {
		$id_user = $idx.sprintf("%02s",$count+2);
	}
	
	echo "$id_admin";*/

	//proses input ke database
	$query = mysqli_query($db,"insert into admin(id_admin,username, nama, handphone,password) values('$id_admin','$username','$nama','$nohp','$password')");
	if (condition) {
		# code...
	}
	header("location:../data-administrator.php?pesan=success")

 ?>