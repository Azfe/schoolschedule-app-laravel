@extends('layouts.public')
@section('content')

@section('content')
<div class="main-box-2">
    <div class="block-aside">
        
        <h3>Formulario alta estudiante</h3>
        
        <form action="{{ route('register.save') }}" method="POST" >
        @csrf

        <div class="form-group row">
            <label for="username" class="col-md-4 col-form-label text-md-right">{{ __('Nombre de usuario') }}</label>

            <div class="col-md-6">
                <input id="username" type="text" class="form-control @error('Username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus>

                @error('username')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nombre') }}</label>

            <div class="col-md-6">
                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="surname" class="col-md-4 col-form-label text-md-right">{{ __('Apellidos') }}</label>

            <div class="col-md-6">
                <input id="surname" type="text" class="form-control @error('surname') is-invalid @enderror" name="surname" value="{{ old('name') }}" required autocomplete="new-surname" autofocus>

                @error('surname')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Email') }}</label>

            <div class="col-md-6">
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="pass" class="col-md-4 col-form-label text-md-right">{{ __('Contraseña') }}</label>

            <div class="col-md-6">
                <input id="pass" type="password" class="form-control @error('pass') is-invalid @enderror" name="pass" required autocomplete="new-pass">

                @error('pass')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="pass-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirmar Contraseña') }}</label>

            <div class="col-md-6">
                <input id="pass-confirm" type="password" class="form-control" name="pass_confirmation" required autocomplete="new-pass">
            </div>
        </div>

        <div class="form-group row">
            <label for="telephone" class="col-md-4 col-form-label text-md-right">{{ __('Teléfono') }}</label>

            <div class="col-md-6">
                <input id="telephone" type="text" class="form-control" name="telephone" required autocomplete="new-telephone">
            </div>
        </div>

        <div class="form-group row">
            <label for="nif" class="col-md-4 col-form-label text-md-right">{{ __('NIF') }}</label>

            <div class="col-md-6">
                <input id="nif" type="text" class="form-control" name="nif" required autocomplete="new-nif">
            </div>
        </div>        

        <!--Botón de registro yllamada a la acción con link al formulario de login-->
        <div class="form-group row mb-0">
            <div class="col-md-6 offset-md-4">
                <input type="submit" name="submit" value="Registrar" />
                <br/>
                <p>¿Ya tienes una cuenta? <a href="{{ route('login.index') }}">Iniciar sesión</a>  
            </div>
        </div>
        </form>
    </div>
</div>

@endsection
