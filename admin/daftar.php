<!DOCTYPE html>
<html>
<head>
    <title>Sistem Informasi Pendaftaran SIUP</title>
    <link rel="stylesheet" href="../asset/font-awesome.css">
</head>
<body>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="../asset/bootstrap.min.css">


<?php include('akses.php'); ?>

<?php include('../koneksi.php'); ?>
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
        <div class="col-md-9">
            <h2 class="">Data Pendaftar</h2>
            <hr>
            <!-- <a href="addPerizinan" class="btn btn-success"><b>Add(+)</b></a> -->
            
            <table class="table table-bordered">
              <tr style="background-color: navy;color: white">
                <th>No</th>
                <th>NIK</th>
                <th>No KK</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Handphone</th>
                <th>Tipe</th>
                <th>Action</th>
              </tr>
              <?php 
                $query = $cn->query("SELECT * FROM registrasi");  
                $no = 0;
                while ($rows = $query->fetch_object() ) {
                $no++;
              ?>    
                <tr>
                  <td><?= $no ?></td>
                  <td><?= $rows->nik ?></td>
                  <td><?= $rows->no_kk ?></td>
                  <td><?= $rows->nama ?></td>
                  <td><?= $rows->email ?></td>
                  <td><?= $rows->handphone ?></td>
                  <td><?= $rows->tipe ?></td>
                  <td>
                    <a onclick="return confirm('Apakah anda ingin menghapus data ini?')" href="action?actRegistasi=deleteRegistrasi&id=<?= $rows->id ?>" class="btn btn-primary btn-sm"><b>Delete</b></a>
                  </td>
                </tr>
              <?php } ?>
            </table>

        </div>
    </div>

</div>


</body>
</html>