<?php
session_start();
header('Content-type: image/jpeg');
$imagen = imagecreate(120, 50);
$color_fondo= imagecolorallocate($imagen, 209, 242, 235);
$color_texto = imagecolorallocate($imagen, 160, 64, 0);
imagestring($imagen, 5, 30, 20, $_SESSION['captcha'], $color_texto);
imagejpeg($imagen);
?>