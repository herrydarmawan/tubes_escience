<?php
if(isset($_GET['idBimbel'])){

	include('config.php');
	$id = $_GET['idBimbel'];
	
	$cek = mysql_query("SELECT idBimbel FROM bimbel WHERE idBimbel='$id'") or die(mysql_error());
	
	if(mysql_num_rows($cek) == 0){
		
		echo '<script>window.history.back()</script>';
	
	}else{
		
		$del = mysql_query("DELETE FROM bimbel WHERE idBimbel='$id'");
		
		if($del){
			
			echo 'Data berhasil di Hapus! ';		
		echo "<script language=\"javascript\">alert(\"Data Sudah di hapus! \");document.location.href='bimbel.php';</script>";	
			
		}else{
			
			echo 'Gagal menghapus data! ';	
			echo '<a href="index.php">Kembali</a>';	
		
		}
		
	}
	
}else{
	
	echo '<script>window.history.back()</script>';
	
}
?>