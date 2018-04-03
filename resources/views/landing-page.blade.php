@extends('template.cyberTemplate')
@section('title')
<title>Cyber Olympus</title>
@endsection

@section('content')
<header id="header-landing">
		<div class="header-landing">
			<a href="#landing-page"><img src="{{asset('images/logo.png')}}" class="img-responsive logo-360"></a>
			<div class="navbar-landing"  id="nav-landing">
				<ul>
					<li><a href="#landing-page">HOME</a></li>
					<li><a href="#feature">FEATURE</a></li>
					<li><a href="#step">STEP</a></li>
					<li><a href="#showcase">SHOWCASE</a></li>
					<li><a href="#contact">CONTACT US</a></li>
					<!-- <li><input type="text" name="searchShowcase" placeholder="Search"></li> -->
					<li>
						<form action="{{url('/search')}}" method="get" enctype="multipart/form-data">
							{{ csrf_field() }}
						<input type="text" class="search-input" name="searchShowcase">
				        <button type="submit" class="search-icon"><i class="fa fa-search search-icon"></i></button>
				        <!-- <i class="fa fa-chevron-down search-icon"></i> -->
				        </form>
				    </li>
					<li><a href="javascript:void(0);" class="icon-toggle" onclick="myFunction()">&#9776;</a></li>
				</ul>
			</div>
		</div>
	</header>
	<!-- <section id="loader-wrapper">
		<div id="loading-page" class="bg">
			<div class="container">
				<img src="{{asset('images/loading-HD2.gif')}}" class="img-responsive loading-icon">
			</div>
		</div>
	</section> -->

	<section id="landing-page" class="bg">
		<div class="container">
			<img src="{{asset('images/logo-cyber.svg')}}" class="img-responsive logo" style="display: none;">
			<h2 class="cyber-olympus" data-in-effect="rollInLeftBig" style="visibility: hidden;">CYBER OLYMPUS</h2>
			<a href="#feature" class="icon-landing " >
				<span class="fa fa-chevron-down text-cyber"></span>
			</a>
		</div>
	</section>

	<div class="clearfix"></div>

	<section id="feature">
		<div id="feature-slide" class="carousel slide" data-ride="carousel">
		<!-- Indicators -->
			<div class="col-md-12 col-sm-12 col-xs-12">
				<ol class="carousel-indicators feature-indicators">
				  <li data-target="#feature-slide" data-slide-to="0" class="active"></li>
				  <li data-target="#feature-slide" data-slide-to="1"></li>
				  <li data-target="#feature-slide" data-slide-to="2"></li>
				  <li data-target="#feature-slide" data-slide-to="3"></li>
				</ol>
			</div>
			
			<div class="carousel-inner ">
				<div class="item active">
				 <div class="wrap">
				  <div class="masking-bg" style="background: url('{{asset('images/bg-feature-1.png')}}') no-repeat center center;"></div>
            	  <div class="masking"></div>
            	  <div class="container inner-feature">
				    <div class="col-md-5 col-sm-12 col-xs-12 icon-hidden">
						<img src="{{asset('images/feature-icon.svg')}}" class="img-responsive feature-icon">
						<!-- <div id="feature1"></div> -->
					</div>
				    <div class="col-md-7 col-sm-12 col-xs-12 feature-main w3-animate-bottom">
						<h3 class="sub-title">Our Features</h3>
						<h2 class="title-thin">Fully</h2>
						<h2 class="title-thick">RESPONSIVE</h2>
						<p class="feature-text">We make sure that we deliver responsive website that well-viewed in various media</p>
						<!-- <a href="{{url('/feature/fully-responsive')}}" class="view">View Detail <i class="fa fa-angle-right"></i><i class="fa fa-angle-right"></i></a> -->
					</div>

					<div class="col-md-5 col-sm-12 col-xs-12 icon-shown">
						<img src="{{asset('images/feature-icon.svg')}}" class="img-responsive feature-icon">
							<!-- <div id="feature1"></div> -->
					</div>
				   </div>
				 </div>
				</div>

				<div class="item">
				   <div class="wrap">
				  	 <div class="masking-bg" style="background: url('{{asset('images/bg-feature-2.png')}}') no-repeat center center;"></div>
            	  	 <div class="masking"></div>
            	  	 <div class="container inner-feature">
				    	<div class="col-md-5 col-sm-12 col-xs-12 icon-hidden">
							<img src="{{asset('images/feature-icon-2.svg')}}" class="img-responsive feature-icon">
							<!-- <div id="feature2"></div> -->
						</div>
				    	<div class="col-md-7 col-sm-12 col-xs-12 w3-animate-top">
							<h3 class="sub-title">Our Features</h3>
							<h2 class="title-thin">Content management</h2>
							<h2 class="title-thick">SYSTEM</h2>
							<p class="feature-text">We make custom Content Management System for updating website content</p>
							<!-- <a href="{{url('/feature/content-management-system')}}" class="view">View Detail <i class="fa fa-angle-right"></i><i class="fa fa-angle-right"></i></a> -->
						</div>
						<div class="col-md-5 col-sm-12 col-xs-12 icon-shown">
							<img src="{{asset('images/feature-icon-2.svg')}}" class="img-responsive feature-icon">
							<!-- <div id="feature2"></div> -->
						</div>
				     </div>
				   </div>
				</div>
				    
				<div class="item">
				   <div class="wrap">
				     <div class="masking-bg" style="background: url('{{asset('images/bg-feature-3.png')}}') no-repeat center center;"></div>
            	     <div class="masking"></div>
            	     <div class="container inner-feature">
				    	<div class="col-md-5 col-sm-12 col-xs-12 icon-hidden">
							<img src="{{asset('images/feature-icon-3.svg')}}" class="img-responsive feature-icon">
							<!-- <div id="feature3"></div> -->
						</div>
				    	<div class="col-md-7 col-sm-12 col-xs-12 w3-animate-right">
							<h3 class="sub-title">Our Features</h3>
							<h2 class="title-thin">Unique</h2>
							<h2 class="title-thick">DESIGN</h2>
							<p class="feature-text">Our design are unique, we always make different designs for every website</p>
							<!-- <a href="{{url('/feature/unique-design')}}" class="view">View Detail <i class="fa fa-angle-right"></i><i class="fa fa-angle-right"></i></a> -->
						</div>
						<div class="col-md-5 col-sm-12 col-xs-12 icon-shown">
							<img src="{{asset('images/feature-icon-3.svg')}}" class="img-responsive feature-icon">
							<!-- <div id="feature3"></div> -->
						</div>
				    </div>
				   </div>
				</div>

				<div class="item">
				   <div class="wrap">
				     <div class="masking-bg" style="background: url('{{asset('images/bg-feature-4.png')}}') no-repeat center center;"></div>
            	     <div class="masking"></div>
            	     <div class="container inner-feature">
				    	<div class="col-md-5 col-sm-12 col-xs-12 icon-hidden">
							<img src="{{asset('images/feature-icon-4.svg')}}" class="img-responsive feature-icon">
							<!-- <div id="feature4"></div> -->
						</div>
				    	<div class="col-md-7 col-sm-12 col-xs-12 w3-animate-left">
							<h3 class="sub-title">Our Features</h3>
							<h2 class="title-thin">Custom</h2>
							<h2 class="title-thick">FEATURE</h2>
							<p class="feature-text">The feature we make are made by customers request so that it fits the need</p>
							<!-- <a href="{{url('/feature/custom-feature')}}" class="view">View Detail <i class="fa fa-angle-right"></i><i class="fa fa-angle-right"></i></a> -->
						</div>
						<div class="col-md-5 col-sm-12 col-xs-12 icon-shown">
							<img src="{{asset('images/feature-icon-4.svg')}}" class="img-responsive feature-icon">
							<!-- <div id="feature4"></div> -->
						</div>
				      </div>
				   </div>
				</div>
			</div>
		</div>
	</section>

	<div class="clearfix"></div>

	<section id="step">
		<div class="panel-body" style="height: 100%">
			<div id="step-slide" class="carousel" data-interval="false" style="height: 100%">
				<div class="carousel-inner">
				    <div class="item active">
				    	<div class="col-md-5 col-sm-12 col-xs-12 step-box">
							<img src="{{asset('images/step1.svg')}}" class="img-responsive step-img w3-animate-zoom">
							<!-- <div id="feature4"></div> -->
							<img src="{{asset('images/circle-tiny.png')}}" class="img-responsive circle-move">
							<img src="{{asset('images/circle-mid.png')}}" class="img-responsive circle-move2">
						</div>
				    	<div class="col-md-7 col-sm-12 col-xs-12 step w3-animate-right">
							<h3 class="sub-title p">How We Do It</h3>
							<h2 class="title-thin p">Requirements</h2>
							<h2 class="title-thick p">ANALYSIS</h2>
							<p class="feature-text p">This includes client goals, target, audience, detailed feature requests and as much relevant information for website development. We always give suggestions for our clients from our experience.</p>
							<!-- <i class="fa fa-chevron-circle-right"></i> -->
							<div class="clearfix"></div>
							<a class="right step-icon-box js-paint" href="#step-slide" data-slide="next" onclick="plusDivs(1, 0)">
							    <img src="{{asset('images/next-icon.svg')}}" class="step-icon">
							    <span class="sr-only">Next</span>
							</a>
						</div>
				    </div>

				    <div class="item">
				    	<div class="col-md-5 col-sm-12 col-xs-12 step-box">
							<img src="{{asset('images/step2.svg')}}" class="img-responsive step-img w3-animate-bottom">
							<!-- <div id="feature3"></div> -->
							<img src="{{asset('images/circle-tiny.png')}}" class="img-responsive circle-move">
							<img src="{{asset('images/circle-mid.png')}}" class="img-responsive circle-move2">
						</div>
				    	<div class="col-md-7 col-sm-12 col-xs-12 step w3-animate-right">
							<h3 class="sub-title p">How We Do It</h3>
							<h2 class="title-thick p">PLAN</h2>
							<p class="feature-text p">We do plan and project charter (or equivalent document) sums up the information that has been gathered and agreed upon the previous point. These documents are tipycally concise and not overly technical and they serve as a reference througout the project.</p>
							<!-- <i class="fa fa-chevron-circle-right"></i> -->
							<div class="clearfix"></div>
							<a class="left step-icon-box" href="#step-slide" data-slide="prev" onclick="plusDivs(-1, 0)">
							    <img src="{{asset('images/prev-icon.svg')}}" class="step-icon">
							    <span class="sr-only">Previous</span>
							</a>
							<a class="right  step-icon-box" href="#step-slide" data-slide="next" onclick="plusDivs(1, 0)">
							    <img src="{{asset('images/next-icon.svg')}}" class="step-icon">
							    <span class="sr-only">Next</span>
							</a>
						</div>
				    </div>

				    <div class="item">
				    	<div class="col-md-5 col-sm-12 col-xs-12 step-box">
							<img src="{{asset('images/step3.svg')}}" class="img-responsive step-img w3-animate-top">
							<img src="{{asset('images/circle-tiny.png')}}" class="img-responsive circle-move">
							<img src="{{asset('images/circle-mid.png')}}" class="img-responsive circle-move2">
						</div>
				    	<div class="col-md-7 col-sm-12 col-xs-12 step w3-animate-right">
							<h3 class="sub-title">How We Do It</h3>
							<h2 class="title-thin">Site</h2>
							<h2 class="title-thick">MAP</h2>
							<p class="feature-text">A site map guides end users who are lost in the structure or need to find a piece of information quickly. Rather than simply listing pages, including links and a hierarchy of page organization is good practice.</p>
							<div class="clearfix"></div>
							<!-- <i class="fa fa-chevron-circle-right"></i> -->
							<a class="left  step-icon-box" href="#step-slide" data-slide="prev" onclick="plusDivs(-1, 0)">
							    <img src="{{asset('images/prev-icon.svg')}}" class="step-icon">
							    <span class="sr-only">Previous</span>
							</a>
							<a class="right  step-icon-box" href="#step-slide" data-slide="next" onclick="plusDivs(1, 0)">
							    <img src="{{asset('images/next-icon.svg')}}" class="step-icon">
							    <span class="sr-only">Next</span>
							</a>
						</div>
				    </div>

				    <div class="item">
				    	<div class="col-md-5 col-sm-12 col-xs-12 step-box">
							<img src="{{asset('images/step4.svg')}}" class="img-responsive step-img w3-animate-zoom">
							<img src="{{asset('images/circle-tiny.png')}}" class="img-responsive circle-move">
							<img src="{{asset('images/circle-mid.png')}}" class="img-responsive circle-move2">
						</div>
				    	<div class="col-md-7 col-sm-12 col-xs-12 step w3-animate-right">
							<h3 class="sub-title">How We Do It</h3>
							<h2 class="title-thick">DRAFTING</h2>
							<p class="feature-text">This is where the visual layout of the website begins to take shape. Using information gathered from the client in the planning phase, begin designing the layout  using a wireframe.</p>
							<div class="clearfix"></div>
							<!-- <i class="fa fa-chevron-circle-right"></i> -->
							<a class="left  step-icon-box" href="#step-slide" data-slide="prev">
							    <img src="{{asset('images/prev-icon.svg')}}" class="step-icon">
							    <span class="sr-only">Previous</span>
							</a>
							<a class="right  step-icon-box" href="#step-slide" data-slide="next" onclick="plusDivs(1, 0)">
							    <img src="{{asset('images/next-icon.svg')}}" class="step-icon">
							    <span class="sr-only">Next</span>
							</a>
						</div>
				    </div>

				    <div class="item">
				    	<div class="col-md-5 col-sm-12 col-xs-12 step-box">
							<img src="{{asset('images/step5.svg')}}" class="img-responsive step-img w3-animate-left">
							<img src="{{asset('images/circle-tiny.png')}}" class="img-responsive circle-move">
							<img src="{{asset('images/circle-mid.png')}}" class="img-responsive circle-move2">
						</div>
				    	<div class="col-md-7 col-sm-12 col-xs-12 step w3-animate-right">
							<h3 class="sub-title">How We Do It</h3>
							<h2 class="title-thick">REVIEW</h2>
							<p class="feature-text">A cycle of reviewing, tweaking and approving the mock-ups often takes piece until (ideally) both client and contractor are satisfied with the design. This is the easiest time to make changes, not after the design has been coded.</p>
							<!-- <i class="fa fa-chevron-circle-right"></i> -->
							<div class="clearfix"></div>
							<a class="left  step-icon-box" href="#step-slide" data-slide="prev" onclick="plusDivs(-1, 0)">
							    <img src="{{asset('images/prev-icon.svg')}}" class="step-icon">
							    <span class="sr-only">Previous</span>
							</a>
							<a class="right  step-icon-box" href="#step-slide" data-slide="next" onclick="plusDivs(1, 0)">
							    <img src="{{asset('images/next-icon.svg')}}" class="step-icon">
							    <span class="sr-only">Next</span>
							</a>
						</div>
				    </div>

				    <div class="item">
				    	<div class="col-md-5 col-sm-12 col-xs-12 step-box">
							<img src="{{asset('images/step6.svg')}}" class="img-responsive step-img w3-animate-zoom">
							<img src="{{asset('images/circle-tiny.png')}}" class="img-responsive circle-move">
							<img src="{{asset('images/circle-mid.png')}}" class="img-responsive circle-move2">
						</div>
				    	<div class="col-md-7 col-sm-12 col-xs-12 step w3-animate-right">
							<h3 class="sub-title">How We Do It</h3>
							<h2 class="title-thin">Slice &</h2>
							<h2 class="title-thick">CODE</h2>
							<p class="feature-text">It's coding time. Slice the final Photoshop mock-up, and write the HTML and CSS code for the basic design. Adding interactive elements and jQuery, building Content Management System.</p>
							<!-- <i class="fa fa-chevron-circle-right"></i> -->
							<a class="left  step-icon-box" href="#step-slide" data-slide="prev" onclick="plusDivs(-1, 0)">
							    <img src="{{asset('images/prev-icon.svg')}}" class="step-icon">
							    <span class="sr-only">Previous</span>
							</a>
						</div>
				    </div>
				</div>
			</div>
		</div>
	</section>

	<div class="clearfix"></div>

	<section id="showcase">
		<div id="showcase-slide" class="carousel slide" data-interval="false">
			<div class="carousel-inner">
				
				<div class="item active ">
				    <div class="showcase-inner " style="background: url({{asset('images/showcase/dashboard/chuar-bg.jpg')}}) no-repeat; background-size: cover; background-position: center; ">
				    	<div class="bg-trans">
				    		<img src="{{asset('images/showcase/bg/Chuar-Chuar.jpg')}}" class="img-responsive kaiser-hidden">
					    	<div class="row">
					    		<div class="col-md-6 col-sm-12 col-xs-12 chuar">
									<a href="{{url('/showcase/list/4')}}" class="sub-show"><h3 class="sub-title" style="color: #ff9680">Mobile Game</h3></a>
									<h2 class="title-thick" style="color: #b0130e">CHUAR CHUAR</h2>
									<p class="feature-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
									<a href="{{url('showcase/detail/6')}}" class="view" style="color: #ff9680">View Detail <i class="fa fa-angle-right"></i><i class="fa fa-angle-right"></i></a>
								</div>
								<div class="col-md-6 col-sm-6 chuar-side-box">
									<img src="{{asset('images/showcase/dashboard/chuar-side.png')}}" class="img-responsive chuar-side">
								</div>

								<img src="{{asset('images/showcase/dashboard/chuar-hand.svg')}}" class="img-responsive chuar-img">
								
								<div class="col-md-6 col-sm-12 col-xs-12 controller-box">
									<a class="left showcase-icon-box" href="#showcase-slide" data-slide="prev">
										<img src="{{asset('images/prev-show.svg')}}" class="showcase-icon left-con">
										<span class="sr-only">Previous</span>
									</a>
									<a class="right showcase-icon-box" href="#showcase-slide" data-slide="next">
										<img src="{{asset('images/next-show.svg')}}" class="showcase-icon right-con">
										<span class="sr-only">Next</span>
									</a>
								</div>

								<div class="col-md-12 col-sm-12 col-xs-12 button-box">
									<a href="{{url('showcase/all')}}" class="btn cat-btn">View All Showcase</a>
								</div>
							
							</div>
						</div>
				    </div>
				</div>

				<div class="item">
				    <div class="showcase-inner" style="background: url('{{asset('images/showcase/dashboard/pakelan-bg.png')}}') no-repeat; background-size: cover; background-position: center;">
				    	<div class="bg-trans">
				    		<img src="{{asset('images/showcase/bg/rumah-makan-pakelan.jpg')}}" class="img-responsive kaiser-hidden">
				    		<div class="row">
				    			<div class="col-md-6 col-sm-6 pakelan-side-box">
									<img src="{{asset('images/showcase/dashboard/pakelan-side.png')}}" class="img-responsive pakelan-side">
								</div>

				    			<div class="col-md-6 col-sm-12 col-xs-12 col-md-offset-6  pakelan">
									<a href="{{url('/showcase/list/3')}}" class="sub-show"><h3 class="sub-title">Branding Design</h3></a>
									<h2 class="title-thick" style="color: #ffd200;">RM PAKELAN</h2>
									<p class="feature-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
									<a href="{{url('showcase/detail/25')}}" class="view">View Detail <i class="fa fa-angle-right"></i><i class="fa fa-angle-right"></i></a>
								</div>

								<img src="{{asset('images/showcase/dashboard/pakelan-img.svg')}}" class="img-responsive pakelan-img">

								<div class="col-md-6  col-sm-12 col-xs-12 col-md-offset-6 controller-box2">
								<a class="left showcase-icon-box" href="#showcase-slide" data-slide="prev">
									<img src="{{asset('images/prev-show.svg')}}" class="showcase-icon left-con">
									<span class="sr-only">Previous</span>
								</a>
								<a class="right showcase-icon-box" href="#showcase-slide" data-slide="next">
									<img src="{{asset('images/next-show.svg')}}" class="showcase-icon right-con">
									<span class="sr-only">Next</span>
								</a>

								</div>
								<div class="col-md-12 col-sm-12 col-xs-12 button-box">
									<a href="{{url('showcase/all')}}" class="btn cat-btn">View All Showcase</a>
								</div>
							</div>
						</div>
				    </div>
				</div>

				<div class="item">
				    <div class="showcase-inner">
				    	<div class="bg-trans">
				    		<img src="{{asset('images/showcase/dashboard/kaiser-768.jpg')}}" class="img-responsive kaiser-hidden">
				    		<div class="row">
				    			<div class="col-md-6 col-sm-12 col-xs-12 kaiser">
									<a href="{{url('/showcase/list/3')}}"><h3 class="sub-title" style="color: #0090c3">Branding Design & Website</h3></a>
									<!-- <h2 class="title-thin">Brand</h2> -->
									<h2 class="title-thick" style="color: #ff6b00; font-size: 38px;">KAISER MEDICAL INC</h2>
									<p class="feature-text" style="color: black">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
									<a href="{{url('showcase/detail/21')}}" class="view" style="color: #0090c3; font-weight: 100;">View Detail <i class="fa fa-angle-right"></i><i class="fa fa-angle-right"></i></a>
								</div>

								<div class="col-md-6 col-sm-6 kaiser-side-box">
									<img src="{{asset('images/showcase/dashboard/kaiser-side3.png')}}" class="img-responsive kaiser-side">
								</div>

								
								<div class="col-md-6 col-sm-12 col-xs-12 controller-box">
									<a class="left showcase-icon-box" href="#showcase-slide" data-slide="prev">
										<img src="{{asset('images/showcase/dashboard/kaiser-prev.svg')}}" class="showcase-icon left-con">
										<span class="sr-only">Previous</span>
									</a>
									<a class="right showcase-icon-box" href="#showcase-slide" data-slide="next">
										<img src="{{asset('images/showcase/dashboard/kaiser-next.svg')}}" class="showcase-icon right-con">
										<span class="sr-only">Next</span>
									</a>
								</div>
								<div class="col-md-12 col-sm-12 col-xs-12 button-box">
									<a href="" class="btn cat-btn-kaiser">View All Showcase</a>
								</div>
							</div>
						</div>
				    </div>
				</div>

				<div class="item">
				    <div class="showcase-inner" style="background: url({{asset('images/showcase/dashboard/ab-side.jpg')}}) no-repeat; background-size: cover; background-position: center;">
				    	<div class="bg-trans">
				    		<img src="{{asset('images/showcase/dashboard/ab-768.jpg')}}" class="img-responsive kaiser-hidden">
				    		<div class="row">

				    			<div class="col-md-6 col-sm-6 ab-side-box">
									<img src="{{asset('images/showcase/dashboard/ab-side.png')}}" class="img-responsive ab-side">
								</div>
				    			
				    			<div class="col-md-6 col-sm-12 col-xs-12 col-md-offset-6 adhibuana">
									<a href="{{url('/showcase/list/2')}}" class="sub-show"><h3 class="sub-title">Website</h3></a>
									<h2 class="title-thick" style="color: #ffd200">ADHI BUANA</h2>
									<p class="feature-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
									<a href="{{url('showcase/detail/2')}}" class="view" style="color: #ffd200">View Detail <i class="fa fa-angle-right"></i><i class="fa fa-angle-right"></i></a>
								</div>

								<img src="{{asset('images/showcase/dashboard/ab-logo.svg')}}" class="img-responsive ab-img">
								<div class="col-md-5 col-sm-12 col-xs-12 col-md-offset-7 controller-box2">
									<a class="left showcase-icon-box" href="#showcase-slide" data-slide="prev">
										<img src="{{asset('images/prev-show.svg')}}" class="showcase-icon left-con">
										<span class="sr-only">Previous</span>
									</a>
									<a class="right showcase-icon-box" href="#showcase-slide" data-slide="next">
										<img src="{{asset('images/next-show.svg')}}" class="showcase-icon right-con">
										<span class="sr-only">Next</span>
									</a>
								</div>
								<div class="col-md-12 col-sm-12 col-xs-12 button-box">
									<a href="{{url('showcase/all')}}" class="btn cat-btn">View All Showcase</a>
								</div>
							</div>
						</div>
				    </div>
				</div>

				<div class="item">
				    <div class="showcase-inner" style="background: url({{asset('images/showcase/dashboard/dg-bg2.png')}}) no-repeat; background-size: cover; background-position: center;">
				    	<div class="bg-trans">
				    		<img src="{{asset('images/showcase/bg/dwi-golden.jpg')}}" class="img-responsive kaiser-hidden">
				    		<div class="row">
				    			<div class="col-md-6 col-sm-12 col-xs-12 dg-dash">
									<a href="{{url('/showcase/list/1')}}" class="sub-show"><h3 class="sub-title">Logo</h3></a>
									<h2 class="title-thick" style="color: #a67c00; font-size: 38px;">DWI GOLDEN ELECTRIC</h2>
									<p class="feature-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
									<a href="{{url('showcase/detail/10')}}" class="view" style="color: #a67c00">View Detail <i class="fa fa-angle-right"></i><i class="fa fa-angle-right"></i></a>
								</div>

								<div class="col-md-6 col-sm-6 dg-side-box">
									<img src="{{asset('images/showcase/dashboard/dg-side.jpg')}}" class="img-responsive dg-side">
								</div>
								

								<img src="{{asset('images/showcase/dashboard/dg-bg-3.png')}}" class="img-responsive dg-img-mobile">
								<div class="col-md-6 col-sm-12 col-xs-12 controller-box">
									<a class="left showcase-icon-box" href="#showcase-slide" data-slide="prev">
										<img src="{{asset('images/prev-show.svg')}}" class="showcase-icon left-con">
										<span class="sr-only">Previous</span>
									</a>
									<a class="right showcase-icon-box" href="#showcase-slide" data-slide="next">
										<img src="{{asset('images/next-show.svg')}}" class="showcase-icon right-con">
										<span class="sr-only">Next</span>
									</a>
								</div>
								<div class="col-md-12 col-sm-12 col-xs-12 button-box">
									<a href="{{url('showcase/all')}}" class="btn cat-btn">View All Showcase</a>
								</div>
							</div>
						</div>
				    </div>
				</div>
			</div>
		</div>
	</section>

	<div class="clearfix"></div>

	<section id="contact">
		<div class="contact-box">
			<div class="col-md-12 col-sm-12 col-xs-12">
				<div class="col-md-6 col-sm-12 col-xs-12">
					<h3 class="contact-title">Make the call.<strong> We'll make the rest.</strong></h3>
					<h3 class="title-hidden">Make the call.<br><strong> We'll make the rest.</strong></h3>
					<p class="par-contact">Reaching out to us will do more than organise a meeting. It will give you the necessary path for success in brand development and online marketing.</p>
					<h2 class="contact-title">{{$basic->phone}}</h2>
				</div>
				<div class="col-md-6 col-sm-12 col-xs-12">
					<h3 class="contact-title">Visit Us. <strong>Let's Collaborate & Create.</strong></h3>
					<h3 class="title-hidden">Visit Us.<br><strong>Let's Collaborate & Create.</strong></h3>
					<p class="par-contact">{{$basic->full_address}}
					<br>email us <strong>{{$basic->email}}</strong></p>
					<a class="socmed" href="{{url($basic->facebook)}}">
						<img src="{{asset('images/facebook.svg')}}">
					</a>
					<a class="socmed" href="{{$basic->linkedin}}">
						<img src="{{asset('images/linkedin.svg')}}">
					</a>
					<a class="socmed" href="{{$basic->twitter}}">
						<img src="{{asset('images/twitter.svg')}}">
					</a>
					<a class="socmed" href="{{$basic->instagram}}">
						<img src="{{asset('images/instagram.svg')}}">
					</a>
				</div>
			</div>

			<div class="col-md-12 col-sm-12 col-xs-12">
				<h3 class="contact-title center">Our Team Includes Great Thinkers.
					<br><strong>You would love to work with them as they are just amazing people.</strong>
				</h3>
			</div>

			<div class="col-md-12 col-sm-12 col-xs-12">
				<form class="contact-form" method="post" action="{{url('contact/submit')}}">
					 <!--  -->
					{{ csrf_field() }}
						<p><strong>Hey Cyber Olympus, my name is</strong></p>
						<input type="text" name="name" placeholder="enter name">
						<p><strong>and i would love to have a chat about</strong></p>
						<select name="topic" class="topic js-states form-control" id="topic" >
							@foreach($category as $cat)
							<option value="{{$cat->category_name}}">{{$cat->category_name}}</option>
							@endforeach
						</select>
						<input type="text" name="message" placeholder="message">
						<p><strong>you can reach me at</strong></p>
						<input type="email" name="email" placeholder="e-mail">
						<input type="text" name="phone" placeholder="phone">

						<div class="contact-form-btn">
							<button class="btn" id="saveContact"><strong>Submit</strong></button>
						</div>
				</form>
			</div>
		</div>
	</section>

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

	<!-- Modal -->
  <!-- <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog"> -->
    
      <!-- Modal content-->
      <!-- <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title" style="text-align: center;">SUCCESS!</h4>
        </div>
        <div class="modal-body" style="text-align: center">
          <p>Your message has been sent!<br>Please wait our reply through your E-mail :)</p>
        </div>
      </div>
      
    </div>
  </div> -->
