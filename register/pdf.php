<?php
// membuat file PDF registrasi berdasarkan ID
 
include 'koneksi.php';
include 'fpdf.php'; 
 
$id = $_GET&#91;'id'&#93;;
 
$query = "SELECT * FROM registrasi WHERE id = '$id'";
$hasil = mysqli_query($query);
$data  = mysqli_fetch_array($hasil);
 
$pdf=new FPDF('P','mm','A4');
$pdf->AddPage();
$pdf->SetFont('Times','',12);
$pdf->Cell(30,10,'ID Registrasi',0,0,'L');
$pdf->Cell(5,10,':',0,0,'L');
$pdf->Cell(100,10,$data['id'],0,1,'L');
$pdf->Cell(30,10,'Nama Lengkap',0,0,'L');
$pdf->Cell(5,10,':',0,0,'L');
$pdf->Cell(100,10,$data['nama'],0,1,'L');
$pdf->Cell(30,10,'Alamat Rumah',0,0,'L');
$pdf->Cell(5,10,':',0,0,'L');
$pdf->Cell(100,10,$data['alamat'],0,1,'L');
$pdf->Cell(30,10,'E-mail',0,0,'L');
$pdf->Cell(5,10,':',0,0,'L');
$pdf->Cell(50,10,$data['email'],0,1,'L');
$pdf->Output();
?>