@extends('index')

@section('prestamo')
<header style="position:relative;top:10rem;text-align:center">
  <h1 >Gestión de Alumno</h1>
 <p class="text-muted">En el siguiente panel puedes ver tus préstamos, tus sanciones y tus reservas.<br>
Recuerda que debes devolver el libro para que no te siga aumentando el monto de sanción.</p>
</header>
<section class="tabs">
  <ul class="nav nav-tabs" id="myTab" role="tablist">
    <li class="nav-item" role="presentation">
      <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">Información Alumno</button>
    </li>
    <li class="nav-item" role="presentation">
      <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">Préstamos</button>
    </li>
    <li class="nav-item" role="presentation">
      <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact-tab-pane" type="button" role="tab" aria-controls="contact-tab-pane" aria-selected="false">Reservas</button>
    </li>
    <li class="nav-item" role="presentation">
      <button class="nav-link" id="sanciones-tab" data-bs-toggle="tab" data-bs-target="#sanciones-tab-pane" type="button" role="tab" aria-controls="sanciones-tab-pane" aria-selected="false">Sanciones</button>
    </li>
  </ul>
</section>
  <div class="tab-content" id="myTabContent">
    <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
    </div>
    <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
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
        <aside class="card estado">
            <h5 class="mt-2">Su estado:</h5>
            <h5 class="sanciones">Sanciones</h5>
            <p class="debido">Total debido:</p>
        </aside>
      </div>
    </div>
    <div class="tab-pane fade" id="contact-tab-pane" role="tabpanel" aria-labelledby="contact-tab" tabindex="0">...</div>
    <div class="tab-pane fade" id="sanciones-tab-pane" role="tabpanel" aria-labelledby="sanciones-tab" tabindex="0">...</div>
  </div>



@endsection

