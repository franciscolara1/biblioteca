<!doctype html>
<html lang="es">
  <head>
    <link rel="icon" type="image/vnd.microsoft.icon" href="https://www.duoc.cl/wp-content/uploads/2020/03/favicon.ico">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblioteca</title>
    <!-- BOOTSTRAP-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <!-- CSS -->
    <link href="{{ asset('css/filtros.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/login.css') }}" rel="stylesheet">
    <link href="{{ asset('css/menu.css') }}" rel="stylesheet">
    <link href="{{ asset('css/libros.css') }}" rel="stylesheet">
    <link href="{{ asset('css/register.css') }}" rel="stylesheet">
    <link href="{{ asset('css/detalle.css') }}" rel="stylesheet">
    

    
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/uicons-solid-rounded/css/uicons-solid-rounded.css'>
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato&family=Poppins:wght@200;400&display=swap" rel="stylesheet">
</head>
<body style ="background-color:beige;">
    <header>
      <nav class="navbar navbar-expand-xxl" id="navsito" >
        <div class="container">
            <!--Logo Duoc -->
          <a class="navbar-brand" href="{{ url('') }}">
            <img src="{{ url('img/Logo_duoc.png') }}" width="300" height="70" class="d-inline-block logo-duoc"alt="">
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
              <a class="nav-link" href="{{ url('login')}}">
                <span style="font-size:50px;">
                   <i class="fi fi-sr-circle-user" id="icon2"></i>
                </span></a>
                <a id="textMenu2"style="position:relative;left:1px;bottom:30px;"href="{{ url('login')}}">Cuenta</a>
            </li>
            <li class="busqueda">
              <a class="nav-link" href="{{ url('libro')}}">
                <span style="font-size:50px;">
                  <i class="fi fi-sr-book-alt" id="icon3"></i>
                </span></a>
                <a id="textMenu3"style="position:relative;left:1px;bottom:30px;"href="{{ url('libro')}}">Prestamos</a>
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
        <button class="btn btn-warning"id="abrir">
          <i class="bi bi-list" id="burguer"></i>
          <i class="bi bi-x-circle-fill"id="x"></i>
        </button>
        </div>
      </nav>
      <nav class="menu">
        <li class="logo-duoc"><img src="img/duoc.jpg" alt=""></li>
        <li><h1 style="font-size:24px;margin-top:70px;color:white;text-align:center">Catálogo </h1></li>
        <ul class="nav-list">
          <div class="accordion" id="accordionExample">
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                  Escuelas
                </button>
              </h2>
              <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
                <div class="accordion-body">
                  <ul class="escuela-list">
                      <li><a href="{{ url('libro' , ['categoria_id' => 1]) }}">Escuela de informática y Telecomunicaciones</a></li>
                      <li><a href="{{ url('libro' , ['categoria_id' => 2]) }}">Escuela de diseño</a></li>
                      <li><a href="{{ url('libro' , ['categoria_id' => 3]) }}">Escuela de Administración y Negocios</a></li>
                      <li><a href="{{ url('libro' , ['categoria_id' => 4]) }}">Escuela de Comunicación</a></li>
                      <li><a href="{{ url('libro' , ['categoria_id' => 5]) }}">Escuela de Construcción</a></li>
                      <li><a href="{{ url('libro' , ['categoria_id' => 6]) }}">Escuela de Ingeniería</a></li>
                      <li><a href="{{ url('libro' , ['categoria_id' => 7]) }}">Escuela de Turismo</a></li>
                      <li><a href="{{ url('libro' , ['categoria_id' => 8]) }}">Escuela de Salud</a></li>
                      <li><a href="{{ url('libro' , ['categoria_id' => 9]) }}">Escuela de Recursos naturales</a></li>
                  </ul>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="true" aria-controls="panelsStayOpen-collapseTwo">
                    Otros
                  </button>
                </h2>
                <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingTwo">
                  <div class="accordion-body">
                    <ul class="escuela-list">
                        <li><a href="#">Ficción</a></li>
                        <li><a href="#">Infantiles</a></li>
                        <li><a href="#">Humanidades</a></li>
                        <li><a href="{{ url('libro' , ['categoria_id' => 13]) }}">Literatura</a></li>
                        <li><a href="{{ url('libro' , ['categoria_id' => 14]) }}">Historia</a></li>
                        <li><a href="{{ url('libro' , ['categoria_id' => 15]) }}">Biografia</a></li>
                        <li><a href="#">Estilo de vida,deportes y ocio</a></li>
                        <li><a href="#">Novelas</a></li>
                        <li><a href="#">Cuentos</a></li>
                        <li><a href="#">Terror</a></li>                       
                    </ul>
                  </div>
                </div>
            </div>
          <li><a class="d-xxl-none"href="#">Consultanos</a></li>
          <li><a class="d-xxl-none"href="#">Cuenta</a></li>
          <li><a class="d-xxl-none"href="#">Libros</a></li>
          <li><a class="d-xxl-none"href="#">Alumnos</a></li>
          <li><a class="d-xxl-none"href="#">Docentes</a></li>
        </ul>
      </nav>
    </header>
    
@yield('content')
@yield('login')
@yield('libro')
@yield('detalle')
@yield('prestamo')
<script src="{{ url('js/app.js') }}"></script>
<script src="{{ url('js/scroll.js') }}"></script>

</body>
</html>