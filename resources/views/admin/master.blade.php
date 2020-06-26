<!doctype html>
<html lang="en">
    <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <title>@yield('title')</title>
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

        {{-- LLAMADO DE CONTENEDOR SIDEBAR.. --}}
        <div class="wrapper">
            <div class="col1">@include('admin.sidebar')</div>
            <div class="col2"></div>
        </div>

    </body>
</html>

