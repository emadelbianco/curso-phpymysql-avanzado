<?php 

if ($_POST) {
	
	date_default_timezone_set("America/Argentina/Buenos_Aires");
	$fecha = date('d-m-Y G:i', time());

	$nombre = $_POST["nombre"];
	$mail = $_POST["email"];
	$comentario = $_POST["comentario"];

	$texto = '<h3 class="clase3_comentarios">'. $comentario . '</h3><h5> Nombre: '. $nombre . '</h5></n><h5> Mail: '.$mail.'</h5></n><p>'. $fecha . '</p></n> ' ;

	$archivo = fopen('comentarios.txt', 'c');
	
	$anterior = file_get_contents("comentarios.txt");

    $texto_final = $texto.$anterior; 

	fputs($archivo, $texto_final);

	fclose($archivo);
}

 ?>



