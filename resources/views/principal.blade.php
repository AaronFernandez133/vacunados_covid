<!DOCTYPE html>
<html lang="es">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="Sistema Ventas Laravel Vue Js">
        <meta name="author" content="">
        <meta name="keyword" content="Sistema ventas Laravel Vue Js, Sistema compras Laravel Vue Js">
        <link rel="shortcut icon" href="img/favicon.png">
        <title>Sistema Reportes Vacunas </title>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link href="css/plantilla.css" rel="stylesheet">

    </head>

    <body class="app header-fixed sidebar-fixed aside-menu-fixed aside-menu-hidden">

        <div id="app">
            <header class="app-header navbar">
                <button class="navbar-toggler mobile-sidebar-toggler d-lg-none mr-auto" type="button">
                <span class="navbar-toggler-icon"></span>
                </button>
                <a class="navbar-brand" href="#"></a>
                <button class="navbar-toggler sidebar-toggler d-md-down-none" type="button">
                <span class="navbar-toggler-icon"></span>
                </button>
                <ul class="nav navbar-nav d-md-down-none">
                    <li class="nav-item px-3">
                        <a class="nav-link" href="#">PANEL VACUNADOS COVID</a>
                    </li>
                </ul>
                <ul class="nav navbar-nav ml-auto">
                    
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                            <span class="d-md-down-none">{{Auth::user()->name}} </span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <div class="dropdown-header text-center">
                                <strong>Cuenta</strong>
                            </div>
                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            <i class="fa fa-lock"></i> Cerrar sesión</a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                            
                        </div>
                    </li>
                </ul>
            </header>

            <div class="app-body">
                @include('plantilla.sidebar')
                @yield('contenido')
            </div>   

        </div>

        <script src="js/app.js"></script>
        <script src="js/plantilla.js"></script>
        
    </body>


</html>