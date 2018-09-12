@extends('template.cyberTemplate')
@section('title')
<title>Cyber Olympus</title>
@endsection

@section('content')

	<!-- <section id="loader-wrapper">
		<div id="loading-page" class="bg">
			<div class="container">
				<img src="{{asset('images/loading-HD2.gif')}}" class="img-responsive loading-icon">
			</div>
		</div>
	</section> -->

	<section id="landing-page" class="bg">
		<div class="container">
			<!-- <img src="{{asset('images/logo-cyber.svg')}}" class="img-responsive logo" style="display: none;"> -->
			<object type="image/svg+xml" class="img-responsive logo" style="display: none;" data="{{asset('images/logo-cyber.svg')}}">
			  Image not found
			</object>
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
						<!-- <img src="{{asset('images/feature-icon.svg')}}" class="img-responsive feature-icon"> -->
						<object type="image/svg+xml" class="img-responsive feature-icon" data="{{asset('images/feature-icon.svg')}}">
						  Image not found
						</object>
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
						<!-- <img src="{{asset('images/feature-icon.svg')}}" class="img-responsive feature-icon"> -->
						<object type="image/svg+xml" class="img-responsive feature-icon" data="{{asset('images/feature-icon.svg')}}">
						  Image not found
						</object>
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
							<!-- <img src="{{asset('images/feature-icon-2.svg')}}" class="img-responsive feature-icon"> -->
							<object type="image/svg+xml" class="img-responsive feature-icon" data="{{asset('images/feature-icon-2.svg')}}">
						  Image not found
						</object>
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
							<!-- <img src="{{asset('images/feature-icon-2.svg')}}" class="img-responsive feature-icon"> -->
							<object type="image/svg+xml" class="img-responsive feature-icon" data="{{asset('images/feature-icon-2.svg')}}">
							  Image not found
							</object>
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
							<!-- <img src="{{asset('images/feature-icon-3.svg')}}" class="img-responsive feature-icon"> -->
							<object type="image/svg+xml" class="img-responsive feature-icon" data="{{asset('images/feature-icon-3.svg')}}">
								Image not found
							</object>
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
							<!-- <img src="{{asset('images/feature-icon-3.svg')}}" class="img-responsive feature-icon"> -->
							<object type="image/svg+xml" class="img-responsive feature-icon" data="{{asset('images/feature-icon-3.svg')}}">
								Image not found
							</object>
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
							<!-- <img src="{{asset('images/feature-icon-4.svg')}}" class="img-responsive feature-icon"> -->
							<object type="image/svg+xml" class="img-responsive feature-icon" data="{{asset('images/feature-icon-4.svg')}}">
								Image not found
							</object>
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
							<!-- <img src="{{asset('images/feature-icon-4.svg')}}" class="img-responsive feature-icon"> -->
							<object type="image/svg+xml" class="img-responsive feature-icon" data="{{asset('images/feature-icon-4.svg')}}">
								Image not found
							</object>
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
							<!-- <img src="{{asset('images/step1.svg')}}" class="img-responsive step-img w3-animate-zoom"> -->
							<object type="image/svg+xml" class="img-responsive step-img w3-animate-zoom" data="{{asset('images/step1.svg')}}">
							  Image not found
							</object>
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
							<a class="right step-icon-box js-paint chev" href="#step-slide" data-slide="next" onclick="plusDivs(1, 0)">
							    <i class="fa fa-chevron-circle-right"></i>
							    <span class="sr-only">Next</span>
							</a>
						</div>
				    </div>

				    <div class="item">
				    	<div class="col-md-5 col-sm-12 col-xs-12 step-box">
							<!-- <img src="{{asset('images/step2.svg')}}" class="img-responsive step-img w3-animate-bottom"> -->
							<object type="image/svg+xml" class="img-responsive step-img w3-animate-bottom" data="{{asset('images/step2.svg')}}">
							  Image not found
							</object>
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
							<a class="left step-icon-box chev" href="#step-slide" data-slide="prev" onclick="plusDivs(-1, 0)">
							    <i class="fa fa-chevron-circle-left"></i>
							    <span class="sr-only">Previous</span>
							</a>
							<a class="right  step-icon-box chev" href="#step-slide" data-slide="next" onclick="plusDivs(1, 0)">
							    <i class="fa fa-chevron-circle-right"></i>
							    <span class="sr-only">Next</span>
							</a>
						</div>
				    </div>

				    <div class="item">
				    	<div class="col-md-5 col-sm-12 col-xs-12 step-box">
							<!-- <img src="{{asset('images/step3.svg')}}" class="img-responsive step-img w3-animate-top"> -->
							<object type="image/svg+xml" class="img-responsive step-img w3-animate-top" data="{{asset('images/step3.svg')}}">
							  Image not found
							</object>
							<img src="{{asset('images/circle-tiny.png')}}" class="img-responsive circle-move">
							<img src="{{asset('images/circle-mid.png')}}" class="img-responsive circle-move2">
						</div>
				    	<div class="col-md-7 col-sm-12 col-xs-12 step w3-animate-right">
							<h3 class="sub-title">How We Do It</h3>
							<h2 class="title-thin">Site</h2>
							<h2 class="title-thick">MAP</h2>
							<p class="feature-text">A site map guides end users who are lost in the structure or need to find a piece of information quickly. Rather than simply listing pages, including links and a hierarchy of page organization is good practice.</p>
							<div class="clearfix"></div>
							<a class="left step-icon-box chev" href="#step-slide" data-slide="prev" onclick="plusDivs(-1, 0)">
							    <i class="fa fa-chevron-circle-left"></i>
							    <span class="sr-only">Previous</span>
							</a>
							<a class="right  step-icon-box chev" href="#step-slide" data-slide="next" onclick="plusDivs(1, 0)">
							    <i class="fa fa-chevron-circle-right"></i>
							    <span class="sr-only">Next</span>
							</a>
						</div>
				    </div>

				    <div class="item">
				    	<div class="col-md-5 col-sm-12 col-xs-12 step-box">
							<!-- <img src="{{asset('images/step4.svg')}}" class="img-responsive step-img w3-animate-zoom"> -->
							<object type="image/svg+xml" class="img-responsive step-img w3-animate-zoom" data="{{asset('images/step4.svg')}}">
							  Image not found
							</object>
							<img src="{{asset('images/circle-tiny.png')}}" class="img-responsive circle-move">
							<img src="{{asset('images/circle-mid.png')}}" class="img-responsive circle-move2">
						</div>
				    	<div class="col-md-7 col-sm-12 col-xs-12 step w3-animate-right">
							<h3 class="sub-title">How We Do It</h3>
							<h2 class="title-thick">DRAFTING</h2>
							<p class="feature-text">This is where the visual layout of the website begins to take shape. Using information gathered from the client in the planning phase, begin designing the layout  using a wireframe.</p>
							<div class="clearfix"></div>
							<a class="left step-icon-box chev" href="#step-slide" data-slide="prev" onclick="plusDivs(-1, 0)">
							    <i class="fa fa-chevron-circle-left"></i>
							    <span class="sr-only">Previous</span>
							</a>
							<a class="right  step-icon-box chev" href="#step-slide" data-slide="next" onclick="plusDivs(1, 0)">
							    <i class="fa fa-chevron-circle-right"></i>
							    <span class="sr-only">Next</span>
							</a>
						</div>
				    </div>

				    <div class="item">
				    	<div class="col-md-5 col-sm-12 col-xs-12 step-box">
							<!-- <img src="{{asset('images/step5.svg')}}" class="img-responsive step-img w3-animate-left"> -->
							<object type="image/svg+xml" class="img-responsive step-img w3-animate-left" data="{{asset('images/step5.svg')}}">
							  Image not found
							</object>
							<img src="{{asset('images/circle-tiny.png')}}" class="img-responsive circle-move">
							<img src="{{asset('images/circle-mid.png')}}" class="img-responsive circle-move2">
						</div>
				    	<div class="col-md-7 col-sm-12 col-xs-12 step w3-animate-right">
							<h3 class="sub-title">How We Do It</h3>
							<h2 class="title-thick">REVIEW</h2>
							<p class="feature-text">A cycle of reviewing, tweaking and approving the mock-ups often takes piece until (ideally) both client and contractor are satisfied with the design. This is the easiest time to make changes, not after the design has been coded.</p>
							<!-- <i class="fa fa-chevron-circle-right"></i> -->
							<div class="clearfix"></div>
							<a class="left step-icon-box chev" href="#step-slide" data-slide="prev" onclick="plusDivs(-1, 0)">
							    <i class="fa fa-chevron-circle-left"></i>
							    <span class="sr-only">Previous</span>
							</a>
							<a class="right  step-icon-box chev" href="#step-slide" data-slide="next" onclick="plusDivs(1, 0)">
							    <i class="fa fa-chevron-circle-right"></i>
							    <span class="sr-only">Next</span>
							</a>
						</div>
				    </div>

				    <div class="item">
				    	<div class="col-md-5 col-sm-12 col-xs-12 step-box">
							<!-- <img src="{{asset('images/step6.svg')}}" class="img-responsive step-img w3-animate-zoom"> -->
							<object type="image/svg+xml" class="img-responsive step-img w3-animate-zoom" data="{{asset('images/step6.svg')}}">
							  Image not found
							</object>
							<img src="{{asset('images/circle-tiny.png')}}" class="img-responsive circle-move">
							<img src="{{asset('images/circle-mid.png')}}" class="img-responsive circle-move2">
						</div>
				    	<div class="col-md-7 col-sm-12 col-xs-12 step w3-animate-right">
							<h3 class="sub-title">How We Do It</h3>
							<h2 class="title-thin">Slice &</h2>
							<h2 class="title-thick">CODE</h2>
							<p class="feature-text">It's coding time. Slice the final Photoshop mock-up, and write the HTML and CSS code for the basic design. Adding interactive elements and jQuery, building Content Management System.</p>
							<a class="left step-icon-box chev" href="#step-slide" data-slide="prev" onclick="plusDivs(-1, 0)">
							    <i class="fa fa-chevron-circle-left"></i>
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
				    		<img src="{{asset('images/showcase/bg/chuar-chuar.jpg')}}" class="img-responsive kaiser-hidden">
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

								<object type="image/svg+xml" class="img-responsive chuar-img" data="{{asset('images/showcase/dashboard/chuar-hand.svg')}}">
								  Image not found
								</object>
								
								<div class="col-md-6 col-sm-12 col-xs-12 controller-box">
									<a class="left showcase-icon-box show-chev" href="#showcase-slide" data-slide="prev">
									    <i class="fa fa-chevron-circle-left"></i>
									    <span class="sr-only">Previous</span>
									</a>
									<a class="right showcase-icon-box show-chev" href="#showcase-slide" data-slide="next">
									    <i class="fa fa-chevron-circle-right"></i>
									    <span class="sr-only">Next</span>
									</a>
								</div>

								<div class="col-md-12 col-sm-12 col-xs-12 button-box">
									<a href="{{url('showcase/category')}}" class="btn cat-btn">View All Category</a>
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

								<object type="image/svg+xml" class="img-responsive pakelan-img" data="{{asset('images/showcase/dashboard/pakelan-img.svg')}}">
								  Image not found
								</object>

								<div class="col-md-6  col-sm-12 col-xs-12 col-md-offset-6 controller-box2">
									<a class="left showcase-icon-box show-chev" href="#showcase-slide" data-slide="prev">
									    <i class="fa fa-chevron-circle-left"></i>
									    <span class="sr-only">Previous</span>
									</a>
									<a class="right showcase-icon-box show-chev" href="#showcase-slide" data-slide="next">
									    <i class="fa fa-chevron-circle-right"></i>
									    <span class="sr-only">Next</span>
									</a>
								</div>
								<div class="col-md-12 col-sm-12 col-xs-12 button-box">
									<a href="{{url('showcase/category')}}" class="btn cat-btn">View All Category</a>
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
									<h2 class="title-thick" style="color: #ff6b00; font-size: 38px;">KAISER MEDICAL INC</h2>
									<p class="feature-text" style="color: black">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
									<a href="{{url('showcase/detail/21')}}" class="view" style="color: #0090c3; font-weight: 100;">View Detail <i class="fa fa-angle-right"></i><i class="fa fa-angle-right"></i></a>
								</div>

								<div class="col-md-6 col-sm-6 kaiser-side-box">
									<img src="{{asset('images/showcase/dashboard/kaiser-side3.png')}}" class="img-responsive kaiser-side">
								</div>

								
								<div class="col-md-6 col-sm-12 col-xs-12 controller-box">
									<a class="left showcase-icon-box chev" href="#showcase-slide" data-slide="prev">
									    <i class="fa fa-chevron-circle-left"></i>
									    <span class="sr-only">Previous</span>
									</a>
									<a class="right showcase-icon-box chev" href="#showcase-slide" data-slide="next">
									    <i class="fa fa-chevron-circle-right"></i>
									    <span class="sr-only">Next</span>
									</a>
								</div>
								<div class="col-md-12 col-sm-12 col-xs-12 button-box">
									<a href="{{url('showcase/category')}}" class="btn cat-btn-kaiser">View All Category</a>
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

								<object type="image/svg+xml" class="img-responsive ab-img" data="{{asset('images/showcase/dashboard/ab-logo.svg')}}">
								  Image not found
								</object>

								<div class="col-md-5 col-sm-12 col-xs-12 col-md-offset-7 controller-box2">
									<a class="left showcase-icon-box show-chev" href="#showcase-slide" data-slide="prev">
									    <i class="fa fa-chevron-circle-left"></i>
									    <span class="sr-only">Previous</span>
									</a>
									<a class="right showcase-icon-box show-chev" href="#showcase-slide" data-slide="next">
									    <i class="fa fa-chevron-circle-right"></i>
									    <span class="sr-only">Next</span>
									</a>
								</div>
								<div class="col-md-12 col-sm-12 col-xs-12 button-box">
									<a href="{{url('showcase/category')}}" class="btn cat-btn">View All Category</a>
								</div>
							</div>
						</div>
				    </div>
				</div>

				<div class="item">
				    <div class="showcase-inner" style="background: url({{asset('images/showcase/dashboard/dg-bg2.png')}}) no-repeat; background-size: cover; background-position: center;">
				    	<div class="bg-trans">
				    		<img src="{{asset('images/showcase/bg/dwi-golden-electric.jpg')}}" class="img-responsive kaiser-hidden">
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
									<a class="left showcase-icon-box show-chev" href="#showcase-slide" data-slide="prev">
									    <i class="fa fa-chevron-circle-left"></i>
									    <span class="sr-only">Previous</span>
									</a>
									<a class="right showcase-icon-box show-chev" href="#showcase-slide" data-slide="next">
									    <i class="fa fa-chevron-circle-right"></i>
									    <span class="sr-only">Next</span>
									</a>
								</div>
								<div class="col-md-12 col-sm-12 col-xs-12 button-box">
									<a href="{{url('showcase/category')}}" class="btn cat-btn">View All Category</a>
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
					<a href="tel:{{$basic->phone}}" style="text-decoration: underline; color: black"><h2 class="contact-title">{{$basic->phone}}</h2></a>
				</div>
				<div class="col-md-6 col-sm-12 col-xs-12">
					<h3 class="contact-title">Visit Us. <strong>Let's Collaborate & Create.</strong></h3>
					<h3 class="title-hidden">Visit Us.<br><strong>Let's Collaborate & Create.</strong></h3>
					<p class="par-contact">{{$basic->full_address}}
					<br>email us <strong>{{$basic->email}}</strong></p>
					<a class="socmed" href="{{url($basic->facebook)}}">
						<!-- <object type="image/svg+xml" data="{{asset('images/facebook.svg')}}">
						  Image not found
						</object> -->
						<i class="fa fa-facebook-square"></i>
					</a>
					<a class="socmed" href="{{$basic->linkedin}}">
						<object type="image/svg+xml" data="{{asset('images/linkedin.svg')}}">
						  Image not found
						</object>
					</a>
					<a class="socmed" href="{{$basic->twitter}}">
						<object type="image/svg+xml" data="{{asset('images/twitter.svg')}}">
						  Image not found
						</object>
					</a>
					<a class="socmed" href="{{$basic->instagram}}">
						<object type="image/svg+xml" data="{{asset('images/instagram.svg')}}">
						  Image not found
						</object>
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
@endsection

@section('js')
	<script type="text/javascript">
		$(".carousel").swipe({

		  swipe: function(event, direction, distance, duration, fingerCount, fingerData) {

		    if (direction == 'left') $(this).carousel('next');
		    if (direction == 'right') $(this).carousel('prev');

		  },
		  allowPageScroll:"vertical"

		});
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
@endsection