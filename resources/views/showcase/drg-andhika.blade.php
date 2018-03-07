@extends('template.showcaseTemplate')
@section('title')
	<title>{{$detail->showcase_name}}</title>
@endsection

@section('showcase-title')
	<h2>{{$detail->showcase_name}}</h2>
	<p>Stationery</p>
@endsection

@section('showcase')
	<section id="andhika-hero">
		<img src="{{asset('images/showcase/drg-andhika/bg-hero.jpg')}}" class="img-responsive">
	</section>

	<section id="profile" style="background: url('{{asset('images/showcase/drg-andhika/bg-profile.jpg')}}') no-repeat; background-size: cover; background-position: center;">
		<div class="container">
			<div class="col-md-6 col-sm-6 col-xs-6">
				<h2><strong>{{$detail->title1}}</strong></h2>
				<p>{{$detail->desc1}}</p>
			</div>
		</div>
	</section>

	<section id="business-card">
		<div class="container">
			<div class="col-md-6 col-sm-6 col-xs-6">
				<img src="{{asset('images/showcase/drg-andhika/bc-back.png')}}" class="img-responsive bc1-andhika">
			</div>
			<div class="col-md-6 col-sm-6 col-xs-6">
				<img src="{{asset('images/showcase/drg-andhika/bc-front.png')}}" class="img-responsive bc2-andhika">
			</div>
		</div>	
	</section>

	<section id="andhika-full">
		<img src="{{asset('images/showcase/drg-andhika/bg-big-bc.jpg')}}" class="img-responsive">
	</section>
@endsection