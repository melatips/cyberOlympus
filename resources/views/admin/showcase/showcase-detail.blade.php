@extends('template.AdminTemplate')

@section('aside-title')
	Showcase
@endsection

@section('aside-subtitle')
	{{$showcaseDet->showcase_name}}
@endsection

@section('content')
	<div class="col-md-12">
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
				<input type="" class="form-control" name="">
			  </div>
			</div>

		  @if($showcaseDet->title1 != "" and $showcaseDet->desc1 != "")
          <div class="col-md-6">
            <div class="form-group">
              <label>Title Section 1</label>
              <input type="text" class="form-control" name="title1" placeholder="{{$showcaseDet->title1}}" disabled>
            </div>
            <div class="form-group">
              <label>Description Section 1</label>
              <textarea class="" name="desc1" placeholder="{{$showcaseDet->desc1}}" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" disabled></textarea>
            </div>
          </div>
          @endif

          @if($showcaseDet->title2 != "" and $showcaseDet->desc2 != "")
          <div class="col-md-6">
            <div class="form-group">
              <label>Title Section 2</label>
              <input type="text" class="form-control" name="title2" placeholder="{{$showcaseDet->title2}}" disabled>
            </div>
            <div class="form-group">
              <label>Description Section 2</label>
              <textarea class="" name="desc2" placeholder="{{$showcaseDet->desc2}}" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" disabled></textarea>
            </div>
          </div>
          @endif

          @if($showcaseDet->title3 != "" and $showcaseDet->desc3 != "")
          <div class="col-md-6">
            <div class="form-group">
              <label>Title Section 3</label>
              <input type="text" class="form-control" name="title3" placeholder="{{$showcaseDet->title3}}" disabled>
            </div>
            <div class="form-group">
              <label>Description Section 3</label>
              <textarea class="" name="desc3" placeholder="{{$showcaseDet->desc3}}" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" disabled></textarea>
            </div>
          </div>
          @endif

          @if($showcaseDet->title4 != "" and $showcaseDet->desc4 != "")
          <div class="col-md-6">
            <div class="form-group">
              <label>Title Section 4</label>
              <input type="text" class="form-control" name="title4" placeholder="{{$showcaseDet->title4}}" disabled>
            </div>
            <div class="form-group">
              <label>Description Section 4</label>
              <textarea class="" name="desc4" placeholder="{{$showcaseDet->desc4}}" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" disabled></textarea>
            </div>
          </div>
          @endif

          <!-- <div class="form-group">
            <label>Title Section 5</label>
            <input type="text" class="form-control" name="title5">
          </div>
          <div class="form-group">
            <label>Description Section 5</label>
            <textarea class="" name="desc" placeholder="Place some text here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
          </div> -->
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