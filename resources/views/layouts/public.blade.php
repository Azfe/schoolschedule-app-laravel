<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Calendario Escolar</title>
        <link rel="stylesheet" type="text/css" href="{{ asset('css/styles.css') }}">
    </head>
    <body>
        <!-- HEADER -->
        <header id="header">
            <!-- LOGO -->
            <div id="logo">
                <a href="{{ url('/') }}">
                    <h1>Aplicación de Creación de Horario Escolar</h1>
                </a>
            </div>

            <!-- MENU -->
            <nav id="menu">
                <ul>
                    <li><a href="{{ url('/') }}">Inicio</a></li>
                    <li><a href="{{ route('register') }}">Registrarse</a></li> 
                    <li><a href="{{ route('login') }}">Login</a></li>
                </ul>            
            </nav> 

            <div class="clearfix"></div>
        </header>

        <!--CUERPO-->
        <div id="container">

            @yield('content')

        </div>

        <!--FOOTER-->
        <footer id="footer">
            <p>Desarrollado por PHPend &copy; 2020</p>
        </footer>
     
    </body>
</html>