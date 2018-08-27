<style type="text/css">
	.menuActive{
		font-weight: bold
	}
</style>
<?php 

$link = $_SERVER['REQUEST_URI'];
$link_array = explode('/',$link);
$page = end($link_array);



 ?>
<div class="list-group" style="margin-top: 20px;font-family: verdana">
  <a class="list-group-item" href="javascript:void(0)" style="background-color: navy;color: white;text-align: center"><b>Navigation Bar</b></a>
  <a href="javascript:void(0)" class="list-group-item">Selamat Datang, <b><?php echo ucfirst($_SESSION['status'] == 1?'Admin':'User') ?></b></a>
  
  <?php if ($_SESSION['status'] == '1'): ?>
  <a href="index" class="list-group-item <?= ($page == 'index'?'menuActive':'') ?>">Dashboard</a>
  <a href="perizinan" class="list-group-item <?= ($page == 'perizinan' || $page == 'addPerizinan' || $page == 'editPerizinan' )?'menuActive':'' ?> ">Pemohon Teknis</a>
  <a href="daftar" class="list-group-item <?= ($page == 'daftar'?'menuActive':'') ?> ">Data Pendaftar</a>
  <?php else: ?>	
  <?php endif ?>
  
  <a href="../logout" class="list-group-item">Logout</a>
</div>