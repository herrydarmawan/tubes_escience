<?php 
session_start();
$username=$_SESSION['username'];
?>

<?php
if(isset($_POST['subtambah'])){
	include('config.php');
	$idMateri	= $_POST['idMateri'];
	//gambar event
	$ekstensi_a = array('png','jpg');
	$nama 		= $_FILES['imgMateri']['name'];
	$x			= explode(".", $nama);
	$ekstensi 	= strtolower(end($x));
	$ukuran		= $_FILES['imgMateri']['size'];
	$file_tmp 	= $_FILES['imgMateri']['tmp_name'];
	$url		= $_POST['url'];
	$namaMateri	= $_POST['namaMateri'];
	$teori		= $_POST['teori'];
	$soal		= $_POST['soal'];
	$usernama 	= $_POST['usernama'];

	$input = mysql_query("INSERT INTO materi VALUES('$idMateri','$nama','$url','$namaMateri','$teori','$soal','$usernama')") 
	or die(mysql_error());
		
	if($input){
		
		echo 'Data berhasil di tambahkan! ';		
		echo "<script language=\"javascript\">alert(\"Data Sudah di simpan! \");document.location.href='materi.php';</script>";		
		
	}else{
			echo 'Gagal menambahkan data! ';
			echo '<a href="materi-tambah.php">Kembali</a>';	
			}

}else{

	echo '<script>window.history.back()</script>';

}
if(in_array($ekstensi, $ekstensi_a) === true){
		    if($ukuran < 1044070){			
			move_uploaded_file($file_tmp, './bimbel/imgMateri/'.$nama);
			$query = mysql_query("INSERT INTO bimbel VALUES('$idMateri', '$nama','$namaMateri', '$Teori','$Soal')");
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