<?php
// Incluimos el archivo de conexión a la base de datos
include 'conexion.php';

// Obtenemos los valores del formulario
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$dni = $_POST['dni'];
$email = $_POST['email'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);

// Preparamos la consulta SQL para insertar los valores en la tabla users
$query = "INSERT INTO users (nombre, apellido, dni, email, password) VALUES (?, ?, ?, ?, ?)";

// Preparamos la sentencia SQL
$stmt = $conn->prepare($query);

// Asociamos los parámetros de la consulta con los valores del formulario
$stmt->bind_param("ssiss", $nombre, $apellido, $dni, $email, $password);

// Ejecutamos la sentencia SQL
if ($stmt->execute()) {
    // Si la consulta se ejecutó correctamente, redireccionamos a una página de éxito
    header("Location: registro_exitoso.php");
    exit();
} else {
    // Si hubo un error, mostramos un mensaje
    echo "Error: " . $stmt->error;
}

// Cerramos la conexión a la base de datos y liberamos los recursos
$stmt->close();
$conn->close();
?>
