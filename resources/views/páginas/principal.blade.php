@extends('index')

@section('content')
<header style="margin-top:93px">
  <div id="carouselExampleIndicators" class="carousel slide">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="img/carrusel/banner podcast.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="img/carrusel/banner vida estudiantil.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="img/carrusel/concurso cuentos.jpg" class="d-block w-100" alt="...">
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
      <div class="input-group">
        <input class="form-control"type="search" name="buscar"id="buscar"placeholder="Busque sus libros...">
        <button class="btn btn-outline-warning" type="button"><i class="bi bi-search"></i></button>
      </div>
    </div>
<section class="container-fluid"id="cards">
  <div class="row">
    <h1 id="titulo-libros">Libros</h1>
    @foreach( $libros as $libro)
    <div class="card">
      <img src="{{ $libro-> img }}" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">{{ $libro-> title }}</h5>
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>
    @endforeach
  </div>
</section>
@endsection