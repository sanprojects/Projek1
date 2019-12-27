<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="https://static.pingendo.com/bootstrap/bootstrap-4.3.1.css">
</head>

<body>
        <!-- Header -->
        <div class="header">
          <?php include 'data/header.php' ?>
        </div>
        <!-- Header -->


  <div class="py-3">
    <div class="container">
      <div class="row">
        <div class="bg-white col-md-12 col-12">
          <h3>Daftar Pemesanan Baru</h3>
          <div class="alert alert-danger" align="center">
              <b>Info!</b><br/><p style="font-size: 14px"> HARAP KONFIRMASI PEMESANAN STUDIO KEPADA PELANGGAN YANG BERSANGKUTAN DENGAN MELALU SMS ATAU TELEPON KEPADA PIHAK YANG MEMESAN STUDIO MUSIK</p>
          </div>
                    
                    <table class="table">
                      <thead class="thead-dark">
                        <tr>
                        <th>No.</th> 
                        <th>Username</th>
                        <th>Nama Pelanggan</th> 
                        <th>Tanggal Main</th>
                        <th>Jam Main</th>
                        <th>No Telpon</th>
                        <th>DP</th>
                        <th>Sisa</th>
                        <th>Status</th>
                        <th width="197px" style="width: 223px">AKSI</th></tr>
                      </thead>
                      
                      <tbody>
                             
                      <tr>
                        <td align="center"><?php echo $no;  ?></td>
                        <td align="center"><?php echo $cc['username']; ?></td>
                        <td align="center"><?php echo $cc['nama_klub']; ?></td>
                        <td align="center"><?php echo $cc['tanggal']; ?></td>
                        <td align="center"><?php echo $cc['jam']; ?></td>
                        <td align="center"><?php echo $cc['no_telpon']; ?></td>
                        <td align="center"><?php echo $cc['jam']; ?></td>
                        <td align="center"><?php echo $cc['no_telpon']; ?></td>
                        <td align="center">
                          <span class="btn btn-success btn-sm"><?php echo $cc['status']; ?></span>
                        </td>

                        <td>
                            <a href="index.php?modul=updatepesan&id=<?php echo $cc['id_pemesanan']; ?>" onclick="return konfirmasiz()" class="btn btn-warning btn-sm" >Konfirmasi</a>
                            <a href="index.php?modul=hapuspesan&id=<?php echo $cc['id_pemesanan']; ?>" onclick="return konfirmasi()" class="btn btn-danger btn-sm" >Hapus </a>
                        </td>
                        

                      </tr>
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

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>

</html>