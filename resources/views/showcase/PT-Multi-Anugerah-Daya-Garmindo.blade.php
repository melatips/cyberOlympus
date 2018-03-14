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
	<section id="multi-hero">
		<img src="{{asset('images/showcase/pt-multi/bg-hero.jpg')}}" class="img-responsive">
	</section>

	<div class="clearfix"></div>

	<section id="multi-profile">
		<div class="col-md-6 col-sm-6 col-xs-6 multi-profile">
			<h3>{{$detail->title1_h3}}</h3>
			<h2>{{$detail->title1_h2}}</h2>
			<p>{{$detail->desc1}}</p>
		</div>
	</section>

	<div class="clearfix"></div>

	<section id="multi-product">
		<div class="col-md-6 col-sm-6 col-xs-12 multi-img-box">
			<img src="{{asset('images/showcase/pt-multi/jeans.png')}}" class="img-responsive multi-jeans">
			<img src="{{asset('images/showcase/pt-multi/shirt.svg')}}" class="img-responsive multi-shirt">
		</div>
		<div class="col-md-6 col-sm-6 col-xs-12 multi-product">
			<h3>{{$detail->title2_h3}}</h3>
			<h2>{{$detail->title2_h2}}</h2>
			<p>{{$detail->desc2}}</p>
		</div>
	</section>

	<div class="clearfix"></div>

	<section id="multi-click">
		<div class="multi-click-box">
			<a href="" class="multi-click">
				madg.co.id
			</a>
		</div>
		<img src="{{asset('images/showcase/adhibuana/pointer.svg')}}" class="img-responsive multi-pointer">
	</section>

	<section id="multi-full">
		<img src="{{asset('images/showcase/pt-multi/bg-full.jpg')}}" class="img-responsive">
	</section>

	<section id="multi-full2">
		<img src="{{asset('images/showcase/pt-multi/bg-full-2.jpg')}}" class="img-responsive">
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

		  $('.multi-pointer').css({
		    '-webit-transform': translate,
		    '-moz-transform': translate,
		    'transform': translate
		  });

		  window.requestAnimationFrame(moveBackground);
		}

		$(window).on('mousemove click', function(e) {

		  var lMouseX = Math.max(-100, Math.min(100, $(window).width() / 2 - e.clientX));
		  var lMouseY = Math.max(-100, Math.min(100, $(window).height() / 2 - e.clientY));
		  lFollowX = (30 * lMouseX) / 100; // 100 : 12 = lMouxeX : lFollow
		  lFollowY = (20 * lMouseY) / 100;

		});

		moveBackground();
	</script>
@endsection