@extends('template.showcaseTemplate')
@section('title')
	<title>{{$detail->showcase_name}}</title>
@endsection

@section('showcase-title')
	<h2>{{$detail->showcase_name}}</h2>
	<p>@foreach($detail->getCategory as $key => $value)
	    @if (count($detail->getCategory) == 1 || $key==count($detail->getCategory)-1)
	    {{$value->category_name}}
	    @else
	    {{$value->category_name}} & 
	    @endif
	  @endforeach</p>
@endsection

@section('showcase')
	<section id="pakelan-hero">
		<img src="{{asset('images/showcase/pakelan/bg-hero.jpg')}}" class="img-responsive">
	</section>

	<section id="pakelan-main">
		<div class="col-md-6 col-sm-6 col-xs-6">
			<div class="pakelan-main">
				<img src="{{asset('images/showcase/pakelan/crab.jpg')}}" class="img-responsive">
			</div>
		</div>
		
		<div class="col-md-6 col-md-offset-6 col-sm-6 col-sm-offset-6 col-xs-6 col-xs-offset-6 pakelan-main-text">
			<h3>{{$detail->title1_h3}}</h3>
			<h2>{{$detail->title1_h2}}</h2>
			<p>{{$detail->desc1}}</p>
		</div>
	</section>

	<section id="pakelan-main-2">
		<div class="col-md-6 col-sm-6 col-xs-6 pakelan-main-2">
			<h3>{{$detail->title2_h3}}</h3>
			<h2>{{$detail->title2_h2}}</h2>
			<p>{{$detail->desc2}}</p>
		</div>
		<img src="{{asset('images/showcase/pakelan/hand.png')}}" class="img-responsive pakelan-hand">
	</section>

	<section id="pakelan-menu">
		<div class="col-md-12 pakelan-menu">
			<div class="col-md-4 col-sm-4 col-xs-4 pakelan-menu-box">
				<img src="{{asset('images/showcase/pakelan/menu-1.png')}}" class="img-responsive pakelan-menu-img">
			</div>
			<div class="col-md-4 col-sm-4 col-xs-4 pakelan-menu-box">
				<img src="{{asset('images/showcase/pakelan/menu-2.png')}}" class="img-responsive pakelan-menu-img">
			</div>
			<div class="col-md-4 col-sm-4 col-xs-4 pakelan-menu-box">
				<img src="{{asset('images/showcase/pakelan/menu-3.png')}}" class="img-responsive pakelan-menu-img">
			</div>
		</div>
	</section>
@endsection