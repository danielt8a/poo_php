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

	var_dump($php);

	$javascript = new Curso();
	$javascript->nombre = 'javascript desde cero';
	$javascript->duracion = '6 sesiones';
	$javascript->costo = 0;
	$javascript->moneda = 'MXN';
	$javascript->profesor = 'Álvaro Felipe';
	$javascript->disponible = true;

	echo "<br>";

	var_dump($javascript);








?>