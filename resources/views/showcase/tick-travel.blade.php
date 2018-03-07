@extends('template.showcaseTemplate')
@section('title')
	<title>{{$detail->showcase_name}}</title>
@endsection

@section('showcase-title')
	<h2>{{$detail->showcase_name}}</h2>
	<p>Logo & Branding Design</p>
@endsection

@section('showcase')
	<section id="tick-hero">
		<img src="{{asset('images/showcase/tick-travel/bg-hero.jpg')}}" class="img-responsive">
	</section>

	<section id="tick-main">
		<div class="col-md-6 col-sm-6 col-xs-6 tick-main">
			<h3>Lorem Ipsum</h3>
			<h2>Dolor Sit Amet</h2>
			<p>{{$detail->desc1}}</p>
		</div>
	</section>

	<section id="tick-travel">
		<div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-6 col-sm-offset-6 tick-travel">
			<h3>Lorem Ipsum</h3>
			<h2>Dolor Sit Amet</h2>
			<p>{{$detail->desc2}}</p>
		</div>
	</section>

	<section id="tick-full">
		<img src="{{asset('images/showcase/tick-travel/bg-full.jpg')}}" class="img-responsive">
	</section>
@endsection