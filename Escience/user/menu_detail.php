<!DOCTYPE html>
<html>
<title>Escience</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
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
<style>
body {font-family: "Times New Roman", Georgia, Serif;}
h1,h2,h3,h4,h5,h6 {
    font-family: "Playfair Display";
    letter-spacing: 5px;
}
</style>
<body>
<?php 
  include 'navbar.php';
 ?>
<!-- Page content -->
<div class="w3-content" style="max-width:1100px">

  <!-- About Section -->
  <div class="w3-row w3-padding-64" id="about">
  <?php
     include 'config.php';
     $idMateri = $_GET['idMateri']; 
      $query = mysql_query("SELECT * FROM materi where idMateri='$idMateri' ORDER BY idMateri DESC") or die(mysql_error());
      while($data = mysql_fetch_array($query)){
       ?>
    <div class="w3-col m6 w3-padding-large w3-hide-small">
    <img src="../bimbel/imgMateri/<?php echo $data['imgMateri']; ?>" class="w3-round w3-image w3-opacity-min" alt="Table Setting" width="600" height="750">
    </div>
    <div class="w3-col m6 w3-padding-large">
      <h1 class="w3-center"><?php echo $data['namaMateri']; ?></h1><br>
      <p align="justify" class="w3-large">
        <?php echo $data['Teori']; ?>
      </p>
    </div>
    <?php
      }

     ?>
  </div>


  <!-- Menu Section -->
  <div class="w3-row w3-padding-64" id="menu">
  <?php
     include 'config.php';
     $idMateri = $_GET['idMateri']; 
      $query = mysql_query("SELECT * FROM materi where idMateri='$idMateri' ORDER BY idMateri DESC") or die(mysql_error());
      while($data = mysql_fetch_array($query)){
       ?>
    <div class="w3-col l6 w3-padding-large">
      <h1 class="w3-center">Video Pembelajaran</h1><br>
      <h4><?php echo $data['namaMateri']; ?></h4>
      <p align="justify" class="w3-text-grey">
        <?php echo $data['Teori']; ?>
      </p>    
    </div>
    
    <div class="w3-col l6 ">
     <?php 
      echo "<iframe width='480' height='320' src='https://www.youtube.com/embed/".$data['URL']."'></iframe>"
      ?>



    </div>
    <?php
  }
  ?>
  </div>

  <hr>

<!-- Footer -->
<footer class="w3-center w3-light-grey w3-padding-32">
  
</footer>
   <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="vendor/scrollreveal/scrollreveal.min.js"></script>
    <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- Theme JavaScript -->
    <script src="js/creative.min.js"></script>
</body>
</html>
