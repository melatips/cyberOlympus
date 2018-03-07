@extends('template.AdminTemplate')

@section('aside-title')
	Showcase Category
@endsection

@section('aside-subtitle')
	Control Panel
@endsection

@section('content')
	<div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Showcase Category</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
            	<a href="{{url('admin/category/add')}}" class="btn btn-primary"><i class="fa fa-plus"></i> Add Category</a>
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>No.</th>
                  <th>Category Name</th>
                  <th>Showcase amount</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @php
                	$no = 1;
                @endphp

                @foreach($category as $categoryList)
                <tr>
                  <td>{{$no}}</td>
                  <td>{{$categoryList->category_name}}</td>
                  <td>re</td>
                  <td>
                  	<a href="{{url('admin/category/'.$categoryList->category_id)}}" class="btn btn-primary">Detail</a>
                  	<a href="{{url('admin/category/edit/'.$categoryList->category_id)}}" class="btn btn-success">Edit</a>
                  </td>
                </tr>
                @php
                  $no++;
                @endphp
                @endforeach
               
                <!-- <tfoot>
                <tr>
                  <th>Name</th>
                  <th>Link</th>
                  <th>Action</th>
                </tr>
                </tfoot> -->
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
  </div>
@endsection