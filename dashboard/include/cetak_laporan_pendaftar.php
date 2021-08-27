<?php  
ob_start();
include '../../assets/libs/fpdf/fpdf.php';
include '../../koneksi/koneksi.php';
include '../../assets/libs/fpdf/mc_table/mc_table.php';

$id_maintenance = $_GET['id_mnt'];


// Instanciation of inherited class
$pdf = new PDF_MC_Table();
$pdf->AliasNbPages();
$pdf->AddPage();



$pdf->Ln(15);
$pdf->Cell(40,10,'',0,0,'L');
$pdf->SetFont('TIMES','B',12);
$pdf->Cell(100,10,'Data Pendaftar',1,1,'C');
$pdf->Ln();
$pdf->SetFont('TIMES','',10);
$pdf->Cell(10,10,'No.',1,0,'C');
$pdf->Cell(40,10,'Nama',1,0,'C');
$pdf->Cell(50,10,'Tempat Lahir',1,0,'C');
$pdf->Cell(20,10,'Gender',1,0,'C');
$pdf->Cell(30,10,'Alamat',1,0,'C');
$pdf->Cell(30,10,'Tanggal Daftar',1,1,'C');

$query	=	"SELECT * FROM pendaftaran";
$exec 	=	mysqli_query($conn, $query);

$no = 0;

$pdf->SetWidths(array(10,40,50,20,30,30));
// tambah tanggal daftar
while ($rows = mysqli_fetch_array($exec)) {
  $tanggal = date('d F Y', strtotime($rows['tanggal_daftar']));
  $pdf->Row(array(++$no,$rows['nama'],$rows['tempat_lahir'],$rows['jenis_kelamin'],$rows['alamat'],$tanggal));
}


$pdf->Output();

?>