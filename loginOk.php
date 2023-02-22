<!DOCTYPE html>
<html>

<head>
  <title>Integra</title>
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
            <a class="nav-link text-danger" href="/index.php">Mis turnos</a>
          </li>
        </ul>
      </div>
      <a class="navbar-brand" href="/index.php" style="padding-left: 10px;">Logo</a>
    </nav>
  </div>

  <div class="container-fluid">
    <div class="row">
      <div class="col">
        <div class="container-flui d-flex justify-content-center aling-items-center">
            <h1>Bienvenido</h1>.<?php echo $email ?>
        </div>
      </div>
    </div>
  </div>

    <script src="bootstrap/js/bootstrap.min.js"></script>
</body>

</html>