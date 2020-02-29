<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <link rel="icon" href="img/logo.png" type="image/png" />
  <title>EFORM-DPLK</title>

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
                <h2>e-form Peserta DPLK</h2>
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
    <div class="col-lg-8 mx-auto">
      <form action="connect5.php" method="post">
        <div class="row">
          <div class="col-md-3 mb-3">
            <label for="jenis">Jenis Yang dibutuhkan</label>
            <select class="custom-select d-block w-100" id="jenis" name="jenis" />
              <option value="">Pilih</option>
              <option>Peserta Pemberi Kerja</option>
              <option>Manfaat Pensiun</option>
              <option>Peserta Individu</option>
              <option>Manfaat Pesangon</option>
            </select>
            <div class="invalid-feedback">
              harap diisi.
            </div>
          </div>
        </div>
        
       <h4 class="title">1. Identitas Peserta</h4>
<br>
        <div class="mb-3">
          <div class="mb-3">
            <label for="firstName">Nama Peserta</label>
            <input type="text" class="form-control" id="firstName" name="firstName" placeholder="" />
            <div class="invalid-feedback">
              Valid first name is /.
            </div>
          </div>

          <div class="row">
          <div class="col-md-3 mb-3">
            <label for="tempat">Tempat & Tanggal Lahir</label>
            <input type="text" class="form-control" id="tempat" name="tempat" placeholder="Tempat" />
            <div class="invalid-feedback">
              Valid ttl is /.
            </div>
          </div>
          <div class="col-md-1 mb-3">
            <label for="tanggal">Tanggal</label>
            <input type="text" class="form-control" id="tanggal" name="tanggal" />
            <div class="invalid-feedback">
              Please select a valid tgl.
            </div>
          </div>
          <div class="col-md-1 mb-3">
            <label for="bulan">Bulan</label>
            <input type="text" class="form-control" id="bulan" name="bulan" />
            <div class="invalid-feedback">
              Please provide a valid bln.
            </div>
          </div>
          <div class="col-md-2 mb-3">
            <label for="tahun">Tahun</label>
            <input type="text" class="form-control" id="tahun" name="tahun" />
            <div class="invalid-feedback">
              tahun /.
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-3 mb-3">
            <label for="agama">Agama</label>
            <select class="custom-select d-block w-100" id="agama" name="agama" />
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
          <div class="col-md-2 mb-3">
            <label for="jen_kel">Jenis Kelamin</label>
            <select class="custom-select d-block w-100" id="jen_kel" name="jen_kel" />
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
            <select class="custom-select d-block w-100" id="status" name="status" />
              <option value="">Pilih</option>
              <option>Kawin</option>
              <option>Belum Kawin</option>
              <option>Duda/Janda</option>
            </select>
            <div class="invalid-feedback">
              Please provide a valid status.
            </div>
          </div>
        </div>

          <label for="nik">Nomor Induk KTP</label>
          <div class="input-group">
            <input type="text" class="form-control" id="nik" name="nik" placeholder="NIK, 16 digit" />
            <div class="invalid-feedback" style="width: 100%;">
              NIK wajib diisi.
            </div>
          </div>
          <div class="mb-3">
          <label for="alamat">Alamat</label>
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
              Zip code /.
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 mb-3">
            <label for="kelurahan">Desa/Kelurahan</label>
            <input type="text" class="form-control" id="kelurahan" name="kelurahan" placeholder="" />
            
          </div>
          <div class="col-md-4 mb-3">
            <label for="kecamatan">Kecamatan</label>
            <input type="text" class="form-control" id="kecamatan" name="kecamatan" placeholder="" />
            
          </div>
        </div>

        <div class="row">
          <div class="col-md-4 mb-3">
            <label for="kota">Kabupaten/Kota</label>
            <input type="text" class="form-control" id="kota" name="kota" placeholder="" />
            <div class="invalid-feedback">
              Valid kota is /.
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <label for="provinsi">Provinsi</label>
            <input type="text" class="form-control" id="provinsi" name="provinsi" placeholder="" />
            <div class="invalid-feedback">
              Valid provinsi is /.
            </div>
          </div>
        </div>
        <div class="mb-3">
              <label for="email">Email <span class="text-muted">(Optional)</span></label>
              <input type="email" class="form-control" id="email" name="email" placeholder="you@example.com">
              <div class="invalid-feedback">
                email harap diisi.
              </div>

        <div class="mb-3">
          <label for="noHp">Nomor Handphone</label>
          <input type="text" class="form-control" id="noHp" name="noHp" />
          <div class="invalid-feedback">
            Nomor Hp harap diisi.
          </div>
        </div>

        <div class="mb-3">
          <label for="nonpwp">Nomor NPWP</label>
          <input type="text" class="form-control" id="nonpwp" name="nonpwp" placeholder="15 digit" />
          <div class="invalid-feedback">
            harap diisi.
          </div>
        </div>

        <div class="row">
          <div class="col-md-3 mb-3">
            <label for="negaraan">Kewarganegaraan</label>
            <select class="custom-select d-block w-100" id="negaraan" name="negaraan" />
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
          <div class="col-md-3 mb-3">
            <label for="pekerjaan">Pekerjaan</label>
            <select class="custom-select d-block w-100" id="pekerjaan" name="pekerjaan" />
              <option value="">Pilih</option>
             <option>Karyawan</option>
              <option>Wiraswasta</option>
              <option>Profesional</option>
              <option>Lainnya</option>
            </select>
            <div class="invalid-feedback">
              harap diisi.
            </div>
          </div>
        </div>

          <div class="form-group bukaRekening" style="">
            <label for="jenis_Penghasilan">Penghasilan per bulan</label>
            <h5 class="title">A. Gaji</h5>
            <select class="form-control mandatory" id="gaji" name="gaji">
              <option value="">Pilih Penghasilan (wajib)</option>
              <option value="">1: s/d 5 juta</option>
              <option value="">2: &gt;5 juta - 10 juta</option>
              <option value="">3: &gt;10 juta - 25 juta</option>
              <option value="">4: &gt;25 juta - 50 juta</option>
              <option value="">5: &gt;50 juta</option>
            </select>
            <br>
            <h5 class="title">B. Pendapatan Lain</h5>
            <select class="form-control mandatory" id="pendapatan_lain" name="pendapatan_lain">
              <option value="">Pilih Penghasilan (wajib)</option>
              <option value="">1: s/d 5 juta</option>
              <option value="">2: &gt;5 juta - 10 juta</option>
              <option value="">3: &gt;10 juta - 25 juta</option>
              <option value="">4: &gt;25 juta - 50 juta</option>
              <option value="">5: &gt;50 juta</option>
            </select>
            </div>

            <h4 class="title">2. Pilihan Paket Investasi</h4>
