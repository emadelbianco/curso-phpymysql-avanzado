<?php
class Basededatos {
	private $conexion;
	public $error;

	function __construct($servidor, $usuario, $clave, $base) {
		if(!$this->_connect($servidor, $usuario, $clave, $base)) {
			$this->error = $this->conexion->connect_error;
		}
	}

	function __destruct() {
		$this->conexion->close();
	}

	private function _connect($servidor, $usuario, $clave, $base) {
		$this->conexion = new mysqli($servidor, $usuario, $clave, $base);
			if(!$this->conexion->connect_errno) {
				$this->error = $this->conexion->connect_error;
				return false;
			}
	}

	public function enviarConsulta($query) {
		$tipo = strtoupper(substr($query, 0,6));

		switch($tipo) {
			case 'INSERT':
				$resultado = $this->conexion->query($query);
				if(!$resultado) {
					$this->error = $this->conexion->error;
					return false;
				} else {
					return $this->conexion->insert_id;
				}
				break;
			case 'UPDATE':
			case 'DELETE':
				$resultado = $this->conexion->query($query);
				if(!$resultado) {
					$this->error = $this->conexion->error;
					return false;
				} else {
					return $this->conexion->affected_rows;
				}
				break;

			case 'SELECT':
				$listar_datos = [];
				$resultado = $this->conexion->query($query);
				if(!$resultado) {
					$this->error = $this->conexion->error;
					return false;
				} else {
					while($fila = $resultado->fetch_assoc()) {
						$listar_datos[]=$fila;
					}
					return $listar_datos;
				}

				break;
		}

	}
}
?>