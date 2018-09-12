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
              <!-- href="{{url('admin/category/add')}}" -->
              <a data-toggle="modal" data-target="#addCategory" class="btn btn-primary"><i class="fa fa-plus"></i> Add Category</a>
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

                    <button type="button" data-toggle="modal" data-target="#editCategory" data-target-id="{{$categoryList->category_id}}" data-nama="{{$categoryList->category_name}}" data-url="{{url('/admin/category/update',$categoryList->category_id)}}" class="btn btn-success"><i class="fa fa-pencil"></i></button>

                    <button type="button" data-toggle="modal" data-target="#deleteCategory" data-target-id="{{$categoryList->category_id}}" data-nama="{{$categoryList->category_name}}" data-hapus="{{url('/admin/category/delete',$categoryList->category_id)}}" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                  	<!-- <a href="{{url('admin/category/edit/'.$categoryList->category_id)}}" class="btn btn-success" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil"></i></a> -->
                    <!-- <a href="{{url('admin/category/delete/'.$categoryList->category_id)}}" class="btn btn-danger" data-toggle="tooltip" title="Delete"><i class="fa fa-trash"></i></a> -->
                  </td>
                </tr>
                @php
                  $no++;
                @endphp
                @endforeach
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
  </div>

  <div class="modal fade" id="addCategory" tabindex="-1" role="dialog" aria-labelledby="addCategory" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Add Category</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <!-- </.modal-header> -->
        <div class="modal-body">
          <form action="{{url('/admin/category/saveCategory')}}" method="post" enctype="multipart/form-data">
              {{ csrf_field() }}
              <div class="box-body">
                <div class="form-group">
                  <label>Category Name</label>
                  <input type="text" class="form-control" name="category_name" required="" id="categoryInput">
                </div>

                <div class="form-group">
                  <label>Icon</label>
                  <input type="file" name="category_icon" required="">
                </div>
              </div>
              <!-- /.box-body -->
          </div>
          
        <div class="modal-footer">
          <input type="hidden" value="{{ csrf_token() }}" name="_token" />
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Save</button>
        </div>
        </form>
      </div>
      <!-- </.modal-content> -->
    </div>
  </div>

  <div class="modal fade" id="editCategory" tabindex="-1" role="dialog" aria-labelledby="editCategory" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title"></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <!-- </.modal-header> -->
        <div class="modal-body">
          <form action="#" method="post" enctype="multipart/form-data">
              {{ csrf_field() }}
              <div class="box-body">
                <div class="form-group">
                  <label>Category Name</label>
                  <!-- <label class="namaKat"></label> -->
                  <input type="text" class="form-control blogCatName" name="category_name" required="">
                </div>
                <div class="form-group">
                  <label>Icon</label>
                  <input type="file" name="category_icon">
                </div>
              </div>
              <!-- /.box-body -->
          </div>
          
        <div class="modal-footer">
          <input type="hidden" value="{{ csrf_token() }}" name="_token" />
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary update">Save</button>
        </div>
        </form>
      </div>
      <!-- </.modal-content> -->
    </div>
  </div>

  <div class="modal fade" id="deleteCategory" tabindex="-1" role="dialog" aria-labelledby="editCategory" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title delCat" style="text-align: center;"></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <!-- </.modal-header> -->
        <div class="modal-body">
          <form action="#" method="get" enctype="multipart/form-data">
              {{ csrf_field() }}
              <div class="box-body">
                <div class="form-group">
                  <label style="text-align: center;">Are you sure you want to delete this category?</label>
                  <!-- <input type="text" class="form-control" name="category" required="" id="categoryInput"> -->
                </div>
              </div>
              <!-- /.box-body -->
          </div>
          
        <div class="modal-footer">
          <input type="hidden" value="{{ csrf_token() }}" name="_token" />
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
          <button type="submit" class="btn btn-danger">Delete</button>
        </div>
        </form>
      </div>
      <!-- </.modal-content> -->
    </div>
  </div>
@endsection

@section('js')
<script type="text/javascript">
$(document).ready( function () {
    $('#category').DataTable();
} );
</script>

<script type="text/javascript">
  $(document).ready(function() {
      $("#editCategory").on("show.bs.modal", function(e) {
        var id = $(e.relatedTarget).data('target-id');
        $(this).find('form').attr('action',$(e.relatedTarget).data('url'));
        $('.blogCatName').val($(e.relatedTarget).data('nama'));
        $('.namaKat').text($(e.relatedTarget).data('nama'));
      });

      $("#deleteCategory").on("show.bs.modal", function(e) {
        var id = $(e.relatedTarget).data('target-id');
        $(this).find('form').attr('action',$(e.relatedTarget).data('hapus'));
        $('.delCat').text("Category : " + $(e.relatedTarget).data('nama'));
      });
    });
</script>

<script>
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();   
});
</script>
@endsection