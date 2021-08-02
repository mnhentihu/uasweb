<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Krusty Krab</title>

        <!-- Styles -->
        <style>
       @font-face {
    font-family: krabby_patty;
    src: url('/krabby_patty.ttf');
}
            body {
                color: #ff0000;
                font-family: krabby_patty;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }
            .background {
                background-image : url("https://i.redd.it/bivk8d88ahu41.jpg");
                background-size: cover;
                opacity: 0.9;
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
                color: #ff0000;
                outline: 5px dotted yellow;
                padding: 0 25px;
                font-size: 40px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                font-family: krabby_patty;
                font-weight: bold;
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
    <div class= "background">
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
                    Met datang di Krusty Krab
                </div>

                <div class="links">
                    <a href="beranda">Beranda</a>
                    <a href="menu">Menu</a>
					<a href="promo">Promo</a>
					<a href="profil">Profil</a>
					<a href="layanan">Layanan</a>
                </div>
            </div>
        </div>
        </div>
    </body>
</html>
