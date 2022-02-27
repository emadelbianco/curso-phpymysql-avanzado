<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  	<link rel="stylesheet" href="estilos.css">
</head>
 
<body>
 
<div class="container">
	<header>
		<h1>Programación en PHP y MySQL - Nivel Avanzado</h1>


	<nav>
		<?php include("botonera.php"); 
		if
		?>
	</nav>
	</header>
	<section>
		<h2>Reclamo</h2>
		<p>Complete los campos y acercese a la oficina más cercana.</p>

		<form method="post" action="pdf.php" enctype="multipart/form-data" target="_blank">
			<input type="text" name="nombre" class="form-control" placeholder="Nombre" required>
			<input type="text" name="apellido" class="form-control" placeholder="Apellido" required>
			<textarea name="comentario" class="form-control" placeholder="Reclamo" rows="12" required></textarea>
			<input type="submit" name="Convertir" value="Enviar reclamo">
		</form>

	</section>
	<aside>
    
  </aside>
	<footer>
		<a href="https://site.elearning-total.com/courses/?com=lb">Programación en PHP y MySQL - Nivel Avanzado</a>
	</footer>
 
</div>
</body>
</html>