<?php  
class Usuario{
	private $nombre;
	private $apellido;
	private $edad;

	function __construct($nom, $ape, $edad){
		$this -> nombre = $nom;
		$this -> apellido = $ape;
		$this -> edad = $edad;
	}

	public function imprime_caracteristicas(){
		echo "<p class: >Nombre: ". $this -> nombre. ".</p>";
		echo "<p>Apellido: ". $this -> apellido. ".</p>";
		echo "<p>Edad: ". $this -> edad. " años.</p>";
	}
}
?>