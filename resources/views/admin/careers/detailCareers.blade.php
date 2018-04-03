@extends('template.AdminTemplate')

@section('aside-title')
	Detail Careers
@endsection

@section('aside-subtitle')
	{{$detailCareers->position}}
@endsection

@section('content')
	<div class="col-md-12">
        <!-- general form elements -->
        <div class="box box-primary">
            <div class="box-header with-border">
            	<h3 class="box-title">Position</h3>
            </div>
            <!-- /.box-header -->

	        <div class="box-body">
	            <div class="form-group">
	              <label>Posistion Name</label>
	              <input type="text" class="form-control" name="position" placeholder="{{$detailCareers->position}}" disabled="">
	            </div>
	            <div class="form-group">
	              <label>Icon</label>
	              <img src="{{asset($detailCareers->icon)}}" style="display: block">
	            </div>
	            <div class="form-group">
	              <label>Requirements</label>
	              <textarea id="detail" name="requirements" disabled="">
	              	{{$detailCareers->requirements}}
	              </textarea>
	            </div>
	        </div>
        </div>
        <!-- /.box -->
       	<a href="{{url('/admin/careers')}}" class="btn btn-info">Back</a>
	</div>
@endsection

@section('js')
	<script>
	  tinymce.init({
	    selector: '#detail',
	    readonly : 1
	  });
	</script>
@endsection