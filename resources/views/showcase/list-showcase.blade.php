@extends('template.showcaseTemplate')
@section('title')
	<title>Cyber Olympus</title>
@endsection

@section('showcase-title')
	<h2>{{$category->category_name}}</h2>
@endsection

@section('showcase')
	@foreach($category->getShowcase as $showcaseList)
	<section class="showcase-list-id">
		<img src="{{asset('images/showcase/bg/'.$showcaseList->file_name.'.jpg')}}" class="img-responsive">

		<div class="clearfix"></div>

		<div class="list-view">
			<a href="{{url('showcase/detail/'.$showcaseList->showcase_list_id)}}" class="view">View Detail <i class="fa fa-angle-right"></i><i class="fa fa-angle-right"></i></a>
		</div>
	</section>
	@endforeach
@endsection