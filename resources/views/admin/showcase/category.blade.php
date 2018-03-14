@extends('template.AdminTemplate')
<!-- @section('css')
<script src="{{asset('AdminLTE-2.4.3/bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('AdminLTE-2.4.3/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
@endsection -->

@section('aside-title')
	Category List
@endsection

@section('aside-subtitle')
	Control Panel
@endsection

@section('content')
	<div class="col-xs-12">
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
          <div class="box">
            <div class="box-header">
              <a href="{{url('admin/category/add')}}" class="btn btn-primary"><i class="fa fa-plus"></i> Add Category</a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
            	
              <table id="category" class="table table-bordered table-hover">
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
                  <td>{{count($categoryList->getShowcase)}}</td>
                  <td>
                  	<a href="{{url('admin/category/'.$categoryList->category_id)}}" class="btn btn-primary" data-toggle="tooltip" title="Detail"><i class="fa fa-eye"></i></a>
                  	<a href="{{url('admin/category/edit/'.$categoryList->category_id)}}" class="btn btn-success" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil"></i></a>
                    <a href="{{url('admin/category/delete/'.$categoryList->category_id)}}" class="btn btn-danger" data-toggle="tooltip" title="Delete"><i class="fa fa-trash"></i></a>
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

@section('js')
<script type="text/javascript">
$(document).ready( function () {
    $('#category').DataTable();
} );
</script>

<script>
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();   
});
</script>
@endsection