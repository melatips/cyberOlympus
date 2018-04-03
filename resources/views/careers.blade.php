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
			<div class="col-md-2 careers-side nav nav-tabs">
				<!-- @foreach($careersList as $list)
				<li><a data-toggle="tab" href="#{{strtolower(str_replace(array(' ', '&', '.'), array('-', '', ''), $list->position))}}">{{$list->position}}</a></li>
				@endforeach -->
				<li class="active"><a data-toggle="tab" href="#frontend">Front End Progammer</a></li>
				<li><a data-toggle="tab" href="#backend">Back End Progammer</a></li>
				<li><a data-toggle="tab" href="#graphic">Graphic Designer</a></li>
				<li><a data-toggle="tab" href="#editor">Editor Intern</a></li>
			</div>
			<!-- @foreach($careersList as $div)
			<div class="col-md-10 tab-content">
				<div id="{{strtolower(str_replace(array(' ', '&', '.'), array('-', '', ''), $div->position))}}" class="tab-pane fade">
					<div class="col-md-4 ">
						<div><img src="{{asset($div->icon)}}" class="img-responsive"></div>
						<div class="careers-email"><a href="" class="send-us">Send Us E-mail</a></div>
					</div>

					<div class="col-md-8">
						<ul class="requirement">
							{{$div->requirements}}
						</ul>
					</div>
				</div>
			</div>
			@endforeach -->
			<div class="col-md-10 tab-content">
			<div id="backend" class="tab-pane fade in active">
					<div class="col-md-4">
						<img src="{{asset('images/careers/backend-programmer.svg')}}" class="img-responsive">
						<a href="">Send Us E-mail</a>
					</div>

					<div class="col-md-8">
						<ul>
							<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</li>
							<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</li>
							<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</li>
							<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</li>
							<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</li>
						</ul>
					</div>
				</div>

				<div id="graphic" class="tab-pane fade">
					<div class="col-md-4">
						<img src="{{asset('images/careers/graphic-designer.svg')}}" class="img-responsive">
						<a href="">Send Us E-mail</a>
					</div>

					<div class="col-md-8">
						<ul>
							<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</li>
							<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</li>
							<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</li>
							<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</li>
							<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</li>
						</ul>
					</div>
				</div>

				<div id="editor">
					<div class="col-md-4">
						<img src="{{asset('images/careers/editor-intern.svg')}}" class="img-responsive">
						<a href="">Send Us E-mail</a>
					</div>

					<div class="col-md-8">
						<ul>
							<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</li>
							<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</li>
							<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</li>
							<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</li>
							<li>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</li>
						</ul>
					</div>
				</div>

		</div>
	</section>


@endsection

<!-- @section('js')
	<script>
		function openPos(evt, posName) {
		    var i, tabcontent, tablinks;
		    tabcontent = document.getElementsByClassName("tabcontent");
		    for (i = 0; i < tabcontent.length; i++) {
		        tabcontent[i].style.display = "none";
		    }
		    tablinks = document.getElementsByClassName("tablinks");
		    for (i = 0; i < tablinks.length; i++) {
		        tablinks[i].className = tablinks[i].className.replace(" active", "");
		    }
		    document.getElementById(cityName).style.display = "block";
		    evt.currentTarget.className += " active";
		}
	</script>
@endsection -->