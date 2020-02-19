<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <link rel="icon" href="img/logo.png" type="image/png" />
  <title>EFORM-INDIVIDUAL</title>

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
                <h2>e-form Pembukaan Rekening Bima</h2>
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
    <div class="col-lg-8 mx-auto ">
      <form action="connect.php" method="post">
        <div class="mb-3">
          <label for="nik">Nomor Induk KTP</label>
          <div class="input-group">
            <input type="text" class="form-control" id="nik" name="nik" placeholder="NIK, 16 digit" required>
            <div class="invalid-feedback" style="width: 100%;">
              NIK wajib diisi.
            </div>
          </div>
        </div>

          <div class="mb-3">
            <label for="firstName">Nama Lengkap</label>
            <input type="text" class="form-control" id="firstName" name="firstName" placeholder="" value="" required>
            <div class="invalid-feedback">
              Valid first name is required.
            </div>
          </div>

        <div class="mb-3">
          <label for="alamat">Alamat</label>
          <input type="text" class="form-control" id="alamat" name="alamat" placeholder="" required>
          <div class="invalid-feedback">
            Alamat harap diisi.
          </div>
        </div>
        
         <div class="row">
          <div class="col-md-1 mb-3">
            <label for="RT">RT</label>
            <input type="text" class="form-control" id="RT" name="RT" placeholder="" required>
            <div class="invalid-feedback">
              Please select a valid RT.
            </div>
          </div>
          <div class="col-md-1 mb-3">
            <label for="RW">RW</label>
            <input type="text" class="form-control" id="RW" name="RW" placeholder="" required>
            <div class="invalid-feedback">
              Please provide a valid RW.
            </div>
          </div>
          <div class="col-md-2 mb-3">
            <label for="zip">Kode Pos</label>
            <input type="text" class="form-control" id="zip" name="zip" placeholder="" required>
            <div class="invalid-feedback">
              Zip code required.
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-4 mb-3">
            <label for="kelurahan">Desa/Kelurahan</label>
            <input type="text" class="form-control" id="kelurahan" name="kelurahan" placeholder="" value="" required>
            <div class="invalid-feedback">
              Valid kelurahan is required.
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <label for="kecamatan">Kecamatan</label>
            <input type="text" class="form-control" id="kecamatan" name="kecamatan" placeholder="" value="" required>
            <div class="invalid-feedback">
              Valid kecamatan is required.
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-4 mb-3">
            <label for="kota">Kabupaten/Kota</label>
            <input type="text" class="form-control" id="kota" name="kota" placeholder="" value="" required>
            <div class="invalid-feedback">
              Valid kota is required.
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <label for="provinsi">Provinsi</label>
            <input type="text" class="form-control" id="provinsi" name="provinsi" placeholder="" value="" required>
            <div class="invalid-feedback">
              Valid provinsi is required.
            </div>
          </div>
        </div>

         <div class="row">
          <div class="col-md-3 mb-3">
            <label for="tempat">Tempat & Tanggal Lahir</label>
            <input type="text" class="form-control" id="tempat" name="tempat" placeholder="Tempat Lahir" value="" required>
            <div class="invalid-feedback">
              Valid ttl is required.
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-1 mb-3">
            <label for="tgl_lahir">Tanggal</label>
            <input type="text" class="form-control" id="tgl_lahir" name="tgl_lahir" placeholder="" required>
            <div class="invalid-feedback">
              Please select a valid tgl.
            </div>
          </div>
          <div class="col-md-1 mb-3">
            <label for="bln_lahir">Bulan</label>
            <input type="text" class="form-control" id="bln_lahir" name="bln_lahir" placeholder="" required>
            <div class="invalid-feedback">
              Please provide a valid bln.
            </div>
          </div>
          <div class="col-md-1 mb-3">
            <label for="thn_lahir">Tahun</label>
            <input type="text" class="form-control" id="thn_lahir" name="thn_lahir" placeholder="" required>
            <div class="invalid-feedback">
              tahun required.
            </div>
          </div>
        </div>

        <div class="mb-3">
          <label for="email">Email <span class="text-muted">(Optional)</span></label>
          <input type="email" class="form-control" id="email" name="email" placeholder="you@example.com">
          <div class="invalid-feedback">
            email harap diisi.
          </div>
        
        <div class="row">
          <div class="col-md-2 mb-3">
            <label for="noRum">Nomor Telp Rumah</label>
            <input type="text" class="form-control" id="noRum" name="noRum" placeholder="Kode Area" value="" required>
            <div class="invalid-feedback">
              Nomor telpon harap diisi.
            </div>
          </div>
          <div class="col-md-6 mb-3">
            <label for="noRum">-</label>
            <input type="text" class="form-control" id="noRum" name="noRum" placeholder="nomor telp" value="" required>
            <div class="invalid-feedback">
               Nomor telpon harap diisi.
            </div>
          </div>
        </div>

        <div class="mb-3">
          <label for="noHp">Nomor Handphone</label>
          <input type="text" class="form-control" id="noHp" name="noHp" placeholder="" required>
          <div class="invalid-feedback">
            Nomor Hp harap diisi.
          </div>
        </div>

        <div class="mb-3">
          <label for="noNPWP">Nomor NPWP</label>
          <input type="text" class="form-control" id="noNPWP" name="noNPWP" placeholder="15 digit" required>
          <div class="invalid-feedback">
            harap diisi.
          </div>
        </div>

        <div class="row">
          <div class="col-md-3 mb-3">
            <label for="kewarganegaraan">Kewarganegaraan</label>
            <select class="custom-select d-block w-100" id="kewarganegaraan" name="kewarganegaraan" required>
              <option value="">Pilih</option>
              <option>WNI</option>
              <option>WNA</option>
            </select>
            <div class="invalid-feedback">
              harap diisi.
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-2 mb-3">
            <label for="jen_kel">Jenis Kelamin</label>
            <select class="custom-select d-block w-100" id="jen_kel" name="kewarganegaraan" required>
              <option value="">Pilih</option>
              <option>Pria</option>
              <option>Wanita</option>
            </select>
            <div class="invalid-feedback">
              Please select a valid gender.
            </div>
          </div>
          <div class="col-md-2 mb-3">
            <label for="status">Status</label>
            <select class="custom-select d-block w-100" id="status" name="status" required>
              <option value="">Pilih</option>
              <option>Kawin</option>
              <option>Belum Kawin</option>
            </select>
            <div class="invalid-feedback">
              Please provide a valid status.
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-3 mb-3">
            <label for="agama">Agama</label>
            <select class="custom-select d-block w-100" id="agama" name="agama" required>
              <option value="">Pilih</option>
              <option>Islam</option>
              <option>Kristen</option>
              <option>Katolik</option>
              <option>Hindu</option>
              <option>Budha</option>
              <option>Lainnya</option>
            </select>
            <div class="invalid-feedback">
              harap diisi.
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-3 mb-3">
            <label for="pendidikan">Pendidikan Terakhir</label>
            <select class="custom-select d-block w-100" id="pendidikan" name="pendidikan" required>
              <option value="">Pilih</option>
              <option>S3</option>
              <option>S2</option>
              <option>S1</option>
              <option>SMA/Sederajat</option>
              <option>SMP/Sederajat</option>
              <option>SD/Sederajat</option>
              <option>Lainnya</option>
            </select>
            <div class="invalid-feedback">
              harap diisi.
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-3 mb-3">
            <label for="pekerjaan">Pekerjaan</label>
            <select class="custom-select d-block w-100" id="pekerjaan" name="pekerjaan" required>
              <option value="">Pilih</option>
              <option>PNS</option>
              <option>TNI/Polri</option>
              <option>Pegawai Swasta</option>
              <option>Wiraswasta</option>
              <option>Pensiunan</option>
              <option>BUMN/BUMD</option>
              <option>Lainnya</option>
            </select>
            <div class="invalid-feedback">
              harap diisi.
            </div>
          </div>
        </div>

        <div class="row">
        <div class="col-md-5 mb-3">
            <label for="nama_kantor">Nama Kantor</label>
            <input type="text" class="form-control" id="nama_kantor" name="nama_kantor" placeholder="" value="" required>
            <div class="invalid-feedback">
              Valid first name is required.
            </div>
          </div>
        <div class="col-md-5 mb-3">
            <label for="jabatan">Jabatan</label>
            <input type="text" class="form-control" id="jabatan" name="jabatan" placeholder="" value="" required>
            <div class="invalid-feedback">
              Valid first name is required.
            </div>
          </div>
        </div>

        <div class="mb-3">
          <label for="alm_kantor">Alamat Kantor</label>
          <input type="text" class="form-control" id="alm_kantor" name="alm_kantor" placeholder="1234 Main St" required>
          <div class="invalid-feedback">
            Alamat harap diisi.
          </div>
        </div>

       <div class="mb-3">
          <label for="tel_kantor">Nomor Telepon Kantor</label>
          <input type="text" class="form-control" id="tel_kantor" name="tel_kantor" placeholder="" required>
          <div class="invalid-feedback">
            Nomor Hp harap diisi.
          </div>
        </div>


         <div class="form-group bukaRekening" style="">
      <label for="jenis_Penghasilan">Penghasilan per bulan</label>
      <select class="form-control mandatory" id="jenis_Penghasilan" name="jenis_Penghasilan">
        <option value="">Pilih Penghasilan (wajib)</option>
        <option value="2000000">1: &lt; Rp 3 juta</option>
        <option value="4000000">2: 3 juta - 5 juta</option>
        <option value="8000000">3: 5 juta - Rp 10 juta</option>
        <option value="15000000">4: 10 juta - 20 juta</option>
        <option value="44000000">5: 20 juta - 50 juta</option>
        <option value="88000000">6: 50 juta - 100 juta</option>
        <option value="325000000">7: 100 juta - 500 juta</option>
        <option value="755000000">8: &gt;= 500 juta</option>
      </select>
      </div>
      <div class="alert alert-danger" style="margin-top: 10px; display: none;" id="jenis_PenghasilanAlert">Jenis Penghasilan wajib di pilih</div>

