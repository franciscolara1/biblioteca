@extends('index')


@section('libro')
<div class="search-bar col-sm-8 col-md-6"style="">
  <form action="{{ route('libro')}}" method="get">
    <div class="input-group">
      <input class="form-control"type="search" name="texto"id="buscar"placeholder="Busque sus libros...">
      <button class="btn btn-warning" type="submit"value="buscar"><i class="bi bi-search"></i></button>
    </div>
  </form>
</div>
<ol class="breadcrumb"style="position:absolute;top:14%;left:3%;font-size:20px">
  <li class="breadcrumb-item"><a href="{{ url('/')}}">Volver</a></li>
  <li class="breadcrumb-item active" aria-current="page">Libros</li>
</ol>
<h1 style="margin-top:15rem;margin-left:3%">{{ $nombreCategoria }}</h1>
<section class="container-fluid libro-estilo col-12">
    @foreach( $libros as $libro)
        <div class="card text-left carta-libro">
          <img src="{{ url($libro-> img) }}" id="card-libros-pag" style="height: 14rem" alt="...">
          <div class="card-body">
            <h5 class="card-title texto-libros">{{ $libro-> titulo }}</h5>
            <a href="{{ url('detalleLibro' , ['id' => $libro-> id]) }}"class="btn btn-sm btn-block" id="button-card">Préstamo</a>
          </div>
        </div>
    @endforeach
</section>

@endsection