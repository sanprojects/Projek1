<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data id yang di kirim dari url
$id = $_GET['id_admin'];


 
 
// menghapus data dari database
$hasil = mysqli_query($db,"DELETE FROM admin WHERE id_admin='$id'") or die(mysqli_error());
 
// mengalihkan halaman kembali ke index.php
if(!$hasil){
	echo "gagal";
} else{
	header("location:../data-administrator.php");
}

 
?>