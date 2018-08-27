<?php
session_start();
 
if(!isset($_SESSION['loggedFirst'])){
	echo '<script language="javascript">alert("Anda harus Login terlebih dahulu!"); document.location="../index";</script>';
}
?>