@extends('template.showcaseTemplate')
@section('title')
	<title>{{$detail->showcase_name}}</title>
@endsection

@section('showcase-title')
	<h2>{{$detail->showcase_name}}</h2>
	<p>Website // Task : design, front end, back end // Status : active</p>
@endsection

@section('showcase')
	<section id="fox-hero">
		<div class="col-md-8 col-sm-8 col-xs-8 fox-hero">
			<h3>Making Films</h3>
			<h2>THAT CROSS BORDERS</h2>
			<p>{{$detail->desc1}}</p>
		</div>
	</section>

	<section id="fox-logo">
		<div class="col-md-6 col-sm-6 col-xs-6">
			<img src="{{asset('images/showcase/fox-creek/fox-logo.svg')}}" class="img-responsive fox-img">
		</div>
		<div class="col-md-6 col-sm-6 col-xs-6 fox-logo">
			<h3>Lorem Ipsum</h3>
			<h2>DOLOR SIT AMET</h2>
			<p>{{$detail->desc2}}</p>
		</div>
	</section>

	<section id="fox-click">
		<div class="fox-click-box">
			<a href="" class="fox-click">
				<b>http://foxcreekfilms.com/</b>
			</a>
		</div>
		<img src="{{asset('images/showcase/pointer.svg')}}" class="img-responsive fox-pointer">
	</section>

	<section id="fox-full">
		<img src="{{asset('images/showcase/fox-creek/bg4.jpg')}}" class="img-responsive">
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

		  $('.fox-pointer').css({
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