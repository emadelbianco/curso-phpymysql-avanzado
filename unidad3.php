<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="estilos.css">
</head>
 
<body>
 
<div class="container">
	<header>
		<h1>Programación en PHP y MySQL - Nivel Avanzado</h1>
	

	<nav>
		<?php include("botonera.php"); ?>
	</nav>
	</header>
	<section>
		<h2>Comentarios</h2>

		<?php 
		include('comentarios.php'); 
		
		$archivo_abrir_lectura = fopen ('comentarios.txt', 'r');
		fpassthru($archivo_abrir_lectura);
		fclose($archivo_abrir_lectura);
		?>

	</section>
	<aside>
		<form method="post" action="unidad3.php">
			<input type="text" name="nombre" placeholder="Nombre y Apellido" required>
			<input type="email" name="email" placeholder="Mail" required>
			<textarea name="comentario" placeholder="Comentario" rows="6" required></textarea>
			<input type="submit" value="Enviar">
		</form>    
  </aside>
	<footer>
		<a href="https://site.elearning-total.com/courses/?com=lb">Programación en PHP y MySQL - Nivel Avanzado</a>
	</footer>
 
</div>
</body>
</html>