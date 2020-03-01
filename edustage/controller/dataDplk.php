<?php
define("TYPE_CAPSULE","dplk");
require_once __DIR__."/../lib/BardLib.php";

authMiddleware("../admin.php");

$id = isset($_GET['nik']) ? $_GET['nik'] : null;

if($id == null){
    http_response_code(404);
    die("nof found");
}

$data = Daftar::where('nik',$id)->first();
?>



<table class="table">
  <tbody>

    <?php /*foreach($data->toArray() as $key => $value){
        echo "<tr><td widht=\"1%\">".str_replace("_"," ",ucfirst($key))."</td><td width='1%'>:</td><td><?php echo \$data->".$key."?></td></tr>\n";
    }*/

    ?>

<tr><th colspan="2" class="text-black">1. Identitas Peserta</th></tr>
<tr><td widht="1%">Id</td><td width='1%'>:</td><td><?php echo $data->id?></td></tr>
<tr><td widht="1%">Jenis</td><td width='1%'>:</td><td><?php echo $data->jenis?></td></tr>
<tr><td widht="1%">Nama</td><td width='1%'>:</td><td><?php echo $data->firstName?></td></tr>
<tr><td widht="1%">TTL</td><td width='1%'>:</td><td><?php echo "{$data->tempat}, {$data->tanggal}-{$data->bulan}-{$data->tahun}"?></td></tr>
<tr><td widht="1%">Agama</td><td width='1%'>:</td><td><?php echo $data->agama?></td></tr>
<tr><td widht="1%">Jenis Kelamin</td><td width='1%'>:</td><td><?php echo $data->jen_kel?></td></tr>
<tr><td widht="1%">Status</td><td width='1%'>:</td><td><?php echo $data->status?></td></tr>
<tr><td widht="1%">Nik</td><td width='1%'>:</td><td><?php echo $data->nik?></td></tr>
<tr><td widht="1%">Alamat</td><td width='1%'>:</td><td><?php echo $data->alamat?></td></tr>
<tr><td widht="1%">RT</td><td width='1%'>:</td><td><?php echo $data->RT?></td></tr>
<tr><td widht="1%">RW</td><td width='1%'>:</td><td><?php echo $data->RW?></td></tr>
<tr><td widht="1%">Zip</td><td width='1%'>:</td><td><?php echo $data->zip?></td></tr>
<tr><td widht="1%">Kelurahan</td><td width='1%'>:</td><td><?php echo $data->kelurahan?></td></tr>
<tr><td widht="1%">Kecamatan</td><td width='1%'>:</td><td><?php echo $data->kecamatan?></td></tr>
<tr><td widht="1%">Kota</td><td width='1%'>:</td><td><?php echo $data->kota?></td></tr>
<tr><td widht="1%">Provinsi</td><td width='1%'>:</td><td><?php echo $data->provinsi?></td></tr>
<tr><td widht="1%">Email</td><td width='1%'>:</td><td><?php echo $data->email?></td></tr>
<tr><td widht="1%">NoHp</td><td width='1%'>:</td><td><?php echo $data->noHp?></td></tr>
<tr><td widht="1%">Nonpwp</td><td width='1%'>:</td><td><?php echo $data->nonpwp?></td></tr>
<tr><td widht="1%">Negaraan</td><td width='1%'>:</td><td><?php echo $data->negaraan?></td></tr>
<tr><td widht="1%">Pekerjaan</td><td width='1%'>:</td><td><?php echo $data->pekerjaan?></td></tr>
<tr><td widht="1%">Gaji</td><td width='1%'>:</td><td><?php echo $data->gaji?></td></tr>
<tr><td widht="1%">Pendapatan lain</td><td width='1%'>:</td><td><?php echo $data->pendapatan_lain?></td></tr>
<tr><th colspan="2" class="text-black">2. Paket Pilihan</th></tr>
<tr><td widht="1%">Investasi</td><td width='1%'>:</td><td><?php echo $data->investasi?></td></tr>
<tr><td widht="1%">Usia pensiun</td><td width='1%'>:</td><td><?php echo $data->usia_pensiun?></td></tr>
<tr><td widht="1%">Iuran kerja</td><td width='1%'>:</td><td><?php echo $data->iuran_kerja?></td></tr>
<tr><td widht="1%">Iuran peserta</td><td width='1%'>:</td><td><?php echo $data->iuran_peserta?></td></tr>

