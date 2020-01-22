<!DOCTYPE html>
<html lang="en">

<head>


    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">



    <title>Escience</title>

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

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
<style type="text/css">

  body {font-family: "Times New Roman", Georgia, Serif;}
  h1,h2,h3,h4,h5,h6 {
    font-family: "Playfair Display";
    letter-spacing: 5px;
  }
  .portfolio-box .portfolio-box-caption {
    background-color:rgba(230, 174, 160, 0.9);
  }
  .bg-primary{
    background-color: #b3b1b1;
  }
  aside {
    padding: 20px;
}
</style>

</head>

<body>

    <!-- Navbar (sit on top) -->
<?php 
  include 'navbarindex.php';
 ?>
    <header>
        <div class="header-content">
          <div class="login-box">
  <!-- /.login-logo -->
  <div class="login-box-body">
    <h3 class="login-box-msg">Register</h3>
    <p class="login-box-msg">E-Science</p>

    <form action="register-proses.php" method="post">
          <div class="form-group has-feedback">
            <select  type="text" class="form-control" placeholder="Jenis Pengguna" name="level" style="border-radius:5px;" required>
       <option value="" readonly >Pilih Jenis Pengguna</option>  
       <option value="Siswa">Siswa</option>
       <option value="Bimbel">Bimbel</option>
      </select>
          </div>
   <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="Nama" id="nama" name="nama" style="border-radius:5px;" required>
      </div>
        <div class="form-group has-feedback">
        <input type="email" class="form-control" placeholder="E-mail" id="email" name="email" style="border-radius:5px;" required>
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="Username" id="username" name="id_user" style="border-radius:5px;" required>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="Password" id="password" name="password" style="border-radius:5px;" required>
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
   
        <!-- /.col -->
        <div class="col-xs-18">
          <div class="checkbox icheck">
            <label>
              <input type="checkbox" required>I accept the <b>Terms of Use and  Privacy Police</b> 
            </label>
          </div>
          <button type="submit" name="register" class="btn btn-primary btn-block btn-flat" style="width:318px;border-radius:5px;">Register</button>
        </div>
        <div class="row">
              <p>Already have an Account?<a href="login.php"> <b>Login</b></a></p>
        <!-- /.col -->
      </div>
    </form>


    <!-- <div class="social-auth-links text-center">
      <p>- OR -</p>
       <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign in using
        Facebook</a>
      <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Sign in using
        Google+</a>
    </div>
        </div> -->
    </header>

 
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

    <script src="plugins/jQuery/jquery-3.1.1.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="plugins/iCheck/icheck.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
  });
</script>

</body>

</html>
