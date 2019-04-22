<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="/css/imagehover.min.css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 50px;
            }
            
            .image {
                border-radius:20px;
                padding: 5px;
            }

            figcaption {
                padding: 122px 30px !important;
            }

            .desc {
                font-size: 30px;
                letter-spacing: .1rem;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            {{-- @if (Route::has('login'))
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
            @endif --}}

            <div class="content">
                <div class="title m-b-md">
                    Je suis un ...
                </div>

                <figure class="imghvr-push-up image" style="margin-right:100px;">
                    <img src="/img/client_icon.png">
                    <figcaption>
                        <span class="desc">Medecin</span>
                    </figcaption>
                    <a href="{{ route('medecin.register') }}"></a>
                </figure>
                <figure class="imghvr-push-up image">
                    <img src="/img/patient.png">
                    <figcaption>
                        <span class="desc">Patient</span>
                    </figcaption>
                    <a href="{{ route('patient.register') }}"></a>
                </figure>

                <div class="links" style="margin-top:50px;">
                    <a href="{{ route('login') }}">J'ai déjà un compte</a>
                </div>
            </div>
        </div>
    </body>
</html>
