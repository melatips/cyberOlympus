@extends('template.AdminTemplate')

@section('aside-title')
	Detail Article
@endsection

@section('aside-subtitle')
	Judul Article
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
                  <input type="text" class="form-control" name="title" readonly placeholder="{{$articleDet->title}}">
                </div>

                <div class="form-group">
                  <label>Category</label>
                  <select class="form-control select2" name="article_cat[]" multiple="multiple" data-placeholder="Select category" style="width: 100%;" disabled>
                    
                    <option value=""></option>
                    
                  </select>
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

@section('js')
  <script src="{{asset('plugins/input-mask/jquery.inputmask.js')}}"></script>
  <script src="{{asset('plugins/input-mask/jquery.inputmask.date.extensions.js')}}"></script>
  <script src="{{asset('plugins/input-mask/jquery.inputmask.extensions.js')}}"></script>
  <script type="text/javascript">
    $(function () {
      //Initialize Select2 Elements
      $('.select2').select2()
    })
  </script>
	<script>
	  tinymce.init({
	    selector: '#articleContent',
	      plugins: ["lists", "advlist", "image"],
	      toolbar: "numlist bullist image",
  		  menubar: ["file", "insert"],
  		  image_dimensions: false,
  		  readonly : 1
	  });
	</script>
@endsection