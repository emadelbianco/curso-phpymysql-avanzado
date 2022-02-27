<?php session_start();  ?>
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
		<?php include("botonera.php"); 
		function txt_captcha(){
			$texto = '0123456789abcdefghijklmnopqrstuvwxyz!#$%&/()=?' ;
			$codigo = '';

			for ($i=0; $i < 6; $i++) { 
				$codigo .= $texto[rand(0,45)];
			}

			return $codigo;
		}
		$_SESSION['captcha'] = txt_captcha();
		?>
	</nav>
	</header>
	<section>
		<h2>Consultas</h2>
		<form method="post" action="cargar.php" enctype="multipart/form-data">
			<input type="text" name="nombre" class="form-control" placeholder="Nombre" maxlength="30" required>
			<input type="text" name="apellido" class="form-control" placeholder="Apellido" maxlength="40" required>
			<input type="email" name="mail" class="form-control" placeholder="Mail" maxlength="40" required>
			<textarea name="comentario" placeholder="Comentario" class="form-control" maxlength="280" rows="6" required></textarea>
			<img src="captcha.php">
			<label>Ingrese el codigo de verificacion</label>
			<input type="text" name="codigo_captcha" required>
			<input type="submit" name="Enviar">
			<?php if (isset($_GET['error'])) {echo '<p>Codigo incorrecto.</p>';} ?>
			<?php if (isset($_GET['ok'])) {echo '<p>comentario cargado correctamente.</p>';} ?>
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