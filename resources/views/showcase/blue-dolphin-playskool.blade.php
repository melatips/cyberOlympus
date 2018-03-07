@extends('template.showcaseTemplate')
@section('title')
	<title>{{$detail->showcase_name}}</title>
@endsection

@section('showcase-title')
	<h2>{{$detail->showcase_name}}</h2>
	<p>Branding Design</p>
@endsection

@section('showcase')
	<section id="blue-dolphin-hero">
		<div class="col-md-6 col-md-offset-6 col-sm-6 col-sm-offset-6 col-xs-6 col-xs-offset-6 blue-dolphin-hero">
			<h3>(Delphinus Delphis)</h3>
			<h2>DOLPHIN</h2>
			<p>{{$detail->desc1}}.</p>
		</div>
	</section>

	<section id="children">
		<div class="col-md-6 col-sm-6 col-xs-6 children">
			<h2>{{$detail->title2}}</h2>
			<p>{{$detail->desc2}}</p>
		</div>
	</section>

	<section id="blue-bc">
		<img src="{{asset('images/showcase/blue-dolphin/bc-front.svg')}}" class="img-responsive blue-front">
		<img src="{{asset('images/showcase/blue-dolphin/bc-back.svg')}}" class="img-responsive blue-back">
	</section>

	<section id="blue-full">
		<img src="{{asset('images/showcase/blue-dolphin/bg-full.jpg')}}" class="img-responsive">
	</section>
@endsection