<br>
        <div class="row">
          <div class="col-md-3 mb-3">
        <select class="form-control mandatory" id="investasi" name="investasi">
              <option value="">Pilih</option>
              <option value="Pasar Uang">Paket Setia Pasar Uang</option>
              <option value="Kombinasi">Paket Setia Kombinasi</option>
              <option value="Pendapatan Tetap">Paket Setia Pendapatan Tetap</option>
            </select>
            <br>
          </div>
        </div>
          <label for="usia_pensiun">Usia Pensiun yang Dipilih</label>
            <input type="text" class="form-control" id="usia_pensiun" name="usia_pensiun"/>

        <div class="mb-3">
            <label for="iuran_kerja">Iuran Pemberi Kerja</label>
            <input type="text" class="form-control" id="iuran_kerja" name="iuran_kerja" placeholder="Rp."/>
            <div class="invalid-feedback">
              Valid first name is /.
            </div>
          </div>
        </div>
        <div class="mb-3">
          <label for="alm_kantor">Iuran Individu/Mandiri</label>
          <input type="text" class="form-control" id="iuran_peserta" name="iuran_peserta" placeholder="Rp." />
        </div>

    <h4 class="title">3. Ahli Waris atau Pihak Yang Ditunjuk</h4>
<br>
        <div class="mb-3">
          <div class="mb-3">
            <label for="firstName2">Nama Lengkap</label>
            <input type="text" class="form-control" id="firstName2" name="firstName2" placeholder="" />
            <div class="invalid-feedback">
              Valid first name is /.
            </div>
          </div>
<div class="row">
          <div class="col-md-3 mb-3">
            <label for="tempat_lahir">Tempat & Tanggal Lahir</label>
            <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" placeholder="Tempat" />
            <div class="invalid-feedback">
              Valid ttl is /.
            </div>
          </div>
          <div class="col-md-1 mb-3">
            <label for="tanggal_lahir">Tanggal</label>
            <input type="text" class="form-control" id="tanggal_lahir" name="tanggal_lahir" />
            <div class="invalid-feedback">
              Please select a valid tgl.
            </div>
          </div>
          <div class="col-md-1 mb-3">
            <label for="bulan_lahir">Bulan</label>
            <input type="text" class="form-control" id="bulan_lahir" name="bulan_lahir" />
            <div class="invalid-feedback">
              Please provide a valid bln.
            </div>
          </div>
          <div class="col-md-2 mb-3">
            <label for="tahun_lahir">Tahun</label>
            <input type="text" class="form-control" id="tahun_lahir" name="tahun_lahir" />
            <div class="invalid-feedback">
              tahun /.
            </div>
          </div>
        </div>
         <div class="mb-3">
          <label for="alamat_w">Alamat</label>
          <input type="text" class="form-control" id="alamat_w" name="alamat_w" placeholder="1234 Main St" />
          <div class="invalid-feedback">
            Alamat harap diisi.
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 mb-3">
            <label for="kecamatan_w">Kecamatan</label>
            <input type="text" class="form-control" id="kecamatan_w" name="kecamatan_w" placeholder="" />
          </div>
          <div class="col-md-4 mb-3">
            <label for="kota_w">Kota</label>
            <input type="text" class="form-control" id="kota_w" name="kota_w"/>
           
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 mb-3">
            <label for="zip_w">Kode Pos</label>
            <input type="text" class="form-control" id="zip_w" name="zip_w" />
            
          </div>
          <div class="col-md-4 mb-3">
            <label for="tlp_rmh">Telpon Rumah</label>
            <input type="text" class="form-control" id="tlp_rmh" name="tlp_rmh" />
            
          </div>
        </div>
        <div class="mb-3">
          <label for="nomerhp_w">Nomor Handphone</label>
          <input type="text" class="form-control" id="nomerhp_w" name="nomerhp_w" />
          <div class="invalid-feedback">
            Nomor Hp harap diisi.
          </div>
        </div>

        <div class="mb-3">
          <label for="hub_peserta">Hubungan dengan Peserta</label>
          <input type="text" class="form-control" id="hub_peserta" name="hub_peserta" /> 
        </div>

        <div class="row">
          <div class="col-md-4 mb-3">
            <label for="kerabat">Kerabat Dekat (tidak serumah)</label>
            <input type="text" class="form-control" id="kerabat" name="kerabat"/>
          </div>
          <div class="col-md-4 mb-3">
            <label for="noKerabat">No Telpon</label>
                <input type="text" class="form-control" id="noKerabat" name="noKerabat"/>          
          </div>
        </div>

        <h4 class="title">4. Pelaksanaan Costumer Due Dilligent</h4>
        <br>
        
        <div class="row">
          <div class="col-md-4 mb-3">
            <label for="ktr_Nama">Nama Perusahaan</label>
            <input type="text" class="form-control" id="ktr_Nama" name="ktr_Nama"/> 

        </div>
        <div class="col-md-4 mb-3">
          <label for="jabatan">Jabatan</label>
          <input type="text" class="form-control" id="jabatan" name="jabatan"/> 
        </div>
      </div>
 <div class="row">
        <div class="col-md-4 mb-3">
          <label for="alm_ktr">Alamat Kantor</label>
          <input type="text" class="form-control" id="alm_ktr" name="alm_ktr"/> 
        </div>

        <div class="col-md-4 mb-3">
          <label for="kec_ktr">Kecamatan</label>
          <input type="text" class="form-control" id="kec_ktr" name="kec_ktr"/> 
        </div>
        </div>
      </div>
