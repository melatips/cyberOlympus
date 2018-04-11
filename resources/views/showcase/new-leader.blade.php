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
	<section id="hero-sc" style="background: url('{{asset('images/showcase/new-leader/bg-hero.jpg')}}') no-repeat; background-size: cover; background-position: center; position: relative;">
		<!-- <img src="{{asset('images/showcase/adhibuana/ab-logo.png')}}" class="img-responsive ab-logo"> -->
	</section>

	<section id="new-leader">
		<div class="new-leader">
			<div class="col-xs-12 new-leader-hidden">
				<img src="{{asset('images/showcase/new-leader/img-1.jpg')}}" class="img-responsive">
			</div>
		</div>

		<div class="col-md-6 col-sm-6 col-xs-12 new-leader-det">
			<h3>{{$detail->title2_h3}}</h3>
			<h2>{{$detail->title2_h2}}</h2>
			<p>{{$detail->desc2}}</p>
		</div>

		<div class="kaiser-detail-img">
			<div class="col-md-6 col-sm-6 new-leader-img">
				<img src="{{asset('images/showcase/new-leader/img-1.jpg')}}" class="img-responsive">
			</div>
		</div>
	</section>

	<section id="new-leader-click">
		<div class="new-leader-click-box">
			<a href="" class="new-leader-click">
				newleader.co.id
			</a>
		</div>
		<img src="{{asset('images/showcase/adhibuana/pointer.svg')}}" class="img-responsive new-leader-pointer">
	</section>

	<section id="new-leader-full">
		<img src="{{asset('images/showcase/new-leader/bg-full.jpg')}}" class="img-responsive">
	</section>
@endsection