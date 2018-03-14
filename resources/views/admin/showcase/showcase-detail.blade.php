@extends('template.AdminTemplate')

@section('aside-title')
	Showcase
@endsection

@section('aside-subtitle')
	{{$showcaseDet->showcase_name}}
@endsection

@section('content')
	<div class="col-md-12">
    @if(session('status'))
    <div class="alert alert-success alert-dismissable">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">
            &times;
        </button>
        <strong>
            {{ session('status') }}
        </strong>
    </div>
    @endif
    @foreach($errors->
    all() as $error)
    <div class="alert alert-warning alert-dismissable">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">
            &times;
        </button>
        <strong>
            Whops
        </strong>
        {{ $error }}
    </div>
    @endforeach
    <!-- general form elements -->
    <div class="box box-primary">
      <div class="box-header with-border">
      	<h3 class="box-title">Showcase</h3>
      </div>
      <!-- /.box-header -->
      <!-- form start -->
      <form action="{{url('/admin/showcase/save')}}" method="post" enctype="multipart/form-data">
      {{ csrf_field() }}
        <div class="box-body">
        	<div class="col-md-6">
	          <div class="form-group">
	            <label>Showcase Name</label>
	            <input type="text" class="form-control" name="showcase_name" placeholder="{{$showcaseDet->showcase_name}}" disabled>
	          </div>
	      	</div>

			<div class="col-md-6">
			  <div class="form-group">
				<label>Category</label>
				<input type="" class="form-control" placeholder="@if (count($catName) != 0) @foreach ($catName as $key => $value) @if(count($catName) == 1 || $key==count($catName)-1) {{$value->category_name}} @else {{$value->category_name}}, @endif @endforeach @endif" 
          name="" disabled>
			  </div>
			</div>

		  @if($showcaseDet->title1_h3 != "" || $showcaseDet->title1_h2 != "" || $showcaseDet->desc1 != "")
          <div class="col-md-6">
            <div class="form-group">
              <label>Title Section 1 (h3)</label>
              <input type="text" class="form-control" name="title1_h3" placeholder="{{$showcaseDet->title1_h3}}" disabled>
            </div>
            <div class="form-group">
              <label>Title Section 1 (h2)</label>
              <input type="text" class="form-control" name="title1_h2" placeholder="{{$showcaseDet->title1_h2}}" disabled>
            </div>
            <div class="form-group">
              <label>Description Section 1</label>
              <textarea class="" name="desc1" placeholder="{{$showcaseDet->desc1}}" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" disabled></textarea>
            </div>
          </div>
          @endif

          @if($showcaseDet->title2_h3 != "" || $showcaseDet->title2_h2 != "" || $showcaseDet->desc2 != "")
          <div class="col-md-6">
            <div class="form-group">
              <label>Title Section 2 (h3)</label>
              <input type="text" class="form-control" name="title2_h3" placeholder="{{$showcaseDet->title2_h3}}" disabled>
            </div>
            <div class="form-group">
              <label>Title Section 2 (h2)</label>
              <input type="text" class="form-control" name="title2_h2" placeholder="{{$showcaseDet->title2_h2}}" disabled>
            </div>
            <div class="form-group">
              <label>Description Section 2</label>
              <textarea class="" name="desc2" placeholder="{{$showcaseDet->desc2}}" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" disabled></textarea>
            </div>
          </div>
          @endif

          @if($showcaseDet->title3_h3 != "" || $showcaseDet->title3_h2 != "" || $showcaseDet->desc3 != "")
          <div class="col-md-6">
            <div class="form-group">
              <label>Title Section 3 (h3)</label>
              <input type="text" class="form-control" name="title3_h3" placeholder="{{$showcaseDet->title3_h3}}" disabled>
            </div>
            <div class="form-group">
              <label>Title Section 3 (h2)</label>
              <input type="text" class="form-control" name="title3_h2" placeholder="{{$showcaseDet->title3_h2}}" disabled>
            </div>
            <div class="form-group">
              <label>Description Section 3</label>
              <textarea class="" name="desc3" placeholder="{{$showcaseDet->desc3}}" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" disabled></textarea>
            </div>
          </div>
          @endif

          @if($showcaseDet->title4_h3 != "" || $showcaseDet->title4_h2 != "" || $showcaseDet->desc4 != "")
          <div class="col-md-6">
            <div class="form-group">
              <label>Title Section 4 (h3)</label>
              <input type="text" class="form-control" name="title4_h3" placeholder="{{$showcaseDet->title4_h3}}" disabled>
            </div>
            <div class="form-group">
              <label>Title Section 4 (h2)</label>
              <input type="text" class="form-control" name="title4_h2" placeholder="{{$showcaseDet->title4_h2}}" disabled>
            </div>
            <div class="form-group">
              <label>Description Section 4</label>
              <textarea class="" name="desc4" placeholder="{{$showcaseDet->desc4}}" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" disabled></textarea>
            </div>
          </div>
          @endif

          @if($showcaseDet->title5_h3 != "" || $showcaseDet->title5_h2 != "" || $showcaseDet->desc5 != "")
          <div class="col-md-6">
            <div class="form-group">
              <label>Title Section 5 (h3)</label>
              <input type="text" class="form-control" name="title5_h3" placeholder="{{$showcaseDet->title5_h3}}" disabled>
            </div>
            <div class="form-group">
              <label>Title Section 5 (h2)</label>
              <input type="text" class="form-control" name="title5_h2" placeholder="{{$showcaseDet->title5_h2}}" disabled>
            </div>
            <div class="form-group">
              <label>Description Section 5</label>
              <textarea class="" name="desc5" placeholder="{{$showcaseDet->desc5}}" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" disabled></textarea>
            </div>
          </div>
          @endif

          @if($showcaseDet->title6_h3 != "" || $showcaseDet->title6_h2 != "" || $showcaseDet->desc6 != "")
          <div class="col-md-6">
            <div class="form-group">
              <label>Title Section 6 (h3)</label>
              <input type="text" class="form-control" name="title6_h3" placeholder="{{$showcaseDet->title6_h3}}" disabled>
            </div>
            <div class="form-group">
              <label>Title Section 6 (h2)</label>
              <input type="text" class="form-control" name="title6_h2" placeholder="{{$showcaseDet->title6_h2}}" disabled>
            </div>
            <div class="form-group">
              <label>Description Section 6</label>
              <textarea class="" name="desc6" placeholder="{{$showcaseDet->desc6}}" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" disabled></textarea>
            </div>
          </div>
          @endif

        </div>
          <!-- /.box-body -->
    </div>
    <!-- /.box -->

        <div class="col-md-12">
        	<input type="hidden" value="{{ csrf_token() }}" name="_token" />
       		
       		<a href="{{url('/admin/showcase')}}" class="btn btn-primary">Back</a>
    		</div>
		  </form>
	</div>
@endsection

@section('js')
<script src="{{asset('plugins/input-mask/jquery.inputmask.js')}}"></script>
<script src="{{asset('plugins/input-mask/jquery.inputmask.date.extensions.js')}}"></script>
<script src="{{asset('plugins/input-mask/jquery.inputmask.extensions.js')}}"></script>
	<script type="text/javascript">
		$(function () {
			//Initialize Select2 Elements
			$('.select2').select2()
		})
	</script>
@endsection