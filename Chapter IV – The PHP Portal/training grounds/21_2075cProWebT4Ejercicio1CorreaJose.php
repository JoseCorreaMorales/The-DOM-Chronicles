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
                <li><a href="21_2075cProWebT4Ejercicio1CorreaJose.php">-01-</a></li>
                <li><a href="21_2075cProWebT4Ejercicio2CorreaJose.php">-02-</a></li>
                <li><a href="21_2075cProWebT4Ejercicio3CorreaJose.php">-03-</a></li>
                <li><a href="21_2075cProWebT4Ejercicio4CorreaJose.php">-04-</a></li>
                <li><a href="21_2075cProWebT4Ejercicio5CorreaJose.php">-05-</a></li>
            </ul>
		</div>
		<div id="content">
			<div id="section">
			 	<h2>Creating (Declaring) PHP variables</h2><hr>
				
				<?php 
				echo '<p>ProWebT4Ejercicio1CorreaJose </p>';
				echo '<p>Creating (Declarating) PHP variables</p><hr>';
				?>


			 	 <h2>Output variables</h2><hr>
				  <p>The following example will show to output text and a variable: </p>
				 
				  <?php
					$txt = 'myCrush.com';
					echo "I love $txt!";
				  ?>

				<p>The following example will produce the same output as the example above: </p>

				<script>
					alert("Hola");
				</script>

			<?php
				$txt = 'myOtherCrush.com';

				echo  '<h3> HTML AND js in a String </h3>';
				echo 'I love' . $txt .  '!';
				echo "<p>The following example will output the sum of two variables: </p>

					<script>alert('Mensaje eliminado $txt');</script>";

				echo '<h3>Variables in a echo </h3>';
				$x = 5;
				$y = 4;

				echo  "resultado" . ($x + $y + $x);

				echo "<h3>Global and local scope </h3>";

				$x =1;//global scope
				/* FUNTION 1 */
				function myTest(){
					//using x inside this function will generate an error
					echo '<p>myTest = variable x inside function is:' . $x . ' con error</p>';
				}
				myTest();

				echo "<p>myTest = variable x outside function is:' $x </p>";

					/* FUNCTION 2 */
				function myTest2(){
					$x = 200; //local scope
					echo "<p> myTest2 = variable x inside funcion is: $x</p>";
				}
				myTest2();
				//using x outside the function will generate an error
				echo "<p> myTest2 = variable x outside function is: $x </p>";


				echo "<h3> PHP the global keyword</h3>";
				$x = 25;
				$y = 35;

				function myTest3(){
					global $x, $y;
					$y = $x + $y;
				}

				myTest3();

				echo "<p>myTest3 $y </p>";//output 60

				$gringa = 10;
				$quesadillaSinQueso = 15;

				function myTest4(){
					$GLOBALS['quesadillaSinQueso'] = $GLOBALS['gringa'] + $GLOBALS['quesadillaSinQueso'];
				}
				myTest4();

				echo "<p>myTest 4 $quesadillaSinQueso</p>"; //output 25

				echo '<h3>PHP the static keyword</h3>';

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
					$x = 0;
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
	<h2> Higher Technological Institute of Ciudad Hidalgo </h2>
		<p> <b> Semester </b> August December 2021 </p>
		<p> <b> Subject </b> Web Programming </p>
		<p> <b> Group </b> 075 </p>
		<p> <b> Professor </b> Erik Augusto Ramirez Vargas </p>
		<p> <b> Student </b> Jose Corre Morales </p>
		</div>
</div>
</body>
</html>