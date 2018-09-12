@extends('template.AdminTemplate')

@section('aside-title')
	Detail Article
@endsection

@section('aside-subtitle')
	{{ucwords($articleDet->title)}}
@endsection

@section('content')
	<div class="col-md-12">
        <!-- general form elements -->
        <div class="box box-primary">
            <div class="box-header with-border">
            	<h3 class="box-title">Article</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            
              <div class="box-body">
                <div class="form-group">
                  <label>Title</label>
                  <input type="text" class="form-control" name="title" readonly placeholder="{{ucwords($articleDet->title)}}">
                </div>

                <div class="form-group">
                  <label>Category</label>
                  <input type="" class="form-control" placeholder="@if (count($catArtName) != 0) @foreach ($catArtName as $key => $value) @if(count($catArtName) == 1 || $key==count($catArtName)-1) {{ucwords($value->category)}} @else {{ucwords($value->category)}}, @endif @endforeach @endif" name="" disabled>
                </div>

                <div class="form-group">
                  <label>Featured Image</label>
                  <img src="{{asset('images/article/'.$articleDet->featured_image)}}" class="img-responsive" style="display: block">
                </div>
                
                <div class="form-group">
                  <label>Content</label>
                  <textarea id="articleContent" name="content">
                    {{$articleDet->content}}
                  </textarea>
                </div>
              </div>
              <!-- /.box-body -->
        </div>
          <!-- /.box -->
       		<a href="{{url('/admin/blog')}}" class="btn btn-primary">Back</a>
   		 <!-- </div> -->
		
	</div>
@endsection

@section('css')
    <link rel="stylesheet" type="text/css" href="{{asset('froala/css/froala_editor.pkgd.css ')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('froala/css/froala_editor.min.css')}}">
@endsection

@section('js')
  <script src="{{asset('plugins/input-mask/jquery.inputmask.js')}}"></script>
  <script src="{{asset('plugins/input-mask/jquery.inputmask.date.extensions.js')}}"></script>
  <script src="{{asset('plugins/input-mask/jquery.inputmask.extensions.js')}}"></script>
  <script type="text/javascript" src="{{asset('froala/js/froala_editor.pkgd.min.js')}}"></script>
  <script type="text/javascript">
    $(function () {
      //Initialize Select2 Elements
      $('.select2').select2()
    })
  </script>
	<!-- <script>
	  tinymce.init({
	    selector: '#articleContent',
	      plugins: ["lists", "advlist", "image"],
	      toolbar: "numlist bullist image",
  		  menubar: ["file", "insert"],
  		  image_dimensions: false,
  		  readonly : 1
	  });
	</script> -->
  <script>
    $(function() {
      $('textarea#articleContent').froalaEditor({
        // toolbarBottom: true,
        toolbarButtons: ['fullscreen', 'bold', 'italic', 'underline', 'strikeThrough', 'subscript', 'superscript', 'fontFamily', 'fontSize', '|', 'color', 'emoticons', 'inlineStyle', 'paragraphStyle', '|', 'paragraphFormat', 'align', 'formatOL', 'formatUL', 'outdent', 'indent', '-', 'insertLink', 'insertImage', 'insertVideo', 'insertFile', 'insertTable', '|', 'quote', 'insertHR', 'undo', 'redo', 'clearFormatting', 'selectAll', 'html']
      }),
      $('textarea#articleContent').froalaEditor('edit.off');
    });
  </script>
@endsection