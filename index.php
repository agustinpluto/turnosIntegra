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
          <div class="d-flex justify-content-center aling-items-center pt-4 border rounded mx-5 mt-5">
            <div class="card mx-2 mb-4">
              <div class="card-header text-black bg-warning">
                Ingreso
              </div>
              <div class="card-body">
                <h5 class="card-title">Ingresar</h5>
                <p class="card-text">Para ingresar presione el boton "Entrar"</p>
                <a href="/login.php" class="btn btn-danger btn-block">Entrar</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="d-flex justify-content-center aling-items-center pt-4 border rounded mx-5 mt-5">
            <div class="card mx-2 mb-4">
              <div class="card-header text-danger bg-warning">
                Crear cuenta
              </div>
              <div class="card-body">
                <h5 class="card-title">Registrarse</h5>
                <p class="card-text">Para crear su cuenta presione el boton "Registro"</p>
                <a href="/registro.php" class="btn btn-danger btn-block">Registro</a>
              </div>
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