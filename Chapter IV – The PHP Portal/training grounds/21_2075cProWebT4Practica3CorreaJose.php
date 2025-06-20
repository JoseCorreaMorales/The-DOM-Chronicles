<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ProWebT4Practica3CorreaJose</title>
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/menu.css">
</head>

<body>
    <div id="container">
        <div id="header">
            <h1>ProWebT4Practica3CorreaJose</h1>
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
                <!-- ************  CONTENIDO  *************** -->
                <h2>Funciones en PHP 5</h2>
                <hr>
                <p>Una declaración de función definida por el usuario comienza con la palabra función:</p>
                <pre>
                function writeMsg(){
                    echo = "Hola mundo!";
                }
                writeMsg();/llamar la funcion
                </pre>
                <?php
                //01 code ************************************** 
                function writeMsg(){
                    echo  "Hola mundo!";
                }
                writeMsg();//call the function
                ?>

                <h2>Argumentos de funciones PHP</h2>
                <hr>
                <p> La información se puede pasar a las funciones a través de argumentos. Un argumento es como una variable. </p>
                 <p> Los argumentos se especifican después del nombre de la función, entre paréntesis. Puedes agregar tantos argumentos
                      como desee, sepárelos con una coma. </p>
                 <p> El siguiente ejemplo tiene una función con un argumento ($ fname). Cuando la función familyName () es
                      llamado, también pasamos un nombre (por ejemplo, Jani), y el nombre se usa dentro de la función, que
                       genera varios nombres diferentes, pero un apellido igual: </p>
                <pre>
                function familyName($fname){
                    echo = "$name refsnes.&lt;br&gt;";
                }
                
                familyName("Jani");
                familyName(hege);
                familyName("Kai Jim");
                familyName("Stale");
                familyName("Borge");
                </pre>
                <?php
                //02 code ************************************** 
                function familyName($fname){
                    echo  "$name refsnes.<br>;";
                }
                
                familyName("Jani");
                familyName("hege");
                familyName("Kai Jim");
                familyName("Stale");
                familyName("Borge");
                ?>
                <p>El siguiente ejemplo tiene una función con dos argumentos ($fname y $year): </p>
                <pre>
                function familyName3($year, $name){
                    echo = "$name Refsnes. nacio en $year &lt;br&gt;"
                }
                
                familyName3(1875, "Hege");
                familyName3(1878, "Stale");
                familyName3(1983, "Kai Jinm");
                </pre>
                <?php
                //03 code ************************************** 
                function familyName3($year, $name){
                    echo  "$name Refsnes. nacio en $year &lt;br&gt;";
                }
                
                familyName3(1875, "Hege");
                familyName3(1878, "Stale");
                familyName3(1983, "Kai Jinm");
                ?>

                <h2>PHP - Valor del argumento por defecto</h2>
                <hr>
                <p> El siguiente ejemplo muestra cómo utilizar un parámetro predeterminado. Si llamamos a la función setHeight () sin argumentos, toma el valor predeterminado como argumento: </p>                <pre>
                    <pre>
                function setHeight($minHeight = 50){
                    echo = "The height is : $minHeight &lt;br&gt;";
                }

                setHeight(50);
                setHeight();//usamos el valor por defecto
                setHeight(135);
                setHeight(80);
                </pre>
                <?php
                //04 code ************************************** 
                function setHeight($minHeight = 50){
                    echo  "The height is : $minHeight &lt;br&gt;";
                }

                setHeight(50);
                setHeight();//usamos el valor por defecto
                setHeight(135);
                setHeight(80);
                ?>

                <h2>Funciones PHP- Retornado valores</h2>
                <hr>
                <p>Para permitir que una función devuelva un valor, use la declaración de retorno:</p>
                <pre>
                function sum($x, $y){
                    $z = $x + $y;
                    return $z;
                }
                   echo = "5 + 10" . sum(5,10) .  "&lt;br&gt;";
                   echo = "7 + 13" .  sum(7,13) .  "&lt;br&gt;";
                   echo = "2 + 4" .  sum(2,4);
                </pre>
                <?php
                //05 code ************************************** 
                function sum($x, $y){
                    $z = $x + $y;
                    return $z;
                }
                   echo  "5 + 10" . sum(5,10) .  "&lt;br&gt;";
                   echo  "7 + 13" .  sum(7,13) .  "&lt;br&gt;";
                   echo  "2 + 4" .  sum(2,4);
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