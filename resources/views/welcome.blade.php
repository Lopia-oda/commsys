<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>CommunicationSystem</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
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
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        @if (Route::has('login'))
            @auth
                <div class="position-ref full-height">
                    <div class="top-right links">
                        <a href="{{ url('/home') }}">ホーム</a>
                    </div>
                    <div class="text-left">
                        <img src="img/system/lopita.jpg" class="img-rounded">
                        お知らせ
                    </div>
                    <div class="content">
                        <div class="container">
                            <div class="row">
                                <div class="flex-center position-ref">
                                    ただいま重要なお知らせはございません
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @else
                <div class="flex-center position-ref full-height">
                    <div class="top-right links">
                        <a href="{{ route('login') }}">ログイン</a>
                        <!--<a href="{{ route('register') }}">Register</a>-->
                    </div>
                    <div class="content">
                        <img src="img/system/logo.jpg" class="img-rounded"><br>
                        LopiaCommunicationSystem
                    </div>
                </div>
            @endauth
        @endif
    </body>
</html>
