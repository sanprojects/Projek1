<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href=".css">
  <link rel="stylesheet" href="https://static.pingendo.com/bootstrap/bootstrap-4.3.1.css">
</head>

<body>

  <!-- Navigasi Bar Mulai-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container"> <a class="navbar-brand" href="index.php">
        <b> SUPERNOVA</b>
      </a>
        <ul class="navbar-nav mr-auto">
          <li class="nav-item"> <a class="navbar-collapse" style="color: white">Admin Panel</a> </li>
        </ul>
       <button class="navbar-toggler navbar-toggler-right border-0" type="button" data-toggle="collapse" data-target="#navbar11">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbar11">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item"></li>
        </ul>
        <a class="btn btn-primary" href="index.php">Keluar</a>
      </div>
    </div>
  </nav>
  <!-- Navigasi Bar End-->

  <!-- Navbar Menu Mulai -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-light">
    <div class="container">
      <div class="row">
        <div class="nav nav-tabs">
              <div class="col-4 col-md"><p align="center"><a href="pesanan-baru.php" class="nav-link"  ><i class="fa fa-plus-square"></i><span><br>Pesanan<br>Baru</span></a></p></div>
              <div class="col-4 col-md"><p align="center"><a href="data-pelanggan.php" class="active nav-link" ><i class="fa fa-user-circle"></i><span><br>Data Pelanggan</span></a></p></div>
              <div class="col-4 col-md"><p align="center"><a href="daftar-pemesanan.php" class="nav-link" ><i class="fa fa-book"></i><span><br>Daftar Pemesanan</span></a></p></div>
              <div class="col-4 col-md"><p align="center"><a href="data-administrator.php" class="nav-link" ><i class="fa fa-user-circle"></i><span><br>Data<br>Admin</span></a></p></div>
              <div class="col-4 col-md"><p align="center"><a href="profile.php" class="nav-link" ><i class="fa fa-cog"></i><span><br>Profile<br>&nbsp;</span></a></p></div>
              <div class="col-4 col-md"><p align="center"><a href="" class="nav-link" ><i class="fa fa-info-circle"></i><span><br>Laporan<br>&nbsp;</span></a></p></div>
        </div>
      </div>
    </div>
  </nav>
  <!-- Akhir dari Navbar Menu Mulai -->
            

  <div class="py-3">
    <!-- Notifikasi Data Berhasil di Update-->
    <div class="container">
      <?php 
      if(isset($_GET['pesan'])){
        if ($_GET['pesan']=="edited") {
        echo '<div id="pesan" class="alert alert-primary" role="alert" align="center">'."Sukses! Data Pelanggan Berhasil di Update!".'</div>';
        }
        }
      ?>
    </div>
    <!-- End Of Notifikasi Data Berhasil di Update-->


    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <h3>Tambah Data Pelanggan</h3>
          <hr>
          <?php 
            if(isset($_GET['pesan'])){
              if ($_GET['pesan']=="success") {
                echo '<div id="pesan" class="alert alert-primary" role="alert" align="center">'."Sukses! User Baru Telah DiTambahkan!".'</div>';
              }
            }
           ?>
          <form action="data/proses-tambah.php"  method="post">
            <div class="form-group"><input type="hidden" name="id_user" value=""></input></div>
            <div class="form-group"><input type="text" class="form-control" name="fname" placeholder="Nama" required></div>
            <div class="form-group"><input type="number" class="form-control" name="nohp" placeholder="No Handphone" required></div>
            <div class="form-group"><input type="text" class="form-control" name="alamat" placeholder="Alamat" required></div>
            <div class="form-group"><input type="text" class="form-control" name="username" placeholder="Username" required></div>
            <div class="form-group"><input type="password" class="form-control" id="form42" name="password" placeholder="Password" required></div>
            <button type="submit" class="btn btn-primary">Daftar</button>
          </form>
        </div>
      


        <div class="col-md-8">
          <h3 class="mb-3">Data Pelanggan</h3>
          <hr>

  <table class="table">
    <thead class="thead-dark">
    <tr align="center">
      <th>NO</th>
      <th>ID User</th>
      <th>Nama</th>
      <th>No Handphone</th>
      <th>Alamat</th>
      <th width="197px">OPSI</th>
    </tr>
    </thead>
    <tbody>
    <?php 
    include '/data/koneksi.php';
    $no = 1;
    $data = mysqli_query($db,"select * from user");
    while($d = mysqli_fetch_array($data)){
      ?>
      <tr>
        <td><?php echo $no++; ?></td>
        <td><?php echo $d['id_user']; ?></td>
        <td><?php echo $d['nama_depan']." ".$d['nama_belakang']; ?></td>
        <td><?php echo $d['handphone']; ?></td>
        <td><?php echo $d['alamat'];?></td>
        <td>
          <a href="edit-data.php?id_user=<?php echo $d['id_user']; ?>"class="btn btn-primary navbar-btn ml-md-2" >EDIT</a>
          <a href="data/proses-hapus.php?id_user=<?php echo $d['id_user']; ?>"class="btn btn-primary navbar-btn ml-md-2">HAPUS</a>
        </td>
      </tr>
      <?php 
    }
    ?>
    </tbody>
  </table>
        </div>
      </div>
    </div>
  </div>
  <!--Foooter-->
  <div class="bg-dark" style="">
    <div class="container">
      <div class="row">
        <!-- Footer Copyright-->
        <div class="row">
          <div class="col-md-12 mt-3">
            <p style="color:white">© Copyright 2020 Supernova Studio - All rights reserved. <br> <a href="https://wa.me/6281294493204" style="color:white"> Whatsapp : 6281294493204</a></p>
          </div>
        </div>
      </div>
    </div>
  </div>

</body>

</html>