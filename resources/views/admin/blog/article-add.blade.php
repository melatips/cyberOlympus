@extends('template.AdminTemplate')

@section('aside-title')
	Article
@endsection

@section('aside-subtitle')
	Add New
@endsection

@section('content')
	<div class="col-md-12">
        <!-- general form elements -->
        <div class="box box-primary">
            <div class="box-header with-border">
            	<h3 class="box-title">New Article</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form action="{{url('/admin/blog/save')}}" method="post" enctype="multipart/form-data">
              {{ csrf_field() }}
              <div class="box-body">
                <div class="form-group">
                  <label>Title</label>
                  <input type="text" class="form-control" name="title" required="">
                </div>

                <div class="form-group">
                  <label>Category</label>
                  <select class="form-control select2" name="article_cat[]" multiple="multiple" data-placeholder="Select category" style="width: 100%;" required="">
                    @foreach($blogCatList as $category)
                      <option value="{{$category->id_blog_category}}">{{$category->category}}</option>
                    @endforeach
                  </select>
                </div>
                
                <div class="form-group">
                  <label>Content</label>
                  <textarea id="articleContent" name="content"></textarea>
                </div>
              </div>
              <!-- /.box-body -->
        </div>
          <!-- /.box -->

          <!-- <div class="col-md-12"> -->
        	<input type="hidden" value="{{ csrf_token() }}" name="_token" />
       		<button type="submit" class="btn btn-primary" >Save</button>
       		<a href="{{url('/admin/blog')}}" class="btn btn-warning">Cancel</a>
   		 <!-- </div> -->
		</form>
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
		  image_dimensions: false
	  });
	</script>
@endsection