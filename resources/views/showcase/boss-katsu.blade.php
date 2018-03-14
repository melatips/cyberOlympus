@extends('template.showcaseTemplate')
@section('title')
	<title>{{$detail->showcase_name}}</title>
@endsection

@section('showcase-title')
	<h2>{{$detail->showcase_name}}</h2>
	<p>@foreach($detail->getCategory as $key => $value)
	    @if (count($detail->getCategory) == 1 || $key==count($detail->getCategory)-1)
	    {{$value->category_name}}
	    @else
	    {{$value->category_name}} & 
	    @endif
	  @endforeach</p>
@endsection

@section('showcase')
	<section id="boss-hero">
		<img src="{{asset('images/showcase/boss-katsu/bg-hero.jpg')}}" class="img-responsive">
	</section>

	<section id="boss-katsu">
		<div class="panel-body">
			<div class="col-xs-12 katsu-hidden">
				<div class="col-xs-6">
					<img src="{{asset('images/showcase/boss-katsu/boss.png')}}" class="img-responsive boss-768">
				</div>
				<div class="col-xs-6">
					<img src="{{asset('images/showcase/boss-katsu/sushi.png')}}" class="img-responsive katsu-768">
				</div>
			</div>
			<div class="col-md-6 col-sm-6 col-xs-12 boss-katsu">
				<h2>{{$detail->title1_h2}}</h2>
				<p>{{$detail->desc1}}</p>
			</div>

			<div class="col-md-6 col-sm-6 col-xs-12 boss-katsu-img">
				<img src="{{asset('images/showcase/boss-katsu/boss.png')}}" class="img-responsive boss">
				<img src="{{asset('images/showcase/boss-katsu/sushi.png')}}" class="img-responsive katsu">
			</div>
		</div>
	</section>

	<section class="cd-section" id="menu">
		<div class="container">
			<div class="row">
				<div class="col-md-4 col-sm-4 col-xs-4">
					<img src="{{asset('images/showcase/boss-katsu/menu1.png')}}" class="img-responsive menu">
				</div>
				<div class="col-md-4 col-sm-4 col-xs-4">
					<img src="{{asset('images/showcase/boss-katsu/menu2.png')}}" class="img-responsive menu">
				</div>
				<div class="col-md-4 col-sm-4 col-xs-4">
					<img src="{{asset('images/showcase/boss-katsu/menu3.png')}}" class="img-responsive menu">
				</div>
			</div>
		</div>
	</section>

	<section id="big-menu">
		<img src="{{asset('images/showcase/boss-katsu/bg-full.jpg')}}" class="img-responsive big-menu">
	</section>
@endsection