<?php
	
	trait Compra {
		private $compra;
		function validarCompra(){
			return "Compra exitosa";
		}
	}

	class Persona {

		use Compra;

		public $nombre;
		public $apellido;
		public $email;

		public function __construct($nombre, $apellido, $email){

			$this->nombre = $nombre;
			$this->apellido = $apellido;
			$this->email = $email;


		}

		public function bienvenida(){
			return "Bienvenido {$this->nombre} a PHP ";
		}

		#Con la palabra reservada final podemos indicar que una función no se puede sobreescribir.

		public function despedida(){
			return "Hasta pronto {$this->nombre}";
		}
	}

?>