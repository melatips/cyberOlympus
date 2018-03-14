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
	<section id="pouch-hero">
		<img src="{{asset('images/showcase/p-pouch/bg-hero.jpg')}}" class="img-responsive">
	</section>

	<section id="pouch-main">
		<div class="col-md-6 col-md-offset-6">
			<h3>{{$detail->title1_h3}}</h3>
			<h2>{{$detail->title1_h2}}</h2>
			<p>{{$detail->desc1}}</p>
		</div>
	</section>

	<section id="pouch-main-2">
		<div class="col-md-6">
			<h3>{{$detail->title2_h3}}</h3>
			<h2>{{$detail->title2_h2}}</h2>
			<p>{{$detail->desc2}}</p>
		</div>
	</section>

	<section id="pouch-logo">
		<div class="col-md-8 col-sm-8 col-xs-8 noe-logoc-bg">
			<img src="{{asset('images/showcase/noe/color-logo.png')}}" class="img-responsive noe-logoc">
		</div>
		<div class="col-md-4 col-sm-4 col-xs-4 noe-logo-white">
			<div class="col-md-12 col-sm-12 col-xs-12 noe-logo1-bg">
				<img src="{{asset('images/showcase/noe/white-logo.png')}}" class="img-responsive noe-logo1">
			</div>
			<div class="col-md-12 col-sm-12 col-xs-12 noe-logo2-bg">
				<img src="{{asset('images/showcase/noe/white-logo.png')}}" class="img-responsive noe-logo2">
			</div>
		</div>
	</section>
@endsection