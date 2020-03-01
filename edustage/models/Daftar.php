<?php

use Illuminate\Database\Eloquent\Model as Eloquent;

class Daftar extends Eloquent {
    protected $table = 'daftar';
    protected $fillable = [
        "nik",
		"nama",
		"alamat",
		"RT",
		"RW",
		"zip",
		"kelurahan",
		"kecamatan",
		"kota",
		"provinsi",
		"tempat",
		"tgl_lahir",
		"bln_lahir",
		"thn_lahir",
		"email",
		"noRum",
		"noHp",
		"noNPWP",
		"kewarganegaraan",
		"gender,status",
		"agama",
		"pendidikan",
		"pekerjaan",
		"nama_kantor",
		"jabatan",
		"alm_kantor",
		"tel_kantor",
		"jenis_Penghasilan"
    ];

    public $timestamps = false;
}