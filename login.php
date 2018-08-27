<?php
include('koneksi.php');

session_start();

if (isset($_POST['login'])) {

	$user = $_POST['username'];
	$pass = md5($_POST['password']);

	$sql = $cn->query("SELECT * FROM user WHERE username='$user' AND password='$pass'") ;
	
	if($sql->num_rows > 0){
		$row = $sql->fetch_object();
		$_SESSION['loggedFirst'] = true;
		$_SESSION['status'] = $row->level;
		echo '<script language="javascript">alert("Anda berhasil Login!"); document.location="admin/index";</script>';
	}
	else
	{
		echo '<script language="javascript">alert("Username atau Password anda Salah. Silahkan Login Lagi!"); document.location="masuk";</script>';	
	}
	
}



?>