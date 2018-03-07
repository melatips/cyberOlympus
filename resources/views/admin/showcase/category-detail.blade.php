@extends('template.AdminTemplate')

@section('aside-title')
	Category : {{$categoryDetail->category_name}}
@endsection

@section('aside-subtitle')
	Showcase List
@endsection

@section('content')
	<div class="col-xs-12">
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

    <div class="box">
      <div class="box-header">
        <h3 class="box-title">{{$categoryDetail->category_description}}</h3>
      </div>
      <!-- /.box-header -->
      <div class="box-body">
      	<a href="" class="btn btn-primary"><i class="fa fa-plus"></i> Add Showcase</a>
        <table id="example2" class="table table-bordered table-hover">
          <thead>
          <tr>
            <th>No.</th>
            <th>Showcase Name</th>
            <th>Action</th>
          </tr>
          </thead>
          <tbody>
          
          <tr>
            <td></td>
            <td></td>
            <td></td>
            <td>
            	<a href="" class="btn btn-primary">Detail</a>
            	<a href="" class="btn btn-success">Edit</a>
            </td>
          </tr>
        </table>
      </div>
      <!-- /.box-body -->
    </div>
    <!-- /.box -->

    <a href="{{url('/admin/category')}}" class="btn btn-primary">Back</a>
  </div>
@endsection