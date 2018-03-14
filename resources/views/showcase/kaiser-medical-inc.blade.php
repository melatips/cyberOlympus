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
	<section id="kaiser-detail">
		<div class="col-md-5 col-md-offset-7 col-sm-5 col-sm-offset-7 col-xs-5 col-xs-offset-7 kaiser-detail">
			<h3>{{$detail->title1_h3}}</h3>
			<h2>{{$detail->title1_h2}}</h2>
			<p>{{$detail->desc1}}</p>
		</div>
	</section>

	<section id="kaiser-detail-2">
		<div class="kaiser-detail-img">
			<div class="col-xs-12 kaiser-img-hidden">
				<img src="{{asset('images/showcase/kaiser-med/icon1.png')}}" class="img-responsive">
			</div>
		</div>


		<div class="col-md-6 col-sm-6 col-xs-12 kaiser-detail-2">
			<h3>{{$detail->title2_h3}}</h3>
			<h2>{{$detail->title2_h2}}</h2>
			<p>{{$detail->desc2}}</p>
		</div>

		<div class="kaiser-detail-img">
			<div class="col-md-6 col-sm-6 kaiser-img">
				<img src="{{asset('images/showcase/kaiser-med/icon1.png')}}" class="img-responsive">
			</div>
		</div>
	</section>

	<section id="kaiser-detail-3">
		<div class="col-md-5 col-md-offset-7 col-sm-5 col-sm-offset-7 col-xs-5 col-xs-offset-7 kaiser-detail">
			<h3>{{$detail->title3_h3}}</h3>
			<h2>{{$detail->title3_h2}}</h2>
			<p>{{$detail->desc3}}</p>
		</div>
	</section>

	<section id="kaiser-detail-4">
		<div class="col-md-6 col-sm-6 col-xs-12 kaiser-poster">
			<div class="col-md-6 col-sm-6 col-xs-12 kaiser-poster-img">
				<img src="{{asset('images/showcase/kaiser-med/poster1.png')}}" class="img-responsive">
			</div>
			<div class="col-md-6 col-sm-6 col-xs-12 kaiser-poster-img">
				<img src="{{asset('images/showcase/kaiser-med/poster2.png')}}" class="img-responsive">
			</div>
		</div>
		<div class="col-md-6 col-sm-6 col-xs-12 kaiser-poster">
			<div class="col-md-6 col-sm-6 col-xs-12 kaiser-poster-img">
				<img src="{{asset('images/showcase/kaiser-med/poster3.png')}}" class="img-responsive">
			</div>
			<div class="col-md-6 col-sm-6 col-xs-12 kaiser-poster-img">
				<img src="{{asset('images/showcase/kaiser-med/poster4.png')}}" class="img-responsive">
			</div>
		</div>
	</section>

	<section id="kaiser-detail-full">
		<img src="{{asset('images/showcase/kaiser-med/bg-full.jpg')}}" class="img-responsive">
	</section>
@endsection