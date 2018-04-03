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
  <link rel="stylesheet" type="text/css" href="{{asset('css/style2.css')}}">
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

@yield('js')

</body>
</html>