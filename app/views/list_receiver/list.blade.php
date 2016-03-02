@extends('template')
@section('content')

<div class="pageheader">
  <h2>List Email Receiver</h2>
  <div class="breadcrumb-wrapper">
    <span class="label">You are here:</span>
    <ol class="breadcrumb">
      <li><a href="#">Home</a></li>
      <li class="active">Receiver</li>
    </ol>
  </div>
</div>

<div class="contentpanel panel-email">
  <!-- content goes here... -->
  <div class="row">
        
        
        <div class="col-sm-11 col-lg-12">
            <div class="panel panel-default">
            {{$notip}}
                <div class="panel-body">
                    
                    <div class="pull-right">
                        <a href='{{Config::get("app.url")}}public/blast/receiver/create' class="btn btn-primary">Create Receiver</a>
                    </div><!-- pull-right -->
                    
                    <h5 class="subtitle mb5">List Email Receiver</h5>
                    <!-- <p class="text-muted">Showing 1 - 15 of 230 messages</p> -->
                    
                    <div class="table-responsive">
                        <!-- <label>List Email Template</label> -->
                        <table class="table">
                            <tr>
                                <th>No</th>
                                <th>Full Name</th>
                                <th>Email</th>
                                <th>Status</th>
                            </tr>
                            <?php $i=0;?>
                            @foreach($page as $pages)
                            <?php $i++;?>
                            <?Php $stat = ($pages->receiver_status == 1)? "Active" : "Inactive"?>
                            <tr>
                                <td>{{$i}}</td>
                                <td>{{$pages->receiver_name}}</td>
                                <td>{{$pages->receiver_email}}</td>
                                <td>{{$stat}}</td>
                                <td><a href="{{Config::get('app.url')}}public/blast/receiver/edit/{{$pages->id_receiver}}" class='btn btn-warning'>Edit</a> <a href="{{Config::get('app.url')}}public/blast/receiver/delete/{{$pages->id_receiver}}" onclick="return confirm('Are you sure?')"class='btn btn-danger'>Delete</a></td>
                            </tr>
                            @endforeach
                        </table>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop
