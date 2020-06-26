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
            
    </head>
    <body>

        <div class="wrapper">
            <div class="col1">@include('admin.sidebar')</div>
            <div class="col2"></div>
        </div>

    </body>
</html>

