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