@extends('template')
@section('content')

<div class="pageheader">
  <h2>Form Email Receiver</h2>
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
        
        
        <div class="col-sm-9 col-lg-10">
            <div class="panel panel-default">
                {{$notip}}
                <div class="panel-body">
                    
                    <div class="pull-right">
                       
                    </div><!-- pull-right -->
                    
                    <h5 class="subtitle mb5"><strong>{{$title}}</strong></h5>
                    <!-- <p class="text-muted">Showing 1 - 15 of 230 messages</p> -->
                    
                    <div class="table-responsive">
                        {{Form::open(['url'=>$url,'method'=>'POST','files'=>true])}}
                        <div class="form-group">
                            <label>Email Receiver</label>
                            <input type="email" name="receiver_email" placeholder="Email" class="form-control" value="{{$receiver_email}}"/>
                            <input type="hidden" name="id" placeholder="Email" class="form-control" value="{{$id}}"/>
                        </div>
                        <div class="form-group">
                            <label>Name Receiver</label>
                            <input type="text" name="receiver_name" placeholder="Full Name" class="form-control" value="{{$receiver_name}}"/>
                        </div>
                        <div class="form-group">
                            <label>Status Receiver</label>
                            {{Form::select('receiver_status',[1=>'Active',0=>'Unactive'],$receiver_status,['class'=>'form-control'])}}
                        </div>
                        <div class="row">
                            <div class="col-md-6"><a href="{{Config::get('app.url')}}public/blast/receiver/list" class="btn btn-danger">Back</a></div>
                            <div class="col-md-6 text-right"><button class="btn btn-primary">Save</button></div>
                        </div>  
                        <!-- <label>List Email Template</label> -->
                        {{Form::close()}}
                        
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop
