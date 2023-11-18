@extends('index')

@section('prestamo')
<!-- Sección 1 -->
<ol class="breadcrumb">
  <li class="breadcrumb-item"><a href="{{ url('') }}">Volver</a></li>
  <li class="breadcrumb-item active" aria-current="page">Préstamos</li>
</ol>
<div class="container sección1">
  <header class="col-12"style="text-align:center">
    <h1 class="titulo-gestión-alumno">Panel de Alumno</h1>
   <p class="text-muted">En el siguiente panel puedes ver tus préstamos, tus sanciones y tus reservas.<br>
  Recuerda que debes devolver el libro para que no te siga aumentando el monto de sanción.</p>
  </header>
  <section class="tabs">
    <ul class="nav nav-tabs" id="myTab" role="tablist">
      <li class="nav-item" role="presentation">
        <button class="nav-link" id="usuario-tab" data-bs-toggle="tab" data-bs-target="#usuario-tab-pane" type="button" role="tab" aria-controls="usuario-tab-pane" aria-selected="false">Información Alumno</button>
      </li>
      <li class="nav-item" role="presentation">
        <button class="nav-link active" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="true">Préstamos</button>
      </li>
      <li class="nav-item" role="presentation">
        <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact-tab-pane" type="button" role="tab" aria-controls="contact-tab-pane" aria-selected="false">Reservas</button>
      </li>
      <li class="nav-item" role="presentation">
        <button class="nav-link" id="sanciones-tab" data-bs-toggle="tab" data-bs-target="#sanciones-tab-pane" type="button" role="tab" aria-controls="sanciones-tab-pane" aria-selected="false">Sanciones</button>
      </li>
    </ul>
  </section>
