<?php

include("usuarios.php");

if($_POST) { 	

$nombre_6 = $_POST['nombre'];
$apellido_6 = $_POST['apellido'];
$edad_6 = $_POST['edad'];


$datos = new Usuarios($nombre_6,$apellido_6,$edad_6);
$datos->imprime_caracteristicas(); 
}
?>