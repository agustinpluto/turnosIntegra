<?php

    $email = $_POST['email'];
    $password = $_POST['password'];

    include 'conexion.php';
    
    if (!empty($email) && !empty($password)) {

        $query = "SELECT id, email, password FROM usuarios WHERE email = '$email'";
        $result = mysqli_query($conexion, $query);

        if (mysqli_num_rows($result) > 0) {
            header("Location: /loginOk.php");
        } else {
            echo "No se encontraron resultados.";
        }


      } else {
        echo "error";
      };

?>