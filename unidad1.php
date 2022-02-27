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
		<h2>Agenda de clases</h2>

		<?php include("ver_clases.php"); ?>
    	
    </section>
	
	<aside>
		<section id="contenido">
        <form method="post" action="insertar_clases.php">
            <input class="form-control" type="text" name="Unidad" placeholder="Unidad" maxlength="30" required>
            <input class="form-control" type="date" name="Fecha" placeholder="Fecha" required>
            <input class="btn btn-secondary btn-l" type="submit" value="Agendar">
        </form>

        <?php
            if (isset($_GET['ok'])) {
                echo "<p> Clase Agendada </p>";
            }
        ?>
        </section>
  </aside>
	<footer>
		<a href="https://site.elearning-total.com/courses/?com=lb">Programación en PHP y MySQL - Nivel Avanzado</a>
	</footer>
 
</div>

</body>
</html>