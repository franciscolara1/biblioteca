<!doctype html>
<html lang="es">
  <head>
    <link rel="icon" type="image/vnd.microsoft.icon" href="https://www.duoc.cl/wp-content/uploads/2020/03/favicon.ico">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblioteca</title>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
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
    <link href="{{ asset('css/prestamo.css') }}" rel="stylesheet">
    <link href="{{ asset('css/admin.css') }}" rel="stylesheet">
    <link href="{{ asset('css/boleta.css') }}" rel="stylesheet">
    <link href="{{ asset('css/chatbot.css') }}" rel="stylesheet">

    
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
          @auth
        <h5 class="collapse navbar-collapse"style="position: relative;top:10px;color:white;">Bienvenido {{ Auth::user()-> name }},
        <br>de la {{ Auth::user()-> carrera}}.</h5>
        @endauth
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            @if(auth()->check() && auth()->user()->role === 'admin')
            {{-- Contenido visible solo para administradores --}}
            <li class="busqueda">
              <a class="nav-link" href="{{ url('admin')}}">
                <span style="font-size:50px;">
                  <i class="bi bi-database-fill"style="position:relative;bottom:7px;" id="icon1"></i>
                </span></a>
                <a id="textMenu1"style="position:relative;right:1px;bottom:30px;"href="{{ url('admin')}}">Administración</a>
            </li>
            @endif
            @guest
            <li class="busqueda">
              <a class="nav-link" href="{{ url('login')}}">
                <span style="font-size:50px;">
                   <i class="fi fi-sr-circle-user" id="icon2"></i>
                </span></a>
                <a id="textMenu2"style="position:relative;left:1px;bottom:30px;"href="{{ url('login')}}">Iniciar Sesión</a>
            </li>
            @endguest
            @auth
            <li class="busqueda">
              <a class="nav-link" href="{{ url('prestamo')}}">
                <span style="font-size:50px;">
                  <i class="fi fi-sr-book-alt" id="icon3"></i>
                </span></a>
                <a id="textMenu3"style="position:relative;left:1px;bottom:30px;"href="{{ url('prestamo')}}">Prestamos</a>
            </li>
            <li class="busqueda">
              <a class="nav-link" href="#">
                </a>
                <a class="cerrar-sesión" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                document.getElementById('logout-form').submit();"><span style="font-size:50px;position: relative;top:20px">
                  <i class="bi bi-box-arrow-right"style="position:relative;bottom:5px;"></i>
                </span><br>Cerrar Sesión</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                  @csrf
                </form>
            </li>
            @endauth
            <li class="busqueda">
              <a class="nav-link" href="{{ url('horarios')}}" style="position: relative;top:-6px">
                <span style="font-size:50px;">
                  <i class="bi bi-clock-fill"></i>
                </span></a>
                <a id="textMenu5"style="position:relative;right:1px;bottom:30px;"href="{{ url('horarios')}}">Horarios</a>
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
        <li><h1 style="font-size:24px;margin-top:70px;color:white;text-align:center">Menu</h1></li>
        <ul class="d-xxl-none mt-5">
          <li><a class="d-xxl-none text-white"href="#"><span><i class="bi bi-info-circle-fill"style="font-size:25px;position:relative;top:4px;margin-right:5px"></i>
          </span>Consultanos</a></li>
          @auth
          <li><a class="d-xxl-none text-white"href="#"><span><i class="bi bi-book"style="font-size:25px;position:relative;top:4px;margin-right:5px"></i>
          </span>Prestamos</a></li>
          @endauth
          @guest
          <li><a class="d-xxl-none text-white"href="{{ url('login')}}"><span><i class="bi bi-box-arrow-in-right"style="font-size:25px;position:relative;top:4px;margin-right:5px"></i>
          </span>  Iniciar Sesión</a></li>
          @endguest
          @auth
          <li><a class="d-xxl-none text-white" href="{{ route('logout') }}"
            onclick="event.preventDefault();
            document.getElementById('logout-form').submit();"><span>
              <i class="bi bi-box-arrow-left"style="font-size:25px;position:relative;top:4px;margin-right:5px"></i>
            </span>Cerrar Sesión</a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
              @csrf
            </form></li>
          @endauth
        </ul>
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
                        <li><a href="{{ url('libro' , ['categoria_id' => 10]) }}">Ficción</a></li>
                        <li><a href="{{ url('libro' , ['categoria_id' => 11]) }}">Infantiles</a></li>
                        <li><a href="{{ url('libro' , ['categoria_id' => 12]) }}">Humanidades</a></li>
                        <li><a href="{{ url('libro' , ['categoria_id' => 13]) }}">Literatura</a></li>
                        <li><a href="{{ url('libro' , ['categoria_id' => 14]) }}">Historia</a></li>
                        <li><a href="{{ url('libro' , ['categoria_id' => 15]) }}">Biografia</a></li>
                        <li><a href="{{ url('libro' , ['categoria_id' => 16]) }}">Estilo de vida,deportes y ocio</a></li>
                        <li><a href="{{ url('libro' , ['categoria_id' => 17]) }}">Novelas</a></li>
                        <li><a href="{{ url('libro' , ['categoria_id' => 18]) }}">Cuentos</a></li>
                        <li><a href="{{ url('libro' , ['categoria_id' => 19]) }}">Terror</a></li>                       
                    </ul>
                  </div>
                </div>
              </div>
        </ul>
      </nav>
    </header>
    
@yield('content')
@yield('login')
@yield('libro')
@yield('detalle')
@yield('prestamo')
@yield('horario')
@yield('admin')
@yield('boleta')
<script src="{{ url('js/app.js') }}"></script>
<script src="{{ url('js/scroll.js') }}"></script>

</body>
</html>