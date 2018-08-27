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

<?php 

@$act = $_GET['edit'];
@$id = $_GET['id'];

$query = $cn->query("SELECT * FROM perizinan WHERE kode_registrasi='$id'");
$rows = $query->fetch_object();

 ?>

<div class="container-fluid">
    
    <div class="row" style="margin-bottom: 100px">
        <div class="col-md-3">
            <?php include 'headerAdmin.php'; ?>
        </div>
        <div class="col-md-9">
            <h2 class="">Form Perizinan</h2>
            <hr>

            <form method="POST" action="action">
              <div class="form-group">
                <label for="email">Kode Registrasi:</label>
                <input type="text" class="form-control" id="kode_registrasi" name="kode_registrasi" required value="<?= $rows->kode_registrasi ?>" readonly>
              </div>
              <div class="form-group">
                <label for="pwd">Pemohon:</label>
                <input type="text" class="form-control" id="pemohon" name="pemohon" required value="<?= $rows->pemohon ?>">
              </div>
              <div class="form-group">
                <label for="perihal">Perihal:</label>
                <textarea class="form-control" rows="4" name="perihal" required><?= $rows->perihal ?></textarea>
              </div>
              <div class="form-group">
                <label for="tanggal_mohon">Tanggal Pemohon:</label>
                <input type="date" class="form-control" id="tanggal_mohon" name="tanggal_mohon" required value="<?= date('Y-m-d',$rows->tanggal_mohon) ?>">
              </div>
              <div class="form-group">
                <label for="eta">ETA:</label>
                <textarea class="form-control" rows="4" name="eta" required><?= $rows->eta ?></textarea>
              </div>
              <div class="form-group">
                <label for="lokasi_pengembalian">Lokasi Pengembalian:</label>
                <textarea class="form-control" rows="4" name="lokasi_pengembalian" required><?= $rows->lokasi_pengembalian ?></textarea>
              </div>
              <div class="form-group">
                <label for="status">Status:</label>
                <select class="form-control" name="status" required>
                  <option value="">-- Pilih --</option>
                  <option value="1" <?= ($rows->status == 1)?'selected':'' ?> >Proses</option>
                  <option value="2" <?= ($rows->status == 2)?'selected':'' ?>>Selesai</option>
                </select>
              </div>
              <div class="form-group" align="center">
              <button style="width: 150px" type="submit" name="update" class="btn btn-default"><b>Update Data</b></button>
              <button style="width: 150px" type="reset" class="btn btn-default"><b>Reset</b></button>  
              <a style="width: 150px" href="perizinan" class="btn btn-default"><b>Back</b></a>
              </div>
              
            </form>

        </div>
    </div>

</div>


</body>
</html>