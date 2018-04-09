@extends('template.AdminTemplate')

@section('aside-title')
	Article Category : {{$catDetail->category}}
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
            <th>Action</th>
          </tr>
          </thead>
          <tbody>
          @php
            $no = 1;
          @endphp
          @foreach($catDetail->getArticle as $cat)
          <tr>
            <td>{{$no}}</td>
            <td>{{ucwords($cat->title)}}</td>
            <td>
              <a href="{{url('/admin/blog/article/'.$cat->id_article)}}" class="btn btn-primary">Detail</a>
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