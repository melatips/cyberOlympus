@extends('template.AdminTemplate')

@section('aside-title')
	About Us
@endsection

@section('aside-subtitle')
	About Cyber Olympus
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
        <a href="{{url('admin/about-us/add')}}" class="btn btn-primary"><i class="fa fa-plus"></i> Add Year</a>
      </div>
      <!-- /.box-header -->
      <div class="box-body">
      	
        <table id="aboutUs" class="table table-bordered table-hover">
          <thead>
          <tr>
            <th>No.</th>
            <th>Year</th>
            <th>Overview</th>
            <th>Action</th>
          </tr>
          </thead>

          <style type="text/css">
            .cut {
                -o-text-overflow: ellipsis;  
                text-overflow:    ellipsis;  
                overflow:hidden;             
                white-space:nowrap;           
                width: 200px !important;
            }
          </style>
          <tbody>
          @php
            $no = 1;

            function substrwords($text, $maxchar, $end='...') {
                if (strlen($text) > $maxchar || $text == '') {
                    $words = preg_split('/\s/', $text);      
                    $output = '';
                    $i      = 0;
                    while (1) {
                        $length = strlen($output)+strlen($words[$i]);
                        if ($length > $maxchar) {
                            break;
                        } 
                        else {
                            $output .= " " . $words[$i];
                            ++$i;
                        }
                    }
                    $output .= $end;
                } 
                else {
                    $output = $text;
                }
                return $output;
            }
          @endphp

          @foreach($aboutList as $about)
          <tr>
            <td>{{$no}}</td>
            <td>{{$about->year}}</td>
            <td>{{substrwords($about->description, 40)}}</td>
            <td>
            	<a href="{{url('admin/about-us/detail/'.$about->year)}}" class="btn btn-primary" data-toggle="tooltip" title="Detail"><i class="fa fa-eye"></i></a>
            	<a href="{{url('admin/about-us/edit/'.$about->year)}}" class="btn btn-success" data-toggle="tooltip" title="Edit"><i class="fa fa-pencil"></i></a>
              <button type="button" data-toggle="modal" data-target="#deleteYear" data-target-id="{{$about->id}}" data-year="{{$about->year}}" data-del="{{url('admin/about-us/delete/'.$about->year)}}" class="btn btn-danger"><i class="fa fa-trash"></i></button>
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

    <div class="modal fade" id="deleteYear" tabindex="-1" role="dialog" aria-labelledby="deleteYear" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title delYear" style="text-align: center;"></h5>
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
                    <label style="text-align: center;">Are you sure you want to delete this year?</label>
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
    $('#aboutUs').DataTable();
} );
</script>

<script>
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();   
});
</script>

<script type="text/javascript">
  $(document).ready(function() {
      $("#deleteYear").on("show.bs.modal", function(e) {
        var id = $(e.relatedTarget).data('target-id');
        $(this).find('form').attr('action',$(e.relatedTarget).data('del'));
        $('.delYear').text("Year : " + $(e.relatedTarget).data('year'));
      });
    });
</script>
@endsection