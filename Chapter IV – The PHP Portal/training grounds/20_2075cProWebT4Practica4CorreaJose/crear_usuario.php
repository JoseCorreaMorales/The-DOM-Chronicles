<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ProWebT4Practica4CorreaJose</title>
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/menu.css">
    <?php include("conexion.php"); ?>
</head>

<body>
    <div id="container">
        <div id="header">
            <h1>ProWebT4Practica4CorreaJose</h1>
            <?php include("php/menu.php"); ?>
        </div>

        <div id="content">
            <div id="section">
                <!-- ************  content  *************** -->
                <h1>Shows data insertion</h1>
                <hr>
                <?php
                        //obtener las variables
                        $nombre = $_POST['txt_Nombre'];
                        $apPat = $_POST['txt_ApPat'];
                        $apMat = $_POST['txt_ApMat'];
                        $edad = $_POST['txt_Edad'];
                        $sexo = $_POST['lst_sexo'];
                        ?>

                <h2>Data received</h2>
                <hr>
                <p>you inputted the following data:</p>
                <?php
                        //mostrar los datos recibidos
                        echo "$nombre <br>
                              $apPat <br>
                              $apMat <br> 
                              $edad <br>
                              $sexo <br>";

                        //realizar la inserción de datos en la tabla con la siguiente sentencia SQL
                        //insert into t_usuario values( "NULL" , "" , "" , "" ,   , "" )
                        //considere que la insercion de la primary Key es nula ya que es autoincrmentable
                        
                        if(!empty($nombre) && !empty($apMat) && !empty($apPat) &&
                        !empty($edad) && !empty($sexo)){//
                         
                              $const = insert('usuarios', "$nombre, $apPat, $apMat, $edad, $sexo");
                            
                        if ($const) {
                ?>
                <p> the news was successfully added to the database </p>
                <?php
                        } else {
                           
                              ?>
                <p>the news can't be added to the database</p>
                <?php
                        echo $const;
                        }
                  }//
                ?>
            </div>
        </div>
        <div id="footer">
            <h2> Higher Technological Institute of Ciudad Hidalgo </h2>
            <p> <b> Semester </b> August December 2021 </p>
            <p> <b> Subject </b> Web Programming </p>
            <p> <b> Group </b> 075c </p>
            <p> <b> Professor </b> Erik Augusto Ramirez Vargas </p>
            <p> <b> Student </b> Jose Correa Morales </p>
        </div>
    </div>
</body>

</html>