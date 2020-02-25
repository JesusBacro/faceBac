<?php
 //Agregamos la libreria FPDF
 require('fpdf/fpdf.php');

 class PDF extends FPDF
 {
 // Cabecera de página
 function Header()
 {
     // Logo
     $this->Image('images/bacrocorp.jpeg',10,8,33);
     // Arial bold 15
     $this->SetFont('Arial','B',15);
     // Movernos a la derecha
     $this->Cell(80);
     // Título
     $this->Cell(70,10,'Control de Comidas',1,0,'C');
     // Salto de línea
     $this->Ln(20);
 }
 // Pie de página
function Footer()
{
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Número de página
    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}
}

// Creación del objeto de la clase heredada
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times','',12);
$pdf->Cell(40,10,'',0,1,'L'); 
 $pdf->Output(); //Mostramos el PDF creado
?>