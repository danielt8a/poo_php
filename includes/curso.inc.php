<?php
	class Curso{
		
		private $titulo;
		private $profesor;
		private $duracion;
		private $costo;
		private $disponible;

		//Creación del constructor

		public function __construct($titulo, $profesor, $duracion, $costo, $disponible){
			$this->titulo = $titulo;
			$this->profesor = $profesor;
			$this->duracion = $duracion;
			$this->costo = $costo;
			$this->disponible = $disponible;
		}


	}

	
	


?>