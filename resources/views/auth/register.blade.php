@extends('layouts.app', ['activePage' => 'register', 'title' => 'SAGA'])

@section('content')
<div style="background-image:url('{{ asset('fondosaga.JPG') }}')">
        <div class="content">
            <div class="container">
                <div class="card card-register card-plain text-center">
                    <div class="card-body ">
                        <div class="row">
                            <div class="col-md-6 ml-auto">
                                <div class="media">
                                    <div class="media-left">
                                        <div class="icon">
                                            <i class="nc-icon nc-circle-09"></i>
                                        </div>
                                    </div>
                                    <div class="media-body">
                                        <h4>{{ __('Crear una Nueva Cuenta') }}</h4>
                                        <p>{{ __('Rellene el siguiente formulario correctamente con sus datos.') }}</p>
                                    </div>
                                    <div class="media-body">
                                        <h4>{{ __('Al Crear una Nueva Cuenta') }}</h4>
                                        <p>{{ __('Asegúrese de utilizar el formato recomendado para el registro. La contraseña debe tener, al menos, ocho (8) caracteres') }}</p>
                                    </div>
                                    <div class="media-body">
                                        <h4>{{ __('Atención:') }}</h4>
                                        <p>{{ __('Todos los campos son Requeridos..!!.') }}</p>
                                    </div>
                                    <div class="media-body">
                                        <h4>{{ __('Si ya tiene una Cuenta') }}</h4>
                                        <p>{{ __('Ingrese con su correo electrónico y contraseña al sistema SAGA en la sección "Entrar".') }}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 mr-auto">
                                <form method="POST" action="{{ route('register') }}">
                                    @csrf
                            
                                    <div class="row mb-3">
                                         <label for="cedula" class="col-md-4 col-form-label text-md-end">{{ __('Cédula') }}</label>

                                                <div class="col-md-6">
                                                <input id="cedula" type="text" class="form-control @error('cedula') is-invalid @enderror" name="cedula" value="{{ old('cedula') }}" placeholder="{{ ('ejemplo: V123456789') }}" required autocomplete="cedula" autofocus>

                                                    @error('cedula')
                                                        <span class="invalid-feedback" role="alert">
                                                         <strong>{{ $message }}</strong>
                                                         </span>
                                                    @enderror
                                                </div>
                                    </div>
                                    <div class="row mb-3">
                                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Apellidos y Nombres') }}</label>
                                                <div class="col-md-6">
                                                     <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" placeholder="{{ ('ejemplo: PEREZ R. JUAN A') }}" required autocomplete="name" autofocus>
                                                       @error('name')
                                                        <span class="invalid-feedback" role="alert">
                                                         <strong>{{ $message }}</strong>
                                                        </span>
                                                       @enderror
                                                </div>
                                    </div>

                                    <div class="row mb-3">
                                         <label for="phone" class="col-md-4 col-form-label text-md-end">{{ __('Teléfono') }}</label>

                                            <div class="col-md-6">
                                                 <input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" placeholder="{{ ('ejemplo: 0414-12345789') }}" required autocomplete="phone" autofocus>

                                                  @error('phone')
                                                    <span class="invalid-feedback" role="alert">
                                                     <strong>{{ $message }}</strong>
                                                    </span>
                                                 @enderror
                                            </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Correo Electrónico') }}</label>

                                            <div class="col-md-6">
                                                 <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="{{ ('ejemplo@gmail.com') }}" required autocomplete="email">

                                                @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                     <strong>{{ $message }}</strong>
                                                     </span>
                                                 @enderror
                                            </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Contraseña') }}</label>

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
                                         <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirmar Contraseña') }}</label>

                                        <div class="col-md-6">
                                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                        </div>
                                    </div>

                                    <div class="row mb-0">
                                            <div class="col-md-6 offset-md-4">
                                             <button type="submit" class="btn btn-primary">
                                               {{ __('Registrar') }}
                                            </button>
                                    </div>
                            </div>               
                                         
                
                        </form>
                    </div>
                                <div class="col">
                                    @foreach ($errors->all() as $error)
                                    <div class="alert alert-warning alert-dismissible fade show" >
                                        <a href="#" class="close" data-dismiss="alert" aria-label="close"> &times;</a>
                                        {{ $error }}
                                    </div>
                                @endforeach
                                </div>
                    </div>
            </div>
        </div>
</div>
        


@endsection
