@extends('layouts/app')

@section('content')
    <div style="background-image:url('{{ asset('fondosaga.JPG') }}')">
        <div class="content pt-5">
            <div class="container mt-5">    
                <div class="mx-auto" style="width: 300px;">
                    <form class="form" method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="card card-login card-hidden">
                            <div class="card-header ">
                                <h3 class="header text-center">{{ __('Iniciar Sesión') }}</h3>
                            </div>
  
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="email" class="col-md-6 col-form-label">{{ __('Correo Electrónico') }}</label>
            
                                        <div class="col-md-14">
                                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email', 'ejemplo@gmail.com') }}" required autocomplete="email" autofocus>
            
                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label for="password" class="col-md-6 col-form-label">{{ __('Contraseña') }}</label>
                
                                            <div class="col-md-14">
                                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" value="{{ old('password', 'secret') }}" required autocomplete="current-password">
                
                                                @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="form-check">
                                                <label class="form-check-label d-flex align-items-center">
                                                    <input class="form-check-input" type="checkbox" name="remember"  id="remember">
                                                    <span class="form-check-sign"></span>
                                                    {{ __('Recuerda mis datos') }}
                                                </label>
                                            </div>
                                        </div>
                                    
                                
                                        <div class="card-footer ml-auto mr-auto">
                                            <div class="container text-center" >
                                              <button type="submit" class="btn btn-primary">{{ __('Entrar') }}</button>
                                            </div>
                                                <div class="d-flex justify-content-between">
                                                    <a class="btn btn-link"  style="color:#23CCEF" href="{{ route('password.request') }}">
                                                        {{ __('Oldivó su Contraseña?') }}
                                                    </a>
                                                </div>
                                            </div>    
                                        </div>
                                    </div>
                            
                                </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection