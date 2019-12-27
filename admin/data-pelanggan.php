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
          <a href="edit-data.php?id_user=<?php echo $d['id_user']; ?>" class="btn btn-primary navbar-btn ml-md-2" >EDIT</a>
          <a href="data/proses-hapus.php?id_user=<?php echo $d['id_user']; ?>" onclick="return konfirmasi()" class="btn btn-primary navbar-btn ml-md-2">HAPUS</a>
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
  
      <!-- Footer -->
      <div class="footer">
       <?php include 'data/footer.php' ?>
      </div>
      <!-- Footer-->

      <script type="text/javascript" language="JavaScript">
            function konfirmasi()
            {
                tanya = confirm("Anda yakin akan menghapus data ?");
                if (tanya== true) return true;
                else return false; 
            }
      </script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>

</html>