</div>
<!-- Fin Sección 1 -->
<!-- Sección 2 -->
  <div class="tab-content" id="myTabContent">
    <div class="tab-pane fade" id="usuario-tab-pane" role="tabpanel" aria-labelledby="usuario-tab" tabindex="0">
        <div class="container info-user">
          <section class="info-user-contenido bg-white">
              <h3 class="text-white">Información Alumno</h3>
              <h5 class="mt-5" style="margin-left:2rem;"><span style="font-weight:bold;">Nombre de alumno: </span>{{$info_user-> name}}</h5>
              <h5 class="mt-2" style="margin-left:2rem;"><span style="font-weight:bold;">Escuela: </span>{{$info_user-> carrera}}</h5>
              <h5 class="mt-2" style="margin-left:2rem;"><span style="font-weight:bold;">Correo: </span>{{$info_user-> email}}</h5>
          </section>
        </div>
    </div>
    <div class="tab-pane fade show active"id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
      <div class="container ficha">
        <section class="ficha-principal bg-white">
            <h3 class="container text-white">Préstamos</h3>
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">Título</th>
                    <th scope="col">Autor</th>
                    <th scope="col">Prestado</th>
                    <th scope="col">Termino</th>
                  </tr>
                </thead>
                <tbody>
                @if(isset($error))
                    <div class="alert alert-danger">
                        {{ $error }}
                    </div>
                @else
                <!-- Mostrar los préstamos aquí si existen -->
                @foreach ($prestamos as $prestamo)
                <!-- Mostrar información del préstamo -->
                  <tr>
                    <th scope="row">{{ $prestamo-> titulo}}</th>
                    <td>{{ $prestamo-> autor}}</td>
                    <td>{{ $prestamo-> fecha_inicio->format('d/m/Y') }}</td>
                    <td>{{ $prestamo->fecha_termino->format('d/m/Y') }}</td>
                  </tr>
                  @endforeach
                  @endif
                </tbody>
              </table>
              <h3 class="container text-white">Historial de préstamos</h3>
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">Título</th>
                    <th scope="col">Autor</th>
                    <th scope="col">Prestado</th>
                    <th scope="col">Devuelto</th>
                  </tr>
                </thead>
                <tbody>
                @if(isset($error))
                    <div class="alert alert-danger">
                        {{ $error }}
                    </div>
                @else
                <!-- Mostrar los préstamos aquí si existen -->
                @foreach ($historialPrestamos as $historialPrestamo)
                <!-- Mostrar información del préstamo -->
                  <tr>
                    <th scope="row">{{ $historialPrestamo-> titulo}}</th>
                    <td>{{ $historialPrestamo-> autor}}</td>
                    <td>{{ $historialPrestamo-> fecha_inicio->format('d/m/Y') }}</td>
                    <td>{{ $historialPrestamo-> deleted_at->format('d/m/Y') }}</td>
                  </tr>
                  @endforeach
                  @endif
                </tbody>
              </table>
        </section>
      </div>
    </div>
    <div class="tab-pane fade" id="contact-tab-pane" role="tabpanel" aria-labelledby="contact-tab" tabindex="0">
      <div class="container ficha">
        <section class="ficha-principal bg-white">
            <h3 class="container text-white">Reservas</h3>
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">Título</th>
                    <th scope="col">Autor</th>
                    <th scope="col">Prestado</th>
                    <th scope="col">Termino</th>
                  </tr>
                </thead>
                <tbody>
                @if(isset($error))
                    <div class="alert alert-danger">
                        {{ $error }}
                    </div>
                @else
                <!-- Mostrar los préstamos aquí si existen -->
                @foreach ($prestamos as $prestamo)
                <!-- Mostrar información del préstamo -->
                  <tr>
                    <th scope="row">{{ $prestamo-> titulo}}</th>
                    <td>{{ $prestamo-> autor}}</td>
                    <td>{{ $prestamo-> fecha_inicio->format('d/m/Y') }}</td>
                    <td>{{ $prestamo->fecha_termino->format('d/m/Y') }}</td>
                  </tr>
                  @endforeach
                  @endif
                </tbody>
              </table>
              <h3 class="container text-white">Listos para recoger</h3>
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">Título</th>
                    <th scope="col">Autor</th>
                    <th scope="col">Prestado</th>
                    <th scope="col">Devuelto</th>
                  </tr>
                </thead>
                <tbody>
                @if(isset($error))
                    <div class="alert alert-danger">
                        {{ $error }}
                    </div>
                @else
                <!-- Mostrar los préstamos aquí si existen -->
                @foreach ($historialPrestamos as $historialPrestamo)
                <!-- Mostrar información del préstamo -->
                  <tr>
                    <th scope="row">{{ $historialPrestamo-> titulo}}</th>
                    <td>{{ $historialPrestamo-> autor}}</td>
                    <td>{{ $historialPrestamo-> fecha_inicio->format('d/m/Y') }}</td>
                    <td>{{ $historialPrestamo-> deleted_at->format('d/m/Y') }}</td>
                  </tr>
                  @endforeach
                  @endif
                </tbody>
              </table>
        </section>
      </div>
    </div>
    <div class="tab-pane fade" id="sanciones-tab-pane" role="tabpanel" aria-labelledby="sanciones-tab" tabindex="0">
      <div class="container info-user">
        <section class="info-user-contenido bg-white">
            <h3 class="container text-white">Sanciones</h3>
            <h5 class="mt-5" style="margin-left:2rem;"><span style="font-weight:bold;">¿Bloqueado actualmente?: </span>
              @if($mostrar_sanciones-> dias_mora > 0)
              Si
              @else
              No
              @endif 
            </h5>
            <h5 class="mt-2" style="margin-left:2rem;"><span style="font-weight:bold;">Dias de atraso: </span>{{$mostrar_sanciones-> dias_mora}}</h5>
            <h5 class="mt-2" style="margin-left:2rem;"><span style="font-weight:bold;">Valor a pagar: </span>${{$mostrar_sanciones-> valor}} CLP</h5>
        </section>
        <aside class="card estado2">
          <h5 class="mt-2">Su estado: 
            @if ($mostrar_sanciones-> dias_mora > 0)
            Bloqueado
            @else
            Ok
            @endif
          </h5>
          <h5 class="sanciones">Sanciones</h5>
          <p class="debido">Total debido: ${{ $mostrar_sanciones-> valor }} CLP</p>
          @if ($mostrar_sanciones-> dias_mora > 0)
          <button onclick="window.location='{{ route('iniciar_compra') }}'" class="btn btn-primary">Pagar</button>
          @endif
      </aside>
      </div>
    </div>
  </div>
<!-- Fin sección 2 -->



@endsection

