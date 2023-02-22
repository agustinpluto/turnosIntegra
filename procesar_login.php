<?php

    $email = $_POST['email'];
    $password = $_POST['password'];

    echo $email.$password;

    include 'conexion.php';
    
    if (!empty($email) && !empty($password)) {

        $query = "SELECT id, email, password FROM usuarios WHERE email = '$email'";
        $result = mysqli_query($conexion, $query);

        if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
                echo "Email: " . $row["email"] . "<br>";
            }
        } else {
            echo "No se encontraron resultados.";
        }

        header("Location: /loginOk.php");

      } else {
        echo "error";
      };

?>