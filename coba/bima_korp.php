<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <link rel="icon" href="img/favicon.png" type="image/png" />
    <title>EFORM-LEMBAGA</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css" />
    <link rel="stylesheet" href="css/flaticon.css" />
    <link rel="stylesheet" href="css/themify-icons.css" />
    <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css" />
    <link rel="stylesheet" href="vendors/nice-select/css/nice-select.css" />
    <!-- main css -->
    <link rel="stylesheet" href="css/style.css" />
  </head>

  <body>
    <!--================ Start Header Menu Area =================-->
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
                      <a class="nav-link" href="komunitas.html">Komunitas</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="contact.html">Hubungi Kami</a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link search" id="search">
                    <i class="ti-search"></i>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
      </div>
    </header>
    <!--================ End Header Menu Area =================-->

    <!--================Home Banner Area =================-->
    <section class="banner_area">
      <div class="banner_inner d-flex align-items-center">
        <div class="overlay"></div>
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-6">
              <div class="banner_content text-center">
                <h2>e-form Pembukaan Rekening Bima</h2>
                <div class="page_link">
                  <p>Lembaga</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--================End Home Banner Area =================-->

    <!--================ Start Popular Courses Area =================-->

  <div class="container" id="page-top">
    <div class="py-5 text-center">
     
    </div>
  </div>
  <!-- Form -->
    <div class="col-lg-8 mx-auto">
      <form action="connect2.php" method="post">
          <div class="mb-3">
            <label for="nama_Lembaga">Nama Yayasan/Organisasi</label>
            <input type="text" class="form-control" id="nama_Lembaga" name="nama_Lembaga" />
            <div class="invalid-feedback">
              Valid first name is required.
            </div>
          </div>

          <div class="mb-3">
          <label for="bidang">Bidang Usaha/Kegiatan</label>
          <div class="input-group">
            <input type="text" class="form-control" id="bidang" name="bidang" />
            <div class="invalid-feedback" style="width: 100%;">
              NIK wajib diisi.
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-3 mb-3">
            <label for="tempat">Tempat & Tanggal Pendirian</label>
            <input type="text" class="form-control" id="tempat" name="tempat" placeholder="Tempat" />
            <div class="invalid-feedback">
              Valid ttl is required.
            </div>
          </div>
          <div class="col-md-1 mb-3">
            <label for="tgl_berdiri">Tanggal</label>
            <input type="text" class="form-control" id="tgl_berdiri" name="tgl_berdiri" />
            <div class="invalid-feedback">
              Please select a valid tgl.
            </div>
          </div>
          <div class="col-md-1 mb-3">
            <label for="bln_berdiri">Bulan</label>
            <input type="text" class="form-control" id="bln_berdiri" name="bln_berdiri" />
            <div class="invalid-feedback">
              Please provide a valid bln.
            </div>
          </div>
          <div class="col-md-2 mb-3">
            <label for="thn_berdiri">Tahun</label>
            <input type="text" class="form-control" id="thn_berdiri" name="thn_berdiri" />
            <div class="invalid-feedback">
              tahun required.
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-3 mb-3">
            <label for="bentuk_usaha">Bentuk Badan Usaha</label>
            <select class="custom-select d-block w-100" id="bentuk_usaha" name="bentuk_usaha">
              <option value="">Pilih</option>
              <option>Yayasan</option>
              <option>Perkumpulan/Organisasi</option>
            </select>
            <div class="invalid-feedback">
              harap diisi.
            </div>
          </div>
        </div>

        <div class="mb-3">
          <label for="alamat">Alamat Yayasan/Organisasi</label>
          <input type="text" class="form-control" id="alamat" name="alamat" placeholder="1234 Main St" />
          <div class="invalid-feedback">
            Alamat harap diisi.
          </div>
        </div>
        
         <div class="row">
          <div class="col-md-1 mb-3">
            <label for="RT">RT</label>
            <input type="text" class="form-control" id="RT" name="RT" />
            <div class="invalid-feedback">
              Please select a valid RT.
            </div>
          </div>
          <div class="col-md-1 mb-3">
            <label for="RW">RW</label>
            <input type="text" class="form-control" id="RW" name="RW" />
            <div class="invalid-feedback">
              Please provide a valid RW.
            </div>
          </div>
          <div class="col-md-2 mb-3">
            <label for="zip">Kode Pos</label>
            <input type="text" class="form-control" id="zip" name="zip" />
            <div class="invalid-feedback">
              Zip code required.
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-4 mb-3">
            <label for="kelurahan">Desa/Kelurahan</label>
            <input type="text" class="form-control" id="kelurahan" name="kelurahan"/>
            <div class="invalid-feedback">
              Valid kelurahan is required.
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <label for="kecamatan">Kecamatan</label>
            <input type="text" class="form-control" id="kecamatan" name="kecamatan"/>
            <div class="invalid-feedback">
              Valid kecamatan is required.
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-4 mb-3">
            <label for="kota">Kabupaten/Kota</label>
            <input type="text" name="kota" class="form-control" id="kota"/>
            <div class="invalid-feedback">
              Valid kota is required.
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <label for="provinsi">Provinsi</label>
            <input type="text" class="form-control" name="provinsi" id="provinsi" />
            <div class="invalid-feedback">
              Valid provinsi is required.
            </div>
          </div>
        </div>

        <div class="mb-3">
          <label for="email">Email <span class="text-muted">(Optional)</span></label>
          <input type="email" class="form-control" id="email" name="email" placeholder="you@example.com"/>
          <div class="invalid-feedback">
            email harap diisi.
          </div>
          <br>
        
        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="noTelp">Nomor Telpon Badan</label>
            <input type="text" class="form-control" id="noTelp" name="noTelp" placeholder="(02x)xxxxxx"/>
            <div class="invalid-feedback">
               Nomor telpon harap diisi.
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="noFax">Nomor Fax Badan</label>
            <input type="text" class="form-control" id="noFax" name="noFax" placeholder="(02x)xxxxxx"/>
            <div class="invalid-feedback">
               Nomor telpon harap diisi.
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-3 mb-3">
            <label for="status_gedung">Status Gedung Badan</label>
            <select class="custom-select d-block w-100" name="status_gedung" id="status_gedung">
              <option value="">Pilih</option>
              <option>Milik Badan/HM</option>
              <option>HGU</option>
              <option>Hak Pakai</option>
              <option>Sewa</option>
              <option>Lainnya</option>
            </select>
            <div class="invalid-feedback">
              harap diisi.
            </div>
          </div>
        </div>
        <h4 class="title">Penandatangan Specimen</h4>
