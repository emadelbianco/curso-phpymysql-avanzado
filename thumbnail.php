<?php 
$ruta = 'imagenes/unidad4.jpg';
$base = imagecreatefromjpeg($ruta);

$img_ancho = imagesx($base);
$img_alto = imagesy($base);
$porcentaje = (256/75);

$ancho_redu = $img_ancho / $porcentaje;
$alto_redu = $img_alto / $porcentaje;

$img_redu =  imagecreatetruecolor($ancho_redu, $alto_redu);

imagecopyresized($img_redu, $base, 0, 0, 0, 0, $ancho_redu, $alto_redu, $img_ancho, $img_alto);

imagejpeg($img_redu);

 ?>