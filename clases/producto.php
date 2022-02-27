<?php

class Producto{

	private $bd;

	function __construct($base){
		$this->bd = $base;
	}

	public function SeleccionarProducto(){
		$respuesta = $this->bd->EnviarConsulta("SELECT * FROM productos");
		return $respuesta;
	}
}
?>