@extends('template.AdminTemplate')

@section('aside-title')
	Careers
@endsection

@section('aside-subtitle')
	Position List
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
        <a href="{{url('admin/careers/add')}}" class="btn btn-primary"><i class="fa fa-plus"></i> Add Position</a>
      </div>
      <!-- /.box-header -->
      <div class="box-body">
      	
        <table id="careers" class="table table-bordered table-hover">
          <thead>
          <tr>
            <th>No.</th>
            <th>Position Name</th>
            <th>Action</th>
          </tr>
          </thead>
          <tbody>
          @php
            $no = 1;
          @endphp

          @foreach($careersList as $careers)
          <tr>
            <td>{{$no}}</td>
            <td>{{$careers->position}}</td>
            <td>
            	<a href="{{url('admin/careers/detail/'.$careers->id_career)}}" class="btn btn-primary" data-toggle="tooltip" title="Detail"><i class="fa fa-eye"></i></a>
            	<a href="{{url('admin/careers/edit/'.$careers->id_career)}}" class="btn btn-success" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil"></i></a>
              <!-- <a href="{{url('admin/careers/delete/'.$careers->id_career)}}" class="btn btn-danger" data-toggle="tooltip" title="Delete"><i class="fa fa-trash"></i></a> -->
              <button type="button" data-toggle="modal" data-target="#deletePosition" data-target-id="{{$careers->id_career}}" data-nama="{{$careers->position}}" data-hapus="{{url('admin/careers/delete/'.$careers->id_career)}}" class="btn btn-danger"><i class="fa fa-trash"></i></button>
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

    <div class="modal fade" id="deletePosition" tabindex="-1" role="dialog" aria-labelledby="editCategory" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title delPos" style="text-align: center;"></h5>
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
                    <label style="text-align: center;">Are you sure you want to delete this position?</label>
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
  </div>
@endsection

@section('js')
<script type="text/javascript">
$(document).ready( function () {
    $('#careers').DataTable();
} );
</script>

<script>
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();   
});
</script>

<script type="text/javascript">
  $(document).ready(function() {
      $("#deletePosition").on("show.bs.modal", function(e) {
        var id = $(e.relatedTarget).data('target-id');
        $(this).find('form').attr('action',$(e.relatedTarget).data('hapus'));
        $('.delPos').text("Position : " + $(e.relatedTarget).data('nama'));
      });
    });
</script>
@endsection