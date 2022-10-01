<?php

Require 'phpqrcode/qrlib.php';

$dire = 'temp/';

if(!file_exists($dire))
    mkdir($dire);

$filename = $dire.'test.png';
$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];


$contenido = $nombre." ".$apellido;
$tamanio = 7;
$level = 'M';
$framSize = 3;


QRcode::png($contenido, $filename, $level, $tamanio, $framSize); 

echo '<img src="'.$filename.'" /> <hr/>';  
echo $contenido;

?>