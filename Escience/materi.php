<!DOCTYPE html>
<html lang="en">
<title>Escience</title>
<head>
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
.btn-primary{
    background-color: #333;
    border-color: #333;
}

</style>
<body>

 <?php 
    include 'navbar.php';
  ?>

    <!-- <div class="container"> -->
    <div class="w3-content">
    <br>
    <br>
    <br>

        <!-- Page Heading -->
        <div class="w3-row">
            <div class="col-lg-12">
                <h1 class="page-header">E-Science
                </h1>
            </div>
        </div>
        <!-- /.row -->
    
        <!-- Project One -->
        <div class="w3-row">
        <?php
     include 'config.php';
      $query = mysql_query("SELECT * FROM bimbel join materi on (bimbel.idMateri=materi.idMateri) ORDER BY idBimbel DESC") or die(mysql_error());
      while($data = mysql_fetch_array($query)){
       ?>
            <div class="col-md-7">
                <a href="#">
                    <img class="img-responsive" src="../bimbel/imgBimbel/<?php echo $data['imgBimbel']; ?>" alt=""><br>
                </a>
            </div>
            <div class="col-md-5">
                <h2><?php echo $data['namaBimbel']; ?></h2>
                <h4><?php echo $data['namaMateri']; ?></h4>
                <p align="justify"><?php echo $data['Teori']; ?></p>
                <input type="hidden" name="idMateri" value="<?php echo $data['idMateri']; ?>">
                <a class="btn btn-primary" href="menu_detail.php?idBimbel=<?php echo $data['idBimbel']; ?>
                & idMateri=<?php echo $data['idMateri'];?>
                ">See More <span class="glyphicon glyphicon-chevron-right"></span></a>  
            </div>
             <?php
         }

     ?>
        </div>

        <!-- /.row -->

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                </div>
            </div>
            <!-- /.row -->
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

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