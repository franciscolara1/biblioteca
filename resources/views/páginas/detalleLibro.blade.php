@extends('index')


@section('detalle')

<div class="vistaLibro">
    <aside style="margin-top:6rem; margin-left:16rem">
        <img src="{{ asset($img) }}" alt="imagenLibro">
    </aside>
    <section style="margin-top:6rem;margin-right:14rem">
        <h1>{{ $libro }}</h1>
    </section>
</div>


@endsection