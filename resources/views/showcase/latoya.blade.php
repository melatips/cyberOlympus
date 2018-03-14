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
	<section id="latoya-hero">
		<img src="{{asset('images/showcase/latoya/bg-hero.jpg')}}" class="img-responsive">
	</section>

	<section id="latoya-main">
		<div class="col-md-6 col-sm-6 col-xs-6 latoya-main">
			<h3>{{$detail->title1_h3}}</h3>
			<h2>{{$detail->title1_h2}}</h2>
			<p>{{$detail->desc1}}</p>
		</div>
		<div>
			<div class="latoya-bottle-box">
				<img src="{{asset('images/showcase/latoya/bottle.png')}}" class="img-responsive latoya-bottle">
			</div>
		</div>
	</section>

	<section id="latoya-click">
		<img src="{{asset('images/showcase/latoya/latoya.png')}}" class="img-responsive latoya-product">
		
		<img src="{{asset('images/showcase/latoya/splash.png')}}" class="img-responsive latoya-splash">
		
		<div class="col-md-4 col-md-offset-8 col-sm-5 col-sm-offset-7 col-xs-5 col-xs-offset-7 latoya-click-box">
			<a href="" class="latoya-click">
				latoya.co.id
			</a>
		</div>
		
		<img src="{{asset('images/showcase/adhibuana/pointer.svg')}}" class="img-responsive latoya-pointer">
	</section>

	<section id="latoya-full">
		<img src="{{asset('images/showcase/latoya/bg-full.jpg')}}" class="img-responsive">
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

		  $('.latoya-pointer').css({
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