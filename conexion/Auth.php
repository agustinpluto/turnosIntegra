<?php

    include "Conexion.php";

    class Auth extends Conexion {

        public function registrar($nombre, $apellido, $dni, $email, $password) {

            $conexion = parent::conectar();
            $sql = "INSERT INTO users (nombre, apellido, dni, email, password) VALUES (?,?,?,?,?)";
            $query = $conexion->prepare($sql);
            $query->bind_param('ssiss', $nombre, $apellido, $dni, $email, $password);
            return $query->execute();

        }

    }

?>