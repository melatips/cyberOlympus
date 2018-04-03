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
                    <a href="{{url('admin/careers/delete/'.$careers->id_career)}}" class="btn btn-danger" data-toggle="tooltip" title="Delete"><i class="fa fa-trash"></i></a>
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
@endsection