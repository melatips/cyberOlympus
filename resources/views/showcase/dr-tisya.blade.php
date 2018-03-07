@extends('template.showcaseTemplate')
@section('title')
	<title>{{$detail->showcase_name}}</title>
@endsection

@section('showcase-title')
	<h2>{{$detail->showcase_name}}</h2>
	<p>Stationery</p>
@endsection

@section('showcase')
	<section id="tisya-hero">
		<img src="{{asset('images/showcase/dr-tisya/bg-hero.jpg')}}" class="img-responsive">
	</section>

	<section id="profile" style="background: url('{{asset('images/showcase/dr-tisya/bg-profile.jpg')}}') no-repeat; background-size: cover; background-position: center; color: white;">
		<div class="container">
			<div class="col-md-6 col-sm-6 col-xs-6">
				<h2><strong>{{$detail->title1}}</strong></h2>
				<p>{{$detail->desc1}}</p>
			</div>
		</div>
	</section>

	<section id="tisya-bc">
		<img src="{{asset('images/showcase/dr-tisya/bc.png')}}" class="img-responsive">
	</section>

	<section id="tisya-full">
		<img src="{{asset('images/showcase/dr-tisya/bg-big-bc.jpg')}}" class="img-responsive">
	</section>
@endsection