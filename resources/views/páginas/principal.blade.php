@extends('index')

@section('content')


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