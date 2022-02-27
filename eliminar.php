<?php
include("recursos.php");

$carrito->EliminarCompra($_GET['codigo']);

header('Location: unidad7.php');
	
?>