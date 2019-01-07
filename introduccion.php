<?php

	/**
	 * Sintaxis para crear una clase
	 Para el nombre de la clase, la primera letra es mayúscula
	 	class NombreDeMiClase(){
			Definir propiedades
			Definir nuestros métodos
	 	}
	 */

	 #Creación de la clase Curso y sus atributos
	class Curso{
		public $nombre;
		public $duracion;
		public $costo;
		public $moneda;
		public $profesor;
		public $disponible;

		#Creación del método imprimirInfo
		public function imprimirInfo(){
			return "El nombre del curso es: ".$this->nombre." y quién imparte el curso es ".$this->profesor."<br>";
		}

		public function validaDisponibilidad(){
			if($this->disponible == true){
				return "El curso si está disponible<br>";

			} else {
				return "El curso no está disponible<br>";
			}
		}


	}

	#Creación del objeto Curso
	$php = new Curso();

	#Asignación de los atributos
	$php->nombre = 'POO en PHP';
	$php->duracion = '3 sesiones';
	$php->costo = 10;
	$php->moneda = 'MXN';
	$php->profesor = 'Yesi Days';
	$php->disponible = true;
	

	//var_dump($php);

	echo $php->imprimirInfo();
	echo $php->validaDisponibilidad();

	$javascript = new Curso();
	$javascript->nombre = 'javascript desde cero';
	$javascript->duracion = '6 sesiones';
	$javascript->costo = 0;
	$javascript->moneda = 'MXN';
	$javascript->profesor = 'Álvaro Felipe';
	$javascript->disponible = true;

	echo "<br>";

	//var_dump($javascript);

	echo $javascript->imprimirInfo();








?>