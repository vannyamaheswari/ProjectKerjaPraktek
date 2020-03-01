<?php
define("TYPE_CAPSULE","personal");

require_once __DIR__. DIRECTORY_SEPARATOR . "lib" . DIRECTORY_SEPARATOR . "BardLib.php";

?>
<!DOCTYPE html>

<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <link rel="icon" href="img/logo.png" type="image/png" />
  <title>ADMIN | EFORM-INDIVIDUAL</title>

  <!-- Bootstrap Core CSS -->
   <link rel="stylesheet" href="css/bootstrap.css" />
    <link rel="stylesheet" href="css/flaticon.css" />
    <link rel="stylesheet" href="css/themify-icons.css" />
    <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css" />
    <link rel="stylesheet" href="vendors/nice-select/css/nice-select.css" />

  <!-- Custom CSS -->
  <link rel="stylesheet" href="css/style.css"/>
<!--style line-->
  <style>
hr { 
  display: block;
  margin-top: 3em;
  margin-bottom: 3em;
  margin-left: auto;
  margin-right: auto;
  border-style: inset;
  border-width: 1px;
} 
</style>

</head>

<body class="bg-light">
<div class="modal fade" id="modal-show" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Detail Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" id="modal-show-content">

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

  <header class="header_area white-header">
      <div class="main_menu">
        <nav class="navbar navbar-expand-lg navbar-light">
          <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <a class="navbar-brand" href="index.html">
              <img class="logo-2" src="img/logo2.png" alt="" />
            </a>
            <button
              class="navbar-toggler"
              type="button"
              data-toggle="collapse"
              data-target="#navbarSupportedContent"
              aria-controls="navbarSupportedContent"
              aria-expanded="false"
              aria-label="Toggle navigation"
            >
              <span class="icon-bar"></span> <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div
              class="collapse navbar-collapse offset"
              id="navbarSupportedContent"
            >
              <ul class="nav navbar-nav menu_nav ml-auto">
                <li class="nav-item">
                  <a class="nav-link" href="index.html">Beranda</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="about-us.html">Tentang Kami</a>
                </li>
                <li class="nav-item submenu dropdown">
                  <a
                    href="#"
                    class="nav-link dropdown-toggle"
                    data-toggle="dropdown"
                    role="button"
                    aria-haspopup="true"
                    aria-expanded="false"
                    >Produk Kami</a
                  >
                  <ul class="dropdown-menu">
                    <li class="nav-item">
                      <a class="nav-link" href="Pinjaman.html">Pinjaman</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="Simpanan.html"
                        >Simpanan</a
                      >
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="dplk.html">DPLK</a>
                    </li>
                  </ul>
                </li>
                <li class="nav-item">
                      <a class="nav-link" href="komunitas.html"
                        >Komunitas</a
                      >
                    </li>
                <li class="nav-item">
                  <a class="nav-link" href="menu_daftar.html">Register</a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
      </div>
    </header>
    <section class="banner_area">
      <div class="banner_inner d-flex align-items-center">
        <div class="overlay"></div>
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-6">
              <div class="banner_content text-center">
                <h2>Customer Service Admin Page</h2>
                <div class="page_link">
                <a href="#">Admin</a>
                  
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

  <div class="container" id="page-top">
    <div class="py-5 text-center">
      
    </div>
  </div>

  <!-- Form -->
  
  <div class="container">
        <div class="col-lg-12 mb-5">
            <div class="panel-body">
                <?php

                if(isLogedIn()){
                    ?>
                    <center><h1>MENU</h1></center>
                    <div class="row">
                      <div class="col-md-4">
                        <a href="admin_bima_person.php" class="btn btn-primary btn-block" style="font-size:20pt;padding-top:50px;padding-bottom:50px">Tabel Bima Personal</a>
                      </div>

                      <div class="col-md-4">
                        <a href="admin_form_dplk.php" class="btn btn-success btn-block" style="font-size:20pt;padding-top:50px;padding-bottom:50px">Tabel DPLK</a>
                      </div>

                      <div class="col-md-4">
                        <a href="logout.php" class="btn btn-danger btn-block" style="font-size:20pt;padding-top:50px;padding-bottom:50px">LOGOUT</a>
                      </div>
                    </div>
                    <?php
                }else{
                    ?>
                    <div class="card">
                    <article class="card-body">
                    <h4 class="card-title mb-4 mt-1">Sign in</h4>
                        <form method="post" action="login.php">
                        <div class="form-group">
                            <label>Your email</label>
                            <input name="email" class="form-control" placeholder="Email" type="email">
                        </div> 
                        <div class="form-group">
                            <label>Password</label>
                            <input class="form-control" name="password" placeholder="******" type="password">
                        </div> 
                        <div class="form-group"> 
                        <div class="checkbox">
                        </div> 
                        </div> 
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-block"> Login  </button>
                        </div>                                                     
                    </form>
                    </article>
                    </div> 
                    <?php
                }

                ?>
            </div>
        </div>
  </div>
<!--================ Start footer Area  =================-->
    <footer class="footer-area section_gap">
            <div class="container">
              <div class="row">
               <div class="col-lg-4 col-md-6 single-footer-widget">
            <h2 class="text-white">Kantor Pusat</h2>
            <ul>
              <li><a>Jalan Pemuda No.142 Semarang<br>Gedung Grinatha Lt.1-7<br>Telp.024-3547541 | Fax.024-3540170</a></li>
            </ul>
          </div>
         
          <div class="col-lg-4 col-md-6 single-footer-widget">
            <h2 class="text-white">Kontak Kami</h2>
            <ul>
              <li><a>14066 (Call Center & Pengaduan)</a></li>
              <li><a>callcenter14066@bankjateng.co.id</a></li>
              <li><a>sekretaris.perusahaan@bankjateng.co.id</a></li>
             
            </ul>
          </div>
              <div class="row footer-bottom d-flex justify-content-between">
                <p class="col-lg-2 col-sm-2 footer-text m-4 text-white">
                  <img src="img/logow.png">

                  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                </p>
                <div class=" footer-social"><br><br><br>
                  <a href="https://www.facebook.com/bankjatengku/?rf=117540021645917"><i class="ti-facebook"></i></a>
                  <a href="https://twitter.com/bank_jateng?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor"><i class="ti-twitter"></i></a>
                  <a href="https://www.instagram.com/bankjateng/?hl=id"><i class="ti-instagram"></i></a>
                </div>
              </div>
            </div>
          </footer>
          <!--================ End footer Area  =================-->
          
  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded js-scroll-trigger" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Bootstrap core JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
  
  <script>
    $(document).ready(function(){
      <?php 
            $msg = getFlash("message");
            if($msg){
              echo "Swal.fire(".json_encode($msg).")";
            }
        ?>
    });
  </script>
</body>

</html>