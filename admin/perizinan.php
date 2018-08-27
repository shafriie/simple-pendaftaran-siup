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
            <h2 class="">Pemohon Teknis</h2>
            <hr>
            <a href="addPerizinan" class="btn btn-default"><b>Add(+)</b></a>
            <br><br>
            <table class="table table-bordered">
              <tr style="background-color: navy;color: white">
                <th>No</th>
                <th>Kode Registrasi</th>
                <th>Pemohon</th>
                <th>Perihal</th>
                <th>Tanggal Mohon</th>
                <th>Eta</th>
                <th>Lokasi Pengembalian</th>
                <th>Status</th>
                <th>Action</th>
              </tr>
              <?php 
                $query = $cn->query("SELECT * FROM perizinan");  
                $no = 0;
                while ($rows = $query->fetch_object() ) {
                $no++;
              ?>    
                <tr>
                  <td><?= $no ?></td>
                  <td><?= $rows->kode_registrasi ?></td>
                  <td><?= $rows->pemohon ?></td>
                  <td><?= $rows->perihal ?></td>
                  <td><?= $rows->tanggal_mohon ?></td>
                  <td><?= $rows->eta ?></td>
                  <td><?= $rows->lokasi_pengembalian ?></td>
                  <td><?= ($rows->status == 1)?'<span class="label label-danger ">Proses</span>':'<span class="label label-success">Selesai</span>' ?></td>
                  <td>
                    <a href="editPerizinan?act=edit&id=<?php echo $rows->kode_registrasi ?>" class="btn btn-default btn-sm"><b>Edit</b></a>
                    <a class="btn btn-default btn-sm" onclick="return confirm('Apakah anda ingin menghapus data ini?')" href="action?act=del&id=<?php echo $rows->kode_registrasi ?>"><b>Delete</b></a>
                  </td>
                </tr>
              <?php } ?>
            </table>

        </div>
    </div>

</div>


</body>
</html>