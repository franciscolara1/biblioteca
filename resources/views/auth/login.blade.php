@extends('index')


@section('login')
    <div>
        <div class="container" style="padding-top: 10rem;">
            <div class="row m-7 no-gutters shadow-lg">
                <div class="col-md-6 d-none d-md-block">
                    <img src="https://strauss.cl/wp-content/uploads/2019/10/duocweb4.jpg" width="1000" height="800"/>
                </div>
                <div class="col-md-6 bg-white p-5">
                    <div class="pb-3">{{ __('Login') }}</div>
                    <div class="form-style">                        
                </div>
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="form-group pb-3">
                        <div>
                            <label for="email" >{{ __('Email Address') }}</label>
                        </div>
                        
                        <div class="col-md-10">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group pb-3">
                        <div>
                            <label for="password" class="">{{ __('Password') }}</label>
                        </div>
                        <div class="col-md-10">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group pb-3">
                        <div class="form-group pb-3">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                <label class="form-check-label" for="remember">
                                    {{ __('Remember Me') }}
                                </label>
                                <br>
                                <a href="{{url('/register')}}">No tiene cuenta? cree una aca!</a>
                            </div>
                        </div>
                    </div>
                    <div class="form-group pb-3">
                        <div class="pb-2">
                            <button type="submit" class="btn btn-dark w-100 font-weight-bold mt-2 boton-inicio-sesion">
                                {{ __('Login') }}
                            </button>
                            @if (Route::has('password.request'))
                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                            @endif
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>



@endsection
