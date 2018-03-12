@extends('template.AdminTemplate')

@section('aside-title')
	Showcase
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
        <h3 class="box-title">Showcase List</h3>
      </div>
      <!-- /.box-header -->
      <div class="box-body">
        <a href="{{url('/admin/showcase/add')}}" class="btn btn-primary"><i class="fa fa-plus"></i> Add Showcase</a>
        <table id="example2" class="table table-bordered table-hover">
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
              <td>{{$showcaseList->showcase_name}}</td>
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
              	<a href="{{url('/showcase/detail/'.$showcaseList->showcase_list_id)}}" class="btn btn-primary" data-toggle="tooltip" title="Detail"><i class="fa fa-eye"></i></a>
              	<a href="{{url('/admin/showcase/edit/'.$showcaseList->showcase_list_id)}}" class="btn btn-success" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil"></i></a>
                <a href="{{url('/admin/showcase/delete/'.$showcaseList->showcase_list_id)}}" class="btn btn-danger" data-toggle="tooltip" title="Delete"><i class="fa fa-trash"></i></a>
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
<script>
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();   
});
</script>
@endsection