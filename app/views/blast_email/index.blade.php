@extends('template')
@section('content')
<div class="pageheader">
  <h2>Create Mail Blast</h2>
  <div class="breadcrumb-wrapper">
    <span class="label">You are here:</span>
    <ol class="breadcrumb">
      <li><a href="#">Home</a></li>
      <li class="active">Create Email</li>
    </ol>
  </div>
</div>
{{$notip}}
<div class="contentpanel panel-email">
  {{Form::open(array('url'=>'/blast/template/save','method'=>'POST','files'=>true,'id'=>'frm-mailblast'))}}
    <div class="row filemanager">
        <div class="col-sm-2 col-lg-2 document" style="overflow-y: scroll;height: 784px;">
          <?php $i=0?>
          @foreach($template as $templates)
          <?php 
            $i++;
            if(Input::has('id')){
              $ids = Input::get('id');
              $choose = ($ids == $templates->id_template)?'checked':"";   
            }else{
                 $choose = ($i == 1)?'checked':"";   
            }
           
          ?>
          <div class="thmb">
            <div class="ckbox ckbox-default">
              <input type="checkbox" id="check2" value="1" />
              <label for="check2"></label>
            </div>
            <div class="thmb-prev">
              <a href="<?php echo Config::get('app.url');?>aset/images/template/1.png" data-rel="prettyPhoto">
                <img src="{{Config::get('app.url')}}aset/mail/{{$templates->file}}.png" class="img-responsive" alt="" />
              </a>
            </div>
            <h5 class="fm-title"><a href="<?php echo Config::get('app.url');?>aset/images/template/1.png" data-rel="prettyPhoto">{{$templates->template_name}}</a></h5>
            <small class="text-muted">{{$templates->template_name}}</small>
            <div class="text-center"><input type="radio" id="" class='radio_template' name="id_template" value="{{$templates->id_template}}" {{$choose}}/></div>
          </div><!-- thmb -->
          @endforeach
        </div><!-- col-sm-3 -->
        <?php $jform = json_decode($json,true); //var_dump($jform);die;?>

        <div class="col-sm-8 col-lg-8 col-md-offset-1">
            
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="form-group">
                        <input type="text" name="mail_name" placeholder="Email Template Name" class="form-control" value="{{$mail_name}}" />
                    </div>
                    <?php $i = 0;?>
                    @foreach($html as $formvalue)
                      <div class="form-group">

                        <label><b>{{$label[$i]}}</b></label>
                        {{$formvalue}}
                    </div>  
                    <?php $i++;?>
                    @endforeach
                    <!-- <div class="form-group">
                        <input type="text" name="header" placeholder="Header" class="form-control" value=""/>
                    </div> -->
                    
                   <!--  <div class="form-group">
                        <input type="file" name="image" placeholder="Images" class="form-control" />
                    </div> -->
                    
                    <!-- <textarea id="tinymcetextarea" placeholder="Your message here..." class="form-control tinymce" name="content" rows="20" style="margin-bottom:20px;"></textarea> -->

                    <div class="row" style="margin-top:20px;">
                      <div class="col-md-3">
                        <div class="form-group">
                            <input type="text" name="twitter" placeholder="Twitter" class="form-control" value="{{$twitter}}"/>
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                            <input type="email" name="email" placeholder="Email" class="form-control" value="{{$email}}"/>
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                            <input type="text" name="facebook" placeholder="Facebook" class="form-control" value="{{$facebook}}"/>
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                            <input type="text" name="linkedin" placeholder="Linkedin" class="form-control" value="{{$linkedin}}"/>
                        </div>
                      </div>
                    </div>
                    
                </div><!-- panel-body -->
                <div class="panel-footer">
                    <button class="btn btn-primary"><i class="fa fa-send"></i> Next</button>
                    <div class="pull-right">
                    <button class="btn btn-success" id='btn-preview'>Preview</button>
                    </div>
                </div>
            </div><!-- panel -->
            
        </div><!-- col-sm-9 -->
        
    </div><!-- row -->
    {{Form::close()}}
</div>
<script type="text/javascript" src="{{Config::get('app.url')}}aset/js/jquery.js"></script> 
<script type="text/javascript" src="{{Config::get('app.url')}}aset/tinymce/jquery.tinymce.min.js"></script>
<script type="text/javascript" src="{{Config::get('app.url')}}aset/tinymce/tinymce.min.js"></script>
<script type="text/javascript" src="{{Config::get('app.url')}}aset/tinymce/plugin.min.js"></script>
<script type="text/javascript">
  tinymce.init({
    selector: ".tinymce",
    menubar:false,
    plugins: "insertdatetime",
    plugins: "link code fullscreen",
    toolbar: [
        "undo | redo | styleselect | bold italic | link | fullscreen | alignleft | aligncenter |  alignright | insertdatetime | removeformat | cut | copy | paste | bullist| numlist | outdent| indent |"
    ],
    insertdatetime_formats: ["%Y.%m.%d", "%H:%M"],
 });
</script> 
<script type="text/javascript">
  $(document).ready(function(){
      $('#btn-preview').click(function(){
          $('#frm-mailblast').attr('action','{{Config::get("app.url")}}public/blast/email/preview');
          $('#frm-mailblast').submit();
      });
  }); 
</script>
<script type="text/javascript">
  $(document).ready(function(){
      $('.radio_template').click(function(){
          var ids = $(this).val();
          // alert(ids);
          window.location.href = "{{Config::get('app.url')}}public/blast/create?id="+ids;
      });
  })
</script>
@stop
