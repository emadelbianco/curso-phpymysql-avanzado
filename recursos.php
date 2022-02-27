<?php
include("clases/basededatos.php");
include("clases/producto.php");
include("clases/carrito.php");

define('HOST','localhost');
define('USUARIO','root');
define('CLAVE','');
define('BASE','phpavanzado');

$base = new Basededatos(HOST, USUARIO, CLAVE, BASE);
$producto = new Producto($base);
$carrito = new Carrito($base);
?>