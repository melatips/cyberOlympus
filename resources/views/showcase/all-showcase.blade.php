@extends('template.showcaseTemplate')
@section('title')
	<title>Cyber Olympus</title>
@endsection

@section('showcase-title')
	<h2>All Showcase</h2>
@endsection

@section('showcase')
	@foreach($allShowcase as $showcase)
	<section class="showcase-list-id">
		<img src="{{asset('images/showcase/bg/'.strtolower($showcase->file_name).'.jpg')}}" class="img-responsive all-showcase">

		<div class="clearfix"></div>

		<div class="list-view">
			<a href="{{url('showcase/detail/'.strtolower($showcase->file_name))}}" class="view">View Detail <i class="fa fa-angle-right"></i><i class="fa fa-angle-right"></i></a>
		</div>
	</section>
	@endforeach
@endsection