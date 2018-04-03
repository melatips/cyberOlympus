@extends('template.cyberTemplate')
<!-- @yield('css') -->

@yield('content')
	<header id="header-sc">
		<div class="">
			<a href="{{url('/')}}"><img src="{{asset('images/showcase/logo-sc.svg')}}" class="img-responsive logo-sc"></a>
			<div class="search-box">
				<form action="{{url('/search')}}" method="get" enctype="multipart/form-data">
					{{ csrf_field() }}
				<input type="text" class="search-input" name="searchShowcase">
		        <button type="submit" class="search-icon"><i class="fa fa-search search-icon"></i></button>
		        <!-- <i class="fa fa-chevron-down search-icon"></i> -->
		        </form>
		    </div>
		</div>
	</header>

	<section id="main-title">
		<div class="container">
			@yield('showcase-title')
		</div>
	</section>

@yield('showcase')

<div class="clearfix"></div>
<footer id="footer">
    <div class="container">
      <div class="footer-main">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="col-md-4 col-sm-12 col-xs-12 footer">
            <a href="{{url('/about-us')}}">About Cyber Olympus</a>
            <a href="{{url('/#feature')}}">Features</a>
            <a href="{{url('/#step')}}">How we do it</a>
          </div>
          <div class="col-md-4 col-sm-12 col-xs-12 footer">
            <a href="{{url('/showcase/category')}}">Showcase</a>
            <a href="{{url('/#contact')}}">Contact Us</a>
            
          </div>
          <div class="col-md-4 col-sm-12 col-xs-12 footer">
            <a href="{{url('/careers')}}">Careers</a>
            <a href="{{url('/blog')}}">Blog</a>
          </div>
        </div>
      <div class="col-md-12 col-sm-12 col-xs-12 copy">
        Cyber Olympus Copyright 2018. All rights reserved.
      </div>

    </div>
    </div>
</footer>
	
