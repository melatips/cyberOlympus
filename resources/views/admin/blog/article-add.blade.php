@extends('template.AdminTemplate')

@section('aside-title')
  Article
@endsection

@section('aside-subtitle')
  Add New
@endsection

@section('content')
<!-- modal add image -->
  <div class="modal fade" id="add-image" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-body">
          <div class="box-body">
        <div class="col-md-12">
          <h3>Image Gallery</h3>
          <button type="button" class="btn btn-default" data-dismiss="modal" style="float:right;margin-top: -30px;"><span class="fa fa-close"></span></button>
          <hr>
          <div class="col-md-8">
              <div id="fillgrid">

              </div>
          </div>

          <div class="col-md-4">
              <div id="loading-icon" align="center" style="display: none;">
                  <img src="" width="30px">
              </div>
              <form name="uploadimageajax" id="uploadimageajax" >
                  <input id="file_upload" style="color: white;" name="attachment_file" class="file_upload_icon" type="file"/>
                  <input type="text" style="margin: 10px 0" name="desc" class="form-control" placeholder="Image title">
                  <div id="loading"></div>
                  <input type="button" class="btn btn-primary" value="Upload" onclick="return sendData()"/>
              </form>
          </div>
        </div>
      </div>
      </div>
      </div>
    </div>
  </div>

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
                      <option value="{{$category->id_article_category}}">{{ucwords($category->category)}}</option>
                    @endforeach
                  </select>
                </div>

                <label>Intro</label>
                <div class="form-group">
                  <textarea name="intro"></textarea>
                </div>
                
                <div class="form-group">
                  <label>Content</label>
                  <div id="editor-wysiwyg">
                    <div id="wysiwyg-panel">
                      <button type="button" class="btn btn-success" data-toggle="modal" data-target="#add-image" style="margin-bottom: 15px; margin-top: 15px;">Add Image</button>

                      <textarea id="froalaid" name="content"></textarea>
                    </div>
                  </div>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12">

            <h3>Featured Image</h3>
            <hr>
            <div class="alert alert-danger" id="image-alert" style="display: none;">Opps, Gambar Masih Kosong</div>

            <div class="image-editor-3">
                <input type="file" class="cropit-image-input" id="featured-image">
                <label>* Best size min 960px with 2:3 ratio</label>
                <!-- <div class="cropit-image-article"></div>
                <div class="image-size-label">
                    Resize image
                </div>
                <input type="range" class="cropit-image-zoom-input"> -->
                <input type="hidden" name="image-data" class="hidden-image-data-article" />
            </div>

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
  <script src="{{asset('js/article.js')}}"></script>

  <script type="text/javascript">
    $(function () {
      $('.select2').select2()
    })
  </script>

  <script>
    $(function() {
      $('textarea#froalaid').froalaEditor({
        // toolbarBottom: true,
        toolbarButtons: ['fullscreen', 'bold', 'italic', 'underline', 'strikeThrough', 'subscript', 'superscript', 'fontFamily', 'fontSize', '|', 'color', 'emoticons', 'inlineStyle', 'paragraphStyle', '|', 'paragraphFormat', 'align', 'formatOL', 'formatUL', 'outdent', 'indent', '-', 'insertLink', 'insertImage', 'insertVideo', 'insertFile', 'insertTable', '|', 'quote', 'insertHR', 'undo', 'redo', 'clearFormatting', 'selectAll', 'html']
      })
    });
  </script>
@endsection