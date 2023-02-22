<?php

// Incluimos el archivo de conexión a la base de datos
// datos de conexión
$servidor = "localhost";
$usuario = "agustin";
$password = "Ireliagod1!";
$basedatos = "integra";

$con = mysqli_connect($servidor, $usuario, $password, $basedatos); 
// Si la conexión falla, aparece el error 
// if($con === false) { 
//   echo 'Ha habido un error <br>'.mysqli_connect_error(); 
// } else {
//   echo 'Conectado a la base de datos';
// }

?>