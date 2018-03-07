@extends('template.showcaseTemplate')
@section('title')
	<title>{{$detail->showcase_name}}</title>
@endsection

@section('showcase-title')
	<h2>{{$detail->showcase_name}}</h2>
	<p>Logo</p>
@endsection

@section('showcase')
	<section class="cd-section visible" id="deer">
		<div class="container">
			<div class="col-md-6 col-sm-6 col-xs-12">
				<img src="{{asset('images/showcase/noe/noe-logo.png')}}" class="img-responsive logo-noe">
			</div>
			<div class="col-md-6 col-sm-6 col-xs-12 deer">
				<h3>(Cervus Unicolor)</h3>
				<h2>DEER</h2>
				<p>{{$detail->desc1}}</p>
			</div>
		</div>
	</section>

	<div class="clearfix"></div>

	<section class="cd-section" id="coffee">
		<div class="container">
			<div class="col-md-6 col-sm-6 col-xs-6 coffee">
				<h2>COFFEE</h2>
				<p>{{$detail->desc2}}</p>
			</div>
		</div>
	</section>

	<section class="cd-section" id="colour-noe">
		<div class="deer-bg">
			<div class="container" style="background-color: transparent;">
				<div class="col-md-6 col-sm-12 col-xs-12">
					<div class="circle1-noe"></div>
					<div class="circle2-noe"></div>
				</div>

				<div class="col-md-6 col-sm-12 col-xs-12 colour-noe">
					<h3>Meaning &</h3>
					<h2>Colour</h2>
					<p>{{$detail->desc3}}</p>
				</div>

				<img src="{{asset('images/showcase/noe/cup.png')}}" class="img-responsive cup">
			</div>
		</div>
	</section>

	<section class="cd-section" id="promo1">
		<div class="container">
			<div class="row">
				<div class="col-md-4 col-sm-4 col-xs-4">
					<img src="{{asset('images/showcase/noe/top-1.jpg')}}" class="img-responsive promo1">
				</div>
				<div class="col-md-4 col-sm-4 col-xs-4">
					<img src="{{asset('images/showcase/noe/top-2.jpg')}}" class="img-responsive promo1">
				</div>
				<div class="col-md-4 col-sm-4 col-xs-4">
					<img src="{{asset('images/showcase/noe/top-3.jpg')}}" class="img-responsive promo1">
				</div>
			</div>
		</div>
	</section>

	<div class="clearfix"></div>

	<section class="cd-section" id="promo2">
		<div class="container">
			<div class="row">
				<div class="col-md-4 col-sm-4 col-xs-4">
					<img src="{{asset('images/showcase/noe/bottom-1.jpg')}}" class="img-responsive promo2">
				</div>
				<div class="col-md-4 col-sm-4 col-xs-4">
					<img src="{{asset('images/showcase/noe/bottom-2.jpg')}}" class="img-responsive promo2">
				</div>
				<div class="col-md-4 col-sm-4 col-xs-4">
					<img src="{{asset('images/showcase/noe/bottom-3.jpg')}}" class="img-responsive promo2">
				</div>
			</div>
		</div>
	</section>

	<section class="cd-section" id="noe-logo">
		<div class="col-md-8 col-sm-8 col-xs-8 noe-logoc-bg">
			<img src="{{asset('images/showcase/noe/color-logo.png')}}" class="img-responsive noe-logoc">
		</div>
		<div class="col-md-4 col-sm-4 col-xs-4 noe-logo-white">
			<div class="col-md-12 col-sm-12 col-xs-12 noe-logo1-bg">
				<img src="{{asset('images/showcase/noe/white-logo.png')}}" class="img-responsive noe-logo1">
			</div>
			<div class="col-md-12 col-sm-12 col-xs-12 noe-logo2-bg">
				<img src="{{asset('images/showcase/noe/white-logo.png')}}" class="img-responsive noe-logo2">
			</div>
		</div>
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

          $('.cup').css({
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