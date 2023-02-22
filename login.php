<?php

  include 'conexion.php';

  $email = $_POST['email'];
  $password = $_POST['password'];

  if (!empty($email) && !empty($password)) {

    $query = "SELECT id, email, password FROM usuarios WHERE email = ? LIMIT 1";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();
    $user = $result->fetch_assoc();

    if ($user && password_verify($password, $user['password'])) {
      // Las credenciales son válidas, iniciar sesión
      session_start();
      $_SESSION['user_id'] = $user['id'];
      header('Location: index.php');
    } else {
      // Las credenciales son inválidas, mostrar un mensaje de error
      echo "Correo electrónico o contraseña incorrectos.";
    }
  }

?>

<!DOCTYPE html>
<html>

<head>
  <title>Turnos Integra</title>
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
  <!-- danger es violeta -->
  <div class="container-fluid px-0">

    <nav class="navbar navbar-expand-lg navbar-expand-sm navbar-expand navbar-light bg-light"
      style="border-bottom: 2px solid #510097;">
      <a class="navbar-brand" href="/index.php" style="padding-left: 10px;">Integra</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav text-danger">
          <li class="nav-item active">
            <a class="nav-link text-danger" href="/index.php">Inicio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-danger" href="registro.php">Crear cuenta</a>
          </li>
        </ul>
      </div>
      <a class="navbar-brand" href="/index.php" style="padding-left: 10px;">Logo</a>
    </nav>
  </div>

  <div class="container-fluid">
    <div class="container">
      <div class="row">
        <div class="col">

          <div class="d-flex justify-content-center mt-2 mb-5 pt-4">
            <form action="login.php" method="POST" class="p-5 rounded" style="background-color: white; border: 2px solid #8800ff;">
              <h1 class="mb-4 text-start text-danger">Iniciar sesión</h1>
              <div class="row">
                <div class="col">

                  <div class="mb-3">
                    <label for="email" class="form-label">E-Mail</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                  </div>

                </div>
                <div class="col">

                  <div class="mb-3">
                    <label for="password" class="form-label">Contraseña</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                  </div>

                </div>
              </div>
              <button type="submit" class="btn btn-danger w-100 mt-4 mb-4">Entrar</button>
            </form>
          </div>
        </div>
      </div>
    </div>

    <script src="bootstrap/js/bootstrap.min.js"></script>
</body>

</html>