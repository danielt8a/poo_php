<!DOCTYPE html>
<html lang="es">
	<head>
		<title>POO Avanzado en PHP</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
	</head>
	<body>
		<?php
			define('INC','/includes/');
			require_once __DIR__ . INC. 'curso.inc.php';

			$curso1 = new Curso('POO en PHP','Yesi Days', '3 sesiones', 10, true);
			$curso2 = new Curso('JavaScript desde 0','Álvaro Felipe', '6 sesiones', 0, true);

			// var_dump($curso1);
			// echo "<br>";
			// var_dump($curso2);

			echo $curso1->obtenerTitulo()."<br>";
			echo $curso1->obtenerProfesor()."<br>";

			$curso1->asignarTitulo('POO en PHP I');

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