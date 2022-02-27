<?php
$unidad = $_POST["Unidad"];
$fecha = $_POST["Fecha"];

include ('conexion.php');

$datita = mysqli_query($conexion, "INSERT INTO clases VALUES (default, '$unidad', '$fecha')" );

$dat = mysqli_close($conexion);

header("Location: unidad1.php?ok")

?>