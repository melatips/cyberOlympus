@extends('template.AdminTemplate')

@section('aside-title')
	Blog
@endsection

@section('aside-subtitle')
	Article List
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
        <a href="{{url('/admin/blog/add')}}" class="btn btn-primary"><i class="fa fa-plus"></i> Add Article</a>
      </div>
      <!-- /.box-header -->
      <div class="box-body">
        <table id="article" class="table table-bordered table-hover">
          <thead>
          <tr>
            <th>No.</th>
            <th>Title</th>
            <th>Category</th>
            <th>Created</th>
            <th>Action</th>
          </tr>
          </thead>
          <tbody>
          @php
            $no = 1;
          @endphp

          @foreach($article as $art)
          <tr>
            <td>{{$no}}</td>
            <td>{{ucwords($art->title)}}</td>
            <td>
              @if(count($art->getCategoryArt)!=0)
                  @foreach($art->getCategoryArt as $key => $value)
                    @if (count($art->getCategoryArt) == 1 || $key==count($art->getCategoryArt)-1)
                    {{ucwords($value->category)}}
                    @else
                    {{ucwords($value->category)}},
                    @endif
                  @endforeach
                @endif
            </td>
            <td>{{date('d F Y', strtotime($art->created_at))}}</td>
            <td>
            	<a href="{{url('/admin/blog/article/'.$art->id_article)}}" class="btn btn-primary" data-toggle="tooltip" title="Detail"><i class="fa fa-eye"></i></a>
            	<a href="{{url('/admin/blog/article/edit/'.$art->id_article)}}" class="btn btn-success" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil"></i></a>
              <a href="{{url('/admin/blog/article/delete/'.$art->id_article)}}" class="btn btn-danger" data-toggle="tooltip" title="Delete"><i class="fa fa-trash"></i></a>
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
    $('#article').DataTable();
} );
</script>

<script>
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();   
});
</script>
@endsection