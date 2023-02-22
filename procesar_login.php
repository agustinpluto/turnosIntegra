<?php

    $email = $_POST['email'];
    $password = $_POST['password'];

    include 'conexion.php';
    
    if (!empty($email) && !empty($password)) {

        $query = "SELECT id, email, password FROM usuarios WHERE email = '$email'";
        $result = mysqli_query($conexion, $query);
        
        header("Location: /loginOk.php");
        
      } else {
        echo "error";
      };

?>