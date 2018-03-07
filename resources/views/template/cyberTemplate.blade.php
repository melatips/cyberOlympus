<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @yield('title')
  <link rel="shortcut icon" type="image/x-icon" href="{{asset('images/icon-2.png')}}"/>
  <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap-theme.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap-theme.min.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('css/font-awesome.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('css/font-awesome.min.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('css/owl.carousel.min.css')}}" >
  <link rel="stylesheet" type="text/css" href="{{asset('css/owl.theme.default.min.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('css/animate.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('css/stylesheet.css')}}">
<!--   <link rel="stylesheet" type="text/css" href="{{asset('css/style-360.css')}}"> -->
  <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">

  <!-- Include preloading -->
  <link rel="stylesheet" href="{{asset('css/normalize.css')}}">
  <link rel="stylesheet" href="assetcss/main.css">
  <script src="{{asset('js/modernizr-2.6.2.min.js')}}"></script>

  <!-- Include jQuery -->
  <script src="{{asset('js/jquery-2.1.1.min.js')}}"></script>
  <script src="{{asset('js/jquery.min.js')}}"></script>
  <script src="{{asset('js/bootstrap.js')}}"></script>
  <script src="{{asset('js/owl.carousel.min.js')}}"></script>

  <!-- Include textillate -->
  <script src="{{asset('js/jquery.fittext.js')}}"></script>
  <script src="{{asset('js/jquery.lettering.js')}}"></script>
  <script src="{{asset('js/jquery.textillate.js')}}"></script>

  <!-- Include lazylinepainter -->
  <script src="{{asset('js/jquery.lazylinepainter-1.7.0.js')}}"></script>
  <!--[if lt IE 9]>
  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
</head>
<body>

@yield('content')

<div class="clearfix"></div>
<footer id="footer">
    <div class="container">
      <div class="footer-main">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="col-md-4 col-sm-12 col-xs-12 footer">
            <a href="">About Cyber Olympus</a>
            <a href="#feature">Features</a>
            <a href="#step">How we do it</a>
          </div>
          <div class="col-md-4 col-sm-12 col-xs-12 footer">
            <a href="#showcase">Showcase</a>
            <a href="#contact">Contact Us</a>
            
          </div>
          <div class="col-md-4 col-sm-12 col-xs-12 footer">
            <a href="">Careers</a>
            <a href="">Blog</a>
          </div>
        </div>
      <div class="col-md-12 col-sm-12 col-xs-12 copy">
        Cyber Olympus Copyright 2018. All rights reserved.
      </div>

    </div>
    </div>
  </footer>

  @yield('js')

</body>
</html>