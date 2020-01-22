<?php 
session_start();
$username=$_SESSION['username'];
?>

<?php
if(isset($_POST['subtambah'])){
	include('config.php');
	$idBimbel	= $_POST['idBimbel'];
	//gambar event
	$ekstensi_a = array('png','jpg');
	$nama 		= $_FILES['imgBimbel']['name'];
	$x			= explode(".", $nama);
	$ekstensi 	= strtolower(end($x));
	$ukuran		= $_FILES['imgBimbel']['size'];
	$file_tmp 	= $_FILES['imgBimbel']['tmp_name'];
	//gambar event
	$namaBimbel	= $_POST['namaBimbel'];
	$deskripsi	= $_POST['deskripsi'];
	$idMateri	= $_POST['idMateri'];
	$usernama 	= $_POST['usernama'];

	$input = mysql_query("INSERT INTO bimbel VALUES('$idBimbel', '$nama','$namaBimbel', '$deskripsi', '$idMateri','$usernama')") 
	or die(mysql_error());
		
	if($input){
		
		echo 'Data berhasil di tambahkan! ';		
		echo "<script language=\"javascript\">alert(\"Data Sudah di simpan! \");document.location.href='bimbel.php';</script>";		
		
	}else{
			echo 'Gagal menambahkan data! ';
			echo '<a href="bimbel-tambah.php">Kembali</a>';	
			}

}else{

	echo '<script>window.history.back()</script>';

}

if(in_array($ekstensi, $ekstensi_a) === true){
		    if($ukuran < 1044070){			
			move_uploaded_file($file_tmp, './bimbel/imgBimbel/'.$nama);
			$query = mysql_query("INSERT INTO bimbel VALUES('$idBimbel', '$nama','$namaBimbel', '$deskripsi')");
			if($query){
				echo 'GAGAL MENGUPLOAD';
			}else{
				echo 'FILE BERHASIL DI UPLOAD';
			}
		    }else{
			echo 'UKURAN FILE TERLALU BESAR';
		    }
	       }

?>