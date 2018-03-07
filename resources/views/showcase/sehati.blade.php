@extends('template.showcaseTemplate')
@section('title')
	<title>{{$detail->showcase_name}}</title>
@endsection

@section('showcase-title')
	<h2>{{$detail->showcase_name}}</h2>
	<p>Logo & Branding Design</p>
@endsection

@section('showcase')
	<section id="sehati-hero">
		<div class="col-md-6 col-sm-6 col-xs-12 sehati-hero-img">
			<img src="{{asset('images/showcase/sehati/heart1.svg')}}" class="img-responsive heart1">
			<img src="{{asset('images/showcase/sehati/heart.svg')}}" class="img-responsive heart">
		</div>

		<div class="col-md-6 col-sm-6 sehati-hero col-xs-12">
			<h3>Lorem Ipsum</h3>
			<h2>Dolor Sit Amet</h2>
			<p>{{$detail->desc1}}</p>
		</div>
	</section>

	<section id="sehati-main">
		<div class="col-md-7 col-sm-6 col-xs-6 sehati-main">
			<h3>Lorem Ipsum</h3>
			<h2>Dolor Sit Amet</h2>
			<p>{{$detail->desc2}}</p>
		</div>
		<div class="col-md-5 col-sm-6 col-xs-6 sehati-main-side">
			<img src="{{asset('images/showcase/sehati/side.jpg')}}" class="img-responsive">
		</div>
	</section>

	<section id="sehati-colour">
		<div class="sehati-colour">
			<div class="col-md-6 col-sm-12 col-xs-12 sehati-circle">
				<div class="circle1-sehati"></div>
				<div class="circle2-sehati"></div>
				<div class="circle3-sehati"></div>
			</div>

			<div class="col-md-6 col-sm-12 col-xs-12 sehati-colour-text">
				<h3>Meaning &</h3>
				<h2>Colour</h2>
				<p>{{$detail->desc3}}</p>
			</div>
		</div>
	</section>

	<section id="sehati-logo">
		<div class="col-md-12 col-sm-12 col-xs-12 sehati-color">
			<img src="{{asset('images/showcase/sehati/logo-color.png')}}" class="img-responsive">
		</div>
		<div class="col-md-12 col-sm-12 col-xs-12 sehati-white-logo">
			<div class="col-md-6 col-sm-6 col-xs-6 sehati-black">
				<img src="{{asset('images/showcase/sehati/logo-black.png')}}" class="img-responsive">
			</div>
			<div class="col-md-6 col-sm-6 col-xs-6 sehati-white">
				<img src="{{asset('images/showcase/sehati/logo-white.png')}}" class="img-responsive">
			</div>
		</div>
	</section>

	<section id="sehati-full">
		<img src="{{asset('images/showcase/sehati/bg-full.jpg')}}" class="img-responsive">
	</section>
@endsection