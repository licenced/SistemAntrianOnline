<?php
ob_start();
include_once("../config/config.php");
require('../Cetakpdf/fpdf.php');


$pdf = new FPDF('L','mm','A4');	
//L = lanscape P= potrait		
$pdf->SetLeftMargin(25);
 // setting tinggi dari kertas yang akan digunakan
$pdf->SetTopMargin(30);
// membuat halaman baru
$pdf->AddPage();
 // mengambil gambar untuk header/kopsurat
//$pdf->Image('../assets/img/header.jpg',20,null,255,45,'jpg');

 // setting jenis font yang akan digunakan
$pdf->SetFont('Times','B',14);
// $data=$this->Menu_model->getUnduh($kodemk);
   // mencetak string 
$pdf->Cell(169,9,'',0,2);
$pdf->Cell(100,5,'',0,0);$pdf->Cell(58,5,'LAPORAN TRANSAKSI','B',0,'C');
$pdf->Cell(169,4,'',0,1,'C');
// Memberikan space kebawah agar tidak terlalu rapat
$pdf->Cell(100,9,'',0,2);
//

$pdf->SetFont('Times','B',12,'C');
$pdf->Cell(10,8,'No',1,0,'C');
$pdf->Cell(40,8,'ID Tiket',1,0,'C');		
$pdf->Cell(40,8,'Nama',1,0,'C');	        
$pdf->Cell(38,8,'Nomor Mesin',1,0,'C');		
$pdf->Cell(45,8,'Nomor Plat Kendaraan',1,0,'C');	
$pdf->Cell(40,8,'Tanggal Booking',1,0,'C');	
$pdf->Cell(38,8,'Keluhan',1,1,'C');

//
$pdf->SetFont('Times','',12,'C');

// Baca input tanggal yang dikirimkan user
$dari =$_POST['ta'];
$sampai =$_POST['tb'];
$no=1;
	$query=mysqli_query("SELECT tiket.*, users.name, users.nik, users.mobile FROM tiket INNER JOIN users ON tiket.pembuat=users.id WHERE keterangan='selesai' AND (tanggal BETWEEN '$dari' AND '$sampai' ) ORDER BY tanggal DESC");
	while($row = mysqli_fetch_array($query)){
	$pdf->Cell(10,8, $no++ , 1, 0,'C');
	$pdf->Cell(40,8, $row['id_tiket'],1, 0, 'C');
	$pdf->Cell(40,8, $row['nama_stnk'],1, 0, 'C');
	$pdf->Cell(38,8, $row['no_mesin'], 1,0, 'C');
	$pdf->Cell(45,8, $row['no_plat'],1,0,'C');
	$pdf->Cell(40,8, $row['tanggal'], 1,0,'C');
	$pdf->Cell(38,8, $row['keluhan'], 1,1,'C');
	}
	
	
// Memberikan Footer
$pdf->Cell(169,12,'',0,1);
$pdf->SetFont('Times','',12);
$pdf->Cell(25,7,'Mengetahui,',0,0,'L'); $pdf->Cell(205,7,'Bandar Lampung,',0,0,'R');$pdf->Cell(60,7,date('d-m-Y'),0,1);
$pdf->Cell(25,7,'Pimpinan',0,0,'L'); $pdf->Cell(205,7,'Admin',0,1,'R');
$pdf->Cell(169,20,'',0,3);
$pdf->Cell(45,5,'(......................................)','B',0,'L');$pdf->Cell(155,5,'',0,0);$pdf->Cell(45,5,'(......................................)','B',0,'L');
$pdf->Cell(50,5,'',0,1);
// $pdf->Cell(114,7,'',0,0);$pdf->Cell(70,7,'',0,0,'L');
ob_clean();
	$pdf->Output();
	$pdf->Stream(array("Attachment" => FALSE));
?>