<!--  
        <hr class="mb-4">
        <h4 class="mb-3">Payment</h4>

        <div class="d-block my-3">
          <div class="custom-control custom-radio">
            <input id="credit" name="paymentMethod" type="radio" class="custom-control-input" checked required>
            <label class="custom-control-label" for="credit">Credit card</label>
          </div>
          <div class="custom-control custom-radio">
            <input id="debit" name="paymentMethod" type="radio" class="custom-control-input" required>
            <label class="custom-control-label" for="debit">Debit card</label>
          </div>
          <div class="custom-control custom-radio">
            <input id="paypal" name="paymentMethod" type="radio" class="custom-control-input" required>
            <label class="custom-control-label" for="paypal">PayPal</label>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 mb-3">
            <label for="cc-name">Name on card</label>
            <input type="text" class="form-control" id="cc-name" placeholder="" required>
            <small class="text-muted">Full name as displayed on card</small>
            <div class="invalid-feedback">
              Name on card is required
            </div>
          </div>
          <div class="col-md-6 mb-3">
            <label for="cc-number">Credit card number</label>
            <input type="text" class="form-control" id="cc-number" placeholder="" required>
            <div class="invalid-feedback">
              Credit card number is required
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-3 mb-3">
            <label for="cc-expiration">Expiration</label>
            <input type="text" class="form-control" id="cc-expiration" placeholder="" required>
            <div class="invalid-feedback">
              Expiration date required
            </div>
          </div>
          <div class="col-md-3 mb-3">
            <label for="cc-cvv">CVV</label>
            <input type="text" class="form-control" id="cc-cvv" placeholder="" required>
            <div class="invalid-feedback">
              Security code required
            </div>
          </div>
        </div>
          -->
        <hr class="mb-4">
        <button class="primary-btn " type="submit" value="submit">Daftar</button>
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
                <div class="col-lg-4 col-md-6 single-footer-widget">
                  <h4>Newsletter</h4>
                  <p>You can trust us. we only send promo offers,</p>
                  <div class="form-wrap" id="mc_embed_signup">
                    <form
                      target="_blank"
                      action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
                      method="get"
                      class="form-inline"
                    >
                      <input
                        class="form-control"
                        name="EMAIL"
                        placeholder="Your Email Address"
                        onfocus="this.placeholder = ''"
                        onblur="this.placeholder = 'Your Email Address'"
                        required=""
                        type="email"
                      />
                      <button class="click-btn btn btn-default">
                        <span>subscribe</span>
                      </button>
                      <div style="position: absolute; left: -5000px;">
                        <input
                          name="b_36c4fd991d266f23781ded980_aefe40901a"
                          tabindex="-1"
                          value=""
                          type="text"
                        />
                      </div>
      
                      <div class="info"></div>
                    </form>
                  </div>
                </div>
              </div>
              <div class="row footer-bottom d-flex justify-content-between">
                <p class="col-lg-8 col-sm-12 footer-text m-0 text-white">
                  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                </p>
                <div class="col-lg-4 col-sm-12 footer-social">
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
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for this template -->
  <script src="js/stylish-portfolio.min.js"></script>

</body>

</html>