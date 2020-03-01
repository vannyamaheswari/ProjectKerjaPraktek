<?php
define("TYPE_CAPSULE","personal");
require_once __DIR__. DIRECTORY_SEPARATOR . ".." . DIRECTORY_SEPARATOR . "lib" . DIRECTORY_SEPARATOR . "BardLib.php";

use Rakit\Validation\Validator;

methodFilter("post");

$validator = new Validator;

$validation = $validator->validate($_POST, [
    'nik'		    => 'required|uniques:daftar,nik',
    'nama'		    => 'required',
    'alamat'		=> 'required',
    'RT'		    => 'required',
    'RW'		    => 'required',
    'zip'		    => 'required',
    'kelurahan'		=> 'required',
    'kecamatan'		=> 'required',
    'kota'		    => 'required',
    'provinsi'		=> 'required',
    'tempat'		=> 'required',
    'tgl_lahir'		=> 'required',
    'bln_lahir'		=> 'required',
    'thn_lahir'		=> 'required',
    'email'		    => 'required',
    'noRum'		    => 'required',
    'noHp'		    => 'required',
    'noNPWP'		=> 'required',
    'kewarganegaraan'=> 'required',
    'gender'		=> 'required',
    'status'		=> 'required',
    'agama'		    => 'required',
    'pendidikan'	=> 'required',
    'pekerjaan'		=> 'required',
    'nik'		    => 'required',
    'jabatan'		=> 'required',
    'alm_kantor'	=> 'required',
    'tel_kantor'	=> 'required',
    'jenis_Penghasilan'	=> 'required',
]);

if($validation->fails()){
    echo json_encode([
        'type'=>"danger",
        "title"=>"Error!",
        "html"=>Alert::errorList($validation->errors()->all())
    ]);
}else{
    try{
        $d = Daftar::create($_POST);
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
            "html"=>"Ada kesalahan pada input database atau nik sudah terdaftar! e:" . $e->getMessage() 
        ]);
    }
}