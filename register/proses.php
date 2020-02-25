<?php
// koneksi ke database
include 'koneksi.php';
 
include 'email.php';
 
// function untuk mengenerate ID registrasi unik
// dengan format 'TRX-----', mis: TRX00001
function newID()
{
    $query = "SELECT max(id) as maxID FROM registrasi";
    $hasil = mysqli_query($query);
    $data  = mysqli_fetch_array($hasil);
    $idMax = $data&#91;'maxID'&#93;;
    $noUrut = (int) substr($idMax, 3, 5);
    $noUrut++;
    $id = 'TRX' . sprintf("%05s", $noUrut);
    return $id;
}
 
$nama = $_POST&#91;'nama'&#93;;
$alamat = $_POST&#91;'alamat'&#93;;
$email = $_POST&#91;'email'&#93;;
// mengenerate ID registrasi baru
$id = newID();
 
// menyimpan data registrasi ke db
$query = "INSERT INTO registrasi (id, nama, alamat, email) VALUES ('$id', '$nama', '$alamat', '$email')";
$hasil = mysqli_query($query);
if ($hasil) {
   echo "Registrasi sukses, form bukti registrasi akan dikirim ke email Anda";
   // kirim email dg attachment file PDF bukti registrasi
   kirimEmail($id, $email);
}
else echo "Registrasi gagal";
 
?>