@endsection

@section('js')
	<script src="{{asset('js/jquery-1.9.1.min')}}"></script>
	<script>window.jQuery || document.write('<script src="{{asset('js/jquery-1.9.1.min.js')}}"><\/script>')</script>
	<script src="{{asset('js/main.js')}}"></script>
	
	<!-- RESPONSIVE NAVBAR -->
	<script type="text/javascript">
		function myFunction() {
		    var x = document.getElementById("nav-landing");
		    if (x.className === "navbar-landing") {
		        x.className += " responsive";
		    } else {
		        x.className = "navbar-landing";
		    }
		}
	</script>

	<!-- SLIDE STEP -->
	<script>
		var myIndex = 0;
		var slideIndex = [1,1];
		carousel();

		carousel(1, 0);
		carousel(1, 1);

		function plusDivs(n, no) {
		  carousel(slideIndex[no] += n, no);
		  step(slideIndex[no] += n, no);
		}

		function carousel() {
		    var i;
		    var x = document.getElementsByClassName("step-slide");
		    for (i = 0; i < x.length; i++) {
		      x[i].style.display = "none";  
		    }
		    myIndex++;
		    if (myIndex > x.length) {myIndex = 1}    
		    x[myIndex-1].style.display = "block";  
		    setTimeout(carousel, 4000);    
		}

		function step(){
			var j;
		    var y = document.getElementsByClassName("step-img");
		    for (j = 0; j < y.length; j++) {
		      y[j].style.display = "none";  
		    }
		    myIndex++;
		    if (myIndex > y.length) {myIndex = 1}    
		    y[myIndex-1].style.display = "block";  
		    setTimeout(step, 2500);
		}
	</script>

	<!-- SLIDE FEATURE -->
	<!-- <script>
		var myIndex = 0;
		feature();

		function feature() {
		    var i;
		    var x = document.getElementsByClassName("js-feature");
		    for (i = 0; i < x.length; i++) {
		      x[i].style.display = "hidden";  
		    }
		    myIndex++;
		    if (myIndex > x.length) {myIndex = 1}    
		    x[myIndex-1].style.display = "block";  
		    setTimeout(feature, 1000);    
		}
	</script> -->

	<!-- MODAL CONTACT US -->
	<script>
		$(document).ready(function(){
			$("#saveContact").click(function(e){
         			e.preventDefault(); // this prevents the form from submitting
				      $.ajax({
				        url: {{url('/contact/submit')}},
				        type: "post",
				        data: {
				        	'name':$('input[name=name]').val(),
				        	'topic': $('input[name=topic]').val(),
				        	'message' : $('input[name=message]').val(),
				        	'email' : $('input[name=email]').val(),
				        	'phone' : $('input[name=phone]').val(),
				        },
				        dataType: 'JSON',
				        success: function (data) {
				          // var x = JSON.parse(data)
				          console.log(data); // this is good
				        }
				      });
				$("#myModal").modal('show');
			});
		});
	</script>

	<!-- LOGO -->
	<script type="text/javascript">
		$(document).ready(function(){
		    $(function(){
		    	window.setTimeout(fadeLogo, 4000);

		    	function fadeLogo(){
		    		$(".logo").fadeIn(3000);
		    	}
		        
		    });
		});
	</script>

	<!-- CYBER-OLYMPUS TEXT -->
	<script type="text/javascript">
		$(function () {
			$('.cyber-olympus').textillate({
				initialDelay: 4000,
				in:
					{
						delay: 50
					}
			});
		})
	</script>

	<!-- SMOOTH SCROLL -->
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

	<!-- MOVE BG -->
	<script type="text/javascript">
		var lFollowX = 0,
		    lFollowY = 0,
		    x = 0,
		    y = 0,
		    friction = 1 / 30;

		function moveBackground2() {
		  x += (lFollowX - x) * friction;
		  y += (lFollowY - y) * friction;
		  
		  translate = 'translate(' + x + 'px, ' + y + 'px) scale(1.1)';

		  $('.masking-bg').css({
		    '-webit-transform': translate,
		    '-moz-transform': translate,
		    'transform': translate
		  });

		  $('.circle-move').css({
		    '-webit-transform': translate,
		    '-moz-transform': translate,
		    'transform': translate
		  });

		  $('.circle-move2').css({
		    '-webit-transform': translate,
		    '-moz-transform': translate,
		    'transform': translate
		  });

		  $('.chuar-img').css({
		    '-webit-transform': translate,
		    '-moz-transform': translate,
		    'transform': translate
		  });

		  $('.pakelan-img').css({
		    '-webit-transform': translate,
		    '-moz-transform': translate,
		    'transform': translate
		  });

		  $('.ab-img').css({
		    '-webit-transform': translate,
		    '-moz-transform': translate,
		    'transform': translate
		  });

		  window.requestAnimationFrame(moveBackground2);
		}

		$(window).on('mousemove click', function(e) {

		  var lMouseX = Math.max(-100, Math.min(100, $(window).width() / 2 - e.clientX));
		  var lMouseY = Math.max(-100, Math.min(100, $(window).height() / 2 - e.clientY));
		  lFollowX = (20 * lMouseX) / 100; // 100 : 12 = lMouxeX : lFollow
		  lFollowY = (10 * lMouseY) / 100;

		});

		moveBackground2();
	</script>

	<!-- LAZYLINEPAINTER -->
