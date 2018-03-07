@extends('template.cyberTemplate')
<!-- @yield('css') -->

@yield('content')
	<header id="header-sc">
		<div class="container">
			<a href="{{url('/')}}"><img src="{{asset('images/showcase/logo-sc.svg')}}" class="img-responsive logo-sc"></a>
			<div class="search-box">
				<input type="text">
		        <i class="fa fa-search"></i>
		        <i class="fa fa-chevron-down"></i>
		    </div>
		</div>
	</header>

	<section id="main-title">
		<div class="container">
			@yield('showcase-title')
		</div>
	</section>

@yield('showcase')
	
