<?php
require 'phpqrcode/qrlib.php';

$dir = 'qrimg/';

if(!file_exists ($dir))
    mkdir($dir);

$filename = $dir.$nombres.'_'.$apellidos.'_qr.png';
 

$tamanio = 10;
$level = 'M';
$frameSize = 2;
$contenido = $nombres .' '. $apellidos .''. $rut .''. $genero .''. $fecha_nacimiento .''. $nacionalidad .''. $ciudad_residencia;


QRcode::png($contenido, $filename, $level, $tamanio, $frameSize);
echo '<img src="'.$filename.'"/>';