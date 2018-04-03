@extends('template.AdminTemplate')

@section('aside-title')
	Edit Careers
@endsection

@section('aside-subtitle')
	{{$editCareers->position}}
@endsection

@section('content')
	<div class="col-md-12">
        <!-- general form elements -->
        <div class="box box-primary">
            <div class="box-header with-border">
            	<h3 class="box-title">Position</h3>
            </div>
            <!-- /.box-header -->

	        <form action="{{url('/admin/careers/update/'.$editCareers->id_career)}}" method="post" enctype="multipart/form-data">
      		{{ csrf_field() }}
	        <div class="box-body">
	            <div class="form-group">
	              <label>Posistion Name</label>
	              <input type="text" class="form-control" name="position" value="{{$editCareers->position}}" required="">
	            </div>
	            <div class="form-group">
	              <label>Icon</label>
	              <img src="{{asset($editCareers->icon)}}" style="display: block">
	              <input type="file" name="icon">
	            </div>
	            <div class="form-group">
	              <label>Requirements</label>
	              <textarea id="editCareers" name="requirements">
	              	{{$editCareers->requirements}}
	              </textarea>
	            </div>
	        </div>
        </div>
        <!-- /.box -->
       	<input type="hidden" value="{{ csrf_token() }}" name="_token" />
       	<button type="submit" class="btn btn-primary" >Update</button>
       	<a href="{{url('/admin/careers')}}" class="btn btn-warning">Back</a>
       </form>
	</div>
@endsection

@section('js')
	<script>
	  tinymce.init({
	    selector: '#editCareers'
	  });
	</script>
@endsection