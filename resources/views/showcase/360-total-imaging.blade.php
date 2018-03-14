<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>{{$detail->showcase_name}}</title>
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
  <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('css/style-360.css')}}">

  <script src="{{asset('js/jquery-2.1.1.min.js')}}"></script>
  <script src="{{asset('js/jquery.min.js')}}"></script>
  <script src="{{asset('js/bootstrap.js')}}"></script>
  <script src="{{asset('js/owl.carousel.min.js')}}"></script>
</head>
<body>

	<header id="header-sc">
		<div class="container">
			<img src="{{asset('images/showcase/logo-sc.svg')}}" class="img-responsive logo-sc">
			<div class="search-box">
				<input type="text">
		        <i class="fa fa-search"></i>
		        <i class="fa fa-chevron-down"></i>
		    </div>
		</div>
	</header>

	<section id="main-title">
		<div class="container">
			<h2>{{$detail->showcase_name}}</h2>
			<p>@foreach($detail->getCategory as $key => $value)
			    @if (count($detail->getCategory) == 1 || $key==count($detail->getCategory)-1)
			    {{$value->category_name}}
			    @else
			    {{$value->category_name}} & 
			    @endif
			  @endforeach // Task : design, front end, back end // Status : active</p>
		</div>
	</section>

	<section id="hero-360">
		<div id="slide-360" class="carousel slide" data-ride="carousel">
		
			<!-- <div class="col-md-12 col-sm-12 col-xs-12">
				<ol class="carousel-indicators indicators-360">
				  <li data-target="#slide-360" data-slide-to="0" class="active"></li>
				  <li data-target="#slide-360" data-slide-to="1"></li>
				  <li data-target="#slide-360" data-slide-to="2"></li>
				  <li data-target="#slide-360" data-slide-to="3"></li>
				</ol>
			</div> -->

			<div class="carousel-inner ">
				<div class="item active">
				 <div class="wrap1">
				 	<img src="{{asset('images/360/slider1.jpg')}}" class="img-responsive">
				 </div>
				</div>

				<div class="item">
				 <div class="wrap1">
				 	<img src="{{asset('images/360/slider2.jpg')}}" class="img-responsive">
				 </div>
				</div>
			</div>
		</div>
	</section>

	<div class="clearfix"></div>

	<section id="about-360">
		<div class="col-md-6 col-sm-6 col-xs-12 about-img-box">
			<img src="{{asset('images/360/about1.jpg')}}" class="img-responsive about-img">
		</div>
		<div class="col-md-6 col-sm-6 col-xs-12 about-text">
			<h3 class="h3-360">{{$detail->title1_h3}}</h3>
			<h2 class="h2-360">{{$detail->showcase_name}}</h2>

			<div class="about-line"></div>
			
			<p class="p-360">{{$detail->desc1}}</p>
		</div>
	</section>

	<div class="clearfix"></div>

	<section id="video-360">
		<div class="contact-360-title">
			<h3 class="h3-360">{{$detail->showcase_name}}</h3>
			<h2 class="h2-360">{{$detail->title2_h2}}</h2>
		</div>
		<div class="panel-body video-icon-box box-plus">
			<div class="col-md-3 col-sm-3 col-xs-12">
				<img src="{{asset('images/360/icon-camera.svg')}}" class="img-responsive video-icon">
				<h3 class="icon-h3">HDR PHOTOGRAPHY</h3>
			</div>
			<div class="col-md-3 col-sm-3 col-xs-12">
				<img src="{{asset('images/360/icon-drone.svg')}}" class="img-responsive video-icon">
				<h3 class="icon-h3">DRONES</p>
			</div>
			<div class="col-md-3 col-sm-3 col-xs-12">
				<img src="{{asset('images/360/icon-video.svg')}}" class="img-responsive video-icon">
				<h3 class="icon-h3">VIDEOGRAPHY</h3>
			</div>
			<div class="col-md-3 col-sm-3 col-xs-12">
				<img src="{{asset('images/360/icon-virtual.svg')}}" class="img-responsive video-icon">
				<h3 class="icon-h3">VIRTUAL TOUR</h3>
			</div>
		</div>
	</section>

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

  <script type="text/javascript">
		function myFunction() {
		    var x = document.getElementById("nav-360");
		    if (x.className === "navbar-360") {
		        x.className += " responsive";
		    } else {
		        x.className = "navbar-360";
		    }
		}
	</script>

	<script type="text/javascript">
		// Select all links with hashes
		$('a[href*="#"]')
	  // Remove links that don't actually link to anything
	  .not('[href="#"]')
	  .not('[href="#0"]')
	  .click(function(event) {
	    // On-page links
	    if (
	      location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') 
	      && 
	      location.hostname == this.hostname
	    ) {
	      // Figure out element to scroll to
	      var target = $(this.hash);
	      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
	      // Does a scroll target exist?
	      if (target.length) {
	        // Only prevent default if animation is actually gonna happen
	        event.preventDefault();
	        $('html, body').animate({
	          scrollTop: target.offset().top
	        }, 1000, function() {
	          // Callback after animation
	          // Must change focus!
	          var $target = $(target);
	          $target.focus();
	          if ($target.is(":focus")) { // Checking if the target was focused
	            return false;
	          } else {
	            $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
	            $target.focus(); // Set focus again
	          };
	        });
	      }
	    }
	  });
	</script>
</body>
</html>