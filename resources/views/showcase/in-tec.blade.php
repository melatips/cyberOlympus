@extends('template.showcaseTemplate')
@section('title')
	<title>{{$detail->showcase_name}}</title>
@endsection

@section('showcase-title')
	<h2>{{$detail->showcase_name}}</h2>
	<p>Branding Design</p>
@endsection

@section('showcase')
	<section id="intec-hero">
		<div class="col-md-6 col-md-offset-6 col-sm-6 col-sm-offset-6 col-xs-6 col-xs-offset-6 intec-hero">
			<h3>Lorem Ipsum</h3>
			<h2>DOLOR SIT AMET</h2>
			<p>{{$detail->desc1}}</p>
		</div>
	</section>

	<section id="intec-main">
		<div class="col-md-6 col-sm-6 col-xs-6 intec-main">
			<h3>Lorem Ipsum</h3>
			<h2>DOLOR SIT AMET</h2>
			<p>{{$detail->desc2}}</p>
		</div>
		<div class="col-md-6 col-sm-6 col-xs-6 intec-img">
			<img src="{{asset('images/showcase/intec/circle2.svg')}}" class="img-responsive intec-img1">
			<img src="{{asset('images/showcase/intec/circle1.svg')}}" class="img-responsive intec-img2">
		</div>
	</section>

	<section id="intec-bc">
		<img src="{{asset('images/showcase/intec/bc2.svg')}}" class="img-responsive intec-bc2">
		<img src="{{asset('images/showcase/intec/bc1.svg')}}" class="img-responsive intec-bc1">
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
		  
		  translate = 'translate(' + x + 'px, ' + y + 'px) scale(1)';

		  $('.intec-img2').css({
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