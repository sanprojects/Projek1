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
        <!-- Header -->
        <div class="header">
          <?php include 'data/header.php' ?>
        </div>
        <!-- Header -->

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

      <!-- Footer -->
      <div class="footer">
       <?php include 'data/footer.php' ?>
      </div>
      <!-- Footer-->

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    
  </body>
</html>