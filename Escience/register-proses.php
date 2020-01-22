<?php
if(isset($_POST['register'])){
	include('config.php');
	
	$id_user	= $_POST['id_user'];	
	$nama		= $_POST['nama'];	
	$password 	= $_POST['password'];
	$email		= $_POST['email'];
	$level		= $_POST['level'];
$input = mysql_query("INSERT INTO user VALUES('$id_user', '$nama', '$password', '$email','$level')") 
	or die(mysql_error());
	if($level=="Bimbel"){
		if($input){
			echo 'Data berhasil di tambahkan! ';		
			echo "<script language=\"javascript\">alert(\"Data Sudah di simpan! \");document.location.href='index.php';</script>";	
		
		}else{
			echo 'Gagal menambahkan data! ';	
			echo "<script language=\"javascript\">alert(\"Data Belom di simpan \");document.location.href='register.php';</script>";	
		}
	}else{
		if($input){
			echo 'Silahkan lakukan pembayaran! ';		
			echo "<script language=\"javascript\">alert(\"Silahkan lakukan pembayaran! \");document.location.href='payment.php';</script>";	
		}else{
			echo 'Gagal menambahkan data! ';	
			echo "<script language=\"javascript\">alert(\"Data Belom di simpan \");document.location.href='register.php';</script>";	
		}
	}

}else{	

	echo '<script>window.history.back()</script>';

}
?>