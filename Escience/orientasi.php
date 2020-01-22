<?php
include "koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>


    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Dikmas</title>

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
        
    
<style type="text/css">
	
	.bg-primary{
		background-color: #ffffff;
	}
	aside {
    padding: 220px;

}
.bg-primary {
    padding: 220px 100px;
}
.menu {
    padding: 100px 100px;
}
.contnt {
    padding: 0px 10px;
}
.bg-primary .btn{
    padding: 5px 5px;
    
}
.container{color: #000000; width: 100%; padding: 0px 100px }
.a{color: #9e9e9e }
.b{color: #000000 }
.container-fluid {background:linear-gradient(45deg, #a813dc, #fc7e1e);}
.grafik {background:linear-gradient(45deg, #a813dc, #fc7e1e);}

</style>

</head>

<body id="page-top">
  <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>

                <p class="navbar-brand page-scroll" href="#page-top" style="font-family: 'Lato', sans-serif;color: white;">Unit Layanan Terpadu<br> PP PAUD dan Dikmas Jawa Barat</p>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="index.html" style="margin-top: 5%;color: white;">Tentang Kami</a>
                    </li>
                    <li>
                        <a href="login.php" style="margin-top: 3%; color: white;">Edisi Layanan Kegiatan</a>
                    </li>
                    <li>
                        <a href="portfolio.html" style="margin-top: 3%; color: white;">Ganti Layanan Kegiatan</a>
                    </li>
                    <li>
                        <a href="contact.html" style="margin-top: 6%; color: white;">Kontak</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
<section class="menu">
   <div class="col-md-7">
                    <h4>Orientasi Teknis Operator Pemetaan Mutu</h4>
                <div class="a">
                    <h5> Berikan penilaian Anda terhadap layanan dari PP PAUD dan Dikmas Jawa Barat </h5> 
                </div>

                </div>
                <div class="col-lg-8 card m-5 p-5">
            <form action="proses_penilaian.php" method="POST">
                <div class="form-group input-material">
                    <label class="a"> Kota/Kabupaten</label>
                    <select class="form-control" style="width:50%;" name="Nama_Kegiatan"  required>
                    <option value="Penilaian">Jawaban Anda</option>
                </div>
                <div class="form-group input-material">
                    <label class="a"> Tanggal Kegiatan</label>
                    <input type="date" style="width:50%;" class="form-control" name="Tanggal_Kegiatan" placeholder="Jawaban Anda" required>
                </div>
            
</section>
<section id="about-second" class="padding80">
    <div class="container">

        <div class="row content-area"> 

            <div class="col-xs-12 col-sm-5 col-md-5">
                <div class="about-img">
                    <div class="about-image3">
                         <div class="a">
        
        <h5> Di isi dengan memberi tanda centang/checklist pada kolom yang tersedia </h5>
        
    </div>
                        <form action="radiobutton.php" method="post">
     Kesesuaian materi dengan tujuan pelaksanaan.
    <br><input type="radio" name="gender" value="P"  />Sangat Baik
    <br><input type="radio" name="gender" value="P"  />Baik
    <br><input type="radio" name="gender" value="P"  />Cukup
    <br><input type="radio" name="gender" value="P"  />Kurang</br>

        </form>

        <form action="radiobutton.php" method="post">
            <br> Kesesuaian materi dengan kebutuhan peserta.
            <br><input type="radio" name="gender" value="P"  />Sangat Baik
            <br><input type="radio" name="gender" value="P"  />Baik
            <br><input type="radio" name="gender" value="P"  />Cukup
            <br><input type="radio" name="gender" value="P"  />Kurang</br>

        </form>
        <br/>
        <form action="radiobutton.php" method="post">
             Kesesuaian jadwal dengan kegiatan.
            <br><input type="radio" name="gender" value="P"  />Sangat Baik
            <br><input type="radio" name="gender" value="P"  />Baik
            <br><input type="radio" name="gender" value="P"  />Cukup
            <br><input type="radio" name="gender" value="P"  />Kurang</br>

        </form>
        <br/>
        <form action="radiobutton.php" method="post">
             Kecukupan waktu dan materi.
            <br><input type="radio" name="gender" value="P"  />Sangat Baik
            <br><input type="radio" name="gender" value="P"  />Baik
            <br><input type="radio" name="gender" value="P"  />Cukup
            <br><input type="radio" name="gender" value="P"  />Kurang</br>

        </form>
        <br/>
        <form action="radiobutton.php" method="post">
             Penguasaan fasilitator terhadap materi.
            <br><input type="radio" name="gender" value="P"  />Sangat Baik
            <br><input type="radio" name="gender" value="P"  />Baik
            <br><input type="radio" name="gender" value="P"  />Cukup
            <br><input type="radio" name="gender" value="P"  />Kurang</br>

        </form>
        <br/>
        <form action="radiobutton.php" method="post">
             Penguasaan fasilitator terhadap media pembelajaran.
            <br><input type="radio" name="gender" value="P"  />Sangat Baik
            <br><input type="radio" name="gender" value="P"  />Baik
            <br><input type="radio" name="gender" value="P"  />Cukup
            <br><input type="radio" name="gender" value="P"  />Kurang</br>

        </form>
        <br/>
        <form action="radiobutton.php" method="post">
             Kedisiplinan fasilitator.
            <br><input type="radio" name="gender" value="P"  />Sangat Baik
            <br><input type="radio" name="gender" value="P"  />Baik
            <br><input type="radio" name="gender" value="P"  />Cukup
            <br><input type="radio" name="gender" value="P"  />Kurang</br>

        </form>
        <br/>
        <form action="radiobutton.php" method="post">
             Interaksi fasilitator dengan peserta.
            <br><input type="radio" name="gender" value="P"  />Sangat Baik
            <br><input type="radio" name="gender" value="P"  />Baik
            <br><input type="radio" name="gender" value="P"  />Cukup
            <br><input type="radio" name="gender" value="P"  />Kurang</br>

        </form>
        <br/>
        <form action="radiobutton.php" method="post">
             Kualitas layanan Kepanitiaan.
            <br><input type="radio" name="gender" value="P"  />Sangat Baik
            <br><input type="radio" name="gender" value="P"  />Baik
            <br><input type="radio" name="gender" value="P"  />Cukup
            <br><input type="radio" name="gender" value="P"  />Kurang</br>

        </form>
        <br/>
        <form action="radiobutton.php" method="post">
             Kualitas kebersihan dan penyajian konsumsi.
            <br><input type="radio" name="gender" value="P"  />Sangat Baik
            <br><input type="radio" name="gender" value="P"  />Baik
            <br><input type="radio" name="gender" value="P"  />Cukup
            <br><input type="radio" name="gender" value="P"  />Kurang</br>

        </form>
        <br/>
        <form action="radiobutton.php" method="post">
             Kualitas gizi dan variasi konsumsi.
            <br><input type="radio" name="gender" value="P"  />Sangat Baik
            <br><input type="radio" name="gender" value="P"  />Baik
            <br><input type="radio" name="gender" value="P"  />Cukup
            <br><input type="radio" name="gender" value="P"  />Kurang</br>

        </form>
        <br/>
        <form action="radiobutton.php" method="post">
             Kenyamanan ruangan.
            <br><input type="radio" name="gender" value="P"  />Sangat Baik
            <br><input type="radio" name="gender" value="P"  />Baik
            <br><input type="radio" name="gender" value="P"  />Cukup
            <br><input type="radio" name="gender" value="P"  />Kurang</br>

            </form>

            </div>         
            </div>
            <br/>
            <button type="button" class="btn btn-success" onclick="displayRadioValue()"> 
                Submit 
            </button> 
            </div>

            <div class="col-md-1">

            </div>
            <div class="col-xs-12 col-sm-7 col-md-6">
                <div class="heading">
                    <p align="center"><?php include "column.php";?></p>
                    <p align="center"><?php include "column.php";?></p>
                    <p align="center"><?php include "column.php";?></p>
                    <p align="center"><?php include "column.php";?></p>
                </div>
            </div>       
</section>

<script> 
        function displayRadioValue() { 
            document.getElementById("result").innerHTML = ""; 
            var ele = document.getElementsByTagName('input'); 
              
            for(i = 0; i < ele.length; i++) { 
                  
                if(ele[i].type="radio") { 
                  
                    if(ele[i].checked) 
                        document.getElementById("result").innerHTML 
                                += ele[i].name + " Value: " 
                                + ele[i].value + "<br>"; 
                } 
            } 
        } 
    </script> 


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
<br/>
<section id="contact" style="background-color: #0aabe2; padding: 10px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-4" style="color: white; font-family: Roboto;">
                    <h4>ALAMAT</h4>
                    <p>Jl. Jayagiri No.63, Jayagiri, Lembang,<br>Kabupaten Bandung Barat,<br>Jawa Barat 40391</p>
                    <p>Phone : 022-2786017<br>Fax: 022-27887474<br>Email: pauddikmasjabar@kemdikbud.go.id</p>
                </div>
                <div class="col-lg-4" style="color: white; font-family: Roboto;">
                    <h4>WAKTU PELAYANAN</h4>
                    <p>Senin s.d Kamis:<br> 07.30 - 16.00 WIB</p>
                    <p>Jumat : <br>07.30 - 16.30 WIB</p>
                </div>
                <div class="col-lg-4" style="color: white; font-family: Roboto;">
                    <h4>IKUTI KAMI</h4>
                        <!--Facebook-->
                            <a class="fb-ic mr-3" role="button"><i class="fab fa-lg fa-facebook-f"></i></a>
                            <!--Twitter-->
                            <a class="tw-ic mr-3" role="button"><i class="fab fa-lg fa-twitter"></i></a>
                            <!--Google +-->
                            <a class="gplus-ic mr-3" role="button"><i class="fab fa-lg fa-google-plus-g"></i></a>
                            <!--Linkedin-->
                            <a class="li-ic mr-3" role="button"><i class="fab fa-lg fa-linkedin-in"></i></a>
                            <!--Instagram-->
                            <a class="ins-ic mr-3" role="button"><i class="fab fa-lg fa-instagram"></i></a>
                            <!--Pinterest-->
                            <a class="pin-ic mr-3" role="button"><i class="fab fa-lg fa-pinterest"></i></a>
                            <!--Vkontakte-->
                            <a class="vk-ic mr-3" role="button"><i class="fab fa-lg fa-vk"></i></a>
                            <!--Stack Overflow-->
                            <a class="so-ic mr-3" role="button"><i class="fab fa-lg fa-stack-overflow"></i></a>
                            <!--Youtube-->
                            <a class="yt-ic mr-3" role="button"><i class="fab fa-lg fa-youtube"></i></a>
                            <!--Slack-->
                            <a class="slack-ic mr-3" role="button"><i class="fab fa-lg fa-slack-hash"></i></a>
                            <!--Github-->
                            <a class="git-ic mr-3" role="button"><i class="fab fa-lg fa-github"></i></a>
                            <!--Comments-->
                            <a class="comm-ic mr-3" role="button"><i class="fas fa-lg fa-comments"></i></a>
                            <!--Email-->
                            <a class="email-ic mr-3" role="button"><i class="far fa-lg fa-envelope"></i></a>
                            <!--Dribbble-->
                            <a class="dribbble-ic mr-3" role="button"><i class="fab fa-lg fa-dribbble"></i></a>
                            <!--Reddit-->
                            <a class="reddit-ic" role="button"><i class="fab fa-lg fa-reddit-alien"></i></a>
                            
                    <p>Senin s.d Kamis:<br> 07.30 - 16.00 WIB</p>
                    <p>KUNJUNGI KAMI</p>
                    <a href="www.pauddikmasjabar.kemdikbud.go.id" style="font-size: 18px; color: white;">www.pauddikmasjabar.kemdikbud.go.id</a>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
<div class="container">
<div class="row">
<div class="col-md-12 text-center">
<p style="font-size: 12px; color: white;">Copyright © 2019 All Rights Reserved by PP-PAUD DAN DIKMAS JAWA BARAT </p>
</div>
</div>
</div>
</div>
    </section>
</body>
</html>
