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
                <!-- ************  CONTENIDO  *************** -->
                <h1> SQL and PHP conection</h1>
                <hr>
                <h2>Create a user</h2>
                <form id="form1" name="form1" method="post" action="crear_usuario.php">

                    <table>
                        <tr>
                            <td><label for="txt_Nombre">Name</label> </td>
                            <td><input type="text" name="txt_Nombre" id="txt_Nombre"
                                    onkeyup="javascript:this.value=this.value.toUpperCase();"></td>
                        </tr>
                        <tr>
                            <td><label for="txt_AptPat"></label>paternal last name</td>
                            <td><input type="text" name="txt_ApPat" id="txt_ApPat"
                                    onkeyup="javascript:this.value=this.value.toUpperCase();"></td>
                        </tr>
                        <tr>
                            <td><label for="txt_AptMat"></label>Maternal family name</td>
                            <td><input type="text" name="txt_ApMat" id="txt_ApMat"
                                    onkeyup="javascript:this.value=this.value.toUpperCase();"></td>
                        </tr>
                        <tr>
                            <td><label for="txt_Edad"></label>Age</td>
                            <td><input type="text" name="txt_Edad" id="txt_Edad"></td>
                        </tr>
                        <tr>
                            <td><label for="lst_sexo" name="lst_sexo"></label>Sex</td>

                            <td>
                                <select name="lst_sexo" id="lst_sexo" onkeyup="javascript:this=this.value.value.toUpperCase();">
                                    <option>Select...</option>
                                    <option>M</option>
                                    <option>F</option>
                                </select>
                            </td>
                        </tr>
                    </table>

                    <p><input type="submit" name="btn_guardar" id="btn_guardar" value="Guardar" /></p>
                    <p>&nbsp;</p>
                </form>

                <h2>Query result</h2>
                <p>we use a php functions </p>
                <?php
        //invocar la funcion select y la tabla
        $result = select("usuarios");
        // Realizamos un bucle que muestre el resultado
               ?>

                <table border=1>
                    <thead>
                        <td>Id</td>
                        <td>Name</td>
                        <td>Paternal last name</td>
                        <td>Maternal family name</td>
                        <td>Age</td>
                        <td>Sex</td>
                    </thead>
                <?php
          
          $numero_filas = mysqli_num_rows($result);
           //if (mysqli_num_rows($result > 0)) {
           if ($numero_filas > 0) {
            while ($row = mysqli_fetch_object($result)) {
              echo "<tr>";
              echo "<td> $row -> id_usuario </td>";
              echo "<td> $row -> usu_nombre </td>";
              echo "<td> $row -> usu_ap_pat </td>";
              echo "<td> $row -> usu_ap_mat </td>";
              echo "<td> $row -> uso_edad </td>";
              echo "<td>" . $row -> usu_sexo . "</td>";
              echo "</tr>";
            }
          } else {
              echo "there is  no data";
            }

          ?>
                </table>

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


















<!-- ?>
        <tr>
          <td><?php echo $row->id_usuarios; ?></td>
          <td><?php echo $row->usu_nombre; ?></td>
          <td><?php echo $row->usu_ap_pat; ?></td>
          <td><?php echo $row->usu_ap_mat; ?></td>
          <td><?php echo $row->usu_edad; ?></td>
          <td><?php echo $row->usu_sexo; ?></td>
        </tr>
    < ?php

  -->