<?php
include("recursos.php");

$carrito -> InsertarCompra($_GET['codigo'], $_GET['producto'], $_GET['descripcion'], $_GET['precio']);

header('Location: unidad7.php');
?>