@extends('template.showcaseTemplate')
@section('title')
	<title>Cyber Olympus</title>
@endsection

@section('showcase-title')
	<h2>All Categories</h2>
@endsection

@section('showcase')
	<section class="all-categories bg-black">
		<div class="panel-body">
			@foreach($catList as $category)
			<a href="{{url('showcase/list/'.$category->slug)}}" class="cat-link">
				<div class="col-md-3 col-sm-6 col-xs-12 category-icon">
					<div class="cat-icon-box">
						<img src="{{asset($category->category_icon)}}" class="img-responsive">
					</div>
					<div class="cat-icon-name">
						{{ucwords($category->category_name)}}
					</div>
				</div>
			</a>
			@endforeach
		</div>
	</section>
@endsection