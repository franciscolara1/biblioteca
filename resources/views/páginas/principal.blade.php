@extends('index')

@section('content')
<header style="margin-top:93px">
  <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel" style="max-width:100%;">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="img/carrusel/banner podcast.jpg" class="d-block w-100" alt="..." style="max-width:100%;height:auto;">
      </div>
      <div class="carousel-item">
        <img src="img/carrusel/banner vida estudiantil.jpg" class="d-block w-100" alt="..." style="max-width:100%;height:auto;">
      </div>
      <div class="carousel-item">
        <img src="img/carrusel/concurso cuentos.jpg" class="d-block w-100" alt="..." style="max-width:100%;height:auto;">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

</header>
    <div class="barra-busqueda col-6">
      <form action="{{ route('libro')}}" method="get">
        <div class="input-group">
          <input class="form-control"type="search" name="texto"id="buscar"placeholder="Busque sus libros...">
          <button class="btn btn-warning" type="submit"value="buscar"><i class="bi bi-search"></i></button>
        </div>
      </form>
    </div>
    <!-- Mensaje de confirmación de inicion de sesión -->
    @if (session('message'))
    <div class="alert alert-success" id="flash-message" style="position:fixed;bottom:10px;right:3rem;z-index:99;">
        {{ session('message') }}
    </div>
    <script>
        setTimeout(function() {
            document.getElementById('flash-message').style.display = 'none';
        }, 5000); // El mensaje desaparecerá después de 5 segundos (5000 milisegundos)
    </script>
    @endif

    <!--Mensaje de newsletter al ingresar correo existente -->
    @if(session('success'))
              <div class="alert alert-success text-center" id="mensaje-newsletter">
            {{ session('success') }}
              </div>
              <script>
              setTimeout(function() {
              document.getElementById('mensaje-newsletter').style.display = 'none';
              }, 5000); // El mensaje desaparecerá después de 5 segundos (5000 milisegundos)
              </script>
            @endif


    <!-- ********** SECCIÓN 1 ********** -->
<section class="container-fluid"id="cards">
  <h3 id="titulo-libros">Escuela Informática y Telecomunicaciones.</h3>
  <button class="btn btn-warning button-arrow-left"><i class="bi bi-chevron-left arrow-icon-left"></i></button>
  <div class="row scrolling-container"style="margin-left:5%;margin-right:5%">
        @foreach( $informatica as $libro)
        <div class="card text-left carta">
          <img src="{{ $libro-> img }}" class="card-img-top img-card" alt="...">
          <div class="card-body">
            <h5 class="card-title texto">{{ $libro-> titulo }}</h5>
              <a href="{{ url('detalleLibro' , ['id' => $libro-> id]) }}"class="btn btn-sm btn-block" id="button-card">Préstamo</a>
          </div>
        </div>
        @endforeach
  </div>
  <button class="btn btn-warning button-arrow-right"><i class="bi bi-chevron-right arrow-icon-right"></i></button>
</section>
<!-- ********** SECCIÓN 2 ********** -->
<div class="container-fluid">
  <h3 id="titulo-libros2">Escuela de Turismo.</h3>
  <button class="btn btn-warning button-arrow-left2"><i class="bi bi-chevron-left arrow-icon-left2"></i></button>
  <div class="row scrolling-container2"style="margin-left:5%;margin-right:5%">
    @foreach( $turismo as $libroTurismo)
    <div class="card text-left carta">
      <img src="{{ $libroTurismo-> img }}" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title texto">{{ $libroTurismo-> titulo }}</h5>
          <a href="{{ url('detalleLibro' , ['id' => $libroTurismo-> id]) }}"class="btn btn-sm btn-block" id="button-card">Préstamo</a>
      </div>
    </div>
    @endforeach
  </div>
  <button class="btn btn-warning button-arrow-right2"><i class="bi bi-chevron-right arrow-icon-right2"></i></button>
</div>
<!-- ********** SECCIÓN 3 ********** -->
<div class="container-fluid">
  <h3 id="titulo-libros2">Literatura.</h3>
  <button class="btn btn-warning button-arrow-left3"><i class="bi bi-chevron-left arrow-icon-left3"></i></button>
  <div class="row scrolling-container2"style="margin-left:5%;margin-right:5%">
    @foreach( $literatura as $libroLiteratura)
    <div class="card text-left carta">
      <img src="{{ $libroLiteratura-> img }}" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title texto">{{ $libroLiteratura-> titulo }}</h5>
        <a href="{{ url('detalleLibro' , ['id' => $libroLiteratura-> id]) }}"class="btn btn-sm btn-block" id="button-card">Préstamo</a>
      </div>
    </div>
    @endforeach
  </div>
  <button class="btn btn-warning button-arrow-right3"><i class="bi bi-chevron-right arrow-icon-right3"></i></button>
