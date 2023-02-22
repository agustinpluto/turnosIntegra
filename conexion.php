<?php

    $server = 'localhost:3306';
    $username = 'agustin';
    $password = 'Ireliagod1!';
    $database = 'integra';

    $conexion = mysqli_connect($server,$username,$password,$database);

    if ($conexion) {
        echo "Estas conectado a la DB";
    } else {
        echo "Error conexion";
    }

?>