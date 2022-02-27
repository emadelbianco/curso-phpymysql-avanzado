<?php 

if ($_POST) {
	date_default_timezone_set("America/Argentina/Buenos_Aires");

	$dia = $_POST["Dia"];
	$mes = $_POST["Mes"];
	$anio = $_POST["Año"];

	$fecha_actual = strtotime (date('d-m-Y', time()));
	$fecha_actual_2 = getdate($fecha_actual);

	$fecha_calculo = strtotime(date_create_from_format("d-m-Y","$dia-$mes-$anio")->format("d-m-Y"));
	$fecha_calculo_2 =getdate($fecha_calculo);

	$calculo = $fecha_calculo - $fecha_actual;
	

	if ($fecha_calculo <= $fecha_actual) { 
		echo "<p>Tiene que seleccionar una fecha posterior a ". $fecha_actual_2['mday'] . "/" . $fecha_actual_2['mon'] . "/". $fecha_actual_2['year'] .". </p>";
		}else{
			$dias_restantes = intval($calculo / 86400);
			echo "<p>Faltan $dias_restantes dias para el ". $fecha_calculo_2['mday'] . "/" . $fecha_calculo_2['mon'] . "/". $fecha_calculo_2['year'] .". </p>";
 		}

}

?>