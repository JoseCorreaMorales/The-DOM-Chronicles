<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ProWebT4Ejercicio4CorreaJose</title>
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/menu.css">
    <?php include("conexion.php"); ?>
</head>

<body>
    <div id="container">
        <div id="header">
            <h1>ProWebT4Ejercicio4CorreaJose </h1>
            <?php include("php/menu.php"); ?>
        </div>

        <div id="content">
            <div id="section">
                <!-- ************  content  *************** -->
                <h1>Muestra la inserción de los datos</h1>
                <hr>
                <?php
                        //obtener las variables
                        $nombre = $_POST['txt_Nombre'];
                        $apPat = $_POST['txt_ApPat'];
                        $apMat = $_POST['txt_ApMat'];
                        $edad = $_POST['txt_Edad'];
                        $sexo = $_POST['lst_sexo'];
                        ?>

                <h2>Datos recibidos</h2>
                <hr>
                <p>ingreso los siguientes datos:</p>
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
                <p> la noticia se añadio correctamente a ala base de datos </p>
                <?php
                        } else {
                           
                              ?>
                <p>la noticia no pudo ser insertada a la base datos</p>
                <?php
                        
                        }
                  }//
                ?>
            </div>
        </div>
        <div id="footer">
        <h2> Instituto Tecnológico Superior de Ciudad Hidalgo </h2>
             <p> <b> Semestre </b> Agosto Diciembre 2021 </p>
             <p> <b> Materia </b> Programación web </p>
             <p> <b> Grupo </b> 075c </p>
             <p> <b> Profesor </b> Erik Augusto Ramirez Vargas </p>
             <p> <b> Estudiante </b> Jose Correa Morales </p>
        </div>
    </div>
</body>

</html>