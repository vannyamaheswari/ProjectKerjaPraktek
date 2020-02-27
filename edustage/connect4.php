<?php

$nama_Lembaga = $_POST['nama_Lembaga'];
$bidang = $_POST['bidang'];
$tempat = $_POST['tempat'];
$tanggal = $_POST['tanggal'];
$bulan = $_POST['bulan'];
$tahun = $_POST['tahun'];
$usaha = $_POST['usaha'];
$alamat = $_POST['alamat'];
$RT = $_POST['RT'];
$RW = $_POST['RW'];
$zip = $_POST['zip'];
$kelurahan = $_POST['kelurahan'];
$kecamatan = $_POST['kecamatan'];
$kota = $_POST['kota'];
$provinsi = $_POST['provinsi'];
$noTelp = $_POST['noTelp'];
$noFax = $_POST['noFax'];
$nomerNpwp = $_POST['nomerNpwp'];
$Negaraan = $_POST['Negaraan'];
$jen_kel = $_POST['jen_kel'];
$status = $_POST['status'];
$agama = $_POST['agama'];
$pendidikan = $_POST['pendidikan'];
$pekerjaan = $_POST['pekerjaan'];
$namakantor = $_POST['namakantor'];
$jabatan = $_POST['jabatan'];
$alm_kantor = $_POST['alm_kantor'];
$tel_kantor = $_POST['tel_kantor'];
$jenis_Penghasilan = $_POST['jenis_Penghasilan'];

$conn = new mysqli('localhost','root','','pl_korp');
	if($conn->connect_error){
		die('Connection Filed : '.$conn->connect_error);
	}else{
		$stmt = $conn->prepare("insert into daftar(nama_Lembaga, bidang, tempat, tanggal, bulan, tahun, usaha, alamat, RT,RW,zip, kelurahan,kecamatan,kota,provinsi, noTelp, noFax, nomerNpwp, Negaraan,jen_kel,status, agama, pendidikan, pekerjaan, namakantor, jabatan, alm_kantor, tel_kantor, jenis_Penghasilan) values(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
		$stmt->bind_param("sssiiissiiissssiiisssssssssii",$nama_Lembaga, $bidang, $tempat, $tanggal, $bulan, $tahun, $usaha, $alamat, $RT, $RW, $zip, $kelurahan,$kecamatan, $kota, $provinsi, $noTelp, $noFax, $nomerNpwp, $Negaraan, $jen_kel, $status, $agama, $pendidikan, $pekerjaan, $namakantor, $jabatan, $alm_kantor, $tel_kantor, $jenis_Penghasilan);
		$stmt->execute();
		echo "registration Successfully...";
		$stmt->close();
		$conn->close();
	}

?>