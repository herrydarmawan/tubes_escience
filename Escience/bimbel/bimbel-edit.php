<!DOCTYPE html>
<html>
<title>Kuliner Urang Sunda</title>
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
<nav class="w3-sidebar w3-red w3-collapse w3-top w3-large w3-padding" style="z-index:3;width:300px;font-weight:bold;" id="mySidebar"><br>
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-button w3-hide-large w3-display-topleft" style="width:100%;font-size:22px">Close Menu</a>
  <div class="w3-container">
    <h4 class="w3-padding-64"><b>Kuliner Urang Sunda</b></h4>
  </div>
  <div class="w3-bar-block">
    <a href="admin.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Menu</a>
    <a href="resep.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Resep</a>
    <a href="event.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Event</a> 
    <a href="berita.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Berita</a>
    <a href="logout.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Logout</a> 
  </div>
</nav>

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
    <h1 class="w3-jumbo"><b>Kuliner Urang Sunda</b></h1>
  </div>
  
  <div class="w3-row-padding">
    
  <div id="modal01" class="w3-modal w3-black">
    <span class="w3-button w3-black w3-xxlarge w3-display-topright"></span>
    <div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-64">
      <img id="img01" class="w3-image">
      <p id="caption"></p>
    </div>
  </div>
<?php
    error_reporting(0);

  include('config.php');
  $id = $_GET['idMakanan'];
  $show = mysql_query("SELECT * FROM makanan WHERE idMakanan='$id'");
  if(mysql_num_rows($show) == 0){
    echo '<script>window.history.back()</script>';
    
  }else{

    $data = mysql_fetch_assoc($show);

    }
   ?>
  <!-- Contact -->
  <div class="w3-container" id="contact" style="margin-top:75px">
    <h1 class="w3-xxxlarge w3-text-red"><b>Isi Data Makanan.</b></h1>
    <hr style="width:50px;border:5px solid red" class="w3-round">
    <form action="makanan-edit-proses.php" method="post" enctype="multipart/form-data">
    <div class="w3-section">
        <label>ID Makanan</label>
        <input class="w3-input w3-border" type="text" name="idMakanan" readonly value="<?php echo $data['idMakanan'];?>">
      </div>
      <div class="w3-section">
        <label>Image</label>
        <input class="w3-input w3-border" type="file" name="imgMakanan" required>
      </div>
      <div class="w3-section">
        <label>Nama Makanan</label>
        <input class="w3-input w3-border" type="text" name="namaMakanan" required value="<?php echo $data['namaMakanan'];?>">
      </div>
      <div class="w3-section">
        <label>Deskripsi</label>
        <input class="w3-input w3-border" type="text" name="deskripsi" required value="<?php echo $data['deskripsi'];?>">
      </div>
      <div class="w3-section">
        <label>Id Resep</label>
        <input class="w3-input w3-border" type="text" name="idResep" required value="<?php echo $data['idResep'];?>">
      </div>
      <input type="submit" name="submit" value="Tambah Data" class="btn btn-primary btn-block btn-flat"></input >
    </form>  
  </div>

<!-- End page content -->
</div>

<!-- W3.CSS Container -->
<div class="w3-light-grey w3-container w3-padding-32" style="margin-top:75px;padding-right:58px"><p class="w3-right"></div>

<script>
</script>

</body>
</html>
