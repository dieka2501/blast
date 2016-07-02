@extends('template')
@section('content')

<div class="pageheader">
  <h2>Dashboard</h2>
  <div class="breadcrumb-wrapper">
    <span class="label">You are here:</span>
    <ol class="breadcrumb">
      <li><a href="#">Home</a></li>
      <li class="active">Dashboard</li>
    </ol>
  </div>
</div>

<div class="contentpanel panel-email">
  <!-- content goes here... -->
  <div class="row">
        
        
        <div class="col-sm-11 col-lg-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    
                    <div class="pull-right">
                       
                    </div><!-- pull-right -->
                    
                    <h5 class="subtitle mb5">Statistik</h5>
                    <!-- <p class="text-muted">Showing 1 - 15 of 230 messages</p> -->
                    
                    <div class="table-responsive">
                        <!-- <label>List Email Template</label> -->
                        <table class="table">
                            <tr>
                                <th>Sent</th>
                                <th>Hard Bounce</th>
                                <th>Soft Bounce</th>
                                <th>Reject</th>
                            </tr>
                            
                            <tr>
                                <td><a href="{{Config::get('app.url')}}public/blast/email/sent">{{$stats['sent']}}</a></td>
                                <td><a href="{{Config::get('app.url')}}public/blast/email/bounced">{{$stats['hard_bounces']}}</a></td>
                                <td><a href="{{Config::get('app.url')}}public/blast/email/soft-bounced">{{$stats['soft_bounces']}}</a></td>
                                <td><a href="{{Config::get('app.url')}}public/blast/email/rejected">{{$stats['rejects']}}</a></td>
                            </tr>
                            
                        </table>
                        
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-body">
                    
                    <div class="pull-right">
                       
                    </div><!-- pull-right -->
                    
                    <h5 class="subtitle mb5">List Email Template</h5>
                    <!-- <p class="text-muted">Showing 1 - 15 of 230 messages</p> -->
                    
                    <div class="table-responsive">
                        <!-- <label>List Email Template</label> -->
                        <table class="table">
                            <tr>
                                <th>No</th>
                                <th>Nama Template</th>
                                <th>Tanggal Dibuat</th>
                            </tr>
                            <?php $i=0;?>
                            @foreach($maillist as $maillists)
                            <?php $i++;?>
                            <tr>
                                <td>{{$i}}</td>
                                <td>{{$maillists->mail_name}}</td>
                                <td>{{$maillists->created_at}}</td>
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
