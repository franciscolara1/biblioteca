<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblioteca</title>
    <!-- BOOTSTRAP-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <!-- CSS -->
    <link href="css/app.css" rel="stylesheet">
    <link href="css/login.css" rel="stylesheet">
    <link href="css/menu.css" rel="stylesheet">
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-solid-rounded/css/uicons-solid-rounded.css'>
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato&family=Poppins:wght@200;400&display=swap" rel="stylesheet">
</head>
<body class="bg-light">
    <header>
      <nav class="navbar navbar-expand-xxl">
        <div class="container">
            <!--Logo Duoc -->
          <a class="navbar-brand" href="#">
            <img src="img/Logo_duoc.png" width="300" height="70" class="d-inline-block logo-duoc"alt="">
          </a>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="busqueda">
              <a class="nav-link" href="#">
                <span style="font-size:50px;">
                   <i class="fi fi-sr-headset" id="icon1"></i>
                </span></a>
                <a id="textMenu1"style="position:relative;right:1px;bottom:30px;"href="#">Consúltanos</a>
            </li>
            <li class="busqueda">
              <a class="nav-link" href="#">
                <span style="font-size:50px;">
                   <i class="fi fi-sr-circle-user" id="icon2"></i>
                </span></a>
                <a id="textMenu2"style="position:relative;left:1px;bottom:30px;"href="#">Cuenta</a>
            </li>
            <li class="busqueda">
              <a class="nav-link" href="#">
                <span style="font-size:50px;">
                  <i class="fi fi-sr-book-alt" id="icon3"></i>
                </span></a>
                <a id="textMenu3"style="position:relative;left:1px;bottom:30px;"href="#">Libros</a>
            </li>
            <li class="busqueda">
              <a class="nav-link" href="#">
                <span style="font-size:50px;">
                  <i class="fi fi-sr-book-open-reader"></i>
                </span></a>
                <a id="textMenu4"style="position:relative;left:1px;bottom:30px;"href="#">Alumnos</a>
            </li>
            <li class="busqueda">
              <a class="nav-link" href="#">
                <span style="font-size:50px;">
                  <i class="fi fi-sr-chalkboard-user"></i>
                </span></a>
                <a id="textMenu5"style="position:relative;right:1px;bottom:30px;"href="#">Docentes</a>
              </li>
          </ul>
        </div>
        <button class="btn btn-warning"id="abrir"><i class="bi bi-list"></i></button>
        </div>
      </nav>
      <nav class="menu">
        <ul class="nav-list">
          <button class="btn btn-warning"id="cerrar"><i class="bi bi-x-circle-fill"></i></button>
          <li><a href="#">Inicio</a></li>
          <li><a href="#">Quienes somos</a></li>
          <li><a href="#">Servicios</a></li>
          <li><a href="#">Que hacemos</a></li>
        </ul>
      </nav>
    </header>
@yield('content')
@yield('login')
<script src="js/app.js"></script>
</body>
</html>