<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Calendario Escolar</title>
        <link rel="stylesheet" type="text/css" href="{{ asset('css/styles.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/styleAdmin.css') }}">
    
    </head>
    <body>
        <!-- HEADER -->
        <header id="header">
            <!-- LOGO -->
            <div id="logo">
                <a href="{{ route('home') }}">
                    <h1>Aplicación de Creación de Horario Escolar</h1>
                </a>
            </div>

            <!-- MENU -->
            <nav id="menu">
                <ul>
                    <li>
                        <a href="{{ route('profe.index') }}">Profesores</a>
                    </li>  
                    <li>
                        <a href="">Asignaturas</a>
                    </li>
                    <li>
                        <a href="">Cursos</a>
                    </li>
                    <li>
                        <a href="">Horarios</a>
                    </li>
                    <li>
                        <a href="">Salir</a>
                    </li>
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
