<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
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
              <div class="col-4 col-md"><p align="center"><a href="data-pelanggan.php" class="nav-link" ><i class="fa fa-user-circle"></i><span><br>Data Pelanggan</span></a></p></div>
              <div class="col-4 col-md"><p align="center"><a href="daftar-pemesanan.php" class="nav-link" ><i class="fa fa-book"></i><span><br>Daftar Pemesanan</span></a></p></div>
              <div class="col-4 col-md"><p align="center"><a href="data-administrator.php" class="active nav-link" ><i class="fa fa-user-circle"></i><span><br>Data<br>Admin</span></a></p></div>
              <div class="col-4 col-md"><p align="center"><a href="profile.php" class="nav-link" ><i class="fa fa-cog"></i><span><br>Profile<br>&nbsp;</span></a></p></div>
              <div class="col-4 col-md"><p align="center"><a href="" class="nav-link" ><i class="fa fa-info-circle"></i><span><br>Laporan<br>&nbsp;</span></a></p></div>
        </div>
      </div>
    </div>
  </nav>
  <!-- Akhir dari Navbar Menu Mulai -->

  <!-- Bagian Konten -->
  <div class="py-3">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 p-4">
          <h3>Edit Data Pelanggan</h3>
          <hr>
          <!-- PHP Edit Data -->
            <?php
              include '/data/koneksi.php';
              $id = $_GET['id_admin'];
              $datas = mysqli_query($db,"select * from admin where id_admin='$id'");
              while($d = mysqli_fetch_array($datas)){
            ?>
            <!--End Of PHP Edit Data -->
          <!-- Form Edit Data Pelanggan -->
          <form method="post" action="data/proses-edit-admin.php">
            <label class="control-label"><b>Id Admin</b></label>
            <div class="form-group"><input type="text" class="form-control" name="id_admin" value="<?php echo $d['id_admin']; ?>" readonly></div>
            <label class="control-label"><b>Nama</b></label>
            <div class="form-group"><input type="text" class="form-control" name="nama" value=" <?php echo $d['nama']; ?> "></div>
            <label class="control-label"><b>No Handphone</b></label>
            <div class="form-group"><input type="tel" class="form-control" name="handphone" value=" <?php echo $d['handphone']; ?> "></div>
            <label class="control-label"><b>Username</b></label>
            <div class="form-group"><input type="text" class="form-control" name="username" value=" <?php echo $d['username']; ?> " readonly></div>
            <label class="control-label"><b>Password</b></label>
            <div class="form-group"><input type="password" class="form-control" name="password" value=" <?php echo $d['password']; ?> " ></div>
            <button type="submit" class="btn btn-primary">Edit Data</button>
          </form>
          <!--END Of Form Edit Data Pelanggan -->

          <!-- Fetch While-->
          <?php } ?>
          <!-- End of Fetch While-->

        </div>
      </div>
    </div>
  </div>
  <!-- Akhir Bagian Konten-->

  <!--Foooter-->
  <div class="footer bg-dark">
    <div class="container">
      <div class="row">
        <!-- Footer Copyright-->
        <div class="col-md-12 mt-3">
        <p style="color:white">© Copyright 2020 Supernova Studio - All rights reserved. <br> <a href="https://wa.me/6281294493204" style="color:white"> Whatsapp : 6281294493204</a></p>
        </div>
        <!-- End of Footer Copyright -->
      </div>
    </div>
  </div>
  <!-- End of Footer -->
</body>

</html>