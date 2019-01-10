<?php

	#Interfaces -> interface -> implements

	interface Requerimiento {
		public function asignarRequerimiento($listado);
		public function obtenerRequerimiento();

	}

	interface Conocimiento {
		public function asignarConocimiento($listado);
		public function obtenerConocimiento();

	}

	class Curso implements Requerimiento, Conocimiento {
		
		private $titulo;
		private $profesor;
		private $duracion;
		private $costo;
		private $disponible;
		private $listado;

		//Creación del constructor

		public function __construct($titulo, $profesor, $duracion, $costo, $disponible){
			$this->titulo = $titulo;
			$this->profesor = $profesor;
			$this->duracion = $duracion;
			$this->costo = $costo;
			$this->disponible = $disponible;
	}

		#Encapsulación
		#Getter - Setter

		#Getter
		public function obtenerTitulo(){
			return $this->titulo;
		}

		public function obtenerProfesor(){
			return $this->profesor;
		}

		#Setter
		public function asignarTitulo($titulo){
			$this->titulo = $titulo;
		}

		#Implementar las funciones de esas interfaces

		public function asignarRequerimiento($listado){
			$this->listado = $listado;
		}

		public function obtenerRequerimiento(){
			if(!empty($this->listado)){
				foreach ($this->listado as $lista) {
					echo "<p>".$lista."</p>";
				}
			}
		}

		public function asignarConocimiento($listado){

		}

		public function obtenerConocimiento(){

		}




	}

	
	


?>