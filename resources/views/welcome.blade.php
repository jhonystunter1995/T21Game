<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>T21Game</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
*{
    box-sizing: border-box;
}
body{
    margin: 0;
    background-color: #f5f6fa;
    font-size: 22px;
    line-height: 1.5;
    font-family: 'Roboto', sans-serif;
    overflow-x: hidden;
}
.v-header{
    height: 100vh;
    display: flex;
    align-items: center;
}

.container{
    max-width: 49rem;
    padding-left: 1rem;
    padding-right: 1rem;
    margin: auto;
    text-align: center;
}

.fullscreen-video-wrap{
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100vh;
    overflow: hidden;
}
.fullscreen-video-wrap video{ 
    min-width: 100%;
    min-height: 100%;
}
.header-overlay{
    height: 100vh;
    width: 100vw;
    position: absolute;
    top: 0;
    left: 0;
    background: #8998AC;
    z-index: 1;
    opacity: .75;
}
            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                text-align: center;
                left: calc(55% - 250px);
                top: calc(30% - 119px);
                
            }

            .position-ref {
                position: absolute;
                z-index: 2;
                
            }

            .top-right {
                position: absolute;
                right: 38%;
                top: 0;
            }

            .content {
                font-size: 24px;
                margin-bottom: 0;
                text-decoration: none !important;
                align-items: center;
                text-align: center;

            }

            .title {
                font-size: 84px;
                margin-bottom: 0;
            }

            .links > a {
                color: #f5f500 !important;
                display: block;
                font-size: 1.2em;
                padding: 12px 16px;
                text-decoration: none !important;
                text-align: center;
            }
            .links > i{
                margin-right: 8px;
            }    

            .m-b-md {
                margin-bottom: 30px;
                text-align: center;
                align-items: center;
                
            }
        </style>
    </head>
    <body>
        {{-- VIDEO DE FONDO --}}
    <header class="v-header container">
        <div class="fullscreen-video-wrap">
            <video src="static/images/intro3.mp4" autoplay muted loop></video>
        </div>

        <div class="header-overlay"></div>

        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    T21Game
                </div>

                <div class="links">
                    <a href="{{ url('/admin') }}"><i class="fas fa-chalkboard"></i> Dashboard</a>
                </div>
            </div>
        </div>
    </header>   
    </body>
</html>
