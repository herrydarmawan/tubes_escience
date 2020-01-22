<?php
include "config.php";
session_start();
ob_start();

IF(ISSET($_POST['login'])){
$username = $_POST['username'];
$password = $_POST['password']; 		
// gabisa pake md5
$cek = mysql_num_rows(mysql_query("SELECT * FROM user WHERE id_user='$username' AND password='$password'"));
$data = mysql_fetch_array(mysql_query("SELECT * FROM user WHERE id_user='$username' AND password='$password'"));
if($data == 1 || $cek >0){
		$_SESSION['username'] = $data['nama'];
		$_SESSION['level'] = $data['level'];
		if($data['level'] == "Bimbel"){
			header('location:bimbel\bimbel.php');
		}
		else if($data['level'] == "Siswa"){
			header('location:user\user.php');
		}
		else{
		echo "<script language=\"javascript\">alert(\"Invalid username or password\");document.location.href='login.php';</script>";
		}
	}
	else{
		echo "<script language=\"javascript\">alert(\"Invalid username or password\");document.location.href='login.php';</script>";

	}
}
?>