@extends('index')


@section('libro')
<h1 style="margin-top:12%;margin-left:3%">{{ $nombreCategoria }}</h1>
<section class="container-fluid libro-estilo col-12">
    @foreach( $libros as $libro)
        <div class="card text-left">
          <img src="{{ url($libro-> img) }}" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">{{ $libro-> titulo }}</h5>
            <a href="#" class="btn btn-primary">Go somewhere</a>
          </div>
        </div>
    @endforeach
</section>

@endsection