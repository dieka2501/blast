@extends('template')
@section('content')
<link rel="stylesheet" type="text/css" href="{{Config::get('app.url')}}aset/css/jquery.datetimepicker.css"/>
 <div class="pageheader">
  <h2>Choose Receiver</h2>
  <div class="breadcrumb-wrapper">
    <span class="label">You are here:</span>
    <ol class="breadcrumb">
      <li><a href="#">Home</a></li>
      <li class="active">Sample Page</li>
    </ol>
  </div>
</div>

<div class="contentpanel panel-email">
  {{Form::open(array('url'=>'/blast/email/send','method'=>'POST','files'=>true))}}
    <div class="row filemanager">
        
        
        <div class="col-sm-11 col-lg-12">
            
            <div class="panel panel-default">
            @if($template_name != "")
                <div class='panel-body'>
                    {{$prev}}
                </div>
            @endif
                <div class="panel-body">
                    
                </div><!-- panel-body -->
              
            </div><!-- panel -->

            <div class="panel panel-default">
                <div class="panel-body">
                    
                    
                    <div class="form-group">
                        {{Form::select('id_mail_name',$arr_mail_name,$id_mail_name,array('class'=>'form-control','id'=>'id_mail_name'))}}
                        {{Form::hidden('id_template',$template_id)}}
                    </div>
                    <div class="checkbox">
                        <label>
                          <input type="checkbox" name="checkschedule" placeholder=""  value="1" id='checkschedule' />
                          Create Schedule
                        </label>
                    </div>
                    <div class="form-group" id='timeschedule'>
                      {{Form::text('schedule','',array('class'=>'form-control','id'=>'schedule','placeholder'=>'Choose Datetime','readonly'))}}
                    </div>
                    <div class="form-group">
                        {{Form::text('subject_mail',$subject_mail,array('class'=>'form-control','id'=>'subject_mail','placeholder'=>'Subject Email'))}}
                    </div>
                    <div class="radio">
                        <label>
                          <input type="radio" name="send_to" placeholder="Header"  value="1" checked="true" />
                          Send To All
                        </label>
                    </div>

                    <div class="form-group">
                        <div class="radio">
                          <label>
                            <input type="radio" name="send_to"  id='send_to_2' value="0"/>  
                            Choose Receiver
                          </label>
                        </div>
                        <textarea id="receiver_list" placeholder="List Receiver" class="form-control" name="receiver_list" rows="5" style="margin-bottom:20px;">{{$receiver_list}}</textarea>
                    </div>
                    <div class="form-group">
                        <label>Region</label> 
                        {{Form::select('region[]',$arr_region,$region,['class'=>'form-control','multiple','id'=>'region'])}}                      
                    </div>
                </div><!-- panel-body -->
                <div class="panel-footer">
                    <button class="btn btn-primary"><i class="fa fa-send"></i> Send</button>
                    <div class="pull-right">
                    <a href="<?php echo Config::get('app.url');?>public/blast/create" class="btn btn-success"><i class="fa fa-eye"></i> Back</a>
                    </div>
                </div>
            </div><!-- panel -->
            
        </div><!-- col-sm-9 -->
        
    </div><!-- row -->
    {{Form::close()}}
</div>
<script src="{{Config::get('app.url')}}aset/js/jquery-1.11.1.min.js"></script>
<script src="{{Config::get('app.url')}}aset/js/jquery.datetimepicker.full.js"></script>
<script type="text/javascript">
  $(document).ready(function(){
      <?php if(Input::has('id') == false):?>
      $('#img-template').hide();
      $('#imginner').hide();
      <?php endif;?>
      $('#receiver_list').keyup(function(){
           $('#send_to_2').prop('checked',true);
      });
      $('#region').click(function(){
          $('#send_to_2').prop('checked',true);
      });
      $('#id_mail_name').change(function(){

          var ids = $(this).val();
          window.location.href = "{{Config::get('app.url')}}public/blast/receiver/choose?id="+ids;
          // $.post('{{url("json/mailtemplate")}}',{
          //   'ids':ids
          // },function(data){
          //     console.log(data);
          //     $('#mail_name').html(data.mail_name);
          //     $('#header').html(data.mail_header);
          //     $('#imginner').attr('src','{{Config::get("app.url")}}aset/upload/'+data.mail_image);
          //     $('#content').html(data.mail_content);
          //     $('#twitter').html(data.mail_twitter);
          //     $('#email').html(data.mail_email);
          //     $('#facebook').html(data.mail_facebook);
          //     $('#linkedin').html(data.mail_linkedin);
          //     $('#prettyphoto').attr('href',"{{Config::get('app.url')}}aset/mail/"+data.file+".png");
          //     $('#img-template').attr("src","{{Config::get('app.url')}}aset/mail/"+data.file+".png");
          //     $('#hreftemplate').attr("href","{{Config::get('app.url')}}aset/mail/"+data.file+".png");
          //     $('#hreftemplate').html(data.template_name);
          //     $('#texttemplate').html(data.template_name);
          //     $('#img-template').show();
          //     $('#imginner').show();
          // });
      });
  });
</script> 
<script type="text/javascript">
    $(document).ready(function(){
      $('#timeschedule').hide();
      $('#checkschedule').click(function(){
          var check = $(this).prop('checked');
          if(check == true){
            $('#timeschedule').show();
          }else{
            $('#timeschedule').hide();
          }
      });
    });
</script>
<script type="text/javascript">
  $(document).ready(function(){
      $('#schedule').datetimepicker({
        format:'Y-m-d H:i',
      });
  });
</script>
@stop
