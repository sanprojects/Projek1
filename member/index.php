<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="https://static.pingendo.com/bootstrap/bootstrap-4.3.1.css">
</head>
<body>


  <!-- Navigasi Bar Mulai-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container"> <a class="navbar-brand" href="index.php">
        <b> SUPERNOVA</b>
      </a>
        <ul class="navbar-nav mr-auto">
          <li class="nav-item"> <a class="navbar-collapse" style="color: white">Member Panel</a> </li>
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



  <div class="py-5 text-center" style="background-image: url('https://static.pingendo.com/cover-bubble-dark.svg');background-size:cover;">
    <div class="container">
      <div class="row">
        <div class="mx-auto col-md-6 col-10 bg-white p-5">
          <h1 class="mb-4">Log in</h1>
          <form action="data/proses-login.php" method="post">
            <?php 
                if(isset($_GET['pesan'])){
                  if ($_GET['pesan']=="failed"){
                  echo '<div id="pesan" class="alert alert-danger" role="alert" align="center">'."Login Gagal! username atau password salah!".'</div>';
                  }elseif($_GET['pesan']=="logout"){
                  echo '<div id="pesan" class="alert alert-success" role="alert" align="center">'."Sukses! Anda Telah LogOut".'</div>';
                  }elseif($_GET['pesan']=="belum-login"){
                  echo '<div id="pesan" class="alert alert-danger" role="alert" align="center">'."Anda Belum Login! Silahkan Login Terlebih Dahulu!".'</div>';
                  }
                }
             ?>
            <div class="form-group">
            <input type="text" class="form-control" placeholder="username" id="form9" name="username" required> </div>
            <div class="form-group mb-3">
            <input type="password" class="form-control" placeholder="Password" id="form10" name="password" required> <small class="form-text text-muted text-right">
                <a href="#" class=""> Lupa Password<br></a>
              </small> </div> <button type="submit" class="btn btn-primary">Submit</button><br><br>
          </form><a href="daftar.php" class=""> Belum punya akun? Daftar</a>
        </div>
      </div>
    </div>
  </div>

  <!--Foooter-->
  <div class="footer">
      <?php include 'data/footer.php' ?>
  </div>
  <!--Foooter-->

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    
</body>
</html>