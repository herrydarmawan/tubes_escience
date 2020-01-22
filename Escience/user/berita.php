<!DOCTYPE html>
<html>
<title>Kuliner Urang Sunda</title>
 <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">



    <title>Kuliner Urang Sunda</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
      <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
      <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
      <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

      <!-- Plugin CSS -->
      <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

      <!-- Theme CSS -->
      <link href="css/creative.min.css" rel="stylesheet">
  <!-- Theme style -->
  <link rel="stylesheet" href="css/AdminLTE.min.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <!-- iCheck -->
<style>
body {font-family: "Times New Roman", Georgia, Serif;}
  h1,h2,h3,h4,h5,h6 {
    font-family: "Playfair Display";
    letter-spacing: 5px;
  }
.w3-sidebar {
  z-index: 3;
  width: 250px;
  top: 43px;
  bottom: 0;
  height: inherit;
}
</style>
<body>

<!-- Navbar -->
<div class="w3-top">
  <div class="w3-bar w3-white w3-padding w3-card" style="letter-spacing:4px;">
    <a href="#home" class="w3-bar-item w3-button">Kuliner Urang Sunda</a>
    <!-- Right-sided navbar links. Hide them on small screens -->
    <div class="w3-right w3-hide-small">
      <a href="index.php" class="w3-bar-item w3-button">Home</a>
      <a href="menu.php" class="w3-bar-item w3-button">Menu</a>
      <a href="event.php" class="w3-bar-item w3-button">Event</a>
      <a href="berita.php" class="w3-bar-item w3-button">Berita</a>
      <a href="login.php" class="w3-bar-item w3-button">Login</a>
    </div>
  </div>
</div>
    <div class="w3-content">
<div class="w3-main=" style="margin-left:10px">
  <div class="w3-row w3-padding-63">
                
      <table class="w3-table" border="0" width="100%">
      <tr>
       <?php 
        include 'config.php';
        $query = mysql_query("SELECT * FROM berita ORDER BY idBerita DESC") or die(mysql_error());
       $i = 0;
        while($data = mysql_fetch_array($query)){
        $i=$i+1;
       ?>
      <!-- Sebelah Kiri -->   
        <div class="w3-third w3-container">
        <div align="left" class="w3-padding-large w3-padding-32 w3-center">
     
        <td width="25%" style="vertical-align:top;">
        <img class="img-responsive page-header" src="admin/imgBerita/<?php echo $data['imgBerita']; ?>" alt="">
                <h4 align="center"><a href="berita-detail.php?id=<?php echo $data['idBerita']; ?>"><?php echo $data['namaBerita']; ?></a></h4>
                </td>
                 <?php
                 if(($i%4)==0){
                echo"</tr><tr>";
                   }
                 ?>
          </div>   
                <?php
              }

             ?>
          </tr>
          </table>
        </div>
        </div>  
    <!-- Tutup Sebelah Kiri -->

</body>
</html>
