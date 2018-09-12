@extends('template.AdminTemplate')

@section('aside-title')
	About Us
@endsection

@section('aside-subtitle')
	Edit year {{$editAbout->year}}
@endsection

@section('content')
	<div class="col-md-12">
        <div class="box box-primary">
            <div class="box-header with-border">
            	<h3 class="box-title">{{$editAbout->year}}</h3>
            </div>
            <form action="{{url('/admin/about-us/update/'.$editAbout->year)}}" method="post" enctype="multipart/form-data">
              {{ csrf_field() }}
              <div class="box-body">
                <div class="form-group">
                  <label>Year</label>
                 	<div class="dropdown">
					    <select name="year" class="btn btn-primary dropdown-toggle">
					      <option value="{{$editAbout->year}}">{{$editAbout->year}} <span class="caret"></span></option>
					    </select>
				  	</div>
                </div>
                <div class="form-group">
                  <label>Icon</label>
                  <input type="file" name="icon">
                </div>
                <div class="form-group">
                  <label>Description</label>
                  <div class="form-group">
                  <textarea name="description">{{$editAbout->description}}</textarea>
                </div>
                </div>
              </div>
              <!-- /.box-body -->
        </div>
          <!-- /.box -->

          <!-- <div class="col-md-12"> -->
        	<input type="hidden" value="{{ csrf_token() }}" name="_token" />
       		<button type="submit" class="btn btn-primary" >Save</button>
       		<a href="{{url('/admin/about-us')}}" class="btn btn-warning">Cancel</a>
   		 <!-- </div> -->
		</form>
	</div>
@endsection