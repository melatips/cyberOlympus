@extends('template.AdminTemplate')

@section('aside-title')
	Article Category : 
@endsection

@section('aside-subtitle')
	Article List
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
      	
        <table id="blogCat" class="table table-bordered table-hover">
          <thead>
          <tr>
            <th>No.</th>
            <th>Article Title</th>
          </tr>
          </thead>
          <tbody>
          
          <tr>
            <td></td>
            <td></td>
          </tr>
          
        </table>
      </div>
      <!-- /.box-body -->
    </div>
    <!-- /.box -->

    <a href="{{url('/admin/blog/category')}}" class="btn btn-primary">Back</a>
  </div>
@endsection

@section('js')
<script type="text/javascript">
$(document).ready( function () {
    $('#blogCat').DataTable();
} );
</script>

<script>
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();   
});
</script>
@endsection