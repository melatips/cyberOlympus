<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @yield('title')
  <link rel="shortcut icon" type="image/x-icon" href="{{asset('images/icon-2.png')}}"/>
  <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap-theme.min.css')}}">
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
  <link rel="stylesheet" href="{{asset('css/main.css')}}">
  <script src="{{asset('js/modernizr-2.6.2.min.js')}}"></script>

  <!-- Include jQuery -->
  <script src="{{asset('js/jquery-2.1.1.min.js')}}"></script>
  <script src="{{asset('js/bootstrap.js')}}"></script>

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

<style type="text/css">
@media screen and (max-width: 1366px){
  .nav-bg{
    margin: 0;
    background: rgba(0, 0, 0, 0.7);
    width: 100%;
    position: fixed;
    z-index: 1000;
    padding: 0.5vw 5vw;
  }

  .logo-box{
    float: left;
  }

  .logo{
    margin: 0;
    position: absolute;
    top: 50%;
  }

  .logo-360{
    float: left;
    width: 20%;
  }

  .drop{
    right: 0;
    min-width: auto;
    margin-top: 3vh;
  }

  .drop a{
    text-align: center;
    display: block !important;
  }

  .navbar ul li a{
    display: inline-block;
    cursor: pointer;
    color: white;
    padding: 1.5vw;
    font-size: 16px;
    text-transform: uppercase;
  }

  .navbar ul{
    float: right;
    color: white;
    list-style: none;
    margin: 0;
  }

  .navbar-landing ul li, .navbar-landing ul li form{
    display: inline;
  }

  .navbar ul li a:hover{
    text-decoration: none;
    background-color: rgba(0,0,0, 0.1);
  }

  .navbar ul li a.icon-toggle{
    display: none;
  }

  .search-box-index{
    float: right;
  }

  .search-input{
    background-color: transparent;
    border-style: none;
    border-color: #333333;
    border-bottom-color: #333333;
    border-bottom: solid;
    width: 150px;
    padding: 20px 0 0;
    font-size: 14px;
  }

  .search-icon{
    background-color: transparent;
    border-style: none;
    margin: auto 5px;
  }

  .search-input:focus{
    color: white;
    border-color: white;
    transition: all .5s;
  }
}

@media screen and (max-width: 992px){
  .logo-360{
    margin: 10px 0;
  }

  .navbar ul li a, .search-input, .search-icon{
    display: none;
  }

  .navbar ul{
    margin: 1.5vh 0;
  }

  .nav-tog span{
    background-color: white;
  }

  .navbar ul li a.icon-toggle {
      float: right;
      display: block;
      font-size: 5vh;
  }

  .navbar.responsive {
      position: relative;
  }

  .navbar ul{
    width: 30%;
    padding: 0;
  }

  .navbar.responsive ul li a.icon-toggle {
      position: absolute;
      right: 0;
      top: 0;
  }

  .navbar.responsive ul li a {
      float: none;
      display: block;
      text-align: left;
      font-size: 12px;
  }
}
</style>

<nav class="navbar navbar-fixed-top nav-bg" style="margin: 0">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle nav-tog" data-toggle="collapse" data-target="#mybar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>                        
        </button>
        <a href="{{url('/')}}"><img src="{{asset('images/logo.png')}}" class="img-responsive logo-360"></a>
      </div>
      <div class="collapse navbar-collapse" id="mybar">
        <ul class="nav navbar-nav navbar-right">
          <li><a href="{{url('/#landing-page')}}">home</a></li>
          <li><a href="{{url('/#feature')}}">feature</a></li>
          <li><a href="{{url('/#step')}}">step</a></li>
          <li><a href="{{url('/#showcase')}}">showcase</a></li>
          <li><a href="{{url('/#contact')}}">contact</a></li>
          <!-- <li><input type="text" name="searchShowcase" placeholder="Search"></li> -->
          <li>
            <form action="{{url('/search')}}" method="get" enctype="multipart/form-data">
              {{ csrf_field() }}
            <input type="text" class="search-input" name="searchShowcase">
                <button type="submit" class="search-icon"><i class="fa fa-search search-icon"></i></button>
                
                </form>
          </li>
        </ul>
      </div>
    </div>
  </nav>



@yield('content')

<div class="clearfix"></div>
  <footer id="footer">
      <div class="container">
        <div class="footer-main">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="col-md-4 col-sm-12 col-xs-12 footer">
              <a href="{{url('/about-us')}}">About Cyber Olympus</a>
              <a href="#feature">Features</a>
              <a href="#step">How we do it</a>
            </div>
            <div class="col-md-4 col-sm-12 col-xs-12 footer">
              <a href="#showcase">Showcase</a>
              <a href="#contact">Contact Us</a>
              
            </div>
            <div class="col-md-4 col-sm-12 col-xs-12 footer">
              <a href="{{url('/careers')}}">Careers</a>
              <a href="{{url('/blog')}}">Blog</a>
            </div>
          </div>
        <div class="col-md-12 col-sm-12 col-xs-12 copy">
          Cyber Olympus Copyright 2018. <br>All rights reserved.
        </div>

      </div>
      </div>
  </footer>

@yield('js')
<script src="{{asset('js/main.js')}}"></script>

</body>
</html>