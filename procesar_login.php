<?php
    session_start();

    $email = $_POST['email'];
    $password = $_POST['password'];

    include 'conexion.php';
    
    if (!empty($email) && !empty($password)) {

        $query = "SELECT id, email, password FROM usuarios WHERE email = '$email'";
        echo $query;
        $stmt = mysqli_prepare($conexion, $query);
        mysqli_stmt_bind_param($stmt, "s", $email);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        echo $result;
        $user = mysqli_fetch_assoc($result);
        echo $user;
        if ($user && password_verify($password, $user["password"])) {
            $_SESSION["user_id"] = $user["id"];
            header("Location: loginOk.php");
            exit();
        } else {
            echo "Correo electrónico o contraseña incorrectos.";
        }
        
    } else {
        
        echo "error";
        
    }
?>