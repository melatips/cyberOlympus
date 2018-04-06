@extends('template.showcaseTemplate')
@section('title')
	<title>Cyber Olympus | Careers</title>
@endsection

@section('showcase-title')
	<h2>CAREERS</h2>
@endsection

@section('showcase')
	<section id="careers">
		<div class="container">
			<div class="col-md-2 col-sm-12 careers-side">
				<ul class="nav nav-tabs">
					@foreach($careersList as $key => $list)
					<li {{($key==0)?'class=active':''}}><a data-toggle="tab" href="#{{strtolower(str_replace(array(' ', '&', '.'), array('-', '', ''), $list->position))}}">{{$list->position}}</a></li>
					@endforeach
				</ul>
			</div>
			
			<div class="col-md-10 col-sm-12 tab-content">
				@foreach($careersList as $key => $div)
				<div id="{{strtolower(str_replace(array(' ', '&', '.'), array('-', '', ''), $div->position))}}" class="tab-pane fade {{($key==0)?'in active':''}}" >
					<div class="col-md-5 col-sm-12">
						<div><img src="{{asset($div->icon)}}" class="img-responsive icon-careers"></div>
						<div class="careers-email"><a href="" class="send-us">Send Us E-mail</a></div>
					</div>

					<div class="col-md-7 col-sm-12 careers992">
						<ul class="requirement">
							{!!$div->requirements!!}
						</ul>
					</div>
				</div>
				@endforeach
			</div>
		</div>
	</section>
@endsection