<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="estilos.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
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
		<h2>Usuarios</h2>
		<form method="post" action="" enctype="multipart/form-data">
			<input type="text" name="nombre" class="form-control" placeholder="Nombre" maxlength="30" required>
			<input type="text" name="apellido" class="form-control" placeholder="Apellido" maxlength="40" required>
			<input type="number" name="edad" class="form-control" placeholder="Edad" maxlength="3" required>
			<input type="submit" name="Cargar">
		</form>

	</section>
	<aside>
    	<?php
		include("clases/caract_usuarios.php");
		?>
  </aside>
	<footer>
		<a href="https://site.elearning-total.com/courses/?com=lb">Programación en PHP y MySQL - Nivel Avanzado</a>
	</footer>
 
</div>
</body>
</html>