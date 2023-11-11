@extends('index')


@section('detalle')
<ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{ url('') }}">Volver</a></li>
    <li class="breadcrumb-item active" aria-current="page">Libro</li>
</ol>
<div class="vistaLibro">
    <aside>
        <img src="{{ asset($libro-> img) }}" alt="imagenLibro" class="imagen-libro">
    </aside>
    <section class="información-libro">
        <h2 class="titulo-libro">{{ $libro-> titulo }}</h2>
        <h4 class="nombre-autor text-muted">{{ $libro-> autor}}</h4>
        <p class="descripción-libro">{{ $libro-> descripcion}}</p>
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
        <!-- CREACIÓN DEL PRÉSTAMO EN LA BASE DE DATOS,ENVIO MEDIANTE UN FORMULARIO POST -->
        <form action="{{ route('detalleLibro.prestar', ['id' => $libro-> id]) }}" method="post">
        @csrf
        <input type="number" name="id_libro" value="{{ $libro-> id }}" hidden>
        <section class="elegir-sede col-3">
            <select id="sede" class="form-select col-md-6" name="id_sede" aria-label="Default select example">
                <option hidden>Selecccione sede para reservar</option>
                <option value="1">Sede Alameda</option>
                <option value="2">Sede Padre Alonso de Ovalle</option>
                <option value="3">Sede Antonio Varas</option>
                <option value="4">Sede Maipú</option>
                <option value="5">Sede Melipilla</option>
                <option value="6">Sede Plaza Norte</option>
                <option value="7">Sede Plaza Oeste</option>
                <option value="8">Sede Plaza Vespucio</option>
                <option value="9">Sede Puente Alto</option>
                <option value="10">Sede San Bernardo</option>
                <option value="11">Sede San Carlos de Apoquindo</option>
                <option value="12">Sede San Joaquín</option>
            </select>
        </section>
        <button type="submit"class="btn btn-warning boton-prestar mt-3">PRESTAR</button>
        <button class="btn btn-warning boton-vista-previa mt-3">VISTA PREVIA</button>
        </form>
        <!-- ********************************************************************** -->
        <section class='stock-sede'>
            <h4>Stock por sede</h4>
            <ul style="position:relative;right:2rem">
                @foreach ($stock as $item)
                    <li style="list-style:none">{{ $item-> nombre_sede . ': ' . $item-> cantidad }}</li>
                @endforeach
            </ul>
        </section>
    </section>
    @if(session('success'))
    <div class="alert alert-success" id="success-message"style="position:absolute;right:2rem;bottom:4rem">
        {{ session('success') }}
    </div>
    <script>
        // Ocultar el mensaje de éxito después de 5 segundos (5000 milisegundos)
        setTimeout(function() {
            document.getElementById('success-message').style.display = 'none';
        }, 5000); // Cambia 5000 a la cantidad de milisegundos que desees
    </script>
    @endif
    @if(session('error'))
    <div class="alert alert-danger" id="danger-message"style="position:absolute;right:2rem;bottom:4rem">
        {{ session('error') }}
    </div>
    <script>
        // Ocultar el mensaje de éxito después de 5 segundos (5000 milisegundos)
        setTimeout(function() {
            document.getElementById('danger-message').style.display = 'none';
        }, 5000); // Cambia 5000 a la cantidad de milisegundos que desees
    </script>
    @endif
</div>
@endsection