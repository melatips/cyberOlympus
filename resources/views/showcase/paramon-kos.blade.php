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
	<section id="paramon1">
		<div class="container ">
			<div class="col-md-6 col-sm-12 col-xs-12 paramon1 showcase-font">
				<h3>{{$detail->title1_h3}}</h3>
				<h2>{{$detail->title1_h2}}</h2>
				<p>{{$detail->desc1}}</p>
			</div>
		</div>
	</section>

	<section id="paramon2">
		<div class="container">
			<div class="col-md-6 col-md-offset-6 col-sm-12 col-xs-12 paramon2 showcase-font">
				<h3>{{$detail->title1_h3}}</h3>
				<h2>{{$detail->title1_h2}}</h2>
				<p>{{$detail->desc1}}</p>
			</div>
		</div>
	</section>

	<section id="paramon-click">
		<div class="col-md-12 col-sm-12 col-xs-12 paramon-click-box">
			<a href="" class="paramon-click">
				paramonkos.com
			</a>
		</div>
		
		<!-- <img src="{{asset('images/showcase/adhibuana/pointer.svg')}}" class="img-responsive paramon-pointer"> -->
	</section>

	<section id="paramon-full">
		<img src="{{asset('images/showcase/paramon/bg-full.jpg')}}" class="img-responsive">
	</section>
@endsection