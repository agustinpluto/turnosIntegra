<?php

    $server = 'localhost:3306';
    $username = 'agustin';
    $password = 'Ireliagod1!';
    $database = 'integra';

    try {
      $conn = new PDO("mysql:host=$server;dbname=$database;", $username, $password);
      $mensaje = "Conectado a la DB";
    } catch (PDOException $e) {
      die('Connection Failed: ' . $e->getMessage());
    }

    echo $mensaje;

?>