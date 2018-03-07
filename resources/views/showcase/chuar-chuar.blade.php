@extends('template.showcaseTemplate')
@section('title')
	<title>{{$detail->showcase_name}}</title>
@endsection

@section('showcase-title')
	<h2>{{$detail->showcase_name}}</h2>
	<p>Branding Design</p>
@endsection

@section('showcase')
	<section id="chuar-hero">
		<img src="{{asset('images/showcase/chuar/bg-hero.jpg')}}" class="img-responsive">
	</section>

	<section id="chuar-detail">
		<div class="panel-body">
			<div class="col-xs-12 chuar-detail-hidden">
				<div class="col-xs-6">
					<img src="{{asset('images/showcase/chuar/big-circle.svg')}}" class="img-responsive chuar-big-768">
				</div>
				<div class="col-xs-6">
					<img src="{{asset('images/showcase/chuar/tiny-circle.svg')}}" class="img-responsive chuar-tiny-768">
				</div>
			</div>
			<div class="col-md-6 col-sm-6 col-xs-12 chuar-detail">
				<h2>{{$detail->title1}}</h2>
				<p>{{$detail->desc1}}</p>
			</div>

			<div class="col-md-6 col-sm-6 col-xs-12 chuar-detail-img">
				<img src="{{asset('images/showcase/chuar/big-circle.svg')}}" class="img-responsive chuar-big">
				<img src="{{asset('images/showcase/chuar/tiny-circle.svg')}}" class="img-responsive chuar-tiny">
			</div>
		</div>
	</section>

	<section id="chuar-detail-logo">
		<img src="{{asset('images/showcase/chuar/chuar-logo.svg')}}" class="img-responsive chuar-detail-logo">
	</section>

	<section id="chuar-detail-full">
		<img src="{{asset('images/showcase/chuar/bg-4.jpg')}}" class="img-responsive">
	</section>
@endsection