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
	  @endforeach // Task : design, front end, back end // Status : active</p>
@endsection

@section('showcase')
	<section id="finder-hero">
		<!-- <img src="assets" class="img-responsive"> -->
		<div class="col-md-6 col-sm-6 col-xs-6">
			<div class="finder-click-box">
				<a href="" class="finder-click">{{$detail->title1_h3}}</a>
			</div>

			<img src="{{asset('images/showcase/adhibuana/pointer.svg')}}" class="img-responsive ab-pointer">
		</div>
	</section>

	<section id="finder-main">
		<div class="col-md-12 col-sm-12 col-xs-12 finder-main">
			<div class="col-md-6 col-sm-6 col-xs-6 finder-main-img">
				<img src="{{asset('images/showcase/people-finder/circle2.png')}}" class="img-responsive finder-circle">
				<img src="{{asset('images/showcase/people-finder/lup.png')}}" class="img-responsive finder-lup ">
			</div>
			<div class="col-md-6 col-sm-6 col-xs-6 finder-main-text">
				<h3>{{$detail->title2_h3}}</h3>
				<h2>{{$detail->title2_h2}}</h2>
				<p>{{$detail->desc2}}</p>
			</div>
		</div>
	</section>

	<div class="clearfix"></div>

	<section id="finder-main-2">
		<div class="col-md-12 col-sm-12 col-xs-12 finder-main-2">
			<div class="col-md-6 col-sm-6 col-xs-6 finder-main-2text">
				<h3>{{$detail->title3_h3}}</h3>
				<h2>{{$detail->title3_h2}}</h2>
				<p>{{$detail->desc3}}</p>
			</div>
			<div class="col-md-6 col-sm-6 col-xs-6 finder-side-box">
				<div class="finder-side">
					<!-- <img src="assets/images/showcase/people-finder/side.png" class="img-responsive"> -->
				</div>
			</div>
		</div>
	</section>

	<div class="clearfix"></div>

	<section class="finder-full">
		<img src="{{asset('images/showcase/people-finder/bg-full.jpg')}}" class="img-responsive">
	</section>
@endsection