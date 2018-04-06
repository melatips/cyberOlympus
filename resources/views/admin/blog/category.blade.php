@extends('template.AdminTemplate')

@section('aside-title')
	Blog
@endsection

@section('aside-subtitle')
	Category List
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
	          <button type="button" data-toggle="modal" data-target="#addCategory" class="btn btn-primary"><i class="fa fa-plus"></i> Add Category</button>
	        </div>
	        <!-- /.box-header -->

	        <div class="box-body">
	          <table id="category" class="table table-bordered table-hover">
	            <thead>
	            <tr>
	              <th>No.</th>
	              <th>Category Name</th>
	              <th>Article amount</th>
	              <th>Action</th>
	            </tr>
	            </thead>
	            <tbody>

	            @php
                	$no = 1;
                @endphp

                @foreach($blogCat as $cat)
	            <tr>
	              <td>{{$no}}</td>
	              <td>{{$cat->category}}</td>
	              <td></td>
	              <td>
	              	<a href="{{url('admin/blog/category/detail')}}" class="btn btn-primary" data-toggle="tooltip" title="Detail"><i class="fa fa-eye"></i></a>
	              	<button type="button" data-toggle="modal" data-target="#editCategory" data-target-id="{{$cat->id_blog_category}}" class="btn btn-success"><i class="fa fa-pencil"></i></button>
	              	<!-- <a href="{{url('admin/blog/category/edit/')}}" class="btn btn-success" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil"></i></a> -->
	              	<button type="button" data-toggle="modal" data-target="#deleteCategory" class="btn btn-danger"><i class="fa fa-trash"></i></button>
	                <!-- <a href="{{url('admin/blog/category/delete/')}}" class="btn btn-danger" data-toggle="tooltip" title="Delete"><i class="fa fa-trash"></i></a> -->
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

  	<!-- Modal -->
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
	        <form action="{{url('/admin/blog/category/save')}}" method="post" enctype="multipart/form-data">
              {{ csrf_field() }}
              <div class="box-body">
                <div class="form-group">
                  <label>Category Name</label>
                  <input type="text" class="form-control" name="category" required="" id="categoryInput">
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
	        <h5 class="modal-title" id="namaKat"></h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <!-- </.modal-header> -->
	      <div class="modal-body">
	        <form action="{{url('/admin/blog/category/update')}}" method="post" enctype="multipart/form-data">
              {{ csrf_field() }}
              <div class="box-body">
                <div class="form-group">
                  <label>Category Name</label>
                  <input type="text" class="form-control" name="category" required="" value-id="categoryName">
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

	<!-- <div class="modal fade bd-example-modal-sm" id="deleteCategory" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
	  <div class="modal-dialog modal-sm">
	    <div class="modal-content">
	      ...
	    </div>
	  </div>
	</div> -->

		<div class="modal fade" id="deleteCategory" tabindex="-1" role="dialog" aria-labelledby="editCategory" aria-hidden="true">
	  <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
	    <div class="modal-content">
	      <!-- </.modal-header> -->
	      <div class="modal-body">
	        <form action="{{url('/admin/blog/category/update')}}" method="post" enctype="multipart/form-data">
              {{ csrf_field() }}
              <div class="box-body">
                <div class="form-group">
                  <label>Category Name</label>
                  <input type="text" class="form-control" name="category" required="" id="categoryInput">
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
	$('#addCategory').on('shown.bs.modal', function () {
	  $('#categoryInput').trigger('focus')
	}),
	$('#editCategory').on('shown.bs.modal', function () {
	  $('#categoryInput').trigger('focus')
	}),
	$('#deleteCategory').on('shown.bs.modal', function () {
	})
</script>

<script type="text/javascript">
	$(document).ready(function() {
    	$("#editCategory").on("show.bs.modal", function(e) {
        var id = $(e.relatedTarget).data('target-id');
            $.get( "{{url('admin/blog/category')}}/" + id, function( data ) {
                $("#namaKat").text("Edit Category " + data.category);
                $(".update").attr("href", "{{url('admin/blog/category/update')}}/"+data.id_blog_category);
            });
        });
    });
</script>
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