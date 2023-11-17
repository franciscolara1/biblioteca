@extends('index')

@section('admin')
<ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{ url('') }}">Volver</a></li>
    <li class="breadcrumb-item active" aria-current="page">Préstamos</li>
</ol>
<div class="container-fluid admin-container col-12">
  <h1 style="text-align: center">Panel Administrador</h1>
  <!-- Barra de búsqueda -->
  <div class="barra-busqueda col-6 mb-5">
    <form action="{{ route('admin')}}" method="get">
      <div class="input-group">
        <input class="form-control" type="search" name="nombre_texto" id="buscar" placeholder="Buscar por nombre de alumno...">
        <button class="btn btn-warning" type="submit" value="buscar"><i class="bi bi-search"></i></button>
      </div>
    </form>
  </div>
  @if(session('success'))
              <div id="successMessage" class="alert alert-success">
                  {{ session('success') }}
              </div>
  @endif
  <div class="d-flex align-items-start bg-white menu-admin">
      <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
        <button class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">Préstamos Alumnos</button>
        <button class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false">Sanciones</button>
          <button class="nav-link" id="v-pills-disabled-tab" data-bs-toggle="pill" data-bs-target="#v-pills-disabled" type="button" role="tab" aria-controls="v-pills-disabled" aria-selected="false" disabled>Disabled</button>
          <button class="nav-link" id="v-pills-messages-tab" data-bs-toggle="pill" data-bs-target="#v-pills-messages" type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false">Messages</button>
          <button class="nav-link" id="v-pills-settings-tab" data-bs-toggle="pill" data-bs-target="#v-pills-settings" type="button" role="tab" aria-controls="v-pills-settings" aria-selected="false">Settings</button>
        <!-- ... otras pestañas ... -->
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
                <th scope="col">Sancionar</th>
              </tr>
            </thead>
            <tbody>
              <!-- Mostrar los préstamos aquí si existen -->
              @forelse ($prestamos_alumnos as $prestamo)
              <!-- Mostrar información del préstamo -->
              <tr>
                <th scope="row">{{ $prestamo->id }}</th>
                <td>{{ $prestamo->titulo }}</td>
                <td>{{ $prestamo->fecha_inicio->format('d/m/Y') }}</td>
                <td>{{ $prestamo->fecha_termino->format('d/m/Y') }}</td>
                <td>
                  @if ($prestamo->deleted_at)
                      {{ $prestamo->deleted_at}}
                  @else
                      <form action="{{ route('marcar.devuelto', ['id' => $prestamo->id]) }}" method="post">
                          @csrf
                          @method('PUT')
                          <button type="submit" class="btn btn-success">Marcar como Devuelto</button>
                      </form>
                  @endif
                </td>
                <td>{{ $prestamo->id_user }}</td>
                <td>{{ $prestamo->name }}</td>
                <!-- ... otras columnas ... -->
                <td>
                  @if ($prestamo->sancion)
                      Sancionado
                      <form action="{{ route('agregar.sancion', ['id' => $prestamo->id]) }}" method="post">
                        @csrf
                        @method('PUT')
                        <button type="submit" class="btn btn-danger">Quitar sanción</button>
                      </form>
                  @else
                      <form action="{{ route('agregar.sancion', ['id' => $prestamo->id]) }}" method="post">
                          @csrf
                          @method('PUT')
                          <button type="submit" class="btn btn-danger">Sancionar</button>
                      </form>
                  @endif
                </td>
              </tr>
              @empty
              <tr>
                <td colspan="7">No se encontraron préstamos.</td>
              </tr>
              @endforelse
            </tbody>
          </table>
          <div style="margin-left:60%">
            {{ $prestamos_alumnos->links() }}
          </div>
        </div>
        <!-- ... otras pestañas ... -->
        <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab" tabindex="0">
          <table class="table">
            <thead>
              <tr>
                <th scope="col">Id reserva</th>
                <th scope="col">Nombre alumno</th>
                <th scope="col">Bloqueo</th>
                <th scope="col"></th>
                <th scope="col">Monto</th>
                <th scope="col">Ingresar Deuda</th>
                <th scope="col">Estado</th>
              </tr>
            </thead>
            <tbody>
              <!-- Mostrar los préstamos aquí si existen -->
              @forelse ($sanciones as $sancion)
              <!-- Mostrar información del préstamo -->
              <tr>
                <th scope="row">{{ $sancion->id }}</th>
                <td>{{ $sancion->name }}</td>
                <td>
                  @if($sancion->sancion == 1)
                  Si 
                  @else
                  No
                  @endif
                </td>
                <form action="{{ route('admin')}}" method="post">
                @csrf
                <input type="number" name="dias_restantes" value="{{ $sancion->dias_restantes }}" hidden>
                <input type="number" name="id_user" value="{{ $sancion->id_user }}" hidden>
                <input type="number" name="valor" value="{{ $sancion->dias_restantes * 100 }}" hidden>
                <td>
                  @if($sancion->deleted_at)
                      @if($sancion->dias_restantes >= 0)
                          <td style="color:red">${{ $sancion->dias_restantes * 100 }} CLP</td>
                      @else
                          <td>No tiene una multa</td>
                      @endif
                  @else
                      <td>No tiene una multa</td>
                  @endif 
                </td>
                <td>
                  @if ($sancion->deleted_at)
                    <button type="submit" class="btn btn-danger">Ingresar deuda</button>
                  @else
                    <td>No tiene deudas</td>
                  @endif
                </form>
                </td>
              </tr>
              @empty
              <tr>
                <td colspan="7">No se encontraron préstamos.</td>
              </tr>
              @endforelse
            </tbody>
          </table>
          <div style="margin-left:60%">
            {{ $sanciones->links() }}
          </div>
          <script>
            // Espera 5 segundos (5000 milisegundos) y luego oculta el mensaje
            setTimeout(function() {
                document.getElementById('successMessage').style.display = 'none';
            }, 5000); // 5000 milisegundos = 5 segundos
         </script>
        </div>
          <div class="tab-pane fade" id="v-pills-disabled" role="tabpanel" aria-labelledby="v-pills-disabled-tab" tabindex="0">...</div>
          <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab" tabindex="0">...</div>
          <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab" tabindex="0">...</div>
      </div>
  </div>
</div>

@endsection