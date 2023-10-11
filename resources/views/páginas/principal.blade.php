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
    <div class="search-bar col-6">
      <form action="{{ route('libro')}}" method="get">
        <div class="input-group">
          <input class="form-control"type="search" name="texto"id="buscar"placeholder="Busque sus libros...">
          <button class="btn btn-warning" type="submit"value="buscar"><i class="bi bi-search"></i></button>
        </div>
      </form>
    </div>
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
            <a href="#" class="btn btn-sm btn-block" id="button-card">Reservar</a>
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
        <a href="#" class="btn btn-primary"id="button-card">Reservar</a>
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
        <a href="#" class="btn btn-primary"id="button-card">Reservar</a>
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
        <a href="#" class="btn btn-primary"id="button-card">Reservar</a>
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
        <a href="#" class="btn btn-primary"id="button-card">Reservar</a>
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
        <a href="#" class="btn btn-primary"id="button-card">Reservar</a>
      </div>
    </div>
    @endforeach
  </div>
  <button class="btn btn-warning button-arrow-right6"><i class="bi bi-chevron-right arrow-icon-right6"></i></button>
</div>

@endsection