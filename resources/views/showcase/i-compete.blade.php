@extends('template.showcaseTemplate')
@section('title')
	<title>{{$detail->showcase_naame}}</title>
@endsection

@section('showcase-title')
	<h2>{{$detail->showcase_naame}}</h2>
	<p>Website // Task : design, front end, back end // Status : active</p>
@endsection

@section('showcase')
	<section id="hero-sc" style="background: url('{{asset('images/showcase/icompete/bg-hero.jpg')}}') no-repeat; background-size: cover; background-position: center; position: relative;">
		<div class="col-md-6 col-md-offset-6 col-sm-6 col-sm-offset-6 col-xs-6 col-xs-offset-6 icompete-hero">
			<h3>Exceed your results & enhance your rank</h3>
			<h2>with icompete</h2>
			<p>{{$detail->desc1}}</p>
		</div>
	</section>

	<section id="icompete-main">
		<div class="panel-body">
			<div class="col-xs-12 pad-hidden-box">
				<img src="{{asset('images/showcase/icompete/pad.svg')}}" class="img-responsive pad-hidden">
			</div>
			<div class="col-md-6 col-sm-6 col-xs-12 icompete-main">
				<h3>The Biggest</h3>
				<h2>PLATFORM EVER</h2>
				<p>{{$detail->desc2}}</p>
			</div>
			<div class="col-md-6 col-sm-6">
				<img src="{{asset('images/showcase/icompete/pad.svg')}}" class="img-responsive pad-shown">
			</div>
		</div>
	</section>

	<section id="icompete-tagline">
		<div class="icompete-tagline">
			<h3>Give Wings</h3>
			<h2>TO YOUR DREAM CARRIER</h2>
		</div>
	</section>

	<section id="icompete-full">
		<img src="{{asset('images/showcase/icompete/bg-3.jpg')}}" class="img-responsive">
	</section>
@endsection