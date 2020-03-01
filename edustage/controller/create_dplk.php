<?php
define("TYPE_CAPSULE","dplk");
require_once __DIR__."/../lib/BardLib.php";

use Rakit\Validation\Validator;

methodFilter("post");

$validator = new Validator;

$validation = $validator->validate($_POST, [
    'jenis'			=> 'required',
    'firstName'			=> 'required',
    'tempat'			=> 'required',
    'tanggal'			=> 'required',
    'bulan'			=> 'required',
    'tahun'			=> 'required',
    'agama'			=> 'required',
    'jen_kel'			=> 'required',
    'status'			=> 'required',
    'nik'			=> 'required',
    'alamat'			=> 'required',
    'RT'			=> 'required',
    'RW'			=> 'required',
    'zip'			=> 'required',
    'kelurahan'			=> 'required',
    'kecamatan'			=> 'required',
    'kota'			=> 'required',
    'provinsi'			=> 'required',
    'email'			=> 'required',
    'noHp'			=> 'required',
    'nonpwp'			=> 'required',
    'negaraan'			=> 'required',
    'pekerjaan'			=> 'required',
    'gaji'			=> 'required',
    'pendapatan_lain'			=> 'required',
    'investasi'			=> 'required',
    'usia_pensiun'			=> 'required',
    'iuran_kerja'			=> 'required',
    'iuran_peserta'			=> 'required',
    'firstName2'			=> 'required',
    'tempat_lahir'			=> 'required',
    'tanggal_lahir'			=> 'required',
    'bulan_lahir'			=> 'required',
    'tahun_lahir'			=> 'required',
    'alamat_w'			=> 'required',
    'kecamatan_w'			=> 'required',
    'kota_w'			=> 'required',
    'zip_w'			=> 'required',
    'tlp_rmh'			=> 'required',
    'nomerhp_w'			=> 'required',
    'hub_peserta'			=> 'required',
    'kerabat'			=> 'required',
    'noKerabat'			=> 'required',
    'ktr_Nama'			=> 'required',
    'jabatan'			=> 'required',
    'alm_ktr'			=> 'required',
    'kec_ktr'			=> 'required',
    'tel_kantor'			=> 'required',
    'nama_lengkap'			=> 'required',
    'l_tempat'              => 'required',
    'lahir_tanggal'			=> 'required',
    'lahir_bulan'			=> 'required',
    'lahir_tahun'			=> 'required',
    'no_Induk'			=> 'required',
    'no_alamat'			=> 'required',
    'no_kec'			=> 'required',
    'no_kota'			=> 'required',
    'no_zip'			=> 'required',
    'telp_No'			=> 'required',
    'kerja'			=> 'required',
    'kantor_nama'			=> 'required',
    'jenis_usaha'			=> 'required',
    'jabat'			=> 'required',
    'penghasilan'			=> 'required',
    'no_rek'			=> 'required',
    'nama_rek'			=> 'required',
    'tgl_debet'			=> 'required',
    'nominal_debet'			=> 'required',
]);

if($validation->fails()){
    echo json_encode([
        'type'=>"danger",
        "title"=>"Error!",
        "html"=>Alert::errorList($validation->errors()->all())
    ]);
}else{
    try{
        $d = DaftarDplk::create($_POST);
        echo json_encode([
            'type'=>"success",
            "title"=>"Sukses!",
            "html"=>"Data berhasil di input, terimakasih",
            "data"=>$d
        ]);
    }catch(Exception $e){
        echo json_encode([
            'type'=>"danger",
            "title"=>"Error!",
            "html"=>"Ada kesalahan pada input database atau nik sudah terdaftar!"
        ]);
    }
}