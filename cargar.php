<?php  
session_start();
if ($_POST['codigo_captcha'] == $_SESSION['captcha']) {

	include('conexion.php');

	$nombre = $_POST['nombre'];
	$apellido = $_POST['apellido'];
	$correo = $_POST['mail'];
	$comentario = $_POST['comentario'];

	mysqli_query($conexion, "INSERT INTO consultas VALUES (default, '$nombre', '$apellido', '$correo', '$comentario' )" );

	header('Location:unidad5.php?ok');

} else {

	header('Location:unidad5.php?error');

}
?>