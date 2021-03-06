<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href=".css">
  <link rel="stylesheet" href="https://static.pingendo.com/bootstrap/bootstrap-4.3.1.css">


  <link rel="stylesheet" href="../media/css/jquery.dataTables.css" type="text/css"/>
  <script src="media/js/jquery.dataTables.js"></script>
</head>

<body>

  <div class="header">
    <?php include 'data/header.php'?>
          <!-- PHP Edit Data -->
            <?php
              session_start();
              include '/data/koneksi.php';
              error_reporting(0);
              $user = $_SESSION[username];
              //$datas = mysqli_query($db,"select * from user where username='$_SESSION[username]'");
              //while($d = mysqli_fetch_array($datas)){
            ?>
            <!--End Of PHP Edit Data -->
          <!-- Fetch While-->
          <?php //} ?>
          <!-- End of Fetch While-->
  </div>

  <!-- Bagian Konten -->
  <div class="py-3">
    <div class="container">
      <div class="row">
        <div class="col-md-8">
          <div class="card p-2">
          <h4>Halo, Selamat Datang <b><?php echo $user ?></b> ^_^</h4> 
          <hr>

          <!-- Form Edit Data Pelanggan -->

          <!--END Of Form Edit Data Pelanggan -->



        </div>
      </div>

        <div class="col-md-3">
          <div class="card p-2">
          <?php include 'data/menu-kanan.php' ?>
          </div>
        </div>

    </div>
    </div>
  </div>
  <!-- Akhir Bagian Konten-->

  <!--Foooter-->
  <div class="footer">
      <?php include 'data/footer.php' ?>
  </div>
  <!--Foooter-->

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>