@extends('template.cyberTemplate')
<!-- @yield('css') -->

@yield('content')
	<header id="header-sc">
		<div class="container">
			<a href="{{url('/')}}"><img src="{{asset('images/showcase/logo-sc.svg')}}" class="img-responsive logo-sc"></a>
			<div class="search-box">
				<form action="{{url('/search')}}" method="get" enctype="multipart/form-data">
					{{ csrf_field() }}
				<input type="text" class="search-input" name="searchShowcase">
		        <button type="submit"><i class="fa fa-search search-icon"></i></button>
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
	
