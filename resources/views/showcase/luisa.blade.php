@extends('template.showcaseTemplate')
@section('title')
	<title>{{$detail->showcase_name}}</title>
@endsection

@section('showcase-title')
	<h2>{{$detail->showcase_name}}</h2>
	<p>Packaging Design</p>
@endsection

@section('showcase')
	<section id="luisa-main">
		<div class="col-md-6 col-sm-6 col-xs-6 luisa-main">
			<h3>Lorem Ipsum</h3>
			<h2>Dolor Sit Amet</h2>
			<p>{{$detail->desc1}}</p>
		</div>
	</section>

	<section id="luisa-main-2">
		<div class="col-md-6 col-sm-6 col-xs-6">
			<div class="luisa-logo-box">
				<img src="{{asset('images/showcase/luisa/luisa-logo.png')}}" class="img-responsive">
			</div>
		</div>
		<div class="col-md-6 col-sm-6 col-xs-6 luisa-main-2">
			<h3>Lorem Ipsum</h3>
			<h2>Dolor Sit Amet</h2>
			<p>{{$detail->desc2}}</p>
		</div>
	</section>

	<section id="luisa-logo">
		<div class="col-md-5 col-sm-5 col-xs-5 luisa-logo-bw">
			<div class="col-md-12 col-sm-12 col-xs-12 luisa-black">
				<img src="{{asset('images/showcase/luisa/luisa-black.png')}}" class="img-responsive">
			</div>
			<div class="col-md-12 col-sm-12 col-xs-12 luisa-white">
				<img src="{{asset('images/showcase/luisa/luisa-white.png')}}" class="img-responsive">
			</div>
		</div>
		<div class="col-md-7 col-sm-7 col-xs-7 luisa-logo-gold">
			<img src="{{asset('images/showcase/luisa/luisa-gold.png')}}" class="img-responsive">
		</div>
	</section>

	<div class="clearfix"></div>

	<section id="luisa-product">
		<div class="luisa-product">
			<h3>Lorem Ipsum</h3>
			<h2>Dolor Sit Amet</h2>
			<p>{{$detail->desc3}}</p>
		</div>
	</section>

	<section id="luisa-product-2">
		<img src="{{asset('images/showcase/luisa/front.png')}}" class="img-responsive luisa-front">
		<img src="{{asset('images/showcase/luisa/back.png')}}" class="img-responsive luisa-back">
	</section>
@endsection