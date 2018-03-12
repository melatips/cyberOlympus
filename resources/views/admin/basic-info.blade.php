@extends('template.AdminTemplate')

@section('aside-title')
	Basic Info
@endsection

@section('aside-subtitle')
	About Cyber Olympus
@endsection

@section('content')
@if(session('status'))
    <div class="alert alert-info alert-dismissable">
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
	<div class="col-md-6">
        <!-- general form elements -->
        <div class="box box-primary">
            <div class="box-header with-border">
            	<h3 class="box-title">Address</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form">
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Email address</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" placeholder="{{$basic->email}}" disabled>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Phone</label>
                  <input type="text" class="form-control" id="exampleInputPassword1" placeholder="{{$basic->phone}}" disabled>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Full Address</label>
                  <input type="text" class="form-control" id="exampleInputPassword1" placeholder="{{$basic->full_address}}" disabled>
                </div>
              </div>
              <!-- /.box-body -->
            </form>
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
            <form role="form">
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Facebook</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="{{$basic->facebook}}" disabled>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Twitter</label>
                  <input type="text" class="form-control" id="exampleInputPassword1" placeholder="{{$basic->twitter}}" disabled>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Instagram</label>
                  <input type="text" class="form-control" id="exampleInputPassword1" placeholder="{{$basic->instagram}}" disabled>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Linked In</label>
                  <input type="text" class="form-control" id="exampleInputPassword1" placeholder="{{$basic->linkedin}}" disabled>
                </div>
              </div>
              <!-- /.box-body -->
            </form>
          </div>
          <!-- /.box -->
    </div>

    <div class="col-md-12">
       <a href="{{url('/admin/basic-info/edit')}}" class="btn btn-primary">Edit</a>
    </div>
@endsection

