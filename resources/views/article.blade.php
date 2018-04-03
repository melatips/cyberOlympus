@extends('template.showcaseTemplate')
@section('title')
	<title>Cyber Olympus | Blog</title>
@endsection

@section('showcase-title')
	<h2>CYBER OLYMPUS BLOG</h2>
@endsection

@section('showcase')
	<section id="detail-article">
		<h3 class="article-title">Lorem Ipsum dolor</h3>
		<div class="container">
			<div class="col-md-9 article">
				<p class="article-date">March 9th, 2018 | by : Cyber Olympus Team</p>
				<p class="article-content"><span class="first-char">L</span> orem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				<p class="article-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
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
				<p class="article-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			</div>

			<div class="col-md-12 article-img2-box">
				<img src="{{asset('images/blog/video.jpg')}}" class="img-responsive article-img2">
			</div>
		</div>
	</section>
@endsection