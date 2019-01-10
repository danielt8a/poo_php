<?php
	class Curso{
		public $publico = 'Público: POO Avanzando I';
		private $privado = 'Privado: POO Avanzando I';
		protected $protegido = 'Protegido: POO Avanzando I';

		function obtenerMensajePrivado(){
			return $this->privado;
		}
	}

	$prueba = new Curso();
	echo "<p>".$prueba->publico."</p>";
	echo "<p>".$prueba->obtenerMensajePrivado()."</p>";
	


?>