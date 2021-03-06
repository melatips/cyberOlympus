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
	<section id="danaus">
		<div class="container">
			<div class="col-md-6 col-sm-6 col-xs-12">
				<img src="{{asset('images/showcase/petraco/petraco-logo.png')}}" class="img-responsive logo-petraco">
			</div>
			<div class="col-md-6 col-sm-6 col-xs-12 butterfly">
				<h3>{{$detail->title1_h3}}</h3>
				<h2>{{$detail->title1_h2}}</h2>
				<p>{{$detail->desc1}}</p>
			</div>
		</div>
	</section>

	<section id="book">
		<div class="container">
			<div class="col-md-6 col-sm-6 col-xs-6 book">
				<h2>{{$detail->title2_h2}}</h2>
				<p>{{$detail->desc2}}</p>
			</div>
		</div>
	</section>

	<section id="colour">
		<div class="butterfly-bg">
			<div class="container">
				<div class="col-md-6 col-sm-12 col-xs-12">
					<div class="circle1"></div>
					<div class="circle2"></div>
				</div>

				<div class="col-md-6 col-sm-12 col-xs-12 colour">
					<h3>{{$detail->title3_h3}}</h3>
					<h2>{{$detail->title3_h2}}</h2>
					<p>{{$detail->desc3}}</p>
				</div>
			</div>
		</div>
	</section>

	<section id="petraco-logo">
		<div class="col-md-12 col-sm-12 col-xs-12 color-logo">
			<img src="{{asset('images/showcase/petraco/color-logo.png')}}" class="img-responsive color-logo-img">
		</div>
		<div class="col-md-12 col-sm-12 col-xs-12 white-logo">
			<div class="col-md-6 col-sm-6 col-xs-6 white-logo1">
				<img src="{{asset('images/showcase/petraco/white-logo.png')}}" class="img-responsive">
			</div>
			<div class="col-md-6 col-sm-6 col-xs-6 white-logo2">
				<img src="{{asset('images/showcase/petraco/white-logo.png')}}" class="img-responsive">
			</div>
		</div>
	</section>
@endsection