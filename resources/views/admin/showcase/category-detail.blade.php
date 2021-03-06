@extends('template.AdminTemplate')

@section('aside-title')
	Showcase Category : {{$categoryDetail->category_name}}
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
      <div class="box-body">

        <div class="form-group">
          <label>Icon</label>
          <img src="{{asset($categoryDetail->category_icon)}}" class="img-responsive" style="display: block; background-color: black;">
        </div>
      	
        <table id="showCat" class="table table-bordered table-hover">
          <thead>
          <tr>
            <th>No.</th>
            <th>Showcase Name</th>
            <th>Action</th>
          </tr>
          </thead>
          <tbody>
          @php
            $no = 1;
          @endphp
          @foreach($categoryDetail->getShowcase as $val)
          <tr>
            <td>{{$no}}</td>
            <td>{{ucwords($val->showcase_name)}}</td>
            <td>
            	<a href="{{url('/admin/showcase/detail/'.$val->showcase_list_id)}}" class="btn btn-primary">Detail</a>
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

    <a href="{{url('/admin/category')}}" class="btn btn-primary">Back</a>
  </div>
@endsection

@section('js')
<script type="text/javascript">
$(document).ready( function () {
    $('#showCat').DataTable();
} );
</script>

<script>
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();   
});
</script>
@endsection