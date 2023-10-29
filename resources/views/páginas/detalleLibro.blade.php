@extends('index')


@section('detalle')
<ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="javascript: history.go(-1)">Volver</a></li>
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
        <button class="btn btn-warning boton-prestar mt-3">PRESTAR</button>
        <button class="btn btn-warning boton-vista-previa mt-3">VISTA PREVIA</button>
        <!-- <button class="btn btn-warning boton-vista-reserva mt-3">RESERVAR</button> -->
        <hr class="mt-5">
        <section class="row detalle-libro">
            <ul class="col-2">Editorial
                <li style="list-style:none">{{ $libro-> editorial}}</li>
            </ul>
            <ul class="col-2">Año
                <li style="list-style:none">{{ $libro-> ano}}</li>
            </ul>
        </section>
        <hr>
        <section class='stock-sede'>
            <h4>Stock por sede</h4>
            <ul style="position:relative;right:2rem">
                @foreach ($stock as $item)
                    <li style="list-style:none">{{ $item-> nombre_sede . ': ' . $item-> cantidad }}</li>
                @endforeach
            </ul>
        </section>
    </section>
</div>
@endsection