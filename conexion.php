<?php
    // datos de conexión
    $servidor = "localhost";
    $usuario = "agustin";
    $password = "Ireliagod1!";
    $basedatos = "integra";

    // conexión
    $mysqli = new mysqli($servidor, $usuario, $password, $basedatos);

    // verificar la conexión
    if ($mysqli->connect_error) {
        die("La conexión falló: " . $mysqli->connect_error);
    }
    echo "Conexión exitosa";
?>