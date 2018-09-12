@extends('template.AdminTemplate')
<!-- @section('css')

@endsection -->

@section('aside-title')
	Showcase List
@endsection

@section('aside-subtitle')
	Control Panel
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
        <a href="{{url('/admin/showcase/add')}}" class="btn btn-primary"><i class="fa fa-plus"></i> Add Showcase</a>
      </div>
      <!-- /.box-header -->
      <div class="box-body">
        
        
        <table id="showcase" class="table table-bordered table-hover">
          <thead>
            <tr>
              <th>No.</th>
              <th>Name</th>
              <th>Category</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            @php
              $no = 1;
            @endphp

            @foreach($showcaseList as $showcaseList)
            <tr>
              <td>{{$no}}</td>
              <td>{{ucwords($showcaseList->showcase_name)}}</td>
              <td>
                @if(count($showcaseList->getCategory)!=0)
                  @foreach($showcaseList->getCategory as $key => $value)
                    @if (count($showcaseList->getCategory) == 1 || $key==count($showcaseList->getCategory)-1)
                    {{$value->category_name}}
                    @else
                    {{$value->category_name}},
                    @endif
                  @endforeach
                @endif
              </td>
              <td>
              	<a href="{{url('/showcase/detail/'.strtolower($showcaseList->file_name))}}" class="btn btn-primary" data-toggle="tooltip" title="Detail"><i class="fa fa-eye"></i></a>
              	<a href="{{url('/admin/showcase/edit/'.$showcaseList->showcase_list_id)}}" class="btn btn-success" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil"></i></a>
                <!-- <a href="{{url('/admin/showcase/delete/'.$showcaseList->showcase_list_id)}}" class="btn btn-danger" data-toggle="tooltip" title="Delete"><i class="fa fa-trash"></i></a> -->
                <button type="button" data-toggle="modal" data-target="#deleteShowcase" data-target-id="{{$showcaseList->showcase_list_id}}" data-nama="{{$showcaseList->showcase_name}}" data-hapus="{{url('/admin/showcase/delete/'.$showcaseList->showcase_list_id)}}" class="btn btn-danger"><i class="fa fa-trash"></i></button>
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

    <div class="modal fade" id="deleteShowcase" tabindex="-1" role="dialog" aria-labelledby="editCategory" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title delShow" style="text-align: center;"></h5>
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
                    <label style="text-align: center;">Are you sure you want to delete this showcase?</label>
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
    $('#showcase').DataTable();
} );
</script>

<script>
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();   
});
</script>

<script type="text/javascript">
  $(document).ready(function() {
      $("#deleteShowcase").on("show.bs.modal", function(e) {
        var id = $(e.relatedTarget).data('target-id');
        $(this).find('form').attr('action',$(e.relatedTarget).data('hapus'));
        $('.delShow').text("Showcase : " + $(e.relatedTarget).data('nama'));
      });
    });
</script>
@endsection