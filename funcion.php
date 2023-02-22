<?php
function insertarUsuario($nombre, $apellido, $dni, $email, $password) {
        include "conexion.php";

        $stmt = $mysqli->prepare("INSERT INTO users (nombre, apellido, dni, email, password) VALUES (?, ?, ?, ?, ?)");
        $stmt->bind_param("ssiss", $nombre, $apellido, $dni, $email, $password);
        $stmt->execute();

        if ($stmt->affected_rows == 1) {
            return true;
        } else {
            return false;
        }
    }
?>