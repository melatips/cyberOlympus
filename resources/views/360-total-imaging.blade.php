<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>360 Total Imaging</title>
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
	<header id="header-360">
		<div class="container">
			<img src="{{asset('images/360/logo.svg')}}" class="img-responsive logo-360">
			<div class="navbar-360"  id="nav-360">
				<ul>
					<li><a href="#hero-360">Home</a></li>
					<li><a href="#about-360">About</a></li>
					<li><a href="#video-360">Services</a></li>
					<li><a>Gallery</a></li>
					<li><a href="#blog-360">Blog</a></li>
					<li><a href="#contact-360">Contact</a></li>
					<li><a href="javascript:void(0);" class="icon-toggle" onclick="myFunction()">&#9776;</a></li>
				</ul>
			</div>
		</div>
	</header>

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
			<h3 class="h3-360">ABOUT</h3>
			<h2 class="h2-360">360 TOTAL IMAGING</h2>

			<div class="about-line"></div>
			
			<p class="p-360">We are a media creation company with drones, virtual tours, hdr photography videography. We are a media creation company with drones, virtual tours, hdr photography videography. We are a media creation company with drones, virtual tours, hdr photography videography. We are a media creation company with drones, virtual tours, hdr photography videography. We are a media creation company with drones, virtual tours, hdr photography videography. We are a media creation company with drones, virtual tours, hdr photography videography.</p>
		</div>
	</section>

	<div class="clearfix"></div>

	<section id="video-360">
		<div class="video">
			<video width="" controls>
			  <source src="{{asset('videographer.mp4')}}" type="video/mp4">
			  Your browser does not support HTML5 video.
			</video>
		</div>
		<div class="panel-body video-icon-box">
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

	<section id="blog-360">
		<div class="panel-body">
			<div class="col-md-4 col-md-offset-8 col-sm-4 col-sm-offset-8 col-xs-4 col-xs-offset-4 blog-title">
				<h3 class="h3-360">Latest</h3>
				<h2 class="h2-360">BLOGS</h2>
			</div>
		</div>

		<div class="panel-body blog-box">
			<div class="col-md-6 col-sm-6 col-xs-12 blog-left">
				<img src="{{asset('images/360/gallery1.jpg')}}" class="img-responsive">
				<div class="blog-link">
					<a href="">20.10.2017</a>
				</div>
				<div class="blog-text">
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
				</div>
			</div>
			<div class="col-md-6 col-sm-6 col-xs-12 blog-right">
				<img src="{{asset('images/360/gallery2.jpg')}}" class="img-responsive">
				<div class="blog-link">
					<a href="">20.10.2017</a>
				</div>
				<div class="blog-text">
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
				</div>
			</div>
		</div>
	</section>

	<div class="clearfix"></div>

	<section id="contact-360">
		<div class="contact-360-title">
			<h3 class="h3-360">drop</h3>
			<h2 class="h2-360">message</h2>
		</div>

		<div class="contact-360-form">
			<div class="col-md-6 col-sm-6 col-xs-12 contact-360-box name-left">
				<input type="text" name="name" placeholder="NAME">
			</div>
			<div class="col-md-6 col-sm-6 col-xs-12 contact-360-box email-right">
				<input type="text" name="email" placeholder="E-MAIL">
			</div>
			<div class="col-md-12 col-sm-12 col-xs-12 contact-360-box" style="padding: 0;">
				<input type="text" name="subject" placeholder="SUBJECT">
			</div>
			<div class="col-md-12 col-sm-12 col-xs-12 contact-360-box" style="padding: 0;">
				<textarea placeholder="MESSAGE"></textarea>
			</div>

			<div class="col-md-12 contact-360-button" style="padding: 0;">
				<button>SEND</button>
			</div>
		</div>
		
	</section>
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