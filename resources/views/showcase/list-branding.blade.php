@extends('template.showcaseTemplate')
@section('title')
	<title>Cyber Olympus</title>
@endsection

@section('showcase-title')
	<h2>branding design</h2>
@endsection

@section('showcase')
	<section class="showcase-list-id">
		<img src="{{asset('images/showcase/bg/chuar-chuar.jpg')}}" class="img-responsive">

		<div class="clearfix"></div>

		<div class="list-view">
			<a href="" class="view">View Detail <i class="fa fa-angle-right"></i><i class="fa fa-angle-right"></i></a>
		</div>
	</section>

	<section class="showcase-list-id">
		<img src="{{asset('images/showcase/bg/sehatimart.jpg')}}" class="img-responsive">

		<div class="clearfix"></div>

		<div class="list-view">
			<a href="" class="view">View Detail <i class="fa fa-angle-right"></i><i class="fa fa-angle-right"></i></a>
		</div>
	</section>
@endsection