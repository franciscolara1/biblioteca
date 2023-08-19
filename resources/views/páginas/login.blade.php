@extends('index')


@section('login')
    <div >
        <form >
            <div >
                <label for="exampleInputEmail1" class="form-label">Direccion de correo</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="col-md-auto">
                <label for="exampleInputPassword1" class="form-label">Contraseña</label>
                <input type="password" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Recordarme</label>
            </div>
            <button type="submit" class="btn btn-primary">Iniciar sesion</button>
        </form>
    </div>
@endsection
