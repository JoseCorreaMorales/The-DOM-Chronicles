<?php
// Realizar la conexión con la base de datos

function db_query($query) {
    $db_host = 'localhost';	  // Servidor donde está alojada la base de datos
    $db_user = 'root';		  // Usuario de la base de datos
    $db_password = '';		  // Contraseña de la base de datos
    $db_name = 'base1';	  // Nombre de la base de datos
    $connection = mysqli_connect($db_host, $db_user,$db_password,$db_name);
    $result = mysqli_query($connection,$query);
    return $result;
}

function select($tbl_name){
    $sql = "select * from $tbl_name";
    $db = db_query($sql);
    return $db;
}
    //$sql = "INSERT INTO Students (name, lastname, email) VALUES ('Test', 'Testing', 'Testing@tesing.com')";
    function insert($db_table, $db_values){
    //$sql  = "insert into " . $tbl_name . " values(" . $db_values . ");";
    $sql = "INSERT INTO $db_table (null, usu_nombre, usu_ap_pat, usu_ap_mat, usu_edad, usu_sexo)
     VALUES ($db_values);";
    echo $sql;
    return db_query($sql);
 }

    function select_id($tbl_name,$field_name, $field_id){
    $sql = "select * from" . $tbl_name . "where" . $field_name . " = " . $field_id . ";"; //;

    $db = $db_query($sql);

    //$GLOBALS['row'] = mysqlli_fetch_object($db);

    return $db;
    }

?>