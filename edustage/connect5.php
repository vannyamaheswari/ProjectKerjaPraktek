<?php

$jenis = $_POST['jenis'];
$firstName = $_POST['firstName'];
$tempat = $_POST['tempat'];
$tanggal = $_POST['tanggal'];
$bulan = $_POST['bulan'];
$tahun = $_POST['tahun'];
$agama = $_POST['agama'];
$jen_kel = $_POST['jen_kel'];
$status = $_POST['status'];
$nik = $_POST['nik'];
$alamat = $_POST['alamat'];
$RT = $_POST['RT'];
$RW = $_POST['RW'];
$zip = $_POST['zip'];
$kelurahan = $_POST['kelurahan'];
$kecamatan = $_POST['kecamatan'];
$kota = $_POST['kota'];
$provinsi = $_POST['provinsi'];
$email = $_POST['email'];
$noHp = $_POST['noHp'];
$nonpwp = $_POST['nonpwp'];
$negaraan = $_POST['negaraan'];
$pekerjaan = $_POST['pekerjaan'];
$gaji = $_POST['gaji'];
$pendapatan_lain = $_POST['pendapatan_lain'];
$investasi = $_POST['investasi'];
$usia_pensiun = $_POST['usia_pensiun'];
$iuran_kerja = $_POST['iuran_kerja'];
$iuran_peserta = $_POST['iuran_peserta'];
$firstName2 = $_POST['firstName2'];
$tempat_lahir = $_POST['tempat_lahir'];
$tanggal_lahir = $_POST['tanggal_lahir'];
$bulan_lahir = $_POST['bulan_lahir'];
$tahun_lahir = $_POST['tahun_lahir'];
$alamat_w = $_POST['alamat_w'];
$kecamatan_w = $_POST['kecamatan_w'];
$kota_w = $_POST['kota_w'];
$zip_w = $_POST['zip_w'];
$tlp_rmh = $_POST['tlp_rmh'];
$nomerhp_w = $_POST['nomerhp_w'];
$hub_peserta = $_POST['hub_peserta'];
$kerabat = $_POST['kerabat'];
$noKerabat = $_POST['noKerabat'];
$ktr_Nama = $_POST['ktr_Nama'];
$jabatan = $_POST['jabatan'];
$alm_ktr = $_POST['alm_ktr'];
$kec_ktr = $_POST['alm_ktr'];
$tel_kantor = $_POST['tel_kantor'];
$nama_lengkap = $_POST['nama_lengkap'];
$l_tempat = $_POST['l_tempat'];
$lahir_tanggal = $_POST['lahir_tanggal'];
$lahir_bulan = $_POST['lahir_bulan'];
$lahir_tahun = $_POST['lahir_tahun'];
$no_Induk = $_POST['no_Induk'];
$no_alamat = $_POST['no_alamat'];
$no_kec = $_POST['no_kec'];
$no_kota = $_POST['no_kota'];
$no_zip = $_POST['no_zip'];
$telp_No = $_POST['telp_No'];
$kerja = $_POST['kerja'];
$kantor_nama = $_POST['kantor_nama'];
$jenis_usaha = $_POST['jenis_usaha'];
$jabat = $_POST['jabat'];
$penghasilan = $_POST['penghasilan'];
$no_rek = $_POST['no_rek'];
$nama_rek = $_POST['nama_rek'];
$tgl_debet = $_POST['tgl_debet'];
$nominal_debet = $_POST['nominal_debet'];





$conn = new mysqli('localhost','root','','dplk');
if($conn->connect_error){
	die('Connection Failed : '.$conn->connect_error);
}else{
	$stmt = $conn->prepare("insert into daftar(jenis, firstName, tempat, tanggal, bulan, tahun, agama, jen_kel, status, nik, alamat, RT, RW, zip, kelurahan, kecamatan, kota, provinsi, email, noHp, nonpwp, negaraan, pekerjaan, gaji, pendapatan_lain, investasi, usia_pensiun, iuran_kerja, iuran_peserta, firstName2, tempat_lahir, tanggal_lahir, bulan_lahir, tahun_lahir, alamat_w, kecamatan_w, kota_w, zip_w, tlp_rmh, nomerhp_w, hub_peserta, kerabat, noKerabat, ktr_Nama, jabatan, alm_ktr, kec_ktr, tel_kantor, nama_lengkap,l_tempat, lahir_tanggal, lahir_bulan, lahir_tahun, no_Induk, no_alamat, no_kec, no_kota, no_zip, telp_No, kerja, kantor_nama, jenis_usaha, jabat, penghasilan, no_rek, nama_rek, tgl_debet, nominal_debet ) values(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ? )");
	$stmt->bind_param("sssiiisssisiiisssssiissiisiiissiiisssiiississssissiiiisssiissssiissi", $jenis, $firstName, $tempat, $tanggal, $bulan, $tahun, $agama, $jen_kel, $status, $nik, $alamat, $RT, $RW, $zip, $kelurahan, $kecamatan, $kota, $provinsi, $email, $noHp, $nonpwp, $negaraan, $pekerjaan, $gaji, $pendapatan_lain, $investasi, $usia_pensiun, $iuran_kerja, $iuran_peserta, $firstName2, $tempat_lahir, $tanggal_lahir, $bulan_lahir, $tahun_lahir, $alamat_w, $kecamatan_w, $kota_w, $zip_w, $tlp_rmh, $nomerhp_w, $hub_peserta, $kerabat, $noKerabat, $ktr_Nama, $jabatan, $alm_ktr, $kec_ktr, $tel_kantor, $nama_lengkap,$l_tempat, $lahir_tanggal, $lahir_bulan, $lahir_tahun, $no_Induk, $no_alamat, $no_kec, $no_kota, $no_zip, $telp_No, $kerja, $kantor_nama, $jenis_usaha, $jabat, $penghasilan, $no_rek, $nama_rek, $tgl_debet, $nominal_debet );
	$stmt->execute();
	echo "registration Successfully...";
	$stmt->close();
	$conn->close();

}

?>