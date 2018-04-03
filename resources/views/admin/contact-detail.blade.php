@extends('template.AdminTemplate')

@section('aside-title')
	Contact Us Detail
@endsection

@section('aside-subtitle')
	{{$contactDetail->c_username}}
@endsection

@section('content')
	<!-- <div class="col-md-3">
          <div class="box box-solid">
            <div class="box-header with-border">
              <h3 class="box-title">Folders</h3>

              <div class="box-tools">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="box-body no-padding">
              <ul class="nav nav-pills nav-stacked">
                <li class="active"><a href="{{url('/admin/')}}"><i class="fa fa-inbox"></i> Inbox
                  <span class="label label-primary pull-right">12</span></a></li>
                <li><a href="#"><i class="fa fa-filter"></i> Junk <span class="label label-warning pull-right">65</span></a>
                </li>
                <li><a href="#"><i class="fa fa-trash-o"></i> Trash</a></li>
              </ul>
            </div>
            
          </div>
          
        </div> -->

        <div class="col-md-12">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Read Mail</h3>

              <!-- <div class="box-tools pull-right">
                <a href="#" class="btn btn-box-tool" data-toggle="tooltip" title="Previous"><i class="fa fa-chevron-left"></i></a>
                <a href="#" class="btn btn-box-tool" data-toggle="tooltip" title="Next"><i class="fa fa-chevron-right"></i></a>
              </div> -->
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
              <div class="mailbox-read-info">
                <h3>Topic : {{$contactDetail->topic}}</h3>
                <h5>From: {{$contactDetail->c_email}}
                  <span class="mailbox-read-time pull-right">{{$contactDetail->created_at}}</span></h5>
              </div>
              <!-- /.mailbox-read-info -->
              <div class="mailbox-controls with-border text-center">
                <!-- <div class="btn-group">
                  <button type="button" class="btn btn-default btn-sm" data-toggle="tooltip" data-container="body" title="Delete">
                    <i class="fa fa-trash-o"></i></button>
                  <button type="button" class="btn btn-default btn-sm" data-toggle="tooltip" data-container="body" title="Reply">
                    <i class="fa fa-reply"></i></button>
                  <button type="button" class="btn btn-default btn-sm" data-toggle="tooltip" data-container="body" title="Forward">
                    <i class="fa fa-share"></i></button>
                </div> -->
                <!-- /.btn-group -->
                <!-- <button type="button" class="btn btn-default btn-sm" data-toggle="tooltip" title="Print">
                  <i class="fa fa-print"></i></button> -->
              </div>
              <!-- /.mailbox-controls -->
              <div class="mailbox-read-message">
                <p>{{$contactDetail->message}}</p>
              </div>
              <!-- /.mailbox-read-message -->
            </div>
            <!-- /.box-body -->
            
            <!-- /.box-footer -->
            <div class="box-footer">
              <!-- <div class="pull-right">
                <button type="button" class="btn btn-default"><i class="fa fa-reply"></i> Reply</button>
                <button type="button" class="btn btn-default"><i class="fa fa-share"></i> Forward</button>
              </div> -->
              <a type="button" class="btn btn-info" href="{{url('/admin')}}"><i class="fa fa-chevron-left"></i> Back</a>
              <a type="button" class="btn btn-danger" href="{{url('/admin/contact-detail/'.$contactDetail->contact_id.'/delete')}}"><i class="fa fa-trash-o"></i> Delete</a>
              <!-- <a type="button" class="btn btn-default"><i class="fa fa-print"></i> Print</a> -->
            </div>

            <!-- /.box-footer -->
          </div>
           
          <!-- /. box -->
        </div>
@endsection