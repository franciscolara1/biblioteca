@extends('index')


@section('detalle')
<ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{ url('/')}}">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Préstamo</li>
</ol>
<div class="vistaLibro">
    <aside>
        <img src="{{ asset($libro-> img) }}" alt="imagenLibro" class="imagen-libro">
    </aside>
    <section class="información-libro">
        <h2 class="titulo-libro">{{ $libro-> titulo }}</h2>
        <h4 class="nombre-autor text-muted">{{ $libro-> autor}}</h4>
        <p class="descripción-libro">{{ $libro-> descripcion}}</p>
    </section>
</div>


@endsection