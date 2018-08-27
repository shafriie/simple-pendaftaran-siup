<!DOCTYPE html>
<html>
<head>
    <title>Sistem Informasi Pendaftaran SIUP</title>
    <link rel="stylesheet" href="../asset/font-awesome.css">
</head>
<body>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="../asset/bootstrap.min.css">

<?php 
  include '../koneksi.php';
  include 'akses.php'; 
?>

<!-- jQuery library -->
<script src="../asset/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="../asset/bootstrap.min.js"></script>

<?php include 'headerLogo.php'; ?>

<div class="container-fluid">
    
    <div class="row">
      
      <div class="col-md-3">
          <?php include 'headerAdmin.php'; ?>
      </div>
      
        
        <?php if ($_SESSION['status'] == '1'): ?>
        <div class="col-md-9">
            <h2 class="">Dashboard</h2>
            <hr>

            <?php 
            $queryPemohon = $cn->query("SELECT * FROM perizinan");
            @$numRowsPemohon = $queryPemohon->num_rows;
            ?>

            <a class="well" href="perizinan" style="font-size: 2em"><img class="img-thumbnails" style="width: 50px;height: 50px" src="../gambar/message.jpg"> <?= $numRowsPemohon ?> Pemohon Teknis</a>

        </div>
        <?php else: ?>

        <div class="col-md-9">
            <h2 class="">Contoh Tampilan Surat Perizinan</h2>  
            <hr>
            <p align="center">
              <img style="width: 100%" src="../gambar/cara_user.JPG">
            </p>
        </div>
        <?php endif ?>
        
    </div>

</div>


</body>
</html>