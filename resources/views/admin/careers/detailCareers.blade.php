@extends('template.AdminTemplate')

@section('aside-title')
	Detail Careers
@endsection

@section('aside-subtitle')
	{{$detailCareers->position}}
@endsection

@section('content')
	<div class="col-md-12">
        <!-- general form elements -->
        <div class="box box-primary">
            <div class="box-header with-border">
            	<h3 class="box-title">Position</h3>
            </div>
            <!-- /.box-header -->

	        <div class="box-body">
	            <div class="form-group">
	              <label>Posistion Name</label>
	              <input type="text" class="form-control" name="position" placeholder="{{$detailCareers->position}}" disabled="">
	            </div>
	            <div class="form-group">
	              <label>Icon</label>
	              <img src="{{asset($detailCareers->icon)}}" style="display: block">
	            </div>
	            <div class="form-group">
	              <label>Requirements</label>
	              <textarea id="detail" name="requirements" disabled="">
	              	{{$detailCareers->requirements}}
	              </textarea>
	            </div>
	        </div>
        </div>
        <!-- /.box -->
       	<a href="{{url('/admin/careers')}}" class="btn btn-primary">Back</a>
	</div>
@endsection

@section('css')
    <link rel="stylesheet" type="text/css" href="{{asset('froala/css/froala_editor.pkgd.css ')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('froala/css/froala_editor.min.css')}}">
@endsection

@section('js')
	<script type="text/javascript" src="{{asset('froala/js/froala_editor.pkgd.min.js')}}"></script>
    <script>
      $(function() {
        $('textarea#detail').froalaEditor({
          // toolbarBottom: true,
          toolbarButtons: ['fullscreen', 'bold', 'italic', 'underline', 'strikeThrough', 'subscript', 'superscript', 'fontFamily', 'fontSize', '|', 'color', 'emoticons', 'inlineStyle', 'paragraphStyle', '|', 'paragraphFormat', 'align', 'formatOL', 'formatUL', 'outdent', 'indent', '-', 'insertLink', 'insertImage', 'insertVideo', 'insertFile', 'insertTable', '|', 'quote', 'insertHR', 'undo', 'redo', 'clearFormatting', 'selectAll', 'html']
        })
      });
    </script>
<!-- 	<script>
	  tinymce.init({
	    selector: '#detail',
	    readonly : 1,
	    plugins: ["lists", "advlist"],
      	toolbar: "numlist bullist"
	  });
	</script> -->
@endsection