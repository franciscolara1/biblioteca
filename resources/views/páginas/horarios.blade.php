@extends('index')

@section('horario')
<ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="javascript: history.go(-1)">Volver</a></li>
    <li class="breadcrumb-item active" aria-current="page">Préstamo</li>
</ol>
<div class="container horarios-style">
    <h1 style="text-align: center">Horarios</h1>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">Sedes</th>
            <th scope="col">Dirección</th>
            <th scope="col">Horario</th>
          </tr>
        </thead>
        <tbody>
        @foreach ($horarios as $horario)
          <tr>
            <th scope="row">{{$horario-> nombre_sede}}</th>
            <td>{{$horario-> direccion}}</td>
            <td>{{$horario-> horario}}</td>
          </tr>
        @endforeach
        </tbody>
    </table>
</div>

@endsection