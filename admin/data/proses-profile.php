<?php 
	//melakukan koneksi ke database
	include 'koneksi.php';

      if(isset($_POST['simpan1'])){
          //menangkap data yang dikirim dari daftar.php
            $name = $_POST['name'];
            $alamat = $_POST['alamat'];
            $nohp = $_POST['nohp'];
            $kodepos = $_POST['kodepos'];

           //proses input ke database
           $query = mysqli_query($db,"update profile set nama_studio='$name',handphone='$nohp', alamat='$alamat',kodepos='$kodepos' where id_profile='1'");
           header("location:../profile.php?pesan=edited");
      }

	////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

	if(isset($_POST['simpan2'])){
			$harga1 = $_POST['harga1'];
			$qharga1 = mysqli_query($db,"update harga set harga='$harga1' where id_harga='1'");

			$harga2 = $_POST['harga2'];
			$qharga2 = mysqli_query($db,"update harga set harga='$harga2' where id_harga='2'");
			header("location:../profile.php?pesan=edited");
	}
	
	////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

	if(isset($_POST['simpan3'])){
			$about = $_POST['about'];
			$qabout = mysqli_query($db,"update about set isi='$about' where id_about='1'");
			header("location:../profile.php?pesan=edited");
	}
	
	////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

	if(isset($_POST['simpan4'])){
			$ketentuan = $_POST['ketentuan'];
			$qketentuan = mysqli_query($db,"update about set isi='$ketentuan' where id_about='2'");
			header("location:../profile.php?pesan=edited");
	}
			
 ?>