</div>
<!-- ********** SECCIÓN 4 ********** -->
<div class="container-fluid">
  <h3 id="titulo-libros2">Historia.</h3>
  <button class="btn btn-warning button-arrow-left4"><i class="bi bi-chevron-left arrow-icon-left2"></i></button>
  <div class="row scrolling-container2"style="margin-left:5%;margin-right:5%">
    @foreach( $historia as $libroHistoria)
    <div class="card text-left carta">
      <img src="{{ $libroHistoria-> img }}" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title texto">{{ $libroHistoria-> titulo }}</h5>
        <a href="{{ url('detalleLibro' , ['id' => $libroHistoria-> id]) }}"class="btn btn-sm btn-block" id="button-card">Préstamo</a>
      </div>
    </div>
    @endforeach
  </div>
  <button class="btn btn-warning button-arrow-right4"><i class="bi bi-chevron-right arrow-icon-right4"></i></button>
</div>
<!-- ********** SECCIÓN 5 ********** -->
<div class="container-fluid">
  <h3 id="titulo-libros2">Biografia.</h3>
  <button class="btn btn-warning button-arrow-left5"><i class="bi bi-chevron-left arrow-icon-left5"></i></button>
  <div class="row scrolling-container2"style="margin-left:5%;margin-right:5%">
    @foreach( $biografia as $libroBiografia)
    <div class="card text-left carta">
      <img src="{{ $libroBiografia-> img }}" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title texto">{{ $libroBiografia-> titulo }}</h5>
        <a href="{{ url('detalleLibro' , ['id' => $libroBiografia-> id]) }}"class="btn btn-sm btn-block" id="button-card">Préstamo</a>
      </div>
    </div>
    @endforeach
  </div>
  <button class="btn btn-warning button-arrow-right5"><i class="bi bi-chevron-right arrow-icon-right5"></i></button>
</div>
<!-- ********** SECCIÓN 6 ********** -->
<div class="container-fluid">
  <h3 id="titulo-libros2">Diseño.</h3>
  <button class="btn btn-warning button-arrow-left6"><i class="bi bi-chevron-left arrow-icon-left6"></i></button>
  <div class="row scrolling-container2"style="margin-left:5%;margin-right:5%">
    @foreach( $diseño as $libroDiseño)
    <div class="card text-left  carta">
      <img src="{{ $libroDiseño-> img }}" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title texto">{{ $libroDiseño-> titulo }}</h5>
        <a href="{{ url('detalleLibro' , ['id' => $libroDiseño-> id]) }}"class="btn btn-sm btn-block" id="button-card">Préstamo</a>
      </div>
    </div>
    @endforeach
  </div>
  <button class="btn btn-warning button-arrow-right6"><i class="bi bi-chevron-right arrow-icon-right6"></i></button>
</div>

