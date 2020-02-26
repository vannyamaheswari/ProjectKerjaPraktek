<?php

$nama_Lembaga = $_POST['nama_Lembaga'];
$bidang = $_POST['bidang'];
$tempat = $_POST['tempat'];
$tgl_beridiri = $_POST['tgl_berdiri'];
$bln_berdiri = $_POST['bln_berdiri'];
$thn_berdiri = $_POST['thn_berdiri'];
$bentuk_usaha = $_POST['bentuk_usaha'];
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
$noNPWP = $_POST['noNPWP'];
$jabatan = $_POST['jabatan'];
$status_gedung = $_POST['status_gedung'];
$nama = $_POST['nama'];
$alamat_1 = $_POST['alamat_1'];
$noAkta = $_POST['noAkta'];
$tgl_aktaBerdiri = $_POST['tgl_aktaBerdiri'];
$bln_aktaBerdiri = $_POST['bln_aktaBerdiri'];
$thn_aktaBerdiri = $_POST['thn_aktaBerdiri'];
$noBerubah = $_POST['noBerubah'];
$tgl_aktaBerubah = $_POST['tgl_aktaBerubah'];
$bln_aktaBerubah = $_POST['bln_aktaBerubah'];
$thn_aktaBerubah = $_POST['thn_aktaBerubah'];
$noIzin = $_POST['noIzin'];
$tgl_izin = $_POST['tgl_izin'];
$bln_izin = $_POST['bln_izin'];
$thn_izin = $_POST['thn_izin'];
$jenis_Penghasilan = $_POST['jenis_Penghasilan'];

// Query Input Data
$conn = new mysqli('localhost','root','','register');
if($conn->connect_error){
	die('Connection Failed : '.$conn->connect_error);
}else{
	$stmt = $conn->prepare("insert into bima_korp(nama_Lembaga, bidang, tempat, tgl_berdiri, bln_berdiri, thn_berdiri, bentuk_usaha, alamat, RT, RW, zip, kelurahan, kecamatan, kota, provinsi, noTelp, noFax, noNPWP, jabatan, status_gedung, nama, alamat_1, noAkta, tgl_aktaBerdiri, bln_aktaBerdiri, thn_aktaBerdiri,noBerubah, tgl_aktaBerubah, bln_aktaBerubah, thn_aktaBerubah, noIzin, tgl_izin, bln_izin, thn_izin, jenis_Penghasilan) values(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
	$stmt->bind_param("ssssssssiiissssssisssssssssssssssss", $nama_Lembaga, $bidang, $tempat, $tgl_berdiri, $bln_berdiri, $thn_berdiri, $bentuk_usaha, $alamat, $RT, $RW, $zip, $kelurahan, $kecamatan, $kota, $provinsi, $noTelp, $noFax, $noNPWP,  $jabatan, $status_gedung, $nama, $alamat_1, $noAkta, $tgl_aktaBerdiri, $bln_aktaBerdiri, $thn_aktaBerdiri, $noBerubah, $tgl_aktaBerubah, $bln_aktaBerubah, $thn_aktaBerubah, $noIzin, $tgl_izin, $bln_izin, $thn_izin, $jenis_Penghasilan);
	$stmt->execute();
	echo "registration Successfully...";
	$stmt->close();
	$conn->close();
	}
?>
