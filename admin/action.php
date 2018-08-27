<?php 

include '../koneksi.php';

@$act = $_GET['act'];
@$id = $_GET['id'];

if (isset($_GET['act'])) {
	if ($act == 'edit') {
		$query = $cn->query("SELECT * FROM perizinan WHERE kode_registrasi='$id'");
		$data = $query->fetch_object();

	}
	else
	{
		$query = $cn->query("DELETE FROM perizinan WHERE kode_registrasi='$id' ");
		echo "<script>alert('Berhasil menghapus data!');location.href='perizinan'</script>";
	}
}

if (isset($_POST['insert'])) {
	$kode_registrasi = $_POST['kode_registrasi'];
	$pemohon = $_POST['pemohon'];
	$perihal = $_POST['perihal'];
	$tanggal_mohon = $_POST['tanggal_mohon'];
	$eta = $_POST['eta'];
	$lokasi_pengembalian = $_POST['lokasi_pengembalian'];
	$status = $_POST['status'];
	
	$query = $cn->query("INSERT INTO perizinan VALUES('$kode_registrasi','$pemohon','$perihal','$tanggal_mohon','$eta','$lokasi_pengembalian',$status)");
	echo "<script>alert('Berhasil memasukkan data!');location.href='perizinan'</script>";
}

if (isset($_POST['update'])) {
	$kode_registrasi = $_POST['kode_registrasi'];
	$pemohon = $_POST['pemohon'];
	$perihal = $_POST['perihal'];
	$tanggal_mohon = $_POST['tanggal_mohon'];
	$eta = $_POST['eta'];
	$lokasi_pengembalian = $_POST['lokasi_pengembalian'];
	$status = $_POST['status'];
	
	$query = $cn->query("UPDATE perizinan SET pemohon='$pemohon',perihal='$perihal',tanggal_mohon='$tanggal_mohon', eta='$eta', lokasi_pengembalian='$lokasi_pengembalian', status=$status WHERE kode_registrasi='$kode_registrasi'");
	echo "<script>alert('Berhasil merubah data!');location.href='perizinan'</script>";
}

if (isset($_GET['actRegistasi'])) {
	$query = $cn->query("DELETE FROM registrasi WHERE id=$id ");
	echo "<script>alert('Berhasil menghapus data!');location.href='daftar'</script>";
}

 ?>