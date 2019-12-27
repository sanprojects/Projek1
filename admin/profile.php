<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="apple-mobile-web-app-capable" content="yes">

  <!-- CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="https://static.pingendo.com/bootstrap/bootstrap-4.3.1.css">
  <!-- CSS -->

            <!-- Tiny MCE -->
            <script src='tinymce/tinymce.min.js'></script>
            <script>
              tinymce.init({
            //Selector menggunakan name dari nama textarea
              selector: '#about'
            });
              tinymce.init({
            //Selector menggunakan name dari nama textarea
              selector: '#ketentuan'
            });
            </script>
            <!-- Tiny MCE -->
</head>

<body>

        <!-- Header -->
        <div class="header">
          <?php include 'data/header.php' ?>
        </div>
        <!-- Header -->
            

  <div class="py-3">
    <!-- Notifikasi Data Berhasil di Update-->
    <div class="container">
      <?php 
      if(isset($_GET['pesan'])){
        if ($_GET['pesan']=="edited") {
        echo '<div id="pesan" class="alert alert-primary" role="alert" align="center">'."Sukses! Profile Berhasil di Update!".'</div>';
        }
        }
      ?>
    </div>
    <!-- End Of Notifikasi Data Berhasil di Update-->


    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <h3>Profile</h3>
          <hr>

          <!-- PHP Edit Profile -->
            <?php
              include '/data/koneksi.php';
              $profile = mysqli_query($db,"select * from profile where id_profile='1'");
              while($d = mysqli_fetch_array($profile)){
            ?>
            <!--End Of PHP Edit Profile -->

          <form action="data/proses-profile.php"  method="post">
            <b>
            <div class="form-group"><label>Nama Studio : </label><input type="text" class="form-control" name="name" value="<?php echo $d['nama_studio']; ?>" required></div>
            <div class="form-group"><label>No Handphone : </label><input type="text" class="form-control" name="nohp" value="<?php echo $d['handphone']; ?>" required></div>
            <div class="form-group"><label>Alamat : </label><input type="text" class="form-control" name="alamat" value="<?php echo $d['alamat']; ?>" required></div>
            <div class="form-group"><label>Kode Pos : </label><input type="text" class="form-control" name="kodepos" value="<?php echo $d['kodepos']; ?>" required></div></b>
          <!-- Fetch While-->
            <?php } ?>
          <!-- End of Fetch While-->
            <button type="submit" class="btn btn-primary" name="simpan1">Simpan</button>
          </form>
        </div>
        <div class="col-md-2"></div>


        <div class="col-md-4">
          <h3 class="mb-3">Harga</h3>
          <hr>

          <form action="data/proses-profile.php"  method="post">
            <!-- PHP Edit Profile -->
            <?php
              $harga1 = mysqli_query($db,"select * from harga where id_harga='1'");
              while($d = mysqli_fetch_array($harga1)){
            ?>
            <!--End Of PHP Edit Profile -->
            <b><div class="form-group"><label>Jam Siang : </label><input type="text" class="form-control" name="harga1" value="<?php echo $d['harga']; ?>" required></div>
              <!-- Fetch While-->
                <?php } ?>
              <!-- End of Fetch While-->

              <!-- PHP Edit Profile -->
              <?php
                $harga2 = mysqli_query($db,"select * from harga where id_harga='2'");
                while($d = mysqli_fetch_array($harga2)){
              ?>
              <!--End Of PHP Edit Profile -->
            <div class="form-group"><label>Jam Malam : </label><input type="number" class="form-control" name="harga2" value="<?php echo $d['harga']; ?>" required></div></b>
              <!-- Fetch While-->
                <?php } ?>
              <!-- End of Fetch While-->
            <button type="submit" name="simpan2" class="btn btn-primary">Simpan</button>
          </form>
        </div>
      </div>
    </div>
  </div>

  <br><br><br><br><br>
  <div class="container">
    <div class="row">
          <!-- PHP Edit Profile -->
              <?php
                $about1 = mysqli_query($db,"select * from about where id_about='1'");
                while($d = mysqli_fetch_array($about1)){
              ?>
          <!--End Of PHP Edit Profile -->
          
        <div class="col-lg-5">
          <form action="data/proses-profile.php" method="post">
            <h3>About</h3><hr>
              <div id="editor">
                <textarea required="" class="form-control" id="about" name="about" value="" ><?php echo $d['isi']; ?></textarea>
              </div>
                <br><button type="submit" name="simpan3" class="btn btn-primary">Simpan</button>
                <!-- Fetch While-->
                <?php } ?>
          <!-- End of Fetch While-->
          </form>
        </div>
                 <div class="col-lg-1"></div>
        <div class="col-lg-6">
            <h3>Ketentuan Pemakaian</h3><hr>
                  <!-- PHP Edit Profile -->
                      <?php
                        $about2 = mysqli_query($db,"select * from about where id_about='2'");
                        while($d = mysqli_fetch_array($about2)){
                      ?>
                  <!--End Of PHP Edit Profile -->

          <form action="data/proses-profile.php" method="post">
            <div id="textarea">
              <div id="editor">
                <textarea id="ketentuan" name="ketentuan"><?php echo $d['isi']; ?></textarea>
              </div>
              <br><button type="submit" name="simpan4" class="btn btn-primary">Simpan</button>
            </div>
                      <!-- Fetch While-->
                <?php } ?>
          <!-- End of Fetch While-->
          </form>
            <br><br><br>
        </div>
    </div>
  </div>

      <!-- Footer -->
      <div class="footer">
       <?php include 'data/footer.php' ?>
      </div>
      <!-- Footer-->

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>

</html>