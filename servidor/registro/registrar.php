<?php

    include "../../conexion/Auth.php";
    
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $dni = $_POST['dni'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $Auth = new Auth();

    if ($Auth->registrar($nombre, $apellido, $dni, $email, $password)) {

        echo "asd";

    }   else {

        echo "No se pudo registrar.";

    }

?>