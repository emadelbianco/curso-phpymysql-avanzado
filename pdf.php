<?php
require("libreria/fpdf.php");

$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$comentario=$_POST['comentario'];


$pdf=new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf->Cell(70);
$pdf->Cell(40,10,'RECLAMO',1,0,'C');
$pdf->Ln(25);
$pdf->Cell(50,15, 'Guarde esta copia como en digital o impresa para su seguridad.');
$pdf->Ln(15);
$pdf->Cell(60,20, 'NOMBRE: '.$nombre.' '. $apellido );
$pdf->Ln(25);
$pdf->MultiCell(185, 10, $comentario);
$pdf->Ln(15);
$pdf->Cell(50,15, '¡Fin del reclamo!');
$pdf->Output();
?> 

require