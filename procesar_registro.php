<?php

    $email = $_POST['email'];
    $password = $_POST['password'];
    include 'conexion.php';
    if (!empty($email) && !empty($password)) {
        $query = "SELECT id, email, password FROM usuarios WHERE email = '$email'";
        $stmt = $conn->prepare($query);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();
        $user = $result->fetch_assoc();

        echo "hola";

      } else {
        echo "error";
      };

?>