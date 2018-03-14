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
	<section id="bcp-hero">
		<img src="{{asset('images/showcase/bcp-contractor/wall-top.png')}}" class="img-responsive wall-1">
		<img src="{{asset('images/showcase/bcp-contractor/wall-bottom.png')}}" class="img-responsive wall-2">
		<div class="container">
			<div class="col-md-6 col-md-offset-6 col-sm-6 col-sm-offset-6 col-xs-6 col-xs-offset-6 bcp-hero">
				<h3>{{$detail->title1_h3}}</h3>
				<h2>{{$detail->title1_h2}}</h2>
				<p>{{$detail->desc1}}</p>
			</div>
		</div>
	</section>

	<section id="bcp-main">
		<div class="col-md-6 col-sm-6 col-xs-6 bcp-main">
			<h3>{{$detail->title2_h3}}</h3>
			<h2>{{$detail->title2_h2}}</h2>
			<p>{{$detail->desc2}}</p>
		</div>
	</section>

	<!-- section id="bcp-click">
		<a href=""><img src="assets/images/showcase/bcp-contractor/bcplink.png" class="img-responsive bcp-link"></a>
		<img src="assets/images/showcase/adhibuana/pointer.svg" class="img-responsive bcp-pointer">
	</section> -->

	<section id="bcp-click">
		<div class="bcp-click-box">
			<a href="" class="bcp-click">
				www.bcpkontraktor.com
			</a>
		</div>
		<img src="{{asset('images/showcase/adhibuana/pointer.svg')}}" class="img-responsive bcp-pointer">
	</section>

	<div class="clearfix"></div>

	<section id="bcp-full">
		<img src="{{asset('images/showcase/bcp-contractor/bg-full.jpg')}}" class="img-responsive">
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

		  $('.bcp-pointer').css({
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