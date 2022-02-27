<?php

include ("clases/usuarios.php");

if($_POST) { 

	$unidad6 = new Usuario($_POST["nombre"], $_POST["apellido"], $_POST["edad"]);
		
	$unidad6 -> imprime_caracteristicas();
}

?>