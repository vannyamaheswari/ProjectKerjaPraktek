<?php

define("TYPE_CAPSULE","dplk");

require_once __DIR__. DIRECTORY_SEPARATOR . "lib" . DIRECTORY_SEPARATOR . "BardLib.php";

authMiddleware();
?>
<!DOCTYPE html>

<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <link rel="icon" href="img/logo.png" type="image/png" />
  <title>ADMIN | EFORM-DPLK</title>

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
                  <a class="nav-link" href="contact.html">Hubungi Kami</a>
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
                <h2>TABEL e-form Peserta DPLK</h2>
                <div class="page_link">
                <a href="#">Admin</a>
                  <a href="#">eForm PEserta DPLK</a>
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
  <?php

$pagination = new Zebra_Pagination();
$records_per_page = 5;
$data = DaftarDplk::take($records_per_page)->offset(($pagination->get_page() - 1) * $records_per_page);

if(isset($_GET['key']) && isset($_GET['q'])){
    $data = $data->where($_GET['key'], 'like', "%" . $_GET['q'] . "%");
    $pagination->records(DaftarDplk::where($_GET['key'], 'like', "%" . $_GET['q'] . "%")->count());
}else{
    $pagination->records(DaftarDplk::count());
}
$data = $data->get();

// the number of total records is the number of records in the array


// records per page
$pagination->records_per_page($records_per_page);

// here's the magic: we need to display *only* the records for the current page


$aa = ($data[0]->toArray());
//print_r($aa);
?>
  <div class="container">
        <div class="col-lg-12">
            <div class="panel-body">
            
            <form action="admin_form_dplk.php" method="get">
            <div class="form-row">
            <div class="form-group col-md-6">
                <input type="text" class="form-control" name="q" placeholder="Pencarian.." value="<?php echo isset($_GET['q']) ? htmlspecialchars($_GET['q']) : '' ?>">
                </div>
                <div class="form-group col-md-4">
                <select name="key" class="form-control">
                    <?php
/*
                    if(isset($_GET['key'])){
                        ?>
                         <option value="<?php echo $_GET['key']?>"><?php echo str_replace("_"," ",ucfirst($_GET['key'])); ?></option>
                        <?php
                    }else{
                        ?>
                        <option selected disabled="true">Berdasarkan</option>
                        <?php
                    }
                    ?>
                    
                    <?php 

                    foreach ($aa as $key => $value) {
                        echo "<option value='".$key."'>".ucfirst(str_replace("_"," ",$key))."</option>\n";
                    }*/
                    ?>
                    <option value="id">Id</option>
<option value="jenis">Jenis</option>
<option value="firstName">FirstName</option>
<option value="tempat">Tempat</option>
<option value="tanggal">Tanggal</option>
<option value="bulan">Bulan</option>
<option value="tahun">Tahun</option>
<option value="agama">Agama</option>
<option value="jen_kel">Jen kel</option>
<option value="status">Status</option>
<option value="nik">Nik</option>
<option value="alamat">Alamat</option>
<option value="RT">RT</option>
<option value="RW">RW</option>
<option value="zip">Zip</option>
<option value="kelurahan">Kelurahan</option>
<option value="kecamatan">Kecamatan</option>
<option value="kota">Kota</option>
<option value="provinsi">Provinsi</option>
<option value="email">Email</option>
<option value="noHp">NoHp</option>
<option value="nonpwp">Nonpwp</option>
<option value="negaraan">Negaraan</option>
<option value="pekerjaan">Pekerjaan</option>
<option value="gaji">Gaji</option>
<option value="pendapatan_lain">Pendapatan lain</option>
<option value="investasi">Investasi</option>
<option value="usia_pensiun">Usia pensiun</option>
<option value="iuran_kerja">Iuran kerja</option>
<option value="iuran_peserta">Iuran peserta</option>
<option value="firstName2">FirstName2</option>
<option value="tempat_lahir">Tempat lahir</option>
<option value="tanggal_lahir">Tanggal lahir</option>
<option value="bulan_lahir">Bulan lahir</option>
<option value="tahun_lahir">Tahun lahir</option>
<option value="alamat_w">Alamat w</option>
<option value="kecamatan_w">Kecamatan w</option>
<option value="kota_w">Kota w</option>
<option value="zip_w">Zip w</option>
<option value="tlp_rmh">Tlp rmh</option>
<option value="nomerhp_w">Nomerhp w</option>
<option value="hub_peserta">Hub peserta</option>
<option value="kerabat">Kerabat</option>
<option value="noKerabat">NoKerabat</option>
<option value="ktr_Nama">Ktr Nama</option>
<option value="jabatan">Jabatan</option>
<option value="alm_ktr">Alm ktr</option>
<option value="kec_ktr">Kec ktr</option>
<option value="tel_kantor">Tel kantor</option>
<option value="nama_lengkap">Nama lengkap</option>
<option value="l_tempat">L tempat</option>
<option value="lahir_tanggal">Lahir tanggal</option>
<option value="lahir_bulan">Lahir bulan</option>
<option value="lahir_tahun">Lahir tahun</option>
<option value="no_Induk">No Induk</option>
<option value="no_alamat">No alamat</option>
<option value="no_kec">No kec</option>
<option value="no_kota">No kota</option>
<option value="no_zip">No zip</option>
<option value="telp_No">Telp No</option>
<option value="kerja">Kerja</option>
<option value="kantor_nama">Kantor nama</option>
<option value="jenis_usaha">Jenis usaha</option>
<option value="jabat">Jabat</option>
<option value="penghasilan">Penghasilan</option>
<option value="no_rek">No rek</option>
<option value="nama_rek">Nama rek</option>
<option value="tgl_debet">Tgl debet</option>
<option value="nominal_debet">Nominal debet</option>
                </select>
                </div>
                <div class="form-group col-md-2">
                    <button class="btn btn-primary btn-block">Cari</button>
                </div>
            </div>
            </form>

                <div class="table-responsive">
            <table class="table">
            <thead class="thead-dark">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nik</th>
                <th scope="col">Nama</th>
                <th scope="col">Alamat</th>
                <th scope="col">NOHP</th>
                <th scope="col">Email</th>
                <th scope="col">KOTA</th>
                <th scope="col">Aksi</th>
            </tr>
            </thead>
            <tbody>
                <?php foreach($data as $item): ?>
                    <tr>
                        <td><?php echo $item->id?></td>
                        <td><?php echo $item->nik?></td>
                        <td><?php echo $item->firstName?></td>
                        <td><?php echo $item->alamat?></td>
                        <td><?php echo $item->noHp?></td>
                        <td><?php echo "{$item->email}"?></td>
                        <td><?php echo $item->kota?></td>
                        <td>
                            <button class="btn btn-primary" onclick="show('<?php echo $item->nik;?>');">Lihat</button>
                        </td>
                    </tr>
                <?php endforeach; ?>
                
            </tbody>
            </table>
                    <div class="d-flex justify-content-center">
                    <?php $pagination->render(); ?>
                    </div>
                </div>
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

  <script>
    function show(id){
        $.ajax({
            type: "get",
            url: "controller/dataDplk.php?nik="+id,
            dataType: "html",
            success: function (html) {
                $("#modal-show-content").html(html);
                $("#modal-show").modal('show');
            },
        });
    }
  </script>

</body>

</html>