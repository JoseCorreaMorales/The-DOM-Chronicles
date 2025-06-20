<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ProWebT4Ejercicio3CorreaJose</title>
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/menu.css">
</head>

<body>
    <div id="container">
        <div id="header">
            <h1>ProWebT4Ejercicio3CorreaJose</h1>
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
                <h2>PHP 5 Functions</h2>
                <hr>
                <p>A user-defined function declaration starts with the word function:</p>
                <pre>
                function writeMsg(){
                    echo = "Hello world!";
                }
                writeMsg();//call the function
                </pre>
                <?php
                //01 code ************************************** 
                function writeMsg(){
                echo  "Hello world!";
                }
                writeMsg();//call the function
                ?>

                <h2>PHP Function Arguments</h2>
                <hr>
                <p>Information can be passed to functions through arguments. An argument is just like a variable.</p>
                <p>Arguments are specified after the function name, inside the parentheses. You can add as many arguments as you want, just separate them with a comma.</p>
                <p>The following example has a function with one argument ($fname). When the familyName() function is called, we also pass along a name (e.g. Jani), and the name is used inside the function, which outputs several different first names, but an equal last name:</p>
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
                <p>The following example has a function with two arguments ($fname and $year):</p>
                <pre>
                function familyName3($year, $name){
                    echo = "$name Refsnes. Born in $year &lt;br&gt;"
                }
                
                familyName3(1875, "Hege");
                familyName3(1878, "Stale");
                familyName3(1983, "Kai Jinm");
                </pre>
                <?php
                //03 code ************************************** 
                function familyName3($year, $name){
                    echo  "$name Refsnes. Born in $year &lt;br&gt;";
                }
                
                familyName3(1875, "Hege");
                familyName3(1878, "Stale");
                familyName3(1983, "Kai Jinm");
                ?>

                <h2>PHP Default Argument Value</h2>
                <hr>
                <p>The following example shows how to use a default parameter. If we call the function setHeight() without arguments it takes the default value as argument:</p>
                <pre>
                function setHeight($minHeight = 50){
                    echo = "The height is : $minHeight &lt;br&gt;";
                }

                setHeight(50);
                setHeight();//we use the default value of 50
                setHeight(135);
                setHeight(80);
                </pre>
                <?php
                //04 code ************************************** 
                function setHeight($minHeight = 50){
                    echo  "The height is : $minHeight &lt;br&gt;";
                }

                setHeight(50);
                setHeight();//we use the default value of 50
                setHeight(135);
                setHeight(80);
                ?>

                <h2>PHP Functions - Returning values</h2>
                <hr>
                <p>To let a function return a value, use the return statement:</p>
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
        <h2> Higher Technological Institute of Ciudad Hidalgo </h2>
             <p> <b> Semester </b> August December 2021 </p>
             <p> <b> Subject </b> Web Programming </p>
             <p> <b> Group </b> 075 </p>
             <p> <b> Professor </b> Erik Augusto Ramirez Vargas </p>
             <p> <b> Student </b> Jose Correa Morales </p>
        </div>

    </div>
</body>

</html>