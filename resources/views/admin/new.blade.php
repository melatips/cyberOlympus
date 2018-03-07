@extends('template.AdminTemplate')

@section('aside-title')
  Contact Us
@endsection

@section('aside-subtitle')
  List
@endsection

@section('content')
  <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">User in Touch</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <td>No.</td>
                  <th>Name</th>
                  <th>Topic</th>
                  <th>E-mail</th>
                  <th>Phone</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @php
                  $no = 1;
                @endphp
                @foreach($contact as $contact)                  
                <tr>
                  <td>{{$no}}</td>
                  <td>{{$contact->c_username}}</td>
                  <td>{{$contact->topic}}</td>
                  <td>{{$contact->c_email}}</td>
                  <td>{{$contact->c_phone}}</td>
                  <td>
                    <a href="" class="btn btn-primary">Detail</a>
                  </td>
                </tr>
                @php
                  $no++;
                @endphp
                @endforeach
                <!-- <tfoot>
                <tr>
                  <th>Name</th>
                  <th>Topic</th>
                  <th>E-mail</th>
                  <th>Phone</th>
                  <th>Action</th>
                </tr>
                </tfoot> -->
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
    </div>
@endsection