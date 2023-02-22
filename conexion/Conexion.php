<?php

    class Conexion {

        public $servidor = 'localhost'; 
        public $usuario = 'agustin';
        public $password = 'Ireliagod1!';
        public $database = 'integra';
        public $port = '3306';

        public function conectar() {

            return mysqli_connect(

                $this->servidor,      
                $this->usuario,
                $this->password,
                $this->database,
                $this->port,

            );

        }

    }

?>