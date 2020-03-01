<?php
define("TYPE_CAPSULE","personal");
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

    <tr><td widht="1%">Nik</td><td width='1%'>:</td><td><?php echo $data->nik?></td></tr>
    <tr><td widht="1%">Nama</td><td width='1%'>:</td><td><?php echo $data->nama?></td></tr>
    <tr><td widht="1%">Alamat</td><td width='1%'>:</td><td><?php echo $data->alamat?></td></tr>
    <tr><td widht="1%">RT</td><td width='1%'>:</td><td><?php echo $data->RT?></td></tr>
    <tr><td widht="1%">RW</td><td width='1%'>:</td><td><?php echo $data->RW?></td></tr>
    <tr><td widht="1%">Zip</td><td width='1%'>:</td><td><?php echo $data->zip?></td></tr>
    <tr><td widht="1%">Kelurahan</td><td width='1%'>:</td><td><?php echo $data->kelurahan?></td></tr>
    <tr><td widht="1%">Kecamatan</td><td width='1%'>:</td><td><?php echo $data->kecamatan?></td></tr>
    <tr><td widht="1%">Kota</td><td width='1%'>:</td><td><?php echo $data->kota?></td></tr>
    <tr><td widht="1%">Provinsi</td><td width='1%'>:</td><td><?php echo $data->provinsi?></td></tr>
    <tr><td widht="1%">TTL</td><td width='1%'>:</td><td><?php echo "{$data->tempat}, {$data->tgl_lahir}-{$data->bln_lahir}-{$data->thn_lahir}"?></td></tr>
    <tr><td widht="1%">Email</td><td width='1%'>:</td><td><?php echo $data->email?></td></tr>
    <tr><td widht="1%">NoRum</td><td width='1%'>:</td><td><?php echo $data->noRum?></td></tr>
    <tr><td widht="1%">NoHp</td><td width='1%'>:</td><td><?php echo $data->noHp?></td></tr>
    <tr><td widht="1%">NoNPWP</td><td width='1%'>:</td><td><?php echo $data->noNPWP?></td></tr>
    <tr><td widht="1%">Kewarganegaraan</td><td width='1%'>:</td><td><?php echo $data->kewarganegaraan?></td></tr>
    <tr><td widht="1%">Gender</td><td width='1%'>:</td><td><?php echo $data->gender?></td></tr>
    <tr><td widht="1%">Status</td><td width='1%'>:</td><td><?php echo $data->status?></td></tr>
    <tr><td widht="1%">Agama</td><td width='1%'>:</td><td><?php echo $data->agama?></td></tr>
    <tr><td widht="1%">Pendidikan</td><td width='1%'>:</td><td><?php echo $data->pendidikan?></td></tr>
    <tr><td widht="1%">Pekerjaan</td><td width='1%'>:</td><td><?php echo $data->pekerjaan?></td></tr>
    <tr><td widht="1%">Nama kantor</td><td width='1%'>:</td><td><?php echo $data->nama_kantor?></td></tr>
    <tr><td widht="1%">Jabatan</td><td width='1%'>:</td><td><?php echo $data->jabatan?></td></tr>
    <tr><td widht="1%">Alm kantor</td><td width='1%'>:</td><td><?php echo $data->alm_kantor?></td></tr>
    <tr><td widht="1%">Tel kantor</td><td width='1%'>:</td><td><?php echo $data->tel_kantor?></td></tr>
    <tr><td widht="1%">Jenis Penghasilan</td><td width='1%'>:</td><td><?php echo $data->jenis_Penghasilan?></td></tr>
        

    
  </tbody>
</table>

