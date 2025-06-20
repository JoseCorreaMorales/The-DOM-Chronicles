<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ProWebT4Ejercicio2CorreaJose</title>
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/menu.css">
</head>

<body>
    <div id="container">
        <div id="header">
            <h1>ProWebT4Ejercicio2CorreaJose</h1>
            
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
                <h2>PHP - The if Statement</h2>
                <hr>
                <p>The if statement executes some code if one condition is true.</p>
                <pre>
                $t =  "jose";
                if($t = "jose"){
                    echo = "I dont want to go Mr. Ramirez";
                }

                </pre>
                <?php                                                                   
                //01 code ************************************** 
                $t = "jose";
                if($t = "erick"){
                    echo  "I dont want to do Mr. Ramirez";
                }
                ?>

                <h2>PHP - The if...else Statement</h2>
                <hr>
                <p>The if....else statement executes some code if a condition is true and another code if that condition is false.</p>
                <pre>
                $t = 20;
                if ($t != 20){
                    echo = "Have a good day";
                }else{
                    echo = "Have a good night";
                }
                </pre>
                <?php
                //02 code **************************************
                $t = 20;
                if ($t != 20){
                    echo  "Have a good day";
                }else{
                    echo  "Have a good night";
                }
                ?>
                <h2>PHP - The if...elseif....else Statement</h2>
                <hr>
                <p>The if....elseif...else statement executes different codes for more than two conditions.</p>
                <pre>
                    $t = 8;
                    if($t < 10){
                        echo = "Have a good morning!";
                    }elseif($t < 20){
                        echo = "Have a good day!";
                    }else{
                        echo = "Have a good night!";
                    }
                </pre>
                <?php
                //03 code **************************************
                $t = 8;
                if($t < 10){
                    echo  "Have a good morning!";
                }elseif($t < 20){
                    echo  "Have a good day!";
                }else{
                    echo  "Have a good night!";
                }
                ?>

                <h2>The PHP switch Statement</h2>
                <hr>
                <p>Use the switch statement to select one of many blocks of code to be executed.</p>
                <pre>
                $favcolor = "red";

                switch($favcolor){
                    case "red":
                        echo "your favourite color is red";
                    
                    case "blue":
                        echo = "your favourite color es blue";

                    case "green":
                    echo = "your favourite color is green";

                    default:
                    echo = "your favourite color is neither red, blue nor green!";
                }
                </pre>
                <?php
                //04 code **************************************
                $favcolor = "red";
                switch($favcolor){
                    case "red":
                        echo "your favourite color is red";
                    
                    case "blue":
                        echo  "your favourite color es blue";

                    case "green":
                    echo  "your favourite color is green";

                    default:
                    echo  "your favourite color is neither red, blue nor green!";
                }
                ?>

                <h2>The PHP while Loop</h2>
                <hr>
                <p>The while loop executes a block of code as long as the specified condition is true.</p>
                <pre>
                $x = 1;
                while($x <=5){
                    echo = "The number is: $x &lt;br&gt;";
                    $x++;
                }
                </pre>
                <?php
                //05 code **************************************
                $x = 1;
                while($x <=5){
                    echo  "The number is: $x &lt;br&gt;";
                    $x++;
                }
                
                ?>
                <h2>The PHP do...while Loop</h2>
                <hr>
                <p>The do...while loop will always execute the block of code once, it will then check the condition, 
                    and repeat the loop while the specified condition is true.</p>
                <pre>
                    $x =1;
                do {
                    echo = "The number is $x ";
                    $x++;
                }while(x <= 5);
                </pre>
                
                <?php
                //06 code **************************************
                $x =1;
                do {
                    echo  "The number is $x ";
                    $x++;
                }while(x <= 5);
                ?>
                <p>The example below sets the $x variable to 6, then it runs the loop, 
                    and then the condition is checked:</p>
                <pre>
                    $x = 60;
                do {
                    echo = "The number is $x  &lt;br&gt;";
                    $x++;
                }while(x <= 5);
                </pre>
                
                <?php
                //07 code **************************************
                $x = 60;
                do {
                    echo  "The number is $x  <br>";
                    $x++;
                }while(x <= 5);
                ?>

                <h2>The PHP for Loop</h2>
                <hr>
                <p>The for loop is used when you know in advance how many times the script should run.</p>
                <pre>
                for($x =0; $x < 10; $x++){
                    echo = "The number is: $x &lt;br&gt;";
                }
                </pre>
                <?php
                //08 code **************************************
                for($x =0; $x < 10; $x++){
                    echo  "The number is: $x &lt;br&gt;";
                }
                ?>

                <h2>The PHP foreach Loop</h2>
                <hr>
                <p>The foreach loop works only on arrays, and is used to loop through each key/value pair in an array.</p>
                <pre>
                    $colors = array ("red", "green", "blue", "yellow");
                    echo = $colors[0] . &lt;br&gt;&lt;br&gt;;

                    foreach($colors as $value){
                        echo = "$value &lt;br&gt;";
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
        <h2> Higher Technological Institute of Ciudad Hidalgo </h2>
             <p> <b> Semester </b> August December 2021 </p>
             <p> <b> Subject </b> Web Programming </p>
             <p> <b> Group </b> 075 </p>
             <p> <b> Professor </b> Erik Augusto Ramirez Vargas </p>
             <p> <b> Student </b> Jose Correa Morales</p>
        </div>

    </div>
</body>

</html>