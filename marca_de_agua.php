<?php

$original = 'imagenes/original.jpg';
$marca = 'imagenes/marca.png';

$img_original = imagecreatefromjpeg($original);
$img_marca = imagecreatefrompng($marca);

imagecopy($img_original, $img_marca, 200, 200, 0, 0, imagesx($img_marca), imagesy($img_marca));

header("Content-type: image/jpeg");

imagejpeg($img_original);

?>