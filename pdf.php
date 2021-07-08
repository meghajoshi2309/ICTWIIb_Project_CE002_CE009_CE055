<?php
session_start();
require("fpdf/fpdf.php");
$pdf=new FPDF();
$pdf->AddPage();
$pdf->SetFont("Arial","",16);
$pdf->Cell(0,20,"Gada Electronics",1,2,'C');

$pdf->Cell(50,10,"Name",1,0,'C');
$pdf->Cell(0,10,$_SESSION['firstname'],1,1,'C');
$pdf->Cell(50,10,"Address",1,0,'C');
$pdf->Cell(0,10,$_SESSION['address'],1,1,'C');
$pdf->Cell(50,10,"Email",1,0,'C');
$pdf->Cell(0,10,$_SESSION['email'],1,1,'C');
$pdf->Cell(50,10,"Total Amount",1,0,'C');
$pdf->Cell(0,10,$_SESSION['total'],1,2,'C');

$pdf->Cell(0,10,"Thank You For Visiting Gada Elecronics :)",'C');

$pdf->Output();


?>