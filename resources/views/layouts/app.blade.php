<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title')</title>
    <meta charset="utf-8">    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="assets/img/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon" />
    <meta name = "format-detection" content = "telephone=no" />
    <meta name="description" content="Your description">
    <meta name="keywords" content="Your keywords">
    <meta name="author" content="Your name">
    <link rel="stylesheet" href="assets/css/bootstrap.css" >
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/camera.css">
    
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/jquery-migrate-1.2.1.js"></script>
    <script src="assets/js/superfish.js"></script>
    <script src="assets/js/jquery.mobilemenu.js"></script>
    <script src="assets/js/jquery.easing.1.3.js"></script>
    <script src="assets/js/jquery.ui.totop.js"></script>
    <script src="assets/js/jquery.touchSwipe.min.js"></script>
    <script src="assets/js/jquery.equalheights.js"></script>
    
         
    <script src='assets/js/camera.js'></script>
    <!--[if (gt IE 9)|!(IE)]><!-->
        <script src="assets/js/jquery.mobile.customized.min.js"></script>
    <!--<![endif]-->
    
    <script>  
        $(window).load( function(){ 
            
             jQuery('.camera_wrap').camera();  
               
        });
    </script>
    
    
    <!--[if lt IE 9]>
    <div style='text-align:center'><a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode"><img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." /></a></div>  
    <link rel="stylesheet" href="assets/tm/css/tm_docs.css" type="text/css" media="screen">
    <script src="assets/assets/js/html5shiv.js"></script> 
    <script src="assets/assets/js/respond.min.js"></script>
  <![endif]-->
</head>

<body>
<!--==============================header=================================-->
<header id="header">
      <div class="container">
        <h1 class="navbar-brand navbar-brand_"><a href="{{ url('/') }}" class="nav_title">Trader-Brews</a><!-- <img alt="Grill point" src="assets/img/trader_logo.png"> --></h1>
      </div>
      <div class="menuheader">
          <div class="container">
            <nav class="navbar navbar-default navbar-static-top tm_navbar" role="navigation">
                <ul class="nav sf-menu">
                  <li class="{{ Request::is('/') ? "active" : "" }}"><a href="/">home</a>
                   <!--  <ul>
                      <li><img src="assets/img/arrowup.png" alt=""><a href="#">info</a></li>
                      <li><a href="#">profile</a></li>
                      <li><a class="last" href="#">news</a>
                        <ul>
                           <li><a href="#">fresh</a></li>
                           <li><a class="last" href="#">archive</a></li>                       
                        </ul>
                      </li>
                    </ul> -->
                  </li>
                  <li class="{{ Request::is('about_me') ? "active" : "" }}"><a href="{{ url('/about_me') }}">about me</a></li>
                  <li class="{{ Request::is('profile') ? "active" : "" }}"><a href="{{ url('/profile') }}">Profile</a></li>
                  <li class="{{ Request::is('cellar') ? "active" : "" }}"><a href="{{ url('/cellar') }}">Cellar</a></li>
                  <li class="{{ Request::is('search') ? "active" : "" }}"><a href="{{ url('/search') }}">Search</a></li>
                </ul>
                <h2 class="navbar-brand-right login">
                    @if (Auth::guest())
                        <a href="{{ url('/login') }}" class="login">Login</a> | <a href="{{ url('/register') }}" class="login">register</a>
                    @else
                      {{ Auth::user()->name}}| <a href="{{ url('/auth/logout') }}" class="login">Logout</a>
                    @endif
                </h2>
            </nav>            
          </div>
      </div>
</header>
<!--==============================content=================================-->
@yield('content')

<!--==============================footer=================================-->
<footer>
    <div class="container">
        <div class="row">
            <!-- <div class="col-lg-4 col-md-4 col-sm-4 footercol">
                <ul class="social_icons clearfix">
                     <li><a href="#"><img src="assets/img/follow_icon1.png" alt=""></a></li>
                     <li><a href="#"><img src="assets/img/follow_icon2.png" alt=""></a></li>
                     <li><a href="#"><img src="assets/img/follow_icon3.png" alt=""></a></li>
                     <li><a href="#"><img src="assets/img/follow_icon4.png" alt=""></a></li>
                </ul>
            </div> -->
            <div class="col-lg-6 col-md-6 col-sm-6 footercol">
                <p class="footerpriv">&copy; 2016 &bull;Trader-Brews</p>
            </div>
        </div>
    </div>
</footer>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/tm-scripts.js"></script>
</body>
</html>

<!-- Modal is called here -->
@yield('modal')