@extends('index')


@section('libro')

<div class="container libro-estilo">
    @foreach( $libros as $libro)
        <div class="card text-left">
          <img src="{{ $libro-> img }}" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">{{ $libro-> title }}</h5>
            <a href="#" class="btn btn-primary">Go somewhere</a>
          </div>
        </div>
    @endforeach
</div>

@endsection