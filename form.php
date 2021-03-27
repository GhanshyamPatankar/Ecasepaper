<?php 
$name = $_POST['name'];
$img = $_POST['img'];
$gender = $_POST['gender'];
$birthdate = $_POST['birthdate'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$aadhar = $_POST['aadhar'];
$address = $_POST['address'];
$pastdiseases = $_POST['pastdiseases'];

require("fpdf/fpdf.php");

$pdf = new fpdf();
$pdf->Addpage();
$pdf->SetFont("Arial","B",16);
$pdf->Cell(0,10,"E-Case Paper",1,1);
$pdf->Cell(50,10,"Name: ",1,0);
$pdf->Cell(100,10,$name,1,0);
$pdf->Cell(50,50,$img,1,1);
$pdf->Cell(50,10,"Gender: ",1,0);
$pdf->Cell(100,10,$gender,1,1);
$pdf->Cell(50,10,"Birthdate: ",1,0);
$pdf->Cell(100,10,$birthdate,1,1);
$pdf->Cell(50,10,"E-mail: ",1,0);
$pdf->Cell(100,10,$email,1,1);
$pdf->Cell(50,10,"Phone: ",1,0);
$pdf->Cell(100,10,$phone,1,1);
$pdf->Cell(50,10,"Aadhar: ",1,0);
$pdf->Cell(100,10,$aadhar,1,1);
$pdf->Cell(50,10,"Address: ",1,0);
$pdf->Cell(100,10,$address,1,1);
$pdf->Cell(50,10,"Past Diseases: ",1,0);
$pdf->Cell(50,10,$pastdiseases,1,0);

$pdf->output();
 ?>