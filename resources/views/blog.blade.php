@extends('template.showcaseTemplate')
@section('title')
	<title>Cyber Olympus</title>
@endsection

@section('showcase-title')
	<h2>Cyber Olympus Blog</h2>
@endsection

@section('showcase')
	<section class="bg-black">
		<div class="panel-body">
			<div class="col-md-10 col-md-offset-1 col-sm-12 col-sm-12">
			@foreach($allArticle as $article)
			<div class="col-md-4 col-sm-6 col-xs-12 feat-img">
				<div class="feat-img-box">
					<img src="{{asset('images/article/'.$article->featured_image)}}" class="img-responsive">
				</div>
				<div class="list-article-title">
					<a href="{{url('blog/article/'.$article->id_article)}}">{{ucwords($article->title)}}</a>
				</div>
			</div>
			@endforeach
		</div>
		</div>
	</section>
@endsection