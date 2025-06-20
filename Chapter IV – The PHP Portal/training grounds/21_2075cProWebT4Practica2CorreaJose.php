<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ProWebT4Practica2CorreaJose</title>
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/menu.css">
</head>

<body>
    <div id="container">
        <div id="header">
            <h1>ProWebT4Practica2CorreaJose</h1>
            
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
                <!-- ************  CONTENIDO  *************** -->
                <h2>PHP - La declaración if</h2>
                <hr>
                <p>La declaración if ejecuta algún código si una condición es verdadera.</p>
                <pre>
                $t =  "jose";
                if($t = "jose"){
                    echo  "No quiero ir Sr. Ramirez";
                }

                </pre>
                <?php                                                                   
                //01 code ************************************** 
                $t = "jose";
                if($t = "jose"){
                    echo  "No quiero ir Sr. Ramirez";
                }
                ?>

                <h2>PHP - La declaración if...else</h2>
                <hr>
                <p>La sentencia if .... else ejecuta algún código si una condición es
                      verdadero y otro código si esa condición es falsa.</p>
                <pre>
                $t = 20;
                if ($t != 20){
                    echo  "Ten un buen dia";
                }else{
                    echo  "Que tengas una buena noche";
                }
                </pre>
                <?php
                //02 code **************************************
                $t = 20;
                if ($t != 20){
                    echo  "Have a good day";
                }else{
                    echo  "Que tengas una buena noche";
                }
                ?>
                <h2>PHP - La declaración if...elseif....else</h2>
                <hr>
                <p>The if....elseif...La sentencia else ejecuta códigos diferentes durante más de
                      dos condiciones.</p>
                <pre>
                    $t = 8;
                    if($t < 10){
                        echo  "Que tengas buen día!";
                    }elseif($t < 20){
                        echo  "Que tenga un buen día!";
                    }else{
                        echo  "¡Qué tengas buenas noches!";
                    }
                </pre>
                <?php
                //03 code **************************************
                $t = 8;
                    if($t < 10){
                        echo  "Que tengas buen día!";
                    }elseif($t < 20){
                        echo  "Que tenga un buen día!";
                    }else{
                        echo  "¡Qué tengas buenas noches!";
                    }
                ?>

                <h2>La declaración switch de PHP </h2>
                <hr>
                <p>Utilice la instrucción de cambio para seleccionar 
                    uno de los muchos bloques de código que se ejecutarán.</p>
                <pre>
                $favcolor = "red";

                switch($favcolor){
                    case "red":
                        echo "Tu color favorito es el rojo";
                    
                    case "blue":
                        echo "Tu color favorito es el azul";

                    case "green":
                        echo "Tu color favorito es el verde";

                    default:
                    echo  "¡Tu color favorito no es rojo, azul ni verde!";
                }
                </pre>
                <?php
                //04 code **************************************
                $favcolor = "red";

                switch($favcolor){
                    case "red":
                        echo "Tu color favorito es el rojo";
                    
                    case "blue":
                        echo "Tu color favorito es el azul";

                    case "green":
                        echo "Tu color favorito es el verde";

                    default:
                    echo  "¡Tu color favorito no es rojo, azul ni verde!";
                }
                ?>

                <h2>El bucle while de PHP</h2>
                <hr>
                <p>El bucle while ejecuta un bloque de código siempre que el especificado
                      la condición es verdadera.</p>
                <pre>
                $x = 1;
                while($x <=5){
                    echo  "El número es: $x &lt;br&gt;";
                    $x++;
                }
                </pre>
                <?php
                //05 code **************************************
                $x = 1;
                while($x <=5){
                    echo  "El numero es: $x &lt;br&gt;";
                    $x++;
                }
                
                ?>
                <h2>El bulce do...while de PHP</h2>
                <hr>
                <p>El bucle do ... while siempre ejecutará el bloque de código una vez, luego verificará la condición,
                     y repita el ciclo mientras la condición especificada sea verdadera..</p>
                <pre>
                    $x =1;
                do {
                    echo  "El número es:  $x ";
                    $x++;
                }while(x <= 5);
                </pre>
                
                <?php
                //06 code **************************************
                $x =1;
                do {
                    echo  "El número es $x ";
                    $x++;
                }while(x <= 5);
                ?>
                <p>El siguiente ejemplo establece la variable $ x en 6, luego ejecuta el ciclo,
                     y luego se verifica la condición:</p>
                <pre>
                    $x = 60;
                do {
                    echo  "El número es: $x  &lt;br&gt;";
                    $x++;
                }while(x <= 5);
                </pre>
                
                <?php
                //07 code **************************************
                $x = 60;
                do {
                    echo  "El número es: $x  <br>";
                    $x++;
                }while(x <= 5);
                ?>

                <h2>El bucle for de PHP</h2>
                <hr>
                <p> El bucle for se utiliza cuando se sabe de antemano cuántas veces se debe ejecutar el script. </p>                <pre>
                for($x =0; $x < 10; $x++){
                    echo  "El número es: $x &lt;br&gt;";
                }
                </pre>
                <?php
                //08 code **************************************
                for($x =0; $x < 10; $x++){
                    echo  "El número es: $x &lt;br&gt;";
                }
                ?>

                <h2>El bulce foreach de PHP</h2>
                <hr>
                <p> El bucle foreach solo funciona en matrices y se utiliza para recorrer cada par clave / valor en una matriz. </p>                <pre>
                    $colors = array ("red", "green", "blue", "yellow");
                    echo  $colors[0] . &lt;br&gt;&lt;br&gt;;

                    foreach($colors as $value){
                        echo  "$value &lt;br&gt;";
                    }
                </pre>
                <?php
                //09 code **************************************
                $colors = array ("red", "green", "blue", "yellow");
                    echo  $colors[0] . "<br><br>";

                    foreach($colors as $value){
                        echo  "$value <br>";
                    }
                ?>
            </div>            
        </div>
        <div id="footer">
        <h2> Instituto Tecnológico Superior de Ciudad Hidalgo </h2>
              <p> <b> Semestre </b> Agosto Diciembre 2021 </p>
              <p> <b> Materia </b> Programación web </p>
              <p> <b> Grupo </b> 075 </p>
              <p> <b> Profesor </b> Erik Augusto Ramirez Vargas </p>
              <p> <b> Estudiante </b> Jose Correa Morales </p>
        </div>

    </div>
</body>

</html>