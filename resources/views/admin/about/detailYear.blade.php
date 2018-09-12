@extends('template.AdminTemplate')

@section('aside-title')
	About Us
@endsection

@section('aside-subtitle')
	Detail Year {{$detailAbout->year}}
@endsection

@section('content')
	<div class="col-md-12">
        <div class="box box-primary">
            <div class="box-header with-border">
            	<h3 class="box-title">{{$detailAbout->year}}</h3>
            </div>
              <div class="box-body">
                <div class="form-group">
                  <label>Year</label>
                  <div class="form-group">
                  <input type="text" name="year" value="{{$detailAbout->year}}" disabled="">
                </div>
                </div><!-- 
                <div class="form-group">
                  <label>Icon</label>
                  <input type="file" name="icon">
                </div> -->
                <div class="form-group">
                  <label>Description</label>
                  <div class="form-group">
                  <textarea name="description" disabled="">{{$detailAbout->description}}</textarea>
                </div>
                </div>
              </div>
        </div>
       	<a href="{{url('/admin/about-us')}}" class="btn btn-primary">Back</a>
	</div>
@endsection