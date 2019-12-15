<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data id yang di kirim dari url
$id = $_GET['id_user'];


 
 
// menghapus data dari database
$hasil = mysqli_query($db,"DELETE FROM user WHERE id_user='$id'") or die(mysqli_error());
 
// mengalihkan halaman kembali ke index.php
if(!$hasil){
	echo "gagal";
} else{
	header("location:../data-pelanggan.php");
}

 
?>