@extends('layouts.public')

@section('content')
    
    <div id="main-box-2">
        <div id="login" class="block-aside">
            <h3>Inicia sesión</h3>
                
            <form action="{{ route('login.log') }}" method="POST">

                @csrf

                <label for="email">Email</label>
                <input type="email" name="email">

                <label for="password">Contraseña</label>
                <input type="password" name="pass">

                <input type="submit" value="Entrar">    

                <br/>
                <!--Llamada a la acción y link al formulario de registro de estudiantes-->
                <p>¿Aún no tienes una cuenta? <a href="register.php">Regístrate</a>             
            </form>
        </div>
    </div>

@endsection