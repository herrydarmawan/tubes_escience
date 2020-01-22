<?php
if(isset($_GET['idMateri'])){

	include('config.php');
	$id = $_GET['idMateri'];
	
	$cek = mysql_query("SELECT idMateri FROM materi WHERE idMateri='$id'") or die(mysql_error());
	
	if(mysql_num_rows($cek) == 0){
		
		echo '<script>window.history.back()</script>';
	
	}else{
		
		$del = mysql_query("DELETE FROM materi WHERE idMateri='$id'");
		
		if($del){
			
			echo 'Data berhasil di Hapus! ';		
		echo "<script language=\"javascript\">alert(\"Data Sudah di hapus! \");document.location.href='materi.php';</script>";	
			
		}else{
			
			echo 'Gagal menghapus data! ';	
			echo '<a href="bimbel.php">Kembali</a>';	
		
		}
		
	}
	
}else{
	
	echo '<script>window.history.back()</script>';
	
}
?>