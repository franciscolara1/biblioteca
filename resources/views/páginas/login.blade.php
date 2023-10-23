@extends('index')


@section('login')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css">
<script src="https://use.fontawesome.com/f59bcd8580.js"></script>
<div class="container">
    <div class="row m-7 no-gutters shadow-lg">
        <div class="col-md-6 d-none d-md-block">
            <img src="https://strauss.cl/wp-content/uploads/2019/10/duocweb4.jpg" width="1000" height="800"/>
        </div>
        <div class="col-md-6 bg-white p-5">
            <h3 class="pb-3">Iniciar Sesion</h3>
            <div class="form-style">
                <form>
                    <div class="form-group pb-3">
                        <input type="email" placeholder="Email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="form-group pb-3">
                        <input type="password" placeholder="Password" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="d-flex align-items-center justify-content-between">
                        <div class="d-flex align-items-center"><input name="" type="checkbox" value="" /> <span class="pl-2 font-weight-bold">Recordar</span></div>
                        <div><a href="#">¿Olvidó su contraseña?</a></div>
                    </div>
                    <div class="pb-2">
                        <button type="submit" class="btn btn-dark w-100 font-weight-bold mt-2 boton-inicio-sesion">Iniciar sesion</button>
                    </div>
                </form>
                
            </div>
        </div>
    </div>
</div>

<footer id="custom-footer" class="">
    <div>
        <div>footer</div>
    </div>
</footer>

@endsection