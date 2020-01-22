<?php 
session_start();
// cek apakah yang mengakses halaman ini sudah login
if($_SESSION['level']=="" and $_SESSION['level']=="Bimbel"){
 header("location:index.php");
}
$username=$_SESSION['username'];
?>

<!DOCTYPE html>
<html>
<title>Escience</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=roboto">

<style>
body,h1,h2,h3,h4,h5 {font-family: "roboto", sans-serif}
body {font-size:16px;}
.w3-half img{margin-bottom:-6px;margin-top:16px;opacity:0.8;cursor:pointer}
.w3-half img:hover{opacity:1}
.w3-red{background-color:#171616!important}
</style>
<body>

<!-- Sidebar/menu -->
<?php 
  include 'navbar.php';
 ?>
<!-- Top menu on small screens -->
<header class="w3-container w3-top w3-hide-large w3-red w3-xlarge w3-padding">
  <a href="javascript:void(0)" class="w3-button w3-red w3-margin-right" onclick="w3_open()">☰</a>
  <span>Company Name</span>
</header>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:340px;margin-right:40px">

  <!-- Header -->
  <div class="w3-container" style="margin-top:80px" id="showcase">
    <h1 class="w3-jumbo"><b>Escience</b></h1>
  </div>
  
  <div class="w3-row-padding">

  <!-- Contact -->
  <div class="w3-container" id="contact" style="margin-top:75px">
   <p><a class="w3-text-indigo" href="materi.php">Beranda</a> / <a class="w3-text-indigo" href="materi-tambah.php">Tambah Data</a></p>  
    <div class="w3-section">
        <table class="w3-table" cellpadding="5" cellspacing="0" border="1">
    <thead>
      <tr class="w3-black" bgcolor="#f44336!important">
        <th>ID materi</th>
        <th>Image</th>
        <th>URL</th>
        <th>Nama materi</th>
        <th>Teori</th>
        <th>Soal</th>
        <th>Akses</th>
      </tr>
    </thead>
    <tbody>
      <?php
      error_reporting(0);
      include('config.php');
      $query = mysql_query("SELECT * FROM materi where nama='".$_SESSION['username']."'ORDER BY idMateri DESC") or die(mysql_error());
      if(mysql_num_rows($query) == 0){
        echo '<tr><td colspan="6">Tidak ada data!</td></tr>';
      }else{
        while($data = mysql_fetch_assoc($query)){
          echo '<tr>';
            echo '<td>'.$data['idMateri'].'</td>';
             echo "<td><img src='imgMateri/".$data['imgMateri']."' width='100px' height='80px'/>";
            echo '<td>'.$data['URL'].'</td>';
            echo '<td>'.$data['namaMateri'].'</td>';
            echo '<td>'.$data['Teori'].'</td>';
            echo '<td>'.$data['Soal'].'</td>';
            echo '<td><a href="materi-edit.php?idMateri='.$data['idMateri'].'">Edit</a> / 
  <a href="materi-hapus.php?idMateri='.$data['idMateri'].'" onclick="return confirm(\'Yakin?\')">Hapus</a></td>';
          echo '</tr>';   
        }
      }
      ?>
    </tbody>
  </table>
  </div>

<!-- End page content -->
</div>

<!-- W3.CSS Container -->
<div class="w3-light-grey w3-container w3-padding-32" style="margin-top:75px;padding-right:58px"><p class="w3-right"></div>
</body>
</html>
