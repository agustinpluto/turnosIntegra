<!DOCTYPE html>
<html>

<head>
  <title>Turnos Integra</title>
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>

<body>
  <!-- danger es violeta -->
  <div class="container-fluid">

    <nav class="navbar navbar-expand-lg navbar-light bg-light custom-nav">
      <a class="navbar-brand text-black" href="/">Integra</a>
      <!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button> -->
      <div class="collapse navbar-collapse" id="navbarNav">

        <ul class="navbar-nav mx-4">
          <li class="nav-item">
            <a class="nav-link text-danger" href="/index.php">Inicio</a>
          </li>
        </ul>

      </div>
  </div>

  </div>

  <div class="container-fluid">
    <div class="container">
      <div class="row">
        <div class="col">
          <div class="d-flex justify-content-center align-items-center" style="height: 100vh;">
            <form class="p-5 rounded" style="background-color: #8800ff;">
              <h1 class="mb-4 text-center">Registro</h1>
              <div class="row">
                <div class="col">
                  <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" required>
                  </div>
                  <div class="mb-3">
                    <label for="apellido" class="form-label">Apellido</label>
                    <input type="text" class="form-control" id="apellido" name="apellido" required>
                  </div>
                  <div class="mb-3">
                    <label for="dni" class="form-label">DNI</label>
                    <input type="text" class="form-control" id="dni" name="dni" required>
                  </div>
                </div>
                <div class="col">
                  <div class="mb-3">
                    <label for="email" class="form-label">E-Mail</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                  </div>
                  <div class="mb-3">
                    <label for="password" class="form-label">Contraseña</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                  </div>
                  <div class="mb-3">
                    <label for="re_password" class="form-label">Confirmar contraseña</label>
                    <input type="password" class="form-control" id="re_password" name="re_password" required>
                  </div>
                </div>
              </div>
              <button type="submit" class="btn btn-danger w-100">Registro</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="container-fluid fixed-bottom">
    <footer class="bg-light py-1 mx-auto">
      <div class="container">
        <div class="row">
          <div class="col-12 text-center">
            <p>© 2023 Turnos Integra. Designed by Agustin Pluto.</p>
          </div>
        </div>
      </div>
    </footer>

  </div>



  <script src="bootstrap/js/bootstrap.min.js"></script>
</body>

</html>