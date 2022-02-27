<?php
date_default_timezone_set("America/Argentina/Buenos_Aires");

$fecha_actual = strtotime(date("Y-m-d")); 
$fecha = getdate($fecha_actual);


echo "$fecha_actual";
?>