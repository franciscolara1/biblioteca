@extends('index')

@section('prestamo')

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
    </section>
    <aside class="card estado">
        <h5 class="mt-2">Su estado:</h5>
        <h5 class="sanciones">Sanciones</h5>
        <p class="debido">Total debido:</p>
    </aside>
</div


@endsection

