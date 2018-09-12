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

          <style type="text/css">
            .cut {
                -o-text-overflow: ellipsis;   /* Opera */
                text-overflow:    ellipsis;   /* IE, Safari (WebKit) */
                overflow:hidden;              /* don't show excess chars */
                white-space:nowrap;           /* force single line */
                width: 200px !important;                 /* fixed width */
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

          @foreach($article as $art)
          <tr>
            <td>{{$no}}</td>
            <td>{{ucwords(substrwords($art->title, 40))}}</td>
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
              <!-- <a href="{{url('/admin/blog/article/delete/'.$art->id_article)}}" class="btn btn-danger" data-toggle="tooltip" title="Delete"><i class="fa fa-trash"></i></a> -->
              <button type="button" data-toggle="modal" data-target="#deleteArticle" data-target-id="{{$art->id_article}}" data-nama="{{$art->title}}" data-hapus="{{url('/admin/blog/article/delete/'.$art->id_article)}}" class="btn btn-danger"><i class="fa fa-trash"></i></button>
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

    <div class="modal fade" id="deleteArticle" tabindex="-1" role="dialog" aria-labelledby="editCategory" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title delArt" style="text-align: center;"></h5>
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
                    <label style="text-align: center;">Are you sure you want to delete this article?</label>
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
    $('#article').DataTable();
} );
</script>

<script>
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();   
});
</script>

<script type="text/javascript">
  $(document).ready(function() {
      $("#deleteArticle").on("show.bs.modal", function(e) {
        var id = $(e.relatedTarget).data('target-id');
        $(this).find('form').attr('action',$(e.relatedTarget).data('hapus'));
        $('.delArt').text("Article : " + $(e.relatedTarget).data('nama'));
      });
    });
</script>
@endsection