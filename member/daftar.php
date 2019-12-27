<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <!--supaya responsife-->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!--external css-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="https://static.pingendo.com/bootstrap/bootstrap-4.3.1.css">
</head>

<body>

  <!--Navigation Bar-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container"> <a class="navbar-brand" href="index.php">
        
        <b>SUPERNOVA</b>
      </a> <button class="navbar-toggler navbar-toggler-right border-0" type="button" data-toggle="collapse" data-target="#navbar11">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbar11">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item"> <a class="navbar-nav" style="color: white">Form Pendaftaran Pelanggan</a> </li>
        </ul>
        <a class="btn btn-primary navbar-btn ml-md-2" href="login.php">Masuk</a>
      </div>
    </div>
  </nav>

  <!-- Body Content-->
  <div class="py-3">
    <div class="container">
      <div class="row">
        <div class="col-md-8 p-4">
          <h1>Daftar Menjadi Pelanggan Supernova</h1>
          <p>Supernova adalah layanan rental alat musik untuk penggunaan diluar dan rental studio yang berlokasikan di indramayu.</p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-5 p-4">
          <h3>Kontak Bantuan</h3>
          <p>Jika Membutuhkan bantuan ketika melakukan pendaftaran</p><br>
          <p class="lead mt-3"> <b>Bantuan Umum</b> </p>
          <p> <a href="tel:6281294493204">+62 812 9449 3204</a> </p>
          <p> <a href="https://wa.me/6281294493204">Whatsapp</a> </p>
        </div>
        <div class="col-md-7 p-4">
          <h3 class="mb-3">Form Pendaftaran</h3>
          <?php
            if(isset($_GET['pesan'])){
              if ($_GET['pesan']=="success") {
                echo '<div id="pesan" class="alert alert-primary" role="alert" align="center">'."Sukses! Anda Sudah Berhasil Daftar! Silahkan Login.".'</div>';
              }
            }
           ?>
          <form action="data/proses-registrasi.php" method="post">
            <div class="form-row">
              <div class="form-group col-md-6"> <input type="text" class="form-control" name="fname" placeholder="First Name" required> </div>
              <div class="form-group col-md-6"> <input type="text" class="form-control" name="lname" placeholder="Last Name" required> </div>
            </div>
            <div class="form-group"><input type="text" class="form-control" name="alamat" placeholder="Alamat" required></div>
            <div class="form-group"><input type="tel" class="form-control" name="nohp" placeholder="No Handphone" required></div>
            <div class="form-group"><input type="text" class="form-control" name="username" placeholder="Username" required></div>
            <div class="form-group"><input type="password" class="form-control" name="password" placeholder="Password" required></div>
            <button type="submit" class="btn btn-primary">Daftar</button>
          </form>
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
          <p style="color:white">© Copyright 2020 Supernova Studio - All rights reserved. <br> <a href="https://wa.me/6281294493204" style="color:white"> Whatsapp :  6281294493204</a></p>
        </div>
    </div>
</body>
</html>