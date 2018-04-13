@extends('template.showcaseTemplate')
@section('title')
	<title>Cyber Olympus | Blog</title>
@endsection

@section('showcase-title')
	<h2>CYBER OLYMPUS BLOG</h2>
@endsection

@section('showcase')
	<section id="detail-article">
		<h3 class="article-title">{{$findArticle->title}}</h3>
		<div class="container">
			<div class="col-md-9 article">
				<p class="article-date">{{date('D, F d, Y', strtotime($findArticle->created_at))}} | by : Cyber Olympus Team</p>
				<p class="article-content"><span class="first-char">{{substr($findArticle->intro, 0,1)}}</span> {{substr($findArticle->intro, 1)}}</p>
			</div>
			<div class="col-md-3 related-article">
				<p class="related"><strong>RELATED ARTICLE</strong></p>
				<div class="related-img">
					<img src="{{asset('images/blog/related-article.jpg')}}" class="img-responsive img-related">
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
				</div>
			</div>
		</div>
	</section>

	<section id="featured-img">
		<div class="container">
			<div class="col-md-9 featured-img">
				<img src="{{asset('images/blog/img1.jpg')}}" class="img-responsive">
				@php($imgExp = explode(',',$findArticle->featured_image))
				@if(count($imgExp)!=0)
				@foreach($imgExp as $img)
					<img src="{{asset('images/article/'.$img)}}">
				@endforeach
				@endif
			</div>

			<div class="col-md-3 featured-img">
				<img src="{{asset('images/blog/img2.jpg')}}" class="img-responsive">
			</div>
		</div>
	</section>

	<section id="main-article">
		<div class="container">
			<div class="col-md-12 main-article">
				<h3 class="article-quote">Lorem ipsum dolor sit amet, consectetur adipiscing elit</h3>
				<p class="article-content">{!!$findArticle->content!!}</p>
			</div>

			<div class="col-md-12 article-img2-box">
				<img src="{{asset('images/blog/video.jpg')}}" class="img-responsive article-img2">
			</div>
		</div>
	</section>
@endsection