@extends('template.AdminTemplate')

@section('aside-title')
  Contact Us
@endsection

@section('aside-subtitle')
  List
@endsection

@section('content')
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
        <div class="col-md-12">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Inbox</h3>

              <!-- <div class="box-tools pull-right">
                <div class="has-feedback">
                  <input type="text" class="form-control input-sm" placeholder="Search Mail">
                  <span class="glyphicon glyphicon-search form-control-feedback"></span>
                </div>
              </div> -->
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
              <!-- <div class="mailbox-controls"> -->
                <!-- Check all button -->
                <!-- <button type="button" class="btn btn-default btn-sm checkbox-toggle"><i class="fa fa-square-o"></i></button> -->
                <!-- <div class="btn-group"> -->
                  <!-- <button type="button" class="btn btn-default btn-sm"><i class="fa fa-trash-o"></i></button> -->
                  <!-- <button type="button" class="btn btn-default btn-sm"><i class="fa fa-reply"></i></button>
                  <button type="button" class="btn btn-default btn-sm"><i class="fa fa-share"></i></button> -->
                <!-- </div> -->
                <!-- /.btn-group -->
                <!-- <a type="button" class="btn btn-default btn-sm" href="{{url('admin/')}}"><i class="fa fa-refresh"></i></a>
                <div class="pull-right">
                  1 - {{count($contact)}} / {{count($contact)}}
                  <div class="btn-group">
                    <button type="button" class="btn btn-default btn-sm"><i class="fa fa-chevron-left"></i></button>
                    <button type="button" class="btn btn-default btn-sm"><i class="fa fa-chevron-right"></i></button>
                  </div> -->
                  <!-- /.btn-group -->
                <!-- </div> -->
                <!-- /.pull-right -->
              <!-- </div> -->
              <div class="table-responsive mailbox-messages">
                <table class="table table-hover table-striped">
                  <tbody>

                @foreach($contact as $contact)
                  <tr>
                    <td><input type="checkbox"></td>
                    <td class="mailbox-name"><a href="{{url('admin/contact-us/'.$contact->contact_id)}}">{{$contact->c_username}}</a></td>
                    <td class="mailbox-subject"><b>{{$contact->topic}}</b>
                    </td>
                    <td class="mailbox-attachment"></td>
                    <td class="mailbox-date">{{date ('Y M d H:i', strtotime($contact->created_at))}}</td>
                  </tr>
                  @endforeach
                  
                  </tbody>
                </table>
                <!-- /.table -->
              </div>
              <!-- /.mail-box-messages -->
            </div>
            <!-- /.box-body -->
            
          </div>
          <!-- /. box -->
        </div>
@endsection