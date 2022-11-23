<?php

$GLOBALS["nombres"] = $_REQUEST['nombres'];
$GLOBALS["apellidos"] = $_REQUEST['apellidos'];
$GLOBALS["rut"] = $_REQUEST['rut'];
$GLOBALS["fecha_nacimiento"] = $_REQUEST['fecha_nacimiento'];
$GLOBALS["genero"] = $_REQUEST['genero'];
$GLOBALS["nacionalidad"] = $_REQUEST['nacionalidad'];
$GLOBALS["ciudad_residencia"] = $_REQUEST['ciudad_residencia'] ;
$GLOBALS["foto"] = $_REQUEST['foto'] ;

$GLOBALS["nombre_completo"] = $nombres.' '.$apellidos;
$GLOBALS["bandera"] = 'pais/'.$nacionalidad.'.png';
$GLOBALS["qr"] = 'qrimg/'.$nombres.'_'.$apellidos.'_qr.png';
require('fpdf/fpdf.php');

class PDF extends FPDF
{
function Header()
{


    // Logo
    $this->Image('logo_upla.png',70,4,60);
    $this->Ln(30);

    // Imagen perfil
    $this->Image($GLOBALS["foto"],10,30,90);

    //Nombre
    $this->SetFont('Helvetica','u',26);
    $this->Cell(100);
    $this->Cell(1,15,'Nombre Completo',0,0,'L');
    $this->Ln(14);
    $this->SetFont('Helvetica','i',18);
    $this->Cell(100);
    $this->Cell(1,15,$GLOBALS["nombres"],0,0,'l');
    $this->Ln(8);
    $this->SetFont('Helvetica','i',18);
    $this->Cell(100);
    $this->Cell(1,15,$GLOBALS["apellidos"],0,0,'l');
    $this->Ln(25);

    //Rut
    $this->SetFont('Helvetica','u',26);
    $this->Cell(100);
    $this->Cell(0,15,'Rut',0,0,'L');
    $this->Ln(14);
    $this->SetFont('Helvetica','i',18);
    $this->Cell(100);   
    $this->Cell(1,15,$GLOBALS["rut"],0,0,'l');
    $this->Ln(42);

    //Fecha de nacimiento 
    $this->SetFont('Helvetica','u',26);
    $this->Cell(1,15,'Fecha de nacimiento',0,0,'L');
    //Genero
    $this->SetFont('Helvetica','u',26);
    $this->Cell(110);
    $this->Cell(1,15,'Genero',0,0,'L');

    //Salto de linea
    $this->Ln(14);

    //Datos
    $this->SetFont('Helvetica','i',18); 
    $this->Cell(1,15,$GLOBALS["fecha_nacimiento"],0,0,'l');
    $this->SetFont('Helvetica','i',18);
    $this->Cell(110);   
    $this->Cell(1,15,$GLOBALS["genero"],0,0,'l');
    $this->Ln(40); 

    //Nacionalidad
    $this->SetFont('Helvetica','u',26);
    $this->Cell(1,15,'Nacionalidad',0,0,'L');

    //ciudad
    $this->SetFont('Helvetica','u',26);
    $this->Cell(110);
    $this->Cell(1,15,'Residencia',0,0,'L');

    //datos
    $this->Ln(14);
    $this->SetFont('Helvetica','i',18); 
    $this->Cell(1,15,$GLOBALS["nacionalidad"],0,0,'l');
    $this->Cell(110);   
    $this->Cell(1,15,$GLOBALS["ciudad_residencia"],0,0,'l');
    $this->Ln(40); 

    //Bandera
    $this->Ln(40); 
    $this->Image($GLOBALS["bandera"],10,250,50);
    
    //QR
    $this->Ln(40); 
    $this->Image($GLOBALS["qr"],120,240,50);    
    
}

}

// Instanciation of inherited class
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times','',14);
$pdf->Output();
?>