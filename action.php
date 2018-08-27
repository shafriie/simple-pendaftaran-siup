<?php 

include 'koneksi.php';

if (isset($_POST['proses'])) {
  @$tipe = $_POST['tipe'];
  @$nik = $_POST['nik'];
  @$no_kk = $_POST['no_kk'];
  @$nama = $_POST['nama'];
  @$email = $_POST['email'];
  @$handphone = $_POST['handphone'];
  $query = $cn->query("INSERT INTO registrasi(tipe,nik,no_kk,nama,email,handphone) VALUES('$tipe','$nik','$no_kk','$nama','$email','$handphone') ");
  echo "<script>alert('Berhasil memasukan data!');location.href='daftar'</script>";
}

 ?>