<div class="mb-3">
          <label for="tel_kantor">Nomor Telepon Kantor</label>
          <input type="text" class="form-control" id="tel_kantor" name="tel_kantor" />
          <div class="invalid-feedback">
            Nomor Hp harap diisi.
          </div>
        </div>
<h4 class="title">5. Identitas Benefical Owner</h4>
        <br>

        <div class="mb-3">
          <label for="nama_lengkap">Nama Lengkap</label>
          <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap"/>
          <div class="invalid-feedback">
            Nomor Hp harap diisi.
          </div>
        </div>

        <div class="row">
          <div class="col-md-3 mb-3">
            <label for="l_tempat">Tempat & Tanggal Lahir</label>
            <input type="text" class="form-control" id="l_tempat" name="l_tempat" placeholder="Tempat"/>
            <div class="invalid-feedback">
              Valid ttl is /.
            </div>
          </div>
          <div class="col-md-1 mb-3">
            <label for="lahir_tanggal">Tanggal</label>
            <input type="text" class="form-control" id="lahir_tanggal" name="lahir_tanggal" />
            <div class="invalid-feedback">
              Please select a valid tgl.
            </div>
          </div>
          <div class="col-md-1 mb-3">
            <label for="lahir_bulan">Bulan</label>
            <input type="text" class="form-control" id="lahir_bulan" name="lahir_bulan" />
            <div class="invalid-feedback">
              Please provide a valid bln.
            </div>
          </div>
          <div class="col-md-2 mb-3">
            <label for="lahir_tahun">Tahun</label>
            <input type="text" class="form-control" id="lahir_tahun" name="lahir_tahun" />
            <div class="invalid-feedback">
              tahun /.
            </div>
          </div>
        </div>
        <div class="mb-3">
          <label for="no_Induk">NIK</label>
          <input type="text" class="form-control" id="no_Induk" name="no_Induk"/>
          <div class="invalid-feedback">
            Nomor Hp harap diisi.
          </div>
        </div>
        <div class="mb-3">
          <label for="no_alamat">Alamat</label>
          <input type="text" class="form-control" id="no_alamat" name="no_alamat"/>
          <div class="invalid-feedback">
            Nomor Hp harap diisi.
          </div>
        </div>
        <div class="row">
        <div class="col-md-4 mb-3">
          <label for="no_kec">Kecamatan</label>
          <input type="text" class="form-control" id="no_kec" name="no_kec"/>
          <div class="invalid-feedback">
            Nomor Hp harap diisi.
          </div>
        </div>

        <div class="col-md-4 mb-3">
          <label for="no_kota">Kota</label>
          <input type="text" class="form-control" id="no_kota" name="no_kota"/>
          <div class="invalid-feedback">
            Nomor Hp harap diisi.
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-4 mb-3">
          <label for="no_zip">Kode Pos</label>
          <input type="text" class="form-control" id="no_zip" name="no_zip"/>
          <div class="invalid-feedback">
            Nomor Hp harap diisi.
          </div>
        </div>

        <div class="col-md-4 mb-3">
          <label for="telp_No">Nomor Telepon</label>
          <input type="text" class="form-control" id="telp_No" name="telp_No"/>
          <div class="invalid-feedback">
            Nomor Hp harap diisi.
          </div>
        </div>
      </div>
      <div class="row">
          <div class="col-md-3 mb-3">
            <label for="kerja">Pekerjaan</label>
            <select class="custom-select d-block w-100" id="kerja" name="kerja" />
              <option value="">Pilih</option>
              <option>Karyawan</option>
              <option>Wiraswasta</option>
              <option>Profesional</option>
              <option>Lainnya</option>
            </select>
            <div class="invalid-feedback">
              harap diisi.
            </div>
          </div>
        </div>


        <div class="mb-3">
          <label for="kantor_nama">Nama Perusahaan</label>
          <input type="text" class="form-control" id="kantor_nama" name="kantor_nama"/>
          <div class="invalid-feedback">
            Nomor Hp harap diisi.
          </div>
        </div>
        <div class="row">
          <div class="col-md-3 mb-3">
            <label for="jenis_usaha">Jenis Usaha</label>
            <select class="custom-select d-block w-100" id="jenis_usaha" name="jenis_usaha" />
              <option value="">Pilih</option>
              <option>Pertanian</option>
              <option>Pertambangan</option>
              <option>Industri Dasar</option>
              <option>Aneka Industri</option>
              <option>Industri Barang Konsumsi</option>
              <option>Properti</option>
              <option>Infrastruktur</option>
              <option>Keuangan</option>
              <option>Perdagangan dan Jasa</option>
              <option>Manufaktur</option>
            </select>
            <div class="invalid-feedback">
              harap diisi.
            </div>
          </div>
        </div>

        <div class="row">
        <div class="col-md-4 mb-3">
          <label for="jabat">Jabatan Pekerjaan</label>
          <input type="text" class="form-control" id="jabat" name="jabat"/>
          <div class="invalid-feedback">
            Nomor Hp harap diisi.
          </div>
        </div>
          <div class="col-md-4 mb-3">
          <label for="penghasilan">Penghasilan per Bulan</label>
          <input type="text" class="form-control" id="penghasilan" name="penghasilan" placeholder="Rp." />
          <div class="invalid-feedback">
            Nomor Hp harap diisi.
          </div>
        </div>
      </div>

