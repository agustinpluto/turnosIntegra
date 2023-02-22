<?php 
    session_start();
    include('conexion.php');
    
    $errors = array();

    if (isset($_POST['reg_user'])) {
        $username = mysqli_real_escape_string($conn, $_POST['nombre']);
        $email = mysqli_real_escape_string($conn, $_POST['apellido']);
        $password_1 = mysqli_real_escape_string($conn, $_POST['password_1']);
        $password_2 = mysqli_real_escape_string($conn, $_POST['password_2']);

        if (empty($username)) {
            array_push($errors, "Se requiere un nombre");
            $_SESSION['error'] = "Se requiere un nombre";
        }
        if (empty($email)) {
            array_push($errors, "Se requiere un E-Mail");
            $_SESSION['error'] = "Se requiere un E-Mail";
        }
        if (empty($password_1)) {
            array_push($errors, "Se requiere una contraseña");
            $_SESSION['error'] = "Se requiere una contraseña";
        }
        if ($password_1 != $password_2) {
            array_push($errors, "Las contraseñas no coinciden");
            $_SESSION['error'] = "Las contraseñas no coinciden";
        }

        $user_check_query = "SELECT * FROM user WHERE username = '$username' OR email = '$email' LIMIT 1";
        $query = mysqli_query($conn, $user_check_query);
        $result = mysqli_fetch_assoc($query);

        if ($result) { // if user exists
            if ($result['email'] === $email) {
                array_push($errors, "Ya existe el E-Mail");
            }
        }

        if (count($errors) == 0) {
            $password = md5($password_1);

            $sql = "INSERT INTO user (username, email, password) VALUES ('$username', '$email', '$password')";
            mysqli_query($conn, $sql);

            $_SESSION['username'] = $username;
            $_SESSION['success'] = "You are now logged in";
            header('location: login.php');
        } else {
            header("location: register.php");
        }
    }

?>