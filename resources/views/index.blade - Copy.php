<!DOCTYPE html>
<html lang="en">
<head>
    <title>Home</title>
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
        <h1 class="navbar-brand navbar-brand_"><a href="{{ url('/') }}"><img alt="Grill point" src="assets/img/trader_logo.png"></a></h1>
        <h2 class="navbar-brand-right"><a href="{{ url('/login') }}" class="login">Login</a> | <a href="{{ url('/register') }}" class="login">register</a></h2>
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
<!--==============================content=================================-->
<div id="content">

    <!--==============================slider=================================-->
    <div class="slider">
        <div class="camera_wrap">
          <div data-src="assets/img/beer1.jpg"></div>
          <div data-src="assets/img/beer2.jpg"></div>
          <div data-src="assets/img/beer3.jpg"></div>
        </div>
    </div>
    <!--==============================row1=================================-->
    <div class="row_1">
        <div class="container">
            <p class="title1">Welcome To Trader-Brews!</p>
            <p class="title2">Trader-Brews is all about trading for that elusive beer that you can't get locally. As you probably already know, most local breweries only distribute in their local area. If you want those beers you usually have to travel a long distance to get them. That's not practical for most people. That's where Trader-Brews comes in. With Trader-Brews, once you create an account, you can create a cellar of the beers you have for trade and then search the cellar of other users for the beers you want to trade for. It's up to the users how they want to do the trade - in person or though shipping. Sign up for an account and get started searching for those elusive beers.</p>
            <a href="#" class="btn btn-default btn-lg btn1">more</a>
        </div>
    </div>
    <!--==============================row2=================================-->
    <div class="row_2">
        <div class="container">
            <div class="row">
                <ul class="list1">
                    <li class="col-lg-4 col-md-4 col-sm-4 listbox1">
                        <div class="box1">
                            <a href="#">
                                <figure><img src="assets/img/page1_img1.jpg" alt=""></figure>
                                <p>Women</p>
                            </a>
                        </div>
                    </li>
                    <li class="col-lg-4 col-md-4 col-sm-4 listbox2">
                        <div class="box2">
                            <a href="#">
                                <p>Men</p>
                                <figure><img src="assets/img/page1_img2.jpg" alt=""></figure>
                            </a>
                        </div>
                    </li>
                    <li class="col-lg-4 col-md-4 col-sm-4 listbox3">
                        <div class="box3">
                            <a href="#">
                                <figure><img src="assets/img/page1_img3.jpg" alt=""></figure>
                                <p>Children</p>
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!--==============================row3=================================-->
    <div class="row_3">
        <div class="container">
            <div class="row">
                <ul class="list3">
                    <li class="col-lg-6 col-md-6 col-sm-6">
                        <div class="box4">
                            <figure><img src="assets/img/page1_img4.jpg" alt=""></figure>
                            <div class="info1 maxheight">
                                <p class="list3title1">Nature</p>
                                <p class="list3title2">Migytafsas deuauyt asares</p>
                                <p class="list3title3">Kictaesaert asetyertya aset aplicibrdedas.</p>
                                <a href="#" class="btn-link btn-link1">learn more<span></span></a>
                            </div>
                        </div>
                    </li>
                    <li class="col-lg-6 col-md-6 col-sm-6">
                        <div class="box4">
                            <figure><img src="assets/img/page1_img5.jpg" alt=""></figure>
                            <div class="info1 maxheight">
                                <p class="list3title1">Cities</p>
                                <p class="list3title2">Btreasas lisemeyta siqades</p>
                                <p class="list3title3">Kictaesaert asetyertya aset aplicibrdedas.</p>
                                <a href="#" class="btn-link btn-link1">learn more<span></span></a>
                            </div>
                        </div>
                    </li>
                    <li class="col-lg-6 col-md-6 col-sm-6">
                        <div class="box4">
                            <figure><img src="assets/img/page1_img6.jpg" alt=""></figure>
                            <div class="info1 maxheight">
                                <p class="list3title1">Portraits</p>
                                <p class="list3title2">Dolore nuyfasa kerytertas</p>
                                <p class="list3title3">Kictaesaert asetyertya aset aplicibrdedas.</p>
                                <a href="#" class="btn-link btn-link1">learn more<span></span></a>
                            </div>
                        </div>
                    </li>
                    <li class="col-lg-6 col-md-6 col-sm-6">
                        <div class="box4">
                            <figure><img src="assets/img/page1_img7.jpg" alt=""></figure>
                            <div class="info1 maxheight">
                                <p class="list3title1">Fashion</p>
                                <p class="list3title2">Fertyuasa mietyas lteasas</p>
                                <p class="list3title3">Kictaesaert asetyertya aset aplicibrdedas.</p>
                                <a href="#" class="btn-link btn-link1">learn more<span></span></a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!--==============================row4=================================-->
    <div class="row_4">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-4 chef row4_col">
                    <h2>About Me</h2>
                    <figure><img src="assets/img/page1_img8.jpg" alt=""></figure>
                    <p class="title3">Vivamus eget</p>
                    <p>Vitaesaert asetyertya asetrde maeciegast nieri vrtye remiad.Molirnatur aut oditaut. onsq ntmagni dolores eo qui ratione. </p>
                    <p class="m_bot1">Nasgaesaert asetyertya asetrde maeciegast nieriti vrtye remiades.Molirnatur aut oditaut.</p>
                    <a href="#" class="btn-link btn-link2">read more<span></span></a>
                </div>
                <div class="col-lg-offset-1 col-md-offset-1 col-sm-offset-1 col-lg-3 col-md-3 col-sm-3 row4_col">
                    <h2>Latest Services</h2>                        
                    <ul class="list2">
                        <li><a href="#">muygasa kausyse</a></li>
                        <li><a href="#">nuyatsas lasras batsas </a></li>
                        <li><a href="#">kiaustyas</a></li>
                        <li><a href="#">batresa ksate</a></li>
                        <li><a href="#">Grerhasa mero</a></li>
                        <li><a href="#">Lanytadas nyats</a></li>
                        <li><a href="#">nuyatsas lasras batsas</a></li>
                        <li><a href="#">batresa </a></li>
                    </ul> 
                </div>
                <div class="col-lg-offset-1 col-md-offset-1 col-sm-offset-1 col-lg-3 col-md-3 col-sm-3 locations row4_col">
                    <h2>Locations</h2>
                    <figure><img src="assets/img/smalllogo1.png" alt=""></figure>
                    <p class="title4">28 Jackson Blvd Ste 1020<br>Chicago<br>IL 60604-2340</p>
                    <hr class="line1">
                    <a href="#" class="btn-link btn-link3"><span></span>info@demolink.org</a>
                </div>
            </div>
        </div>
    </div>
</div>
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