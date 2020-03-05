<?php
define("TYPE_CAPSULE","personal");

require_once __DIR__."/lib/BardLib.php";

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
                <h2>TABEL e-form Pembukaan Rekening Bima</h2>
                <div class="page_link">
                <a href="#">Admin</a>
                  <a href="#">eForm Bima Personal</a>
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
$data = Daftar::take($records_per_page)->offset(($pagination->get_page() - 1) * $records_per_page);

if(isset($_GET['key']) && isset($_GET['q'])){
  $data = $data->where($_GET['key'], 'like', "%" . $_GET['q'] . "%");
  $pagination->records(Daftar::where($_GET['key'], 'like', "%" . $_GET['q'] . "%")->count());
}else{
  $pagination->records(Daftar::count());
}
$data = $data->get();


// records per page
$pagination->records_per_page($records_per_page);

// here's the magic: we need to display *only* the records for the current page


//$aa = ($data[0]->toArray());
?>
  <div class="container">
        <div class="col-lg-12">
            <div class="panel-body">
            
            <form action="admin_bima_person.php" method="get">
            <div class="form-row">
            <div class="form-group col-md-6">
                <input type="text" class="form-control" name="q" placeholder="Pencarian.." value="<?php echo isset($_GET['q']) ? htmlspecialchars($_GET['q']) : '' ?>">
                </div>
                <div class="form-group col-md-4">
                <select name="key" class="form-control">
                    <?php

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
                    
                    <option value="nik">NIK</option>
                    <option value="nama">Nama</option>
                    <option value="alamat">Alamat</option>
                    <option value="RT">RT</option>
                    <option value="RW">RW</option>
                    <option value="zip">Zip</option>
                    <option value="kelurahan">Kelurahan</option>
                    <option value="kecamatan">Kecamatan</option>
                    <option value="kota">Kota</option>
                    <option value="provinsi">Provinsi</option>
                    <option value="tempat">Tempat</option>
                    <option value="tgl_lahir">Tgl lahir</option>
                    <option value="bln_lahir">Bln lahir</option>
                    <option value="thn_lahir">Thn lahir</option>
                    <option value="email">Email</option>
                    <option value="noRum">NoRum</option>
                    <option value="noHp">NoHp</option>
                    <option value="noNPWP">NoNPWP</option>
                    <option value="kewarganegaraan">Kewarganegaraan</option>
                    <option value="gender">Gender</option>
                    <option value="status">Status</option>
                    <option value="agama">Agama</option>
                    <option value="pendidikan">Pendidikan</option>
                    <option value="pekerjaan">Pekerjaan</option>
                    <option value="nama_kantor">Nama kantor</option>
                    <option value="jabatan">Jabatan</option>
                    <option value="alm_kantor">Alm kantor</option>
                    <option value="tel_kantor">Tel kantor</option>
                    <option value="jenis_Penghasilan">Jenis Penghasilan</option>
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
                <th scope="col">Nik</th>
                <th scope="col">Nama</th>
                <th scope="col">Alamat</th>
                <th scope="col">TTL</th>
                <th scope="col">Email</th>
                <th scope="col">Pekerjaan</th>
                <th scope="col">Aksi</th>
            </tr>
            </thead>
            <tbody>
                <?php foreach($data as $item): ?>
                    <tr>
                        <td><?php echo $item->nik?></td>
                        <td><?php echo $item->nama?></td>
                        <td><?php echo $item->alamat?></td>
                        <td><?php echo "{$item->tempat}, {$item->tgl_lahir}-{$item->bln_lahir}-{$item->thn_lahir}"?></td>
                        <td><?php echo "{$item->email}"?></td>
                        <td><?php echo $item->pekerjaan?></td>
                        <td>
                            <button class="btn btn-primary" onclick="show('<?php echo $item->nik;?>');">Lihat</button>
                            <a href="cetak_siswa.php"><button class="btn btn-primary">Print</button></a>
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
            url: "controller/data.php?nik="+id,
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