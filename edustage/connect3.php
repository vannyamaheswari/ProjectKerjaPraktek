<?php
	
	$nik = $_POST['nik'];
	$firstName = $_POST['firstName'];
	$alamat = $_POST['alamat'];
	$RT = $_POST['RT'];
	$RW = $_POST['RW'];
	$zip = $_POST['zip'];
	$kelurahan = $_POST['kelurahan'];
	$kecamatan = $_POST['kecamatan'];
	$kota = $_POST['kota'];
	$provinsi = $_POST['provinsi'];
	$tempat = $_POST['tempat'];
	$tgl_lahir = $_POST['tgl_lahir'];
	$bln_lahir = $_POST['bln_lahir'];
	$thn_lahir = $_POST['thn_lahir'];
	$email = $_POST['email'];
	$noRum = $_POST['noRum'];
	$noHp = $_POST['noHp'];
	$noNPWP = $_POST['noNPWP'];
	$kewarganegaraan = $_POST['kewarganegaraan'];
	$jen_kel = $_POST['jen_kel'];
	$status = $_POST['status'];
	$agama = $_POST['agama'];
	$pendidikan = $_POST['pendidikan'];
	$pekerjaan = $_POST['pekerjaan'];
	$nama_kantor = $_POST['nik'];
	$jabatan = $_POST['jabatan'];
	$alm_kantor = $_POST['alm_kantor'];
	$tel_kantor = $_POST['tel_kantor'];
	$jenis_Penghasilan = $_POST['jenis_Penghasilan'];


	//database connection
	$conn = new mysqli('localhost','root','','p_personal');
	if($conn->connect_error){
		die('Connection Filed : '.$conn->connect_error);
	}else{
		$stmt = $conn->prepare("insert into daftar(nik, firstName, alamat, RT, RW, zip, kelurahan, kecamatan, kota, provinsi, tempat, tgl_lahir, bln_lahir, thn_lahir, email, noRum, noHp, noNPWP, kewarganegaraan, jen_kel,status, agama, pendidikan, pekerjaan, nama_kantor, jabatan, alm_kantor, tel_kantor, jenis_Penghasilan) values(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
		$stmt->bind_param("issiiisssssdddsiiisssssssssii", $nik, $firstName, $alamat, $RT, $RW, $zip, $kelurahan, $kecamatan, $kota, $provinsi, $tempat, $tgl_lahir, $bln_lahir, $thn_lahir, $email, $noRum, $noHp, $noNPWP, $kewarganegaraan, $jen_kel, $status, $agama, $pendidikan, $pekerjaan, $nama_kantor, $jabatan, $alm_kantor, $tel_kantor, $jenis_Penghasilan);
		$stmt->execute();
		echo "registration Successfully...";
		$stmt->close();
		$conn->close();
	}

?>