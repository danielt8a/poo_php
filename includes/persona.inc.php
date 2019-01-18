<?php
	
	trait Compra {
		private $compra;
		function validarCompra(){
			return "Compra exitosa";
		}
	}

	class Persona {

		use Compra; #Podemos agregar más traits separándolos por comas.

		const MONEDA = 'USD';

		public $nombre;
		public $apellido;
		public $email;

		public function __construct($nombre, $apellido, $email){

			$this->nombre = $nombre;
			$this->apellido = $apellido;
			$this->email = $email;
			$this->correoValido($this->email);
			$this->validaNombre($this->nombre);

			/*
			 * Sintaxis de una excepción
			 	try { Intentar, es decir, tratar de hacer algo
					//Código 
			 	} catch (Exception $e){
					//Código que se ejecuta si hay una excepción
					//Si algo no puedes hacer entonces captúrame
			 	}
			 */
		}

		public function correoValido($email){

			try {
				#nombre@dominio.com
				if (filter_var($email, FILTER_VALIDATE_EMAIL) === false){
					throw new Exception("Correo no válido");
					
				}


			} catch (Exception $e) {
				echo $e->getMessage();
			}

		}

		
		public function validaNombre($nombre){

			try {
				if(empty($this->nombre)){
					throw new Exception("Debes ingresar tu nombre");
				}else{
					$this->nombre = $nombre;
				}
			}catch (Exception $e) {
				echo $e->getMessage();
			}

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