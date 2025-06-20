<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>21_2075cProWebT4Ejercicio1CorreaJose</title>
	<link rel="stylesheet" href="css/estilos.css">
	<link rel="stylesheet" href="css/menu.css">
</head>
<body>
<div id="container">
		<div id="header">
			<h1>ProWebT4Ejercicio1CorreaJose</h1>
			<ul class="topnav">
                <li><a href="21_2075cProWebT4Practica1CorreaJose.php">-01-</a></li>
                <li><a href="21_2075cProWebT4Practica2CorreaJose.php">-02-</a></li>
                <li><a href="21_2075cProWebT4Practica3CorreaJose.php">-03-</a></li>
                <li><a href="21_2075cProWebT4Practica4CorreaJose.php">-04-</a></li>
                <li><a href="21_2075cProWebT4Practica5CorreaJose.php">-05-</a></li>
            </ul>
		</div>
		<div id="content">
			<div id="section">
			 	<h2>Crear (declarar) variables PHP</h2><hr>
				
				<?php 
				echo '<p>ProWebT4Ejercicio1CorreaJose </p>';
				echo '<p>Crear (declarar) variables PHP</p><hr>';
				?>


			 	 <h2>Variables de salida</h2><hr>
				  <p>El siguiente ejemplo mostrará el texto de salida y una variable: </p>
				 
				  <?php
				$txt = 'myCrush.com';
				echo "I love $txt!";
				  ?>

				<p>El siguiente ejemplo producirá el mismo resultado que el ejemplo anterior: </p>

				<script>
					alert("Hola");
				</script>

			<?php
				$txt = 'myOtherCrush.com';

				echo  '<h3> HTML Y js en una cadena </h3>';
				echo 'I love' . $txt .  '!';
				echo "<p>El siguiente ejemplo generará la suma de dos variables: </p>

					<script>alert('Mensaje eliminado $txt');</script>
				";

				echo '<h3>Variables en un echo </h3>';
				$x = 5;
				$y = 4;

				echo  "resultado" . ($x + $y + $x);

				echo "<h3>Ámbito global y local </h3>";

				$x =1;//alcance global 
				
				function myTest(){
					//usar x dentro de esta función generará un error

					echo '<p>myTest = variable x dentro de la función es: '. $x. ' ERROR!</p>';
				}

				myTest();

				echo "<p>myTest = variable x la  fuera de la función  es:' $x </p>";

				function myTest2(){
					$x = 200; //alcance local
					echo "<p> myTest2 = variable x dentro de la función es: $x</p>";
				}
				myTest2();
				//using x outside the function will generate an error

				echo "<p> myTest2 = variable x fuera de la función es: $x </p>";

				echo "<h3>PHP la palabra clave global</h3>";
				$x = 25;
				$y = 35;

				function myTest3(){
					global $x, $y;
					$y = $x + $y;
				}

				myTest3();

				echo "<p>MiPrueba3 $y </p>";//output 60

				$gringa = 10;
				$quesadillaSinQueso = 15;

				function myTest4(){
					$GLOBALS['quesadillaSinQueso'] = $GLOBALS['gringa'] + $GLOBALS['quesadillaSinQueso'];
				}myTest4();

				echo "<p>myTest 4 $quesadillaSinQueso</p>"; //output 25

				echo '<h3>PHP la palabra clave estática</h3>';

				function myTest5(){
					static $x =0;
					echo $x;
					$x++;
				}

				echo '<p>' . myTest5() . '</p>';
				echo '<p>' . myTest5() . '</p>';
				echo '<p>' . myTest5() . '</p>';
				echo '<p>' . myTest5() . '</p>';
				echo '<p>' . myTest5() . '</p>';

				$tabla = 0;

				function myTest6(){
					$x =  0;
					global $tabla;
					$tabla++;
					echo "<td>";
				echo "$tabla * $x = " . $tabla * $x++ . "<br>";				
				echo "$tabla * $x = " . $tabla * $x++ . "<br>";
				echo "$tabla * $x = " . $tabla * $x++ . "<br>";
				echo "$tabla * $x = " . $tabla * $x++ . "<br>";
				echo "$tabla * $x = " . $tabla * $x++ . "<br>";
				echo "$tabla * $x = " . $tabla * $x++ . "<br>";
				echo "$tabla * $x = " . $tabla * $x++ . "<br>";
				echo "$tabla * $x = " . $tabla * $x++ . "<br>";
				echo "$tabla * $x = " . $tabla * $x++ . "<br>";
				echo "$tabla * $x = " . $tabla * $x++ . "<br>";
				echo "$tabla * $x = " . $tabla * $x++ . "<br>";

				echo "</td>";
				}

				echo "<table border =1></tr>";
				myTest6();
				myTest6();
				myTest6();
				myTest6();
				myTest6();
				myTest6();
				myTest6();
				myTest6();
				myTest6();
				myTest6();
				echo '</tr></table>';
				?>
			</div>
	</div>

	<div id="footer">
	<h2> Instituto Tecnológico Superior de Ciudad Hidalgo </h2>
<p> <b> Semestre </b> Agosto Diciembre 2021 </p>
<p> <b> Materia </b> Programación web </p>
<p> <b> Grupo </b> 075 </p>
<p> <b> Profesor </b> Erik Augusto Ramirez Vargas </p>
<p> <b> Estudiante </b> Jose Corre Morales </p>
		</div>
</div>
</body>
</html>