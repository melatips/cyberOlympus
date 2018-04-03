@extends('template.showcaseTemplate')
@section('title')
	<title>Cyber Olympus</title>
@endsection

@section('showcase-title')
	<h2>No Result Found</h2>
	<div class="col-md-12 col-sm-12 col-xs-12">
		<a href="{{url('showcase/all')}}" class="btn no-res-btn">View All Showcase</a>
	</div>
@endsection