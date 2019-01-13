<!DOCTYPE html>
<html lang="es">
	<head>
		<title>POO Avanzado en PHP</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
	</head>
	<body>
		<?php

			#Incluído el archivo global con todas las clases

			require_once __DIR__ . 'includes/global.inc.php';

			/*define('INC','/includes/');
			require_once __DIR__ . INC. 'curso.inc.php';

			$curso1 = new Curso('POO en PHP','Yesi Days', '3 sesiones', 10, true);
			$curso2 = new Curso('JavaScript desde 0','Álvaro Felipe', '6 sesiones', 0, true);

			// var_dump($curso1);
			// echo "<br>";
			// var_dump($curso2);

			echo $curso1->obtenerTitulo()."<br>";
			echo $curso1->obtenerProfesor()."<br>";

			$curso1->asignarTitulo('POO en PHP I')."<br>";
			echo $curso1->obtenerTitulo()."<br>";

			$curso1->asignarRequerimiento(['PHP desde cero', 'Conocimientos básicos de PHP', 'Buena actitud', 'Práctica']);

			echo "<h3>Mis requerimientos para la clase:</h3>";

			$curso1->obtenerRequerimiento();

			$curso1->asignarConocimiento(['POO en PHP', 'Herencia', 'Encapsulamiento', 'Interfaces', 'Método constructor']);
			echo "<h3>Al finalizar el curso el alumno estará familiarizado con los siguientes temas:</h3>";
			$curso1->obtenerConocimiento();

			echo Curso::$moneda;
			echo "<br>";
			echo Curso::obtenerDenominacion();

*/
			#Instanciar un estudiante
			$estudiante = new Estudiante('Daniel', 'Télles','danieltelles8a@gmail.com')

		?>
		<header>
			<h1>POO avanzado</h1>
		</header>
		<section>
			<article>
				
			</article>
		</section>
		<footer>
			
		</footer>
	</body>
</html>