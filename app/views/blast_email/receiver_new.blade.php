@extends('template')
@section('content')
<link rel="stylesheet" type="text/css" href="{{Config::get('app.url')}}aset/css/jquery.datetimepicker.css"/>
 <div class="pageheader">
  <h2>Choose Receiver</h2>
  <div class="breadcrumb-wrapper">
    <span class="label">You are here:</span>
    <ol class="breadcrumb">
      <li><a href="#">Home</a></li>
      <li class="active">Choose Receiver</li>
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
                            Choose Specific Receiver 
                          </label>
                        </div>

                    </div>
                    <div class="form-group" id='filter_receiver'>
                        <div class="row">
                              <div class="col-md-4 m-b-xs">
                                <div class="form-group">
                                    <label>Position</label>
                                    {{Form::select('position[]',$arr_position,$position,['class'=>'form-control filter','multiple'=>'multiple','id'=>'position'])}}
                                </div>
                              </div>
                              <div class="col-md-4 m-b-xs">
                                  <div class="form-group">
                                    <label>Region/City</label>
                                    {{Form::select('region[]',$arr_region,$region,['class'=>'form-control filter','multiple'=>'multiple','id'=>'region'])}}  
                                  </div>
                                  
                              </div>
                              <div class="col-md-4 m-b-xs">
                                  <div class="form-group">
                                    <label>Country</label>
                                    {{Form::select('country[]',$arr_country,$country,['class'=>'form-control filter','multiple'=>'multiple','id'=>'country'])}}  
                                  </div>
                                  
                              </div>
                          </div>
                          <div class="row">
                              <div class="col-md-4 m-b-xs">
                                  <div class="form-group">
                                    <label>Line Of Business</label>
                                    {{Form::select('lob[]',$arr_lob,$lob,['class'=>'form-control filter','multiple'=>'multiple','id'=>'lob'])}} 
                                  </div>
                                   
                              </div>
                              <div class="col-md-4 m-b-xs">
                                  <div class="form-group">
                                    <label>Interest Product</label>
                                    {{Form::select('interest_product[]',$arr_interest_product,$interest_product,['class'=>'form-control filter','multiple'=>'multiple','id'=>'interest'])}} 
                                  </div>
                                   
                          
                              </div>
                              <div class="col-md-4 m-b-xs">
                                  <div class="form-group">
                                      <label>Purpose Of Visit</label>
                                      <input type="text" name="purpose" class="form-control filter" value="{{$purpose}}" placeholder="Purpose Of Visit" id="purpose">  
                                  </div>
                                  
                              </div>

                          </div>
                          <div class="row">
                              <div class="col-md-4 m-b-xs">
                                  <div class="form-group">
                                      <label>Source Of Information</label>
                                      <input type="text" name="source" class="form-control filter" value="{{$source}}" placeholder="Source Of Information" id="source">  
                                  </div>
                                  
                              </div>
                              <div class="col-md-4 m-b-xs">
                                  <div class="form-group">
                                      <label>Email Of Visitor</label>
                                      <input type="text" name="email" class="form-control filter" value="{{$email}}" placeholder="Email Of Visitor" id="email">  
                                  </div>
                                  
                              </div>
                              <div class="col-md-4 m-b-xs">
                                  
                              </div>

                          </div>
                          <div class="row">
                              <div class="col-md-12" id="filter-select">
                                  
                              </div>
                          </div>
                        </div>
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
<script type="text/javascript">
    $(document).ready(function(){
        $('#filter_receiver').hide();
        $('input[name="send_to"]').click(function(){
            if( $('#send_to_2').prop('checked') == true){
                $('#filter_receiver').show();
            }else{
              $('#filter_receiver').hide();
            }
        });
    })
</script>
<script type="text/javascript">
    function getfilter(){
      var position  = $('#position').val();
      var region    = $('#region').val();
      var country   = $('#country').val();
      var lob       = $('#lob').val();
      var interest  = $('#interest').val();
      var purpose   = $('#purpose').val();
      var source    = $('#source').val();
      var email     = $('#email').val();
      $.post("{{Config::get('app.url')}}public/api/filter",{
        'position':position,
        'region':region,
        'country':country,
        'lob':lob,
        'interest_product':interest,
        'purpose':purpose,
        'source':source,
        'email':email
      },function(data){
          // $('#filter-select').remove();
          $('#filter-select').html(data);
      });
    }
</script>
<script type="text/javascript">
  $(document).ready(function(){
      $('#position').change(function(){
          getfilter();
      });
      $('#region').change(function(){
          getfilter();
      });
      $('#country').change(function(){
          getfilter();
      });
      $('#lob').change(function(){
          getfilter();
      });
      $('#interest').change(function(){
          getfilter();
      });
      $('#purpose').keyup(function(){
          getfilter();
      });
      $('#source').keyup(function(){
          getfilter();
      });
      $('#email').keyup(function(){
          getfilter();
      });
  })
</script>
@stop