<!--<script type="text/javascript">
			(function( $ ){

				$(document).ready(function(){

					var $feature1 = $('#feature1');
					

		            $feature1.lazylinepainter({
		                'svgData': svgData,
		                'strokeWidth': 7,
		                'strokeColor': 'white',
                        'drawSequential': false,
                        'ease': 'easeInOutQuad'
		            });

                    setTimeout(function(){
                        $feature1.lazylinepainter('paint');
                    }, 10);


                    var $feature2 = $('#feature2');

                    $feature2.lazylinepainter({
		                'svgData': svgData,
		                'strokeWidth': 7,
		                'strokeColor': 'white',
                        'drawSequential': false,
                        'ease': 'easeInOutQuad'
		            });

                    setTimeout(function(){
                        $feature2.lazylinepainter('paint');
                    }, 10);


                    var $feature3 = $('#feature3');

                    $feature3.lazylinepainter({
		                'svgData': svgData,
		                'strokeWidth': 7,
		                'strokeColor': 'white',
                        'drawSequential': false,
                        'ease': 'easeInOutQuad'
		            });

                    setTimeout(function(){
                        $feature3.lazylinepainter('paint');
                    }, 10);


                    var $feature4 = $('#feature4');

                    $feature4.lazylinepainter({
		                'svgData': svgData,
		                'strokeWidth': 7,
		                'strokeColor': 'white',
                        'drawSequential': false,
                        'ease': 'easeInOutQuad'
		            });

                    setTimeout(function(){
                        $feature4.lazylinepainter('paint');
                    }, 10);
				})

			})( jQuery );
	</script> -->

	<script type="text/javascript">
		// var paintIndex = [1,1];
		// function plusLazy(n, no) {
		//   paintLazy(paintIndex[no] += n, no);
		// }
			(function( $ ){

				$(document).ready(function(){
					var $feature1 = $('#feature1');
					var $feature2 = $('#feature2');
					var $feature3 = $('#feature3');
					var $feature4 = $('#feature4');
					var $paint = $('.js-paint');
					var $pause = $('.js-pause');
					var destroyed = false;
				
		            function init(){
			            $feature1.lazylinepainter({
			                'svgData': svgData,
			                'strokeWidth': 7,
			                'strokeColor': 'white',
	                        'drawSequential': false,
	                        'ease': 'easeInOutQuad'
		            	});

	                    $feature1.lazylinepainter('paint');
	                    
					};

					function onPaintClick(){
						update($paint, 'paint');
		            	$pause.removeClass('inactive');
					};

                    $feature2.lazylinepainter({
		                'svgData': svgData,
		                'strokeWidth': 7,
		                'strokeColor': 'white',
                        'drawSequential': false,
                        'ease': 'easeInOutQuad'
		            });

                    setTimeout(function(){
                        $feature2.lazylinepainter('paint');
                    }, 10);

                    $feature3.lazylinepainter({
		                'svgData': svgData,
		                'strokeWidth': 7,
		                'strokeColor': 'white',
                        'drawSequential': false,
                        'ease': 'easeInOutQuad'
		            });

                    setTimeout(function(){
                        $feature3.lazylinepainter('paint');
                    }, 10);

                    $feature4.lazylinepainter({
		                'svgData': svgData,
		                'strokeWidth': 7,
		                'strokeColor': 'white',
                        'drawSequential': false,
                        'ease': 'easeInOutQuad'
		            });

                    setTimeout(function(){
                        $feature4.lazylinepainter('paint');
                    }, 10);

                    function update($el, target){

						if($el.hasClass('inactive')){
							return;
						}

		            	$feature3.lazylinepainter(target);
						console.log('>> ' + target);
		            	$feature4.lazylinepainter(target);
						console.log('>> ' + target);
					}

					$paint.on('click', onPaintClick);
					init();
				})

			})( jQuery );
	</script>

	<!-- STROKE LAZYLINEPAINTER -->
	<script type="text/javascript">
			var svgData = {
			    "feature1": {
			        "strokepath": [
			            {
			                "path": "M208.2,290.9H72c-8,0-14.5-6.5-14.5-14.5V99.9c0-8,6.5-14.5,14.5-14.5h281c8,0,14.5,6.5,14.5,14.5v88.3     M291.5,371.1v-93.7c0-8-6.5-14.5-14.5-14.5h-54.3c-8,0-14.5,6.5-14.5,14.5v93.7c0,8,6.5,14.5,14.5,14.5H277    C285,385.6,291.5,379.1,291.5,371.1z M291.5,357.2 M292.5,359.7h70c17,0,23.5-6.5,23.5-14.5V202.5c0-8-6.5-14.5-14.5-14.5H257.2     c-8,0-14.5,6.5-14.5,14.5v58.9 M57.5,98.5h310 M57.5,277.8h150.7 M242.7,200.7H386 M291.5,347H386 M208,275.6h83.6 M208,373h83.6     M40.2,135.8h33.3 M18.5,135.8h7.2 M23.7,152.2h49.8 M0,152.2h10.7 M326,38.2h33.3 M304.3,38.2h7.2 M299.1,54.5h35.3 M275.5,54.5    h10.7 M141.5,315.8h66.7 M180.7,290.9l-20.3,25 M295.5,418.4h51 M262.4,418.4h11 M257.2,434.8h100 M233.5,434.8h10.7 M141.5,3   c-14.2,0-25.8,11.5-25.8,25.8s11.5,25.8,25.8,25.8s25.8-11.5,25.8-25.8S155.7,3,141.5,3z M56.8,341.7c-8.3,0-15,6.9-15,15.5     s6.7,15.5,15,15.5s15-6.9,15-15.5S65.1,341.7,56.8,341.7z M14.4,304.7h14.8 M21.8,297.3V312 M404.1,98.5h14.8 M411.5,91.1v14.8",
			                "duration": 5000
			            }
			            
			        ],
			        "dimensions": {
			            "width": 600,
			            "height": 500
			        }
			    },

			    "feature2": {
			        "strokepath": [
			            {
			                "path": "M369.1,284.3v-42.3 M68.7,117.2H160 M160.3,103.9H72.8c-8,0-14.5,6.5-14.5,14.5v176.5l310,0v0	c0,8-6.5,14.5-14.5,14.5h-281c-4.3,0-8.2-1.9-10.8-4.9 M122.9,334.6h182.4 M137.6,334.6l20.3-25 M270.2,309.6l20.3,25 M376.2,87.7	H160.9v139.7c0,8,6.5,14.5,14.5,14.5h196.9c8,0,14.5-6.5,14.5-14.5V74.3c0-8-6.5-14.5-14.5-14.5H175.4c-8,0-14.5,6.5-14.5,14.5	 M177.5,74.4h3.4 M192.2,74.4h3.4 M207,74.4h3.4 M251.9,211.9l47-94.7 M238,129.6l-33.8,33.5l32.2,32.2 M311.3,195.3l32.2-32.2	l-33.8-33.5 M47.4,261.4h33.3 M25.8,261.4h7.2 M30.9,277.7h49.8 M7.3,277.7H18 M280.4,373.4c-14.2,0-25.8,11.5-25.8,25.8	s11.5,25.8,25.8,25.8c14.2,0,25.8-11.5,25.8-25.8S294.6,373.4,280.4,373.4z M18,101.7c-8.3,0-15,6.9-15,15.5s6.7,15.5,15,15.5	s15-6.9,15-15.5S26.3,101.7,18,101.7z M122.9,34.9h14.8 M130.3,27.5v14.8 M122.9,373.4h14.8 M130.3,366v14.8 M332.1,3h51 M307,3h11	 M293.8,19.3l73.2,0 M270.2,19.3h10.7",
			                "duration": 5000
			            }
			            
			        ],
			        "dimensions": {
			            "width": 600,
			            "height": 500
			        }
			    },

			    "feature3": {
			        "strokepath": [
			            {
			                "path": "M297.9,88.1h56.9c8,0,14.5,6.5,14.5,14.5v176.5c0,8-6.5,14.5-14.5,14.5h-281c-4.9,0-9.3-2.5-11.9-6.2	 M300.5,101.3h68.7 M59.2,101.3h167 M243.4,88.1H73.7c-8,0-14.5,6.5-14.5,14.5l0,178.1h300.9 M123,318.7h182.4 M137.8,318.7l20.3-25	 M290.7,318.7l-20.3-25 M266.6,155.5c3.5-5.5,7.2-12.3,11.3-20.6C301.2,87.7,326.4,9.8,313.4,3.4s-59.3,61.1-82.6,108.3	s-14.6,56.3-1.6,62.7c9.4,4.6,18.6,6.6,31.7-10.6 M217.4,164.6 M216.2,165.9c-7.9,3.7-12.8,13.9-8.8,23c6.9,15.8-16.1,14.3-7.5,19.5	c16.6,9.9,35.1,4.4,42.8-11.3c3.6-7.2,4.2-14.3,1.8-18.2 M224.5,130.5l32.8,16.2 M218.8,143.7l27.1,13.4 M43.2,234.3h33.3	 M21.5,234.3h7.2 M26.7,250.7h49.8 M3,250.7h10.7 M158.1,10c-14.2,0-25.8,11.5-25.8,25.7s11.5,25.8,25.8,25.8s25.8-11.5,25.8-25.8	S172.3,10,158.1,10z M101.1,338.3c-8.3,0-15,6.9-15,15.5s6.7,15.5,15,15.5s15-6.9,15-15.5S109.4,338.3,101.1,338.3z M369.2,49H384	 M376.6,41.6v14.8 M8.4,121.9h14.8 M15.7,114.6v14.8 M322.5,353.8h51 M297.3,353.8h11 M284.1,370.2h73.2 M260.5,370.2h10.7",
			                "duration": 5000
			            }
			            
			        ],
			        "dimensions": {
			            "width": 600,
			            "height": 500
			        }
			    },

			    "feature4": {
			        "strokepath": [
			            {
			                "path": "M371.5,159.8v128.8c0,8-6.5,14.5-14.5,14.5H76c-8,0-14.5-6.5-14.5-14.5V159.8 M191.5,97.6h49.9 M191.5,110.9	h49.9 M61.5,290.2h297.1 M125.3,328.2h182.4 M160.3,303.3l-20.3,25 M272.6,303.3l20.3,25 M141.9,159.8H177c8,0,14.5-6.5,14.5-14.5	v-79c0-8-6.5-14.5-14.5-14.5H47.8c-8,0-14.5,6.5-14.5,14.5v79c0,8,6.5,14.5,14.5,14.5h36.9l0,23.9c0,9.6,11.6,14.4,18.4,7.5	l30.9-31.4 M356,159.8h29.1c8,0,14.5-6.5,14.5-14.5v-79c0-8-6.5-14.5-14.5-14.5H255.9c-8,0-14.5,6.5-14.5,14.5v79	c0,8,6.5,14.5,14.5,14.5H299l30.9,31.4c6.7,6.8,18.4,2.1,18.4-7.5l0-23.9 M361,343.3c-14.2,0-25.8,11.5-25.8,25.8	c0,14.2,11.5,25.8,25.8,25.8c14.2,0,25.8-11.5,25.8-25.8C386.8,354.8,375.3,343.3,361,343.3z M160,3c-8.3,0-15,6.9-15,15.5	S151.7,34,160,34c8.3,0,15-6.9,15-15.5S168.3,3,160,3z M42.2,362.3h14.8 M49.6,355v14.8 M417.8,242.8h14.8 M425.2,250.2v-14.8	 M289.4,108.5h6.4 M317.3,108.5h6.4 M345.2,108.5h6.4 M111.1,97.6c0,0-3.5-7.5-9.9-10.4c-4.7-2.1-11.7-1.5-16.2,4.4	c-6.5,8.4-3.5,19.5,2.3,26.9c8.7,11.1,23.8,17,23.8,17 M111.1,135.6c0,0,15.1-5.9,23.8-17c5.8-7.5,8.8-18.5,2.3-26.9	c-4.6-5.9-11.6-6.6-16.2-4.4c-6.4,2.9-9.9,10.4-9.9,10.4 M203.9,255.1h53.5c4.5,0,8.1-3.6,8.1-8v-41.9c0-4.4-3.6-8-8.1-8h-28.8	v-16.8c0-5.3-3.6-9.6-8.1-9.6h-6.5c-2,0-3.7,2-3.7,4.4V197v0.2c-1.8,0.1-14.4,10.5-14.4,13.7l0,36.2c0,1.1,0.2,2.2,0.7,3.2l0,0	h-25.9c-1.7,0-3-0.8-3-1.9v-36.6c0-1,1.3-1.9,3-1.9h17.3 M43.2,203.7h33.3 M21.5,203.7h7.2 M26.7,220h49.8 M3,220h10.7 M173,370.5	h51 M147.9,370.5h11 M134.7,386.8l73.2,0 M111,386.8h10.7",
			                "duration": 5000
			            }
			            
			        ],
			        "dimensions": {
			            "width": 600,
			            "height": 500
			        }
			    }
			};
	</script>
@endsection