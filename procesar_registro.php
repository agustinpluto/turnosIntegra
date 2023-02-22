<?php

    // Obtener los valores de los campos del formulario
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $dni = $_POST['dni'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    include 'funcion.php';

    // Llamar a la función insertarUsuario() con los valores correspondientes
    if (insertarUsuario($nombre, $apellido, $dni, $email, $password)) {
        // El usuario se ha registrado correctamente
        echo "READY";
        header("Location: login.php");
    } else {
        // Ocurrió un error al registrar el usuario
        echo "Ocurrió un error al registrar el usuario.";
    }



?>