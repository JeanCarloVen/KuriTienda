<?php
    //Conexion
    $server = 'localhost';
    $user = 'root';
    $password = '';
    $database = 'tienda_kuri';

    $db = mysqli_connect($server, $user, $password, $database);

    mysqli_query($db, "SET CHARACTER SET 'utf-8'");
    mysqli_query($db, "SET SESSION collation_connection ='utf8_unicode_ci'");

    //COMPROBAR SI LA CONEXIÓN ES CORRECTA
    if(mysqli_connect_errno()){
//        echo "La conexión a la BDD  ha fallado ".mysqli_connect_error();
    }else{
//      echo "Conexión exitosa";
    }
    session_start();

    //var_dump(mysqli_error($db));
    //die();

?>