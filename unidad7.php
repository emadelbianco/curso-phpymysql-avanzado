<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="estilos.css">
</head>
 
<body>
 
<div class="container">
	<header>
		<h1>Programación en PHP y MySQL - Nivel Avanzado</h1>
	

	<nav>
		<?php include("botonera.php");
		include ("recursos.php") ?>
	</nav>
	</header>
	<section>
		<h2>Lista de productos</h2>
		<table class="table table-striped">
			<tr>
				<th>CODIGO</th>
				<th>PRODUCTO</th>
				<th>DESCRIPCION</th>
				<th>PRECIO</th>
				<th></th>
			</tr>
			<?php
			$ListarProductos = $producto->SeleccionarProducto();
			for ($i=0; $i < count($ListarProductos); $i++) {
			?>
			<tr>
				<td><?php echo $ListarProductos[$i]['codigo'];?></td>
				<td><?php echo $ListarProductos[$i]['producto'];?></td>
				<td><?php echo $ListarProductos[$i]['descripcion'];?></td>
				<td>$<?php echo $ListarProductos[$i]['precio'];?></td>
				<td><a href="introducir.php?codigo=<?php echo $ListarProductos[$i]['codigo'];?>&&producto=<?php echo $ListarProductos[$i]['producto'];?>&&descripcion=<?php echo $ListarProductos[$i]['descripcion'];?>&&precio=<?php echo $ListarProductos[$i]['precio'];?>" class="btn btn-dark">Agregar al carrito</a></td>
			</tr>
		<?php } ?>
		</table>	
	</section>
	<aside>
    		<?php
			$ListarCompra = $carrito->SeleccionarCompra();
			if (empty ($ListarCompra)){
				echo "<h3>Seleccione lo que desea agregar al carrito</h3>";
			}else{ ?>
			<h3>Carrito</h3>
			<table class="table table-striped table-hover">
			<tr>
				<th>Producto</th>
				<th>Precio</th>
				<th></th>
			</tr>
			<tr>
			<?php
			for ($i=0; $i < count($ListarCompra); $i++) { ?>	
				<td><?php echo $ListarCompra[$i]['producto'];?></td>
				<td>$<?php echo $ListarCompra[$i]['precio'];?></td>
				<td><a href="eliminar.php?codigo= <?php echo $ListarCompra[$i]['codigo'];?>"class="btn btn-secondary">Eliminar</a></td>
			</tr>
			<?php } } ?>
			</table>
  </aside>
	<footer>
		<a href="https://site.elearning-total.com/courses/?com=lb">Programación en PHP y MySQL - Nivel Avanzado</a>
	</footer>
 
</div>
</body>
</html>