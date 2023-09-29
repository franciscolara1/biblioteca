@extends('index')


@section('libro')
<h1 style="margin-top:12%;">Escuela de Informática y Telecomunicaciones</h1>
<section class="container-fluid libro-estilo col-12">
    @foreach( $libros as $libro)
        <div class="card text-left">
          <img src="{{ $libro-> img }}" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">{{ $libro-> title }}</h5>
            <a href="#" class="btn btn-primary">Go somewhere</a>
          </div>
        </div>
    @endforeach
</section>

@endsection