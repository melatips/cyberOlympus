@extends('template.AdminTemplate')

@section('aside-title')
	Showcase
@endsection

@section('aside-subtitle')
	Edit Showcase
@endsection

@section('content')
	<div class="col-md-12">
    <!-- general form elements -->
    <div class="box box-primary">
      <div class="box-header with-border">
      	<h3 class="box-title">{{$showcaseEdit->showcase_name}}</h3>
      </div>
      <!-- /.box-header -->
      <!-- form start -->
      <form action="{{ url('/admin/showcase/update/'.$showcaseEdit->showcase_list_id) }}" method="post" enctype="multipart/form-data">
      {{ csrf_field() }}
        <div class="box-body">
          <div class="form-group">
            <label>Showcase Name</label>
            <input type="text" class="form-control" name="showcase_name"  value="{{$showcaseEdit->showcase_name}}">
          </div>

          <div class="form-group">
            <label>Category</label>
            <select class="form-control select2" name="showcase_cat" multiple="multiple" data-placeholder="Select category" style="width: 100%;">
              
            </select>
        	</div>

          <div class="col-md-6">
            <div class="form-group">
              <label>Title Section 1</label>
              <input type="text" class="form-control" name="title1"  value="{{$showcaseEdit->title1}}">
            </div>
            <div class="form-group">
              <label>Description Section 1</label>
              <textarea class="" name="desc1" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{{$showcaseEdit->desc1}}</textarea>
            </div>
          </div>

          <div class="col-md-6">
            <div class="form-group">
              <label>Title Section 2</label>
              <input type="text" class="form-control" name="title2"  value="{{$showcaseEdit->title2}}">
            </div>
            <div class="form-group">
              <label>Description Section 2</label>
              <textarea class="" name="desc2" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{{$showcaseEdit->desc2}}</textarea>
            </div>
          </div>

          <div class="col-md-6">
            <div class="form-group">
              <label>Title Section 3</label>
              <input type="text" class="form-control" name="title3"  value="{{$showcaseEdit->title3}}">
            </div>
            <div class="form-group">
              <label>Description Section 3</label>
              <textarea class="" name="desc3" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{{$showcaseEdit->desc3}}</textarea>
            </div>
          </div>

          <div class="col-md-6">
            <div class="form-group">
              <label>Title Section 4</label>
              <input type="text" class="form-control" name="title4"  value="{{$showcaseEdit->title4}}">
            </div>
            <div class="form-group">
              <label>Description Section 4</label>
              <textarea class="" name="desc4" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{{$showcaseEdit->desc4}}</textarea>
            </div>
          </div>

          <!-- <div class="form-group">
            <label>Title Section 5</label>
            <input type="text" class="form-control" name="title5">
          </div>
          <div class="form-group">
            <label>Description Section 5</label>
            <textarea class="" name="desc"  value="Place some text here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
          </div> -->
        </div>
          <!-- /.box-body -->
    </div>
    <!-- /.box -->

        <div class="col-md-12">
        	<input type="hidden" value="{{ csrf_token() }}" name="_token" />
       		<button type="submit" class="btn btn-primary" >Save</button>
       		<a href="{{url('/admin/showcase')}}" class="btn btn-warning">Cancel</a>
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