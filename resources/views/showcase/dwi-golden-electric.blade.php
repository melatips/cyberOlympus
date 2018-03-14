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
	<section id="electricity">
		<div class="container">
			<div class="col-md-6 col-sm-6 col-xs-12">
				<img src="{{asset('images/showcase/dwi-golden/dg-logo.png')}}" class="img-responsive logo-dg">
			</div>
			<div class="col-md-6 col-sm-6 col-xs-12 electricity">
				<h2>{{$detail->title1_h2}}</h2>
				<p>{{$detail->desc1}}</p>
			</div>
		</div>
	</section>

	<section id="crown">
		<div class="container">
			<div class="col-md-4 col-sm-6 col-xs-6 crown">
				<h2>{{$detail->title2_h2}}</h2>
				<p>{{$detail->desc2}}</p>
			</div>
		</div>
	</section>

	<section id="colour-dg">
		<div class="dg-bg">
			<div class="container">
				<div class="col-md-6 col-sm-12 col-xs-12">
					<div class="circle1-dg"></div>
					<div class="circle2-dg"></div>
				</div>

				<div class="col-md-6 col-sm-12 col-xs-12 colour-dg">
					<h3>{{$detail->title3_h3}}</h3>
					<h2>{{$detail->title3_h2}}</h2>
					<p>{{$detail->desc3}}</p>
				</div>
			</div>
		</div>
	</section>

	<section id="dwi-golden">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-sm-12 col-xs-12 dwi">
					<h2>{{$detail->title4_h2}}</h2>
					<p>{{$detail->desc4}}</p>
				</div>
			</div>

			<div class="row">
				<div class="col-md-6 col-sm-12 col-xs-12 col-md-offset-6 golden">
					<h2>{{$detail->title5_h2}}</h2>
					<p>{{$detail->desc5}}</p>
				</div>
			</div>
		</div>
	</section>

	<div class="clearfix"></div>

	<section id="dwi-golden-logo">
		<div class="col-md-12 col-sm-12 col-xs-12 dg-color-logo">
			<img src="{{asset('images/showcase/dwi-golden/color-logo2.png')}}" class="img-responsive">
		</div>
		<div class="col-md-12 col-sm-12 col-xs-12 dg-white-logo">
			<div class="col-md-6 col-sm-6 col-xs-6 dg-white-logo1">
				<img src="{{asset('images/showcase/dwi-golden/white-logo2.png')}}" class="img-responsive">
			</div>
			<div class="col-md-6 col-sm-6 col-xs-6 dg-white-logo2">
				<img src="{{asset('images/showcase/dwi-golden/white-logo2.png')}}" class="img-responsive">
			</div>
		</div>
	</section>

	<div class="clearfix"></div>

	<section id="dwi-golden-logo2">
		<div class="col-md-8 col-sm-8 col-xs-8 dg-logoc-bg">
			<img src="{{asset('images/showcase/dwi-golden/color-logo.png')}}" class="img-responsive dg-logoc">
		</div>
		<div class="col-md-4 col-sm-4 col-xs-4 dg-logo-white">
			<div class="col-md-12 col-sm-12 col-xs-12 dg-logo1-bg">
				<img src="{{asset('images/showcase/dwi-golden/white-logo.png')}}" class="img-responsive dg-logo1">
			</div>
			<div class="col-md-12 col-sm-12 col-xs-12 dg-logo2-bg">
				<img src="{{asset('images/showcase/dwi-golden/white-logo.png')}}" class="img-responsive dg-logo2">
			</div>
		</div>
	</section>
@endsection