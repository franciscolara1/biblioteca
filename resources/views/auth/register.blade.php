@extends('index')


@section('login')
<div >
    <section class="hero" >
        <div>
            <div>
                <div class="contenido-hero">
                    <div class="col-md-6 p-1 formulario-registro">
                        <h4 class="pb-5">{{ __('Registro de Usuario') }}</h4>
                        <div class="card-body">
                            <form method="POST" action="{{ route('register') }}">
                                @csrf
                                <div class="row mb-3">
                                    <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Nombre') }}</label>
                                    <div class="col-md-6">
                                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                        @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3"> 
                                    <label for="carrera" class="col-md-4 col-form-label text-md-end">{{ __('Escuela') }}</label>
                                    <div class="col-md-6">
                                        <select id="carrera" class="form-select col-md-6 " name="carrera" value="{{ old('carrera') }}" aria-label="Default select example">
                                            <option hidden>Selecccione su escuela</option>
                                            <option value="Escuela de Informática y Telecomunicaciones">Escuela de Informática y Telecomunicaciones</option>
                                            <option value="Escuela de Diseño">Escuela de Diseño</option>
                                            <option value="Escuela de Administración y Negocios">Escuela de Administración y Negocios</option>
                                            <option value="Escuela de Comunicación">Escuela de Comunicación</option>
                                            <option value="Escuela de Construcción">Escuela de Construcción</option>
                                            <option value="Escuela de Ingeniería">Escuela de Ingeniería</option>
                                            <option value="Escuela de Turismo">Escuela de Turismo</option>
                                            <option value="Escuela de Salud">Escuela de Salud</option>
                                            <option value="Escuela de Recursos naturales">Escuela de Recursos naturales</option>
                                        </select>
                                        @error('carrera')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email') }}</label>
                                    <div class="col-md-6">
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>
                                    <div class="col-md-6">
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>
                                    <div class="col-md-6">
                                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                    </div>
                                </div>
                                <div class="row mb-0">
                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-warning w-100 font-weight-bold mt-2 mb-5">{{ __('Registrarse') }}</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
