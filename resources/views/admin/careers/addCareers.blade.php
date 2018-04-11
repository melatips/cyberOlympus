@extends('template.AdminTemplate')

@section('aside-title')
	Add Careers
@endsection

@section('content')
	<div class="col-md-12">
        <!-- general form elements -->
        <div class="box box-primary">
            <div class="box-header with-border">
            	<h3 class="box-title">Position</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form action="{{url('/admin/careers/save')}}" method="post" enctype="multipart/form-data">
              {{ csrf_field() }}
              <div class="box-body">
                <div class="form-group">
                  <label>Posistion Name</label>
                  <input type="text" class="form-control" name="position" required="">
                </div>
                <div class="form-group">
                  <label>Icon</label>
                  <input type="file" name="icon" required="">
                </div>
                <div class="form-group">
                  <label>Requirements</label>
                  <textarea id="addCareers" name="requirements"></textarea>
                </div>
              </div>
              <!-- /.box-body -->
        </div>
          <!-- /.box -->

          <!-- <div class="col-md-12"> -->
        	<input type="hidden" value="{{ csrf_token() }}" name="_token" />
       		<button type="submit" class="btn btn-primary" >Save</button>
       		<a href="{{url('/admin/careers')}}" class="btn btn-warning">Cancel</a>
   		 <!-- </div> -->
		</form>
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
        $('textarea#addCareers').froalaEditor({
          // toolbarBottom: true,
          toolbarButtons: ['fullscreen', 'bold', 'italic', 'underline', 'strikeThrough', 'subscript', 'superscript', 'fontFamily', 'fontSize', '|', 'color', 'emoticons', 'inlineStyle', 'paragraphStyle', '|', 'paragraphFormat', 'align', 'formatOL', 'formatUL', 'outdent', 'indent', '-', 'insertLink', 'insertImage', 'insertVideo', 'insertFile', 'insertTable', '|', 'quote', 'insertHR', 'undo', 'redo', 'clearFormatting', 'selectAll', 'html']
        })
      });
    </script>
<!-- 	<script>
	  tinymce.init({
	    selector: '#mytextarea',
      plugins: ["lists", "advlist"],
      toolbar: "numlist bullist"
	  });
	</script> -->
@endsection