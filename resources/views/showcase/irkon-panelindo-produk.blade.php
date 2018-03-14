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
	<section id="irkon-hero">
		<div class="irkon-hero">
		<h3>We Are Indonesia Based</h3>
		<h2>CONSTRUCTION COMPANY</h2>
		</div>
	</section>

	<section id="irkon-main">
		<img src="{{asset('images/showcase/irkon-panelindo/side-img.jpg')}}" class="img-responsive irkon-side">
		
		<div class="col-md-6 col-md-offset-6 col-sm-6 col-sm-offset-6 col-xs-6 col-xs-offset-6 irkon-main">
			<h3>{{$detail->title1_h3}}</h3>
			<h2>{{$detail->title1_h2}}</h2>
			<p>{{$detail->desc1}}</p>
		</div>
	</section>

	<section id="irkon-click">
		<div class="irkon-click-box">
		<a href="" class="irkon-click">
			<b>www.irkonpanelindoproduk.com/</b>
		</a>
		</div>
		<img src="{{asset('images/showcase/pointer.svg')}}" class="img-responsive irkon-pointer">
	</section>

	<section id="irkon-full">
		<img src="{{asset('images/showcase/irkon-panelindo/bg-full.jpg')}}" class="img-responsive">
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

		  $('.irkon-pointer').css({
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