<h4 class="title">6. Kuasa Debet Rekening</h4>
        <br>
         <div class="row">
        <div class="col-md-4 mb-3">
          <label for="no_rek">Nomor Rekening</label>
          <input type="text" class="form-control" id="no_rek" name="no_rek"/>
          <div class="invalid-feedback">
            Nomor Hp harap diisi.
          </div>
        </div>
        <div class="col-md-4 mb-3">
          <label for="nama_rek">Atas Nama</label>
          <input type="text" class="form-control" id="nama_rek" name="nama_rek"  />
          <div class="invalid-feedback">
            Nomor Hp harap diisi.
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4 mb-3">
          <label for="tgl_debet">Didebet Setiap Tanggal</label>
          <input type="text" class="form-control" id="tgl_debet" name="tgl_debet"/>
          <div class="invalid-feedback">
            Nomor Hp harap diisi.
          </div>
        </div>

        <div class="col-md-4 mb-3">
          <label for="nominal_debet">Nominal Pendebetan</label>
          <input type="text" class="form-control" id="nominal_debet" name="nominal_debet" placeholder="Rp." />
          <div class="invalid-feedback">
            Nomor Hp harap diisi.
          </div>
        </div>
      </div>
      </div>
        <hr class="mb-4">
        <button class="primary-btn" type="submit" value="submit">Daftar</button>
      </form>
    </div>
  </div>
<br>
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
              <div class="row footer-bottom d-flex justify-content-between">
                <p class="col-lg-2 col-sm-2 footer-text m-4 text-white">
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
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for this template -->
  <script src="js/stylish-portfolio.min.js"></script>

</body>

</html>