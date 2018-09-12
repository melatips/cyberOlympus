@extends('template.AdminTemplate')

@section('aside-title')
	About Us
@endsection

@section('aside-subtitle')
	Add New
@endsection

@section('content')
	<div class="col-md-12">
        <div class="box box-primary">
            <div class="box-header with-border">
            	<h3 class="box-title">New</h3>
            </div>
            <form action="{{url('/admin/about-us/save')}}" method="post" enctype="multipart/form-data">
              {{ csrf_field() }}
              <div class="box-body">
                <div class="form-group">
                  <label>Year</label>
                 	<div class="dropdown">
					    @php
				    		$first = $year-3;
				    		$last = $year+5;
				    	@endphp
					    <select name="year" class="btn btn-primary dropdown-toggle">
					      <option>Select Year <span class="caret"></span></option>
					      @for($i = $first; $i<=$last; $i++)
					      <option value="{{$i}}">{{$i}}</option>
					      @endfor
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
                  <textarea name="description"></textarea>
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