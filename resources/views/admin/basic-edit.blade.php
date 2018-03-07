@extends('template.AdminTemplate')

@section('aside-title')
	Basic Info
@endsection

@section('aside-subtitle')
	About Cyber Olympus
@endsection

@section('content')
	<div class="col-md-6">
        <!-- general form elements -->
        <div class="box box-primary">
            <div class="box-header with-border">
            	<h3 class="box-title">Address</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form action="{{url('/admin/basic-info/update')}}" method="post" enctype="multipart/form-data">
              {{ csrf_field() }}
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Email address</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" value="{{$basic->email}}" name="email">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Phone</label>
                  <input type="text" class="form-control" id="exampleInputPassword1" value="{{$basic->phone}}" name="phone">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Full Address</label>
                  <input type="text" class="form-control" id="exampleInputPassword1" value="{{$basic->full_address}}" name="address" >
                </div>
              </div>
              <!-- /.box-body -->
            
          </div>
          <!-- /.box -->
  </div>

    <div class="col-md-6">
    	<!-- general form elements -->
        <div class="box box-primary">
            <div class="box-header with-border">
            	<h3 class="box-title">Social Media</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Facebook</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" value="{{$basic->facebook}}" name="facebook">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Twitter</label>
                  <input type="text" class="form-control" id="exampleInputPassword1" value="{{$basic->twitter}}" name="twitter">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Instagram</label>
                  <input type="text" class="form-control" id="exampleInputPassword1" value="{{$basic->instagram}}" name="instagram">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Linked In</label>
                  <input type="text" class="form-control" id="exampleInputPassword1" value="{{$basic->linkedin}}" name="linkedin">
                </div>
              </div>
              <!-- /.box-body -->
          

          </div>
          <!-- /.box -->
    </div>

    <div class="col-md-12">
        <input type="hidden" value="{{ csrf_token() }}" name="_token" />
       <button type="submit" class="btn btn-primary" >Save</button>
       <a href="{{url('/admin/basic-info')}}" class="btn btn-warning">Cancel</a>
    </div>
    </form>
@endsection

