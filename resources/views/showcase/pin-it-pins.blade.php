@extends('template.showcaseTemplate')
@section('title')
	<title>{{ucwords($detail->showcase_name)}}</title>
@endsection

@section('showcase-title')
	<h2>{{$detail->showcase_name}}</h2>
	<p>@foreach($detail->getCategory as $key => $value)
	    @if (count($detail->getCategory) == 1 || $key==count($detail->getCategory)-1)
	    {{$value->category_name}}
	    @else
	    {{$value->category_name}} & 
	    @endif
	  @endforeach // Task : design, front end, back end // Status : active</p>
@endsection

@section('showcase')
	<section id="hero-sc" style="background: url('{{asset('images/showcase/pin-it-pins/bg-hero.jpg')}}') no-repeat; background-size: cover; background-position: center; position: relative;">
	</section>

	<section id="pin1">
		<div class="col-md-6 col-sm-12 col-xs-12 pin1 showcase-font">
			<h3>{{$detail->title1_h3}}</h3>
			<h2>{{$detail->title1_h2}}</h2>
			<p>{{$detail->desc1}}</p>
		</div>
		<div class="col-md-6 col-md-offset-6 col-sm-12 col-xs-12 pin-icon">
			<img src="{{asset('images/showcase/pin-it-pins/icon1.png')}}" class="img-responsive pin-icon1">
			<img src="{{asset('images/showcase/pin-it-pins/icon2.png')}}" class="img-responsive pin-icon2">
			<img src="{{asset('images/showcase/pin-it-pins/icon3.png')}}" class="img-responsive pin-icon3">
		</div>
	</section>
@endsection