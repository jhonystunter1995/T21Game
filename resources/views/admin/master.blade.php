<!doctype html>
<html lang="en">
    <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <title>@yield('title')- T21Game</title>
            <meta name="csrf-token" content="{{ csrf_token() }}">
            <meta name="routeName" content="{{ Route::currentRouteName() }}">
            
            <!-- Plantilla de bootstrap CSS.... -->
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

            <!--LLAMADO AL ARCHIVO CSS-->
            <link   rel="stylesheet" href="{{ url('/static/css/admin.css?v='.time()) }}">

            {{-- ESTILO DE LETRA ROBOTO --}}
            <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">

            {{-- FUENTE DE ICONOS --}}
            <script src="https://kit.fontawesome.com/cbe8f70722.js" crossorigin="anonymous"></script>

            {{-- LIBRERIA JQUERRY --}}
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

            {{-- LIBRERIA BOOTSTRAP DE JS --}}
            <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

            {{-- INICIADOR DE JQUERRY --}}
            <script>
                $(document).ready(function(){
                $('[data-toggle="tooltip"]').tooltip()
                });
            </script>
            
    </head>
    <body>
        {{-- VIDEO DE FONDO --}}
        <header class="v-header container">
            <div class="fullscreen-video-wrap">
              <video src="static/images/intro3.mp4" autoplay muted loop></video>
            </div>

            <div class="header-overlay"></div>

            {{-- LLAMADO DE CONTENEDOR SIDEBAR.. --}}
            <div class="wrapper">
                <div class="col1">@include('admin.sidebar')</div>
                
                {{-- BARRA DE NAVEGACION --}}
                <div class="col2">
                    <nav class="navbar navbar-expand-lg shadow">
                        <div class="collapse navbar-collapse">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a href="{{ url('/admin') }}" class="nav-link">
                                        <i class="fas fa-chalkboard"></i> Dashboard
                                    </a>
                                </li>
                            
                            </ul> 
                        </div>   
                    </nav>

                    <div class="page">
                        <div class="container-fluid">
                            <nav aria-label="breadcrumb shadow">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                    <a href="{{ url('/admin') }}"><i class="fas fa-chalkboard"></i> Dashboard</a>
                                    </li>
                                    @section('breadcrumb')
                                    @show
                                </ol>
                            </nav>
                        </div>

                        {{-- PANEL DE MENSAJES DE ERROR --}}
                        @if(Session::has('message'))
                          <div class="container-fluid">
                                <div class="alert alert-{{ Session::get('typealert') }} jump1"style="display:
                                    block; margin-bottom: 16px;">
                                    {{ Session::get('message') }}
                                    @if ($errors->any())
                                    <ul>
                                        @foreach($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                    @endif
                                    <script>
                                        $('.alert').slideDown();
                                        setTimeout(function(){ $('.alert').slideup(); }, 10000);
                                    </script>
                                </div>
                            </div>
                        @endif

                        {{-- LLAMADO DE LA PLANTILLA DASHBOARD.BLADE.PHP --}}
                        @section('content')
                        @show

                    </div>
                </div>
            </div>
        </header>
    </body>
</html>