<!-- ********** CHATBOT 
/*
<div >
  <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling" >
  <img class="imgchat" src="https://www.un.org/sites/un2.un.org/files/2020/08/chat.png" alt="">
  </button>
  <div class="offcanvas offcanvas-start" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" id="offcanvasScrolling" aria-labelledby="offcanvasScrollingLabel">
    <div class="offcanvas-header">
      <h5 class="offcanvas-title" id="offcanvasScrollingLabel">Bienvenido a nuestro chatbot</h5>
      <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
    <div class="bodychat">
      <div class="chat-container">
        <div class="chat-header">
          <h1>Innovatin</h1>
        </div>
        <div class="chat-body" id="chat-body"></div>
        <div class="chat-footer">
          <input class="inputchat" type="text" id="mensaje" placeholder="Escribe un mensaje...">
          <button class="buttonchat" onclick="enviarMensaje()">Enviar</button>
        </div>
      </div>
      <script src="script.js"></script>
    </div>
    </div>
  </div>
</div>
********** -->


<!-- ********** CHTABOT 2 
<div>
  <button onclick="iniciarChat()">Iniciar Chatbot</button>
  <div id="chat-container">
    <div id="chat-output"></div>
    <input type="text" id="user-input" placeholder="Ingresa tu opción">
    <button onclick="enviarRespuesta()">Enviar</button>
  </div>

  <script>
  function mostrarMensaje(mensaje) {
    const chatOutput = document.getElementById("chat-output");
    chatOutput.innerHTML += `<p>${mensaje}</p>`;
  }
  function mostrarMenu() {
    mostrarMensaje("1. Saludar");
    mostrarMensaje("2. Contar hasta 5");
    mostrarMensaje("3. Despedirse");
    mostrarMensaje("4. Salir");
  }

  function chatbot() {
    mostrarMensaje("¡Bienvenido al chatbot!");
    mostrarMenu();
  }

  function enviarRespuesta() {
    const userInput = document.getElementById("user-input").value;
    mostrarMensaje(`Usuario: ${userInput}`);
    switch (userInput) {
      case "1":
        mostrarMensaje("Chatbot: Hola, ¿cómo estás?");
        break;
      case "2":
        mostrarMensaje("Chatbot: 1, 2, 3, 4, 5");
        break;
      case "3":
        mostrarMensaje("Chatbot: Hasta luego. ¡Que tengas un buen día!");
        break;
      case "4":
        mostrarMensaje("Chatbot: Saliendo del chatbot. ¡Hasta luego!");
        break;
      default:
        mostrarMensaje("Chatbot: Opción no válida. Por favor, elige una opción del 1 al 4.");
    }

    document.getElementById("user-input").value = "";
  }

  function iniciarChat() {
    // Mostrar el contenedor del chat al hacer clic en el botón
    document.getElementById("chat-container").style.display = "block";
    // Iniciar el chatbot
    chatbot();
  }
  </script>
</div>
********** -->


<!-- ********** CHTABOT 3 ********** -->
<button class="buttonchat" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling">
<img class="imgchat" src="https://www.un.org/sites/un2.un.org/files/2020/08/chat.png" alt="">
</button>


<div style="background-color:  #002366;" class="offcanvas offcanvas-start" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" id="offcanvasScrolling" aria-labelledby="offcanvasScrollingLabel">
  <div class="offcanvas-header">
    
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body" >
    <div style="background-color: white;">
      <button class="buttonchat" onclick="iniciarChat()">Iniciar Chatbot</button>
      <div id="chat-container">
        <div id="chat-output"></div>
        <input type="text" id="user-input" placeholder="Ingresa tu opción">
        <button class="buttonchat" onclick="enviarRespuesta()">Enviar</button>
      </div>

      <script>
      function mostrarMensaje(mensaje) {
        const chatOutput = document.getElementById("chat-output");
        chatOutput.innerHTML += `<p>${mensaje}</p>`;
      }

      function mostrarMenu() {
        mostrarMensaje("1. ¿Como hacer el prestamo de un libro?");
        mostrarMensaje("2. ¿Que pasa si no entrego el libro segun el plazo indicado?");
        mostrarMensaje("3. Donde y como puedo pagar mi multa?");
        mostrarMensaje("4. ¿Donde puedo ver el horario de la biblioteca DUOC?");
        mostrarMensaje("5. Salir");
      }

      function chatbot() {
        mostrarMensaje("¡Bienvenido al chatbot Innovatin! favor seleccione una de las opciones para ayudarte:");
        mostrarMenu();
      }

      function enviarRespuesta() {
        const userInput = document.getElementById("user-input").value;
        mostrarMensaje(`Usuario: ${userInput}`);
        switch (userInput) {
          case "1":
            mostrarMensaje("Chatbot: Para hacer el prestamo de un libro primero debes estar inicar sesion. escoger el libro que quiera pedir, seleccionar PRESTAMO y posteriormnete te direccionaremos a la pagina del libro, debs seleccioanr tu sede para ver la disponibildiad y finalmnente precionar PRESTAR.  ");
            break;
          case "2":
            mostrarMensaje("Chatbot: Si no entregas el libro en el plazo indicado, procederemos a sancionarte generando una multa de $100 pesos por los dias que trasncurran.");
            break;
          case "3":
            mostrarMensaje("Chatbot: Para ver el horario DUOC debes presionar el incono del reloj en la barra de navegacion.");
            break;
          case "4":
            mostrarMensaje("Chatbot: Saliendo del chatbot. ¡Hasta luego!");
            break;
          case "5":
            mostrarMensaje("Chatbot: ");
            break;
          default:
            mostrarMensaje("Chatbot: Opción no válida. Por favor, elige una opción del 1 al 4.");
        }
        document.getElementById("user-input").value = "";
      }
      function iniciarChat() {
        // Mostrar el contenedor del chat al hacer clic en el botón
        document.getElementById("chat-container").style.display = "block";
        // Iniciar el chatbot
        chatbot();
      }
      </script>
      </div>
    </div>
  </div>

<!-- ********** NEWSLETTERS ********** -->

<div class="newsletter mt-5 mb-5" style="text-align:center;">
      <div class="container col-xl-4 col-lg-6 col-md-8 col-sm-12">
       <form action="{{ route('/')}}" name="newsletter" method="post"style="position:relative;top:4rem;" onsubmit="return validarNewsletter()">
       @csrf 
          <h5 style="color:whitesmoke;">Suscríbete y recibe información</h5>
          <label style="color:antiquewhite;position:relative;right:12rem;margin-bottom:4px">Dirección de correo electrónico</label><!-- AJUSTAR -->
          <div class="input-group">
            <input type="email" name="subscriptor" class="form-control" id="input-email" placeholder="Ingresa tú correo" aria-label="Ingresa tu correo" aria-describedby="button-addon2"> <!-- cuadro de texto -->
            <button class="btn btn-outline-warning" type="submit" id="button-addon2">Suscribirme</button>
          </div>
        </form>
      </div>
  </div>
</div>

<!-- ********** RRSS ********** -->

<div class="row" id="home-social"bis_skin_checked="1">
  <section id="rrss" class="">
    <div class="container" bis_skin_checked="1">
      <h2 class="text-center siguenos">Síguenos en Redes Sociales</h2>
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
<footer class="footer">
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
    <h3>Derechos reservados Innovateca 2023.</h3>
  </div>
</footer>

@endsection