<br>
        <div class="form-group">
              <label for="nama">Nama Lengkap</label>
              <input type="text" class="form-control" id="nama" name="nama" />
              <div class="invalid-feedback" style="width: 100%;">
              Nama harap diisi.
              </div>
            </div>
            <div class="form-group">
              <label for="alamat_1">Alamat</label>
              <input type="text" class="form-control" id="alamat_1" name="alamat_1" />
              <div class="invalid-feedback" style="width: 100%;">
              Alamat harap diisi.
              </div>
            </div>
            <label for="jabatan">Jabatan</label>
              <input type="text" class="form-control" id="jabatan" name="jabatan" />
       <br>
        <div class="row">
          <div class="col-md-4 mb-3">
            <label for="noAkta">Nomor/Tgl. Akta Pendirian</label>
            <input type="text" class="form-control" id="noAkta" name="noAkta" placeholder="Nomor"/>
            <div class="invalid-feedback">
              Valid ttl is required.
            </div>
          </div>
          <div class="col-md-1 mb-3">
            <label for="tgl_berdiri">Tanggal</label>
            <input type="text" class="form-control" id="tgl_aktaBerdiri" name="tgl_aktaBerdiri"/>
            <div class="invalid-feedback">
              Please select a valid tgl.
            </div>
          </div>
          <div class="col-md-1 mb-3">
            <label for="bln_berdiri">Bulan</label>
            <input type="text" class="form-control" id="bln_aktaBerdiri" name="bln_aktaBerdiri"/>
            <div class="invalid-feedback">
              Please provide a valid bln.
            </div>
          </div>
          <div class="col-md-2 mb-3">
            <label for="thn_berdiri">Tahun</label>
            <input type="text" class="form-control" id="thn_aktaBerdiri" name="thn_aktaBerdiri" />
            <div class="invalid-feedback">
              tahun required.
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-4 mb-3">
            <label for="tempat">Nomor/Tgl. Akta Perubahan</label>
            <input type="text" class="form-control" id="tempat" name="noBerubah" placeholder="Nomor" />
            <div class="invalid-feedback">
              Valid ttl is required.
            </div>
          </div>
          <div class="col-md-1 mb-3">
            <label for="tgl_berdiri">Tanggal</label>
            <input type="text" class="form-control" id="tgl_aktaBerubah" name="tgl_aktaBerubah" />
            <div class="invalid-feedback">
              Please select a valid tgl.
            </div>
          </div>
          <div class="col-md-1 mb-3">
            <label for="bln_berdiri">Bulan</label>
            <input type="text" class="form-control" id="bln_aktaBerubah" name="bln_aktaBerubah"/>
            <div class="invalid-feedback">
              Please provide a valid bln.
            </div>
          </div>
          <div class="col-md-2 mb-3">
            <label for="thn_berdiri">Tahun</label>
            <input type="text" class="form-control" id="thn_aktaBerubah" name="thn_aktaBerubah"/>
            <div class="invalid-feedback">
              tahun required.
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-4 mb-3">
            <label for="tempat">Nomor/Tgl. Izin Usaha</label>
            <input type="text" class="form-control" id="tempat" name="noIzin" placeholder="Nomor"/>
            <div class="invalid-feedback">
              Valid ttl is required.
            </div>
          </div>
          <div class="col-md-1 mb-3">
            <label for="tgl_berdiri">Tanggal</label>
            <input type="text" class="form-control" id="tgl_izin" name="tgl_izin" />
            <div class="invalid-feedback">
              Please select a valid tgl.
            </div>
          </div>
          <div class="col-md-1 mb-3">
            <label for="bln_berdiri">Bulan</label>
            <input type="text" class="form-control" id="bln_izin" name="bln_izin"/>
            <div class="invalid-feedback">
              Please provide a valid bln.
            </div>
          </div>
          <div class="col-md-2 mb-3">
            <label for="thn_berdiri">Tahun</label>
            <input type="text" class="form-control" id="thn_izin" name="thn_izin"/>
            <div class="invalid-feedback">
              tahun required.
            </div>
          </div>
        </div>

        <div class="mb-3">
          <label for="noNPWP">Nomor NPWP</label>
          <input type="text" class="form-control" id="noNPWP" name="noNPWP" placeholder="15 digit"/>
          <div class="invalid-feedback">
            harap diisi.
          </div>
        </div>

         <div class="form-group bukaRekening" style="">
      <label for="jenis_Penghasilan">Pemasukan Dana per bulan</label>
      <select class="form-control mandatory" name="jenis_Penghasilan" id="jenis_Penghasilan">
        <option value="">Pilih(wajib)</option>
              <option value="">1: s/d 5 juta</option>
              <option value="">2: &gt;5 juta - 10 juta</option>
              <option value="">3: &gt;10 juta - 25 juta</option>
              <option value="">4: &gt;25 juta - 50 juta</option>
              <option value="">5: &gt;50 juta</option>
      </select>
      </div>
      <div class="alert alert-danger" style="margin-top: 10px; display: none;" id="jenis_PenghasilanAlert">Jenis Penghasilan wajib di pilih</div>
      
        <hr class="mb-4">
        <button class="primary-btn" type="submit">Daftar</button>
      </form>
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
                <p class="col-lg-2 col-sm-2 footer-text m-0 text-white">
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


  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for this template -->
  <script src="js/stylish-portfolio.min.js"></script>


</body>

</html>