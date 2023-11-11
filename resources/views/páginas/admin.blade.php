@extends('index')

@section('admin')
<ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{ url('') }}">Volver</a></li>
    <li class="breadcrumb-item active" aria-current="page">Préstamos</li>
</ol>

<div class="container-fluid admin-container col-12">
    <h1 style="text-align: center">Panel Administrador</h1>
    <div class="d-flex align-items-start bg-white menu-admin">
        <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
          <button class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">Préstamos Alumnos</button>
          <button class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false">Profile</button>
          <button class="nav-link" id="v-pills-disabled-tab" data-bs-toggle="pill" data-bs-target="#v-pills-disabled" type="button" role="tab" aria-controls="v-pills-disabled" aria-selected="false" disabled>Disabled</button>
          <button class="nav-link" id="v-pills-messages-tab" data-bs-toggle="pill" data-bs-target="#v-pills-messages" type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false">Messages</button>
          <button class="nav-link" id="v-pills-settings-tab" data-bs-toggle="pill" data-bs-target="#v-pills-settings" type="button" role="tab" aria-controls="v-pills-settings" aria-selected="false">Settings</button>
        </div>
        <div class="tab-content" id="v-pills-tabContent">
          <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab" tabindex="0">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Id_reserva</th>
                  <th scope="col">Titulo</th>
                  <th scope="col">Fecha Préstamo</th>
                  <th scope="col">Fecha Termino</th>
                  <th scope="col">Devuelto</th>
                  <th scope="col">Id Alumno</th>
                  <th scope="col">Nombre Alumno</th>
                </tr>
              </thead>
              <tbody>
              <!-- Mostrar los préstamos aquí si existen -->
              @foreach ($prestamos_alumnos as $prestamo)
              <!-- Mostrar información del préstamo -->
                <tr>
                  <th scope="row">{{ $prestamo-> id}}</th>
                  <td>{{ $prestamo-> titulo}}</td>
                  <td>{{ $prestamo-> fecha_inicio->format('d/m/Y')}}</td>
                  <td>{{ $prestamo-> fecha_termino->format('d/m/Y')}}</td>
                  <td>
                    @if ($prestamo->deleted_at)
                        Devuelto
                    @else
                        <form action="{{ route('marcar.devuelto', ['id' => $prestamo->id]) }}" method="post">
                            @csrf
                            @method('PUT')
                            <button type="submit" class="btn btn-danger">Marcar como Devuelto</button>
                        </form>
                    @endif
                  </td>
                  <td>{{ $prestamo->  id_user}}</td>
                  <td>{{ $prestamo->  name}}</td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
          <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab" tabindex="0">...</div>
          <div class="tab-pane fade" id="v-pills-disabled" role="tabpanel" aria-labelledby="v-pills-disabled-tab" tabindex="0">...</div>
          <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab" tabindex="0">...</div>
          <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab" tabindex="0">...</div>
        </div>
    </div>
</div>
@endsection