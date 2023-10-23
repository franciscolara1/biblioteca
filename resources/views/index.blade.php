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
                      <li><a href="#">Escuela de Administración y Negocios</a></li>
                      <li><a href="#">Escuela de Comunicación</a></li>
                      <li><a href="#">Escuela de Construcción</a></li>
                      <li><a href="#">Escuela de Ingeniería</a></li>
                      <li><a href="{{ url('libro' , ['categoria_id' => 7]) }}">Escuela de Turismo</a></li>
                      <li><a href="#">Escuela de Salud</a></li>
                      <li><a href="#">Escuela de Recursos naturales</a></li>
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
<script src="{{ url('js/app.js') }}"></script>
<script src="{{ url('js/scroll.js') }}"></script>
<div class="row" id="home-social" bis_skin_checked="1">
		<section id="rrss" class="">
			<div class="container" bis_skin_checked="1">
				<h2 class="text-center">Síguenos en Redes Sociales</h2>
				<div class="rrss-section" bis_skin_checked="1">
				<div class="card-body flex-column" bis_skin_checked="1">
					<h3 class="text-center">Entérate de todas las novedades y contáctanos para poder ayudarte.</h3> 
					<div class="flex-row" id="social-row" bis_skin_checked="1">
						<a href="https://www.facebook.com/BibliotecasDuocUC" target="_blank" rel="noopener noreferrer"><svg xmlns="http://www.w3.org/2000/svg" width="34" height="34" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-facebook" data-toggle="tooltip" data-placement="top" title="" data-original-title="Facebook"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path></svg></a>
						<a href="https://www.instagram.com/bibliotecasduoc/" target="_blank" rel="noopener noreferrer"><svg xmlns="http://www.w3.org/2000/svg" width="34" height="34" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-instagram" data-toggle="tooltip" data-placement="top" title="" data-original-title="Instagram"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line></svg></a>
						<a href="https://twitter.com/BibliotecasDuoc" target="_blank" rel="noopener noreferrer"><svg xmlns="http://www.w3.org/2000/svg" width="34" height="34" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-twitter" data-toggle="tooltip" data-placement="top" title="" data-original-title="Twitter"><path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"></path></svg></a>
						<a href="https://www.youtube.com/channel/UCWFMBpfnzWvfjqrjXLTjrYA" target="_blank" rel="noopener noreferrer"><svg xmlns="http://www.w3.org/2000/svg" width="34" height="34" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-youtube" data-toggle="tooltip" data-placement="top" title="" data-original-title="Youtube"><path d="M22.54 6.42a2.78 2.78 0 0 0-1.94-2C18.88 4 12 4 12 4s-6.88 0-8.6.46a2.78 2.78 0 0 0-1.94 2A29 29 0 0 0 1 11.75a29 29 0 0 0 .46 5.33A2.78 2.78 0 0 0 3.4 19c1.72.46 8.6.46 8.6.46s6.88 0 8.6-.46a2.78 2.78 0 0 0 1.94-2 29 29 0 0 0 .46-5.25 29 29 0 0 0-.46-5.33z"></path><polygon points="9.75 15.02 15.5 11.75 9.75 8.48 9.75 15.02"></polygon></svg></a>
					</div>
				</div>
			</div>			
			</div>
			
		  </section>
	</div>
</body>


<footer class="footerpenca">
  <div>
    <a href="https://www.duoc.cl/contacto/">Contáctanos</a>
    <a href="">(+56) 2 2999 3862</a>
  </div>
  <hr class="footer-hr">
  <div>
    <img src="../img/logo-duoc.svg" alt="">
    <img src="../img/acreditacion.png" alt="">
  </div>
  <div>
    <h3>Derechos reservados Innovateca@</h3>
  </div>
</footer>

</html>