<tr><th colspan="2" class="text-black">3. Ahli Waris atau pihak yang dituju</th></tr>
<tr><td widht="1%">Nama</td><td width='1%'>:</td><td><?php echo $data->firstName2?></td></tr>
<tr><td widht="1%">TTL</td><td width='1%'>:</td><td><?php echo "{$data->tempat_lahir}, {$data->tanggal_lahir}-{$data->bulan_lahir}-{$data->tahun_lahir}"?></td></tr>
<tr><td widht="1%">Alamat</td><td width='1%'>:</td><td><?php echo $data->alamat_w?></td></tr>
<tr><td widht="1%">Kecamatan</td><td width='1%'>:</td><td><?php echo $data->kecamatan_w?></td></tr>
<tr><td widht="1%">Kota</td><td width='1%'>:</td><td><?php echo $data->kota_w?></td></tr>
<tr><td widht="1%">Zip</td><td width='1%'>:</td><td><?php echo $data->zip_w?></td></tr>
<tr><td widht="1%">Tlp rmh</td><td width='1%'>:</td><td><?php echo $data->tlp_rmh?></td></tr>
<tr><td widht="1%">Nomor HP</td><td width='1%'>:</td><td><?php echo $data->nomerhp_w?></td></tr>

<tr><td widht="1%">Hub peserta</td><td width='1%'>:</td><td><?php echo $data->hub_peserta?></td></tr>
<tr><td widht="1%">Kerabat</td><td width='1%'>:</td><td><?php echo $data->kerabat?></td></tr>
<tr><td widht="1%">NoKerabat</td><td width='1%'>:</td><td><?php echo $data->noKerabat?></td></tr>

<tr><th colspan="2" class="text-black">4. Pelaksanaan Costumer Due Dilligent</th></tr>
<tr><td widht="1%">Nama Kantor</td><td width='1%'>:</td><td><?php echo $data->ktr_Nama?></td></tr>
<tr><td widht="1%">Jabatan</td><td width='1%'>:</td><td><?php echo $data->jabatan?></td></tr>
<tr><td widht="1%">Alamat Kantor</td><td width='1%'>:</td><td><?php echo $data->alm_ktr?></td></tr>
<tr><td widht="1%">Kecamatan Kantor</td><td width='1%'>:</td><td><?php echo $data->kec_ktr?></td></tr>
<tr><td widht="1%">Telepon kantor</td><td width='1%'>:</td><td><?php echo $data->tel_kantor?></td></tr>

<tr><th colspan="2" class="text-black">5. Identitas Benefical Owner</th></tr>
<tr><td widht="1%">Nama lengkap</td><td width='1%'>:</td><td><?php echo $data->nama_lengkap?></td></tr>
<tr><td widht="1%">TTL</td><td width='1%'>:</td><td><?php echo "{$data->l_tempat}, {$data->lahir_tanggal}-{$data->lahir_bulan}-{$data->lahir_tahun}"?></td></tr>
<tr><td widht="1%">No Induk</td><td width='1%'>:</td><td><?php echo $data->no_Induk?></td></tr>
<tr><td widht="1%">No alamat</td><td width='1%'>:</td><td><?php echo $data->no_alamat?></td></tr>
<tr><td widht="1%">No kec</td><td width='1%'>:</td><td><?php echo $data->no_kec?></td></tr>
<tr><td widht="1%">No kota</td><td width='1%'>:</td><td><?php echo $data->no_kota?></td></tr>
<tr><td widht="1%">No zip</td><td width='1%'>:</td><td><?php echo $data->no_zip?></td></tr>
<tr><td widht="1%">Telp No</td><td width='1%'>:</td><td><?php echo $data->telp_No?></td></tr>
<tr><td widht="1%">Pekerjaan</td><td width='1%'>:</td><td><?php echo $data->kerja?></td></tr>
<tr><td widht="1%">Nama Kantor</td><td width='1%'>:</td><td><?php echo $data->kantor_nama?></td></tr>
<tr><td widht="1%">Jenis usaha</td><td width='1%'>:</td><td><?php echo $data->jenis_usaha?></td></tr>
<tr><td widht="1%">Jabatan</td><td width='1%'>:</td><td><?php echo $data->jabat?></td></tr>
<tr><td widht="1%">Penghasilan</td><td width='1%'>:</td><td><?php echo $data->penghasilan?></td></tr>

<tr><th colspan="2" class="text-black">6. Kuasa Debet Rekening</th></tr>
<tr><td widht="1%">No rek</td><td width='1%'>:</td><td><?php echo $data->no_rek?></td></tr>
<tr><td widht="1%">Nama rek</td><td width='1%'>:</td><td><?php echo $data->nama_rek?></td></tr>
<tr><td widht="1%">Tgl debet</td><td width='1%'>:</td><td><?php echo $data->tgl_debet?></td></tr>
<tr><td widht="1%">Nominal debet</td><td width='1%'>:</td><td><?php echo $data->nominal_debet?></td></tr>
    
  </tbody>
</table>

