@extends('template.AdminTemplate')

@section('aside-title')
	Showcase
@endsection

@section('aside-subtitle')
	Add Category
@endsection

@section('content')
	<div class="col-md-6">
        <!-- general form elements -->
        <div class="box box-primary">
            <div class="box-header with-border">
            	<h3 class="box-title">Category</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form action="{{url('/admin/category/saveCategory')}}" method="post" enctype="multipart/form-data">
              {{ csrf_field() }}
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Category Name</label>
                  <input type="text" class="form-control" name="category_name" required="">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Description</label>
                  <input type="text" class="form-control" name="category_description">
                </div>
              </div>
              <!-- /.box-body -->
        </div>
          <!-- /.box -->

          <div class="col-md-12">
        	<input type="hidden" value="{{ csrf_token() }}" name="_token" />
       		<button type="submit" class="btn btn-primary" >Save</button>
       		<a href="{{url('/admin/category')}}" class="btn btn-warning">Cancel</a>
   		 </div>
		</form>
	</div>
@endsection