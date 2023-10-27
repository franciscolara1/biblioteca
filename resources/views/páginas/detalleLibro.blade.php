@extends('index')


@section('detalle')
<ol class="breadcrumb"style="position:absolute;top:14%;left:3%;font-size:20px">
    <li class="breadcrumb-item"><a href="{{ url('/')}}">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Préstamo</li>
</ol>
<div class="vistaLibro">
    <aside style="margin-top:6rem; margin-left:16rem">
        <img src="{{ asset($libro-> img) }}" alt="imagenLibro">
    </aside>
    <section style="margin-top:6rem;margin-right:14rem">
        <h1>{{ $libro-> titulo }}</h1>
    </section>
</div>


@endsection