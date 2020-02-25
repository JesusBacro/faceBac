
<?php
 //Agregamos la libreria FPDF
 require('fpdf/fpdf.php');
$con=mysqli_connect('localhost','bacro','Mejoracontinua19');
mysqli_select_db($con,'id12491651_bac');
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
$pdf->Cell(160,30,utf8_decode('B A C R O  C O R P'),0,6,'C');

 $pdf->Image('images/vestimenta.png', 80 ,22, 35 , 38);
$pdf->Cell(170,20,utf8_decode('__________________________________________'),0,1,'C');
$pdf->Cell(0,0,utf8_decode('Nombre & Firma.'),0,0,'C');





 $pdf->Output(); //Mostramos el PDF creado
?>