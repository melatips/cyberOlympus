@extends('template.showcaseTemplate')
@section('title')
	<title>Cyber Olympus</title>
@endsection

@section('showcase-title')
	<h2>Search Result</h2>
@endsection

@section('showcase')
	@foreach($findSearch as $showcaseList)
	<section class="showcase-list-id">
		<img src="{{asset('images/showcase/bg/'.strtolower($showcaseList->file_name).'.jpg')}}" class="img-responsive all-showcase">

		<div class="clearfix"></div>

		<div class="list-view">
			<a href="{{url('showcase/detail/'.strtolower($showcaseList->file_name))}}" class="view">View Detail <i class="fa fa-angle-right"></i><i class="fa fa-angle-right"></i></a>
		</div>
	</section>
	@endforeach
@endsection