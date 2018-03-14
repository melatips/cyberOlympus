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
	  @endforeach
	// Task : design, front end, back end // Status : active</p>
	<!-- <p>@foreach($detail->getCategory as $val) {{$val->category_name}} @endforeach // Task : design, front end, back end // Status : active</p> -->
@endsection

@section('showcase')
	<section id="hero-sc" style="background: url('{{asset('images/showcase/icompete/bg-hero.jpg')}}') no-repeat; background-size: cover; background-position: center; position: relative;">
		<div class="col-md-6 col-md-offset-6 col-sm-6 col-sm-offset-6 col-xs-6 col-xs-offset-6 icompete-hero">
			<h3>{{$detail->title1_h3}}</h3>
			<h2>{{$detail->title1_h2}}</h2>
			<p>{{$detail->desc1}}</p>
		</div>
	</section>

	<section id="icompete-main">
		<div class="panel-body">
			<div class="col-xs-12 pad-hidden-box">
				<img src="{{asset('images/showcase/icompete/pad.svg')}}" class="img-responsive pad-hidden">
			</div>
			<div class="col-md-6 col-sm-6 col-xs-12 icompete-main">
				<h3>{{$detail->title2_h3}}</h3>
				<h2>{{$detail->title2_h2}}</h2>
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