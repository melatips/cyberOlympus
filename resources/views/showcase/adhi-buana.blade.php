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
	  @endforeach // Task : design, front end, back end // Status : active</p>
@endsection

@section('showcase')
	<section id="hero-sc" style="background: url('{{asset('images/showcase/adhibuana/bg-hero.jpg')}}') no-repeat; background-size: cover; background-position: center; position: relative;">
		<img src="{{asset('images/showcase/adhibuana/ab-logo.png')}}" class="img-responsive ab-logo">
	</section>

	<section id="scaffolding">
		<div class="container ">
			<div class="col-md-6 col-sm-6 col-xs-6 scaffolding">
				<h2>{{$detail->title1}}</h2>
				<p>{{$detail->desc1}}</p>
			</div>
			<div class="col-md-6 col-sm-6 col-xs-6">
				<img src="{{asset('images/showcase/adhibuana/icon.png')}}" class="img-responsive ab-icon">
			</div>
		</div>
	</section>

	<!-- <section id="ab-click">
		<a href=""><img src="assets/images/showcase/adhibuana/adhibuanaskaffolding.svg" class="img-responsive ab-text"></a>
		<img src="assets/images/showcase/adhibuana/pointer.svg" class="img-responsive ab-pointer">
	</section> -->

	<section id="ab-click">
		<div class="col-md-6 col-md-offset-6 col-sm-6 col-sm-offset-6 col-xs-6 col-xs-offset-6 ab-click-box">
			<a href="" class="ab-click">
				adhibuanaskaffolding.com
			</a>
		</div>
		
		<img src="{{asset('images/showcase/adhibuana/pointer.svg')}}" class="img-responsive ab-pointer">
	</section>

	<section id="ab-full">
		<img src="{{asset('images/showcase/adhibuana/bg-big-bc.jpg')}}" class="img-responsive">
	</section>
@endsection

@section('js')
	<script type="text/javascript">
		
		var lFollowX = 0,
		    lFollowY = 0,
		    x = 0,
		    y = 0,
		    friction = 1 / 30;

		function moveBackground() {
		  x += (lFollowX - x) * friction;
		  y += (lFollowY - y) * friction;
		  
		  translate = 'translate(' + x + 'px, ' + y + 'px) scale(1.1)';

		  $('.ab-logo').css({
		    '-webit-transform': translate,
		    '-moz-transform': translate,
		    'transform': translate
		  });

		  $('.ab-pointer').css({
		    '-webit-transform': translate,
		    '-moz-transform': translate,
		    'transform': translate
		  });

		  window.requestAnimationFrame(moveBackground);
		}

		$(window).on('mousemove click', function(e) {

		  var lMouseX = Math.max(-100, Math.min(100, $(window).width() / 2 - e.clientX));
		  var lMouseY = Math.max(-100, Math.min(100, $(window).height() / 2 - e.clientY));
		  lFollowX = (20 * lMouseX) / 100; // 100 : 12 = lMouxeX : lFollow
		  lFollowY = (10 * lMouseY) / 100;

		});

		moveBackground();
	</script>
@endsection