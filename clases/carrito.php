<?php

class Carrito{

	private $bd;

	function __construct($base){
		$this ->bd = $base;
	}

	public function InsertarCompra($codigo, $producto, $descripcion, $precio){
		$respuesta = $this->bd->EnviarConsulta("INSERT INTO compras VALUES ($codigo, '$producto', '$descripcion', $precio)");
		return $respuesta;
	}

	public function SeleccionarCompra(){
		$respuesta = $this->bd->EnviarConsulta("SELECT * FROM compras");
		return $respuesta;
	}

	public function EliminarCompra($codigo){
		$respuesta = $this->bd->EnviarConsulta("DELETE FROM compras WHERE codigo = $codigo");
		return $respuesta;
	}
}

?>