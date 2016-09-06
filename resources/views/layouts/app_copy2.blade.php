<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}

    <link rel="stylesheet" href="assets/css/bootstrap.css" >
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/camera.css">
    
    <style>
        body {
            font-family: 'Lato';
        }

        .fa-btn {
            margin-right: 6px;
        }
    </style>
</head>
<body id="app-layout">


    <!--==============================header=================================-->
    <header id="header">
        <div class="container">
            <h1 class="navbar-brand navbar-brand_"><a href="index.html">
                <img alt="Grill point" src="assets/img/trader_logo.png"></a>
            </h1>
            <h2 class="navbar-brand-right">
                @if (Auth::guest())
                    <a href="{{ url('/login') }}" class="login">Login</a> | <a href="{{ url('/register') }}" class="login">register</a>
                @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->first_name . ' ' . Auth::user()->last_name }} <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="/auth/logout">Logout</a></li>
                        </ul>
                    </li>
                @endif
            </h2>
        </div>
        <div class="menuheader">
            <div class="container">
                <nav class="navbar navbar-default navbar-static-top tm_navbar" role="navigation">
                    <ul class="nav sf-menu">
                      <li class="active"><a href="/">home</a>
                        <ul>
                          <li><img src="assets/img/arrowup.png" alt=""><a href="#">info</a></li>
                          <li><a href="#">profile</a></li>
                          <li><a class="last" href="#">news</a>
                            <ul>
                               <li><a href="#">fresh</a></li>
                               <li><a class="last" href="#">archive</a></li>                       
                            </ul>
                          </li>
                        </ul>
                      </li>
                      <li><a href="{{ url('/about_me') }}">about me</a></li>
                      <li><a href="index-3.html">links</a></li>
                      <li><a href="index-4.html">location</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>

    <!--==============================Login Form=================================-->
    @yield('content')

    <!-- JavaScripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
</body>
</html>