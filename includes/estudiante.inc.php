<?php

	class Estudiante extends Persona{

		public function __construct ($nombre, $apellido, $email){

			parent::__construct($nombre, $apellido, $email);
		}

		#Polimorfismo o sobreescritura de métodos
		public function bienvenida(){
			return "Bienvenido {$this->nombre}, tenemos nuevos cursos para ti";
		}

		#Sobrescribiendo la función despedida de la superclase Persona
		public function despedida(){
			return "Adiós";
		}
		

	}

?>