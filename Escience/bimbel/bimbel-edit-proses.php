<?php
if(isset($_POST['submit'])){
include('config.php');
	$idMakanan	= $_POST['idMakanan'];
	$namaMakanan	= $_POST['namaMakanan'];
	//gambar event
	$ekstensi_a = array('png','jpg','jeg');
	$nama 		= $_FILES['imgMakanan']['name'];
	$x			= explode(".", $nama);
	$ekstensi 	= strtolower(end($x));
	$ukuran		= $_FILES['imgMakanan']['size'];
	$file_tmp 	= $_FILES['imgMakanan']['tmp_name'];
	//gambar event
	$deskripsi	= $_POST['deskripsi'];
	$idResep 	= $_POST['idResep'];

	$update = mysql_query("UPDATE makanan SET idMakanan='$idMakanan',imgMakanan='$nama', namaMakanan='$namaMakanan',deskripsi= '$deskripsi', idResep='$idResep' WHERE idMakanan='$idMakanan'") or die(mysql_error());
	
	if($update){
		
		echo 'Data berhasil di Edit! ';		
		echo "<script language=\"javascript\">alert(\"Data Sudah di Edit! \");document.location.href='admin.php';</script>";
		
	}else{
		
		echo 'Gagal menyimpan data! ';	
		echo '<a href="makanan-edit.php?id='.$id.'">Kembali</a>';
		
	}

}
else{

	echo '<script>window.history.back()</script>';

}
?>