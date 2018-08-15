<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

<<<<<<< HEAD
        <title>TRUST APP</title>
=======
        <title>TrustApp</title>
>>>>>>> 8016e6081fc2542b279207159161a1ec4e51c6d2

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-image: url("back3.png");
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
                color: #f5f5b2;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
                color: #f5f5b2;
                font-weight: lighter;
                font-variant: normal;
                font-family: cursive;
            }

            #footer {
                color: #f5f5b2;
                
                size: 20%;
                font-style: underline;
                font-family: cursive;
                
            }

            
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    TrustApp
                </div>

                <div class="links">
                    <a href="{{ url('/newapplicant') }}">NEW APPLICANT</a>
                    <a href="{{ url('/listapplicant') }}">APPLICANTS LIST</a>
                    <a href="{{ url('/bank') }}">BANKS</a>
                    <a href="{{ url('/saving') }}">SAVINGS</a>
                    <a href="{{ url('/transaction') }}">TRANSACTIONS</a>
                    <a href="https://laravel-news.com">AVAILABLE FUNDS</a>
                    <a href="https://forge.laravel.com">HELP</a>
                    <a href="https://github.com/laravel/laravel">ABOUT THE APP</a>
                </div>
                <br><br><br>
                <div id="footer">
                   
                    <br><br><br><br>
                    ______________________________________<br>
                    BAI MOTIBAI KASARA BAUG BORIVALI TRUST
                </div>
            </div>
        </div>
        <center>

    </center>
    </body>
</html>
