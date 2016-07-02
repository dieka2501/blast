@extends('template')
@section('content')
 <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/theme.css">
 <div class="pageheader">
  <h2>List Email Bounced</h2>
  <div class="breadcrumb-wrapper">
    <span class="label">You are here:</span>
    <ol class="breadcrumb">
      <li><a href="{{Config::get('app.url')}}">Dashboard</a></li>
      <li class="active">List Email Bounced</li>
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
                    
                    <h5 class="subtitle mb5">Filter Email Bounced</h5>
                    <!-- <p class="text-muted">Showing 1 - 15 of 230 messages</p> -->
                    
                    <div class="table-responsive ">
                        <form action="#" method="GET">
                            <div class="row">
                                <div class='col-md-4'>
                                    <input type='text' name='date_from' id='date_from' placeholder="Start Date" class="form-control" value="{{$date_from}}">
                                </div>
                                <div class='col-md-4'>
                                    <input type='text' name='date_to' id='date_to' placeholder="End Date" class="form-control" value="{{$date_to}}">
                                </div>
                                <div class='col-md-4'>
                                    <input type='text' name='limit' id='limit' placeholder="Limit Max 1000" class="form-control" value="{{$limit}}">
                                </div>    
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <button class="btn btn-primary">Filter</button>
                                </div>
                            </div>    
                             
                        </div>
                    </form>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-body">
                    
                    <div class="pull-right">
                       
                    </div><!-- pull-right -->
                    
                    <h5 class="subtitle mb5">List Email Bounced</h5>
                    <!-- <p class="text-muted">Showing 1 - 15 of 230 messages</p> -->
                    
                    <div class="table-responsive">
                        <!-- <label>List Email Template</label> -->
                        <table class="table table-hover">
                            <tr>
                                <th>No</th>
                                <th>Email</th>
                                <th>Subject</th>
                                <th width="500">Description</th>
                                <th>Date Sent</th>
                            </tr>
                            <tbody class="table-hover">
                            <?php $i=0;?>
                            @foreach($list as $lists)
                            <?php $i++;?>

                            <tr>
                                <td>{{$i}}</td>
                                <td>{{$lists->email}}</td>
                                <td>{{$lists->subject}}</td>
                                <td>{{$lists->bounce_description}}</td>
                                <td>{{date('d F Y H:i:s',$lists->ts)}}</td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<!-- <script type="text/javascript" scr="{{Config::get('app.url')}}aset/js/bootstrap.min.js"></script> -->
<script type="text/javascript" scr="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.4/jquery-ui.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        // alert('asss');
        $('#date_from').datepicker({
            // format: "mm-dd-yyyy"
            dateFormat:"yy-mm-dd"
        });
        $('#date_to').datepicker({
            // format: "mm-dd-yyyy"
            dateFormat:"yy-mm-dd"
        });
    });
</script>
@stop
