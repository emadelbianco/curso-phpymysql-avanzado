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
		<h2>Eventos</h2>
		<form method="post" action="unidad2.php">
			<input type="number" name="Dia" placeholder="Dia" min="1" max="31" required>
			<input type="number" name="Mes" placeholder="Mes" min="1" max="12" required> 
			<input type="number" name="Año" placeholder="Año" min="1700" max="3000" required> 
			<input type="submit" value="Enviar"> 
		</form>
		
		<?php include('calculo_fecha.php'); ?>
		
	</section>
	<aside>
    	<h4>EVENTOS le permite determinar cuantos dias faltan para una fecha determinada. Uselo con sabiduria joven Padawan.</h4>
  </aside>
	<footer>
		<a href="https://site.elearning-total.com/courses/?com=lb">Programación en PHP y MySQL - Nivel Avanzado</a>
	</footer>
 
</div>
</body>
</html>