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
	<section id="enggal-jaya">
		<div class="col-md-6 col-sm-6 col-xs-6 enggal-jaya">
			<h2>{{$detail->title1_h2}}</h2>
			<p>{{$detail->desc1}}</p>
		</div>

		<img src="{{asset('images/showcase/enggal-jaya/troller.png')}}" class="img-responsive enggal-side">
	</section>

	<section id="enggal-bc">
		<img src="{{asset('images/showcase/enggal-jaya/bc-back.svg')}}" class="img-responsive enggal-bc1">
		<img src="{{asset('images/showcase/enggal-jaya/bc-front.svg')}}" class="img-responsive enggal-bc2">
	</section>

	<section id="enggal-full">
		<img src="{{asset('images/showcase/enggal-jaya/bg-bc.png')}}" class="img-responsive">
	</section>
@endsection