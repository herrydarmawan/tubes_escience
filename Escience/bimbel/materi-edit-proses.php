<?php
if(isset($_POST['subtambah'])){
include('config.php');
	$idResep	= $_POST['idResep'];
	$url		= $_POST['url'];
	$namaResep	= $_POST['namaResep'];
	$resep		= $_POST['resep'];

	$update = mysql_query("UPDATE resep SET idResep='$idResep',url='$url', namaResep='$namaResep',resep= '$resep' WHERE idResep='$idResep'") or die(mysql_error());
	
	if($update){
		
		echo 'Data berhasil di Edit! ';		
		echo "<script language=\"javascript\">alert(\"Data Sudah di Edit! \");document.location.href='resep.php';</script>";
		
	}else{
		
		echo 'Gagal menyimpan data! ';	
		echo '<a href="makanan-edit.php?id='.$id.'">Kembali</a>';
		
	}

}
else{

	echo '<script>window.history.back()</script>';

}
?>