<!DOCTYPE html>
<html>
<head>
<title>Sistem Informasi Pendaftaran SIUP</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {box-sizing:border-box}
body {font-family: Verdana,sans-serif;}
.mySlides {display:none}
/* Slideshow container */
.slideshow-container {
  max-width: 100%;
  position: relative;
  margin: auto;
}
/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}
/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}
/* The dots/bullets/indicators */
.dot {
  height: 13px;
  width: 13px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}
.active {
  background-color: #717171;
}
/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}
@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}
@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}
/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}
ul{
  list-style-type:none;
  margin:0;
  padding:0;
  width:100%;
  background-color:#0f303f;
  font-family:sans-serif;
  border:1px solid #ccc;
  overflow:hidden;
  
}
li{
  float:left;
}
li a{
  display:block;
  text-decoration:none;
  color:#fff;
  padding:14px 16px;
  text-align:center;
}

li a:hover{
  background-color:#555;
  color:#fff;
}
li.active a{
  background:#4169e1;
  color:#fff;
}
li.right{
  float:right;
}
li.center{
	float: left;
}
ul.fixed-top{
    position: fixed;
    top: 0;
}
ul.fixed-bottom{
    position: fixed;
    bottom: 0;
}
</style>
</head>
<body>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="asset/bootstrap.min.css">

<!-- jQuery library -->
<script src="asset/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="asset/bootstrap.min.js"></script>

<?php include 'layout/header.php'; ?>

<div class="container">


<h2 class="page-header">FAQ</h2>

<a href="index.php" class="btn btn-info btn-sm"><i class="glyphicon glyphicon-back"></i> Kembali ke beranda</a>

<br><br>

<div class="panel-group" id="accordion">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">Dokumen apa yang perlu disiapkan untuk mendaftar/memperoleh akun perizinan ?</a>
        </h4>
      </div>
      <div id="collapse1" class="panel-collapse collapse in">
        <div class="panel-body">
          <pre>
1. Akun pelayanan perizinan dibedakan menjadi 2 (dua) kelompok yaitu akun perusahaan dan akun perorangan.
2. Untuk mendaftar/memperoleh akun perusahaan/badan usaha, siapkan dokumen/data
      - Nomor NPWP Perusahaan
      - Nama Perusahaan/Badan Usaha
      - Alamat Email Perusahan/Pemilik Perusahaan
      - Nomor Telepon Perusahaan/Pemilik Perusahaan
3. Untuk mendaftar/memperoleh akun perorangan, siapkan dokumen/data
      - Nomor Induk Kependudukan (NIK)
      - Nomor Kartu Keluarga (KK)
      - Nama pemohon
      - Alamat email pemohon
      - Nomor telepon pemohon
</pre>

        </div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">Apa bedanya akun perusahaan dengan akun peorangan ? </a>
        </h4>
      </div>
      <div id="collapse2" class="panel-collapse collapse">
        <div class="panel-body">
          <pre>
- Akun perusahaan dikhususkan untuk mengajukan dan memproses perizinan yang berhubungan dengan aktivitas perusahaan/badan usaha
- Akun perorangan dikhususkan untuk mengajukan dan memproses perizinan/non perizinan yang berhubungan dengan individu pemohon atau badan usaha yang berbentuk perorangan

          </pre>
        </div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">Apakah boleh akun perusahaan dipergunakan untuk mengajukan dan memproses perizinan / perizinan perorangan ? Demikian juga sebaliknya ?</a>
        </h4>
      </div>
      <div id="collapse3" class="panel-collapse collapse">
        <div class="panel-body">
          <b>Tidak diperbolehkan</b>, karena menyebabkan dokumen perizinan yang diterbitkan menjadi tidak valid.
        </div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse4">Bagaimana cara mendaftar/memperoleh akun perizinan ?</a>
        </h4>
      </div>
      <div id="collapse4" class="panel-collapse collapse">
        <div class="panel-body">
          <pre>
1. Silahkan mengakses website pelayanan terpadu satu pintu dengan alamat http://pelayanan.jakarta.go.id
2. Pembukaan akun perusahaan
    - Pilih menu “Login”, dan pilih “Daftar disini”
    - Isi dan lengkapi, data berikut
        * NPWP Badan Usaha/Perusahaan
        * Nama Perusahaan, contoh PT. JAYA RAYA
        * Alamat e-mail perusahaan atau pemilik perusahaan
        * Nomor telepon perusahaan atau pemilik perusahaan
    - Pilih “Daftar”
    - Anda akan menerima email konfirmasi dari BPTSP, username dan password
3. Pembukaan akun perorangan
    - Pilih menu “Login”, dan pilih “Daftar disini”
    - Isi dan lengkapi, data berikut
        * Nomor Induk Kependudukan (NIK)
        * Nomor Kartu Keluarga (KK)
        * Nama pemohon sesuai KTP
        * Alamat email pemohon
        * Nomor telepon pemohon
    - Pilih “Daftar”
    - Anda akan menerima email konfirmasi dari BPTSP, username dan password
4. Untuk permohonan akun perorangan, dimungkinkan Anda tidak dapat diverifikasi oleh system (dengan kondisi dan langkah sebagaimana dibawah ini), akan menerima email konfirmasi verifikasi.
    - Jika Anda penduduk pemegang KTP DKI Jakarta yang sah, silahkan hubungi loket PTSP/Dinas Kependudukan terdekat (untuk memudahkan hubungi lokasi sesuai domisili KTP Anda), karena data kependudukan Anda belum update dalam database kependudukan.
    - Jika Anda bukan penduduk DKI Jakarta/tidak memiliki KTP DKI Jakarta, silahkan hubungi loket PTSP terdekat untuk melakukan verifikasi manual dengan membawa KTP Asli, KK Asli/fotocopy, Surat Kuasa (jika dikuasakan).
          </pre>
        </div>
      </div>
    </div>

    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse5">Jenis izin apa saja yang dapat diproses secara elektronik ?</a>
        </h4>
      </div>
      <div id="collapse5" class="panel-collapse collapse">
        <div class="panel-body">
          <pre>
Saat ini, jenis izin yang sudah dapat diajukan dan diproses secara elektronik adalah

    - Surat Izin Usaha Perdagangan (SIUP) Besar (Baru, Perpanjangan dan Perubahan)
    - Surat Izin Usaha Perdagangan (SIUP) Menengah (Baru, Perpanjangan dan Perubahan)
    - Surat Izin Usaha Perdagangan (SIUP) Kecil (Baru, Perpanjangan dan Perubahan)
    - Tanda Daftar Perusahaan (TDP) (Baru, Perpanjangan dan Perubahan)
    - SIUP - TDP Simultan (Baru, Perpanjangan dan Perubahan)
    - Surat Keterangan Tidak Mampu (SKTM)
    - Surat Keterangan Pengantar Surat Keterangan Catatan Kepolisian (SKCK)
    - Tanda Daftar Gudang (TDG) (Baru, Perpanjangan dan Perubahan)
    - Surat Keterangan Domisili Perusahaan (SKDP) (Baru dan Perpanjangan)
    - Surat Izin Penelitian (Baru dan Perpanjangan)
    - Surat Izin Praktik Dokter (Baru dan Pencabutan)
    - Surat Izin Praktik Dokter Gigi (Baru dan Pencabutan)
    - Surat Izin Praktik Dokter Spesialis (Baru dan Pencabutan)
    - Surat Izin Praktik Dokter Gigi Spesialis (Baru dan Pencabutan)
    - Surat Izin Praktik Perawat (di Fasilitas Kesehatan) - Baru dan Pencabutan
    - Surat Izin Praktik Perawat (Perorangan) - Baru dan Pencabutan
    - Surat Izin Praktik Perawat Gigi (di Fasilitas Kesehatan) - Baru dan Pencabutan
    - Surat Izin Praktik Bidan (di Fasilitas Kesehatan) - Baru dan Pencabutan
    - Surat Izin Praktik Bidan (Perorangan) - Baru dan Pencabutan
    - TDUP Restoran/Rumah Makan/Cafe - Baru
    - TDUP Bar (Rumah Minum) - Baru
    - TDUP Pusat Penjualan Makanan (Foodcourt) - Baru
    - TDUP Coffee Shop/Coffee House/Kedai Kopi - Baru
    - TDUP Jasa Boga (Catering) - Baru
    - TDUP Kantin / Cafetaria - Baru
    - TDUP Bakery - Baru
    - TDUP Hiburan Kelab Malam - Baru
    - TDUP Diskotik - Baru
    - TDUP Pub - Baru
    - TDUP Musik Hidup - Baru
    - TDUP Karaoke - Baru

Perizinan yang lainnya dalam fase penyiapan secara elektronik. (nov16) 
          </pre>
        </div>
      </div>
    </div>

    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse6">Perubahan email pada akun?</a>
        </h4>
      </div>
      <div id="collapse6" class="panel-collapse collapse">
        <div class="panel-body">
<pre>
SOP Perubahan email pada akun: 

Untuk perubahan e-mail pada akun diharapkan untuk membuat surat permohonan yang ditujukan kepada Dinas Penanaman Modal dan PTSP Prov DKI Jakarta, Up Kepala Pusat Sistem Teknologi Informasi dan Kearsipan. Surat berisi permohonan perubahan e-mail dengan mencantumkan e-mail lama dan e-mail baru dan alasan perubahan email, menggunakan kop surat perusahaan (jika perusahaan) dan ditanda tangani Direktur/Pemilik dan di stempel Basah. Harap surat permohonan di bawa ke Outlet PTSP terdekat dengan dilengkapi : 
1. NPWP Perusahaan asli dan fotokopi
2. KTP Direktur (asli jika tidak dikuasakan, fotocopy jika dikuasakan)
3. Surat kuasa jika dikuasakan beserta KTP asli dan fotocopy penerima kuasa

Surat permohonan perubahan email address dapat di download di http://tinyurl.com/suratperubahanemail

Atas perhatiannya diucapkan terimakasih.
</pre>
        </div>
      </div>
    </div>

  </div>


</div>

</body>
</html> 