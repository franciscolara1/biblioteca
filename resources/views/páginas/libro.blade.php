@extends('index')


@section('libro')
<h1 style="margin-top:12%;margin-left:3%">{{ $nombreCategoria }}</h1>
<section class="container-fluid libro-estilo col-12">
    @foreach( $libros as $libro)
        <div class="card text-left carta-libro">
          <img src="{{ url($libro-> img) }}" id="card-libros-pag" style="height: 14rem" alt="...">
          <div class="card-body">
            <h5 class="card-title texto-libros" style="">{{ $libro-> titulo }}</h5>
            <a href="#" class="btn btn-primary"id="boton-libro">Reservar</a>
          </div>
        </div>
    @endforeach
</section>

@endsection