<?php
include "bd.php";
require('fpdf186/fpdf.php');

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial', 'B', 14);
$pdf->Cell(190, 10, 'centro de estudios servicios 84', 0, 1, 'C'); 
$pdf->SetFont('Arial', '', 10); 
$pdf->Cell(190, 10, utf8_decode('desarrolla aplicaciones en paginas web con conexion a base de datos'), 0, 1, 'C'); 
$pdf->SetFont('Times', 'B', 16); 
$pdf->Cell(190, 10, utf8_decode('Angel Moises Guzman Solis'), 1, 1, 'C', true); 
$pdf->Output();
?>
