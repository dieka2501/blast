@extends('template')
@section('content')
<div class="pageheader">
  <h2>Create Mail Blast</h2>
  <div class="breadcrumb-wrapper">
    <span class="label">You are here:</span>
    <ol class="breadcrumb">
      <li><a href="#">Home</a></li>
      <li class="active">Sample Page</li>
    </ol>
  </div>
</div>
{{$notip}}
<div class="contentpanel panel-email">
  {{Form::open(array('url'=>'/blast/template/save','method'=>'POST','files'=>true,'id'=>'frm-mailblast'))}}
    <div class="row filemanager">
        <div class="col-sm-1 col-lg-1 document">
          <?php $i=0?>
          @foreach($template as $templates)
          <?php 
            $i++;
            $choose = ($i == 1)?'checked':"";
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
            <div class="text-center"><input type="radio" id="" name="id_template" value="{{$templates->id_template}}" {{$choose}}/></div>
          </div><!-- thmb -->
          @endforeach
        </div><!-- col-sm-3 -->
        
        <div class="col-sm-5 col-lg-5">
            
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="form-group">
                        <input type="text" name="mail_name" placeholder="Email Template Name" class="form-control" value="{{$mail_name}}" />
                    </div>
                    <div class="form-group">
                        <input type="text" name="header" placeholder="Header" class="form-control" value="{{$header}}"/>
                    </div>
                    @if(Session::get('image')!=null)
                      <img src="{{Config::get('app.url')}}aset/upload/{{Session::get('image')}}" class="img-responsive" height="50px" alt="" /> 
                      {{Form::hidden('imagehid',Session::get('image'))}}   
                    @endif
                    <div class="form-group">
                        <input type="file" name="image" placeholder="Images" class="form-control" />
                    </div>
                    
                    <textarea id="tinymcetextarea" placeholder="Your message here..." class="form-control" name="content" rows="20" style="margin-bottom:20px;">{{$content}}</textarea>

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

        <div class="col-sm-5 col-lg-5">
            
            <div class="panel panel-default">
                    <div class="panel-body">
                        
                        <div class="pull-right">
                            <div class="btn-group mr10">
                                <button class="btn btn-sm btn-white tooltips" type="button" data-toggle="tooltip" title="" data-original-title="Archive"><i class="glyphicon glyphicon-hdd"></i></button>
                                <button class="btn btn-sm btn-white tooltips" type="button" data-toggle="tooltip" title="" data-original-title="Report Spam"><i class="glyphicon glyphicon-exclamation-sign"></i></button>
                                <button class="btn btn-sm btn-white tooltips" type="button" data-toggle="tooltip" title="" data-original-title="Delete"><i class="glyphicon glyphicon-trash"></i></button>
                            </div>
                            
                            <div class="btn-group mr10">
                                <div class="btn-group nomargin">
                                    <button data-toggle="dropdown" class="btn btn-sm btn-white dropdown-toggle tooltips" type="button" title="" data-original-title="Move to Folder">
                                      <i class="glyphicon glyphicon-folder-close mr5"></i>
                                      <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu">
                                      <li><a href="#"><i class="glyphicon glyphicon-folder-open mr5"></i> Conference</a></li>
                                      <li><a href="#"><i class="glyphicon glyphicon-folder-open mr5"></i> Newsletter</a></li>
                                      <li><a href="#"><i class="glyphicon glyphicon-folder-open mr5"></i> Invitations</a></li>
                                      <li><a href="#"><i class="glyphicon glyphicon-folder-open mr5"></i> Promotions</a></li>
                                    </ul>
                                </div>
                                <div class="btn-group nomargin">
                                    <button data-toggle="dropdown" class="btn btn-sm btn-white dropdown-toggle tooltips" type="button" title="" data-original-title="Label">
                                      <i class="glyphicon glyphicon-tag mr5"></i>
                                      <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu">
                                      <li><a href="#"><i class="glyphicon glyphicon-tag mr5"></i> Web</a></li>
                                      <li><a href="#"><i class="glyphicon glyphicon-tag mr5"></i> Photo</a></li>
                                      <li><a href="#"><i class="glyphicon glyphicon-tag mr5"></i> Video</a></li>
                                    </ul>
                                </div>
                            </div>
                            
                            <div class="btn-group mr5">
                                <button class="btn btn-sm btn-white" type="button"><i class="fa fa-reply"></i></button>
                                <button data-toggle="dropdown" class="btn btn-sm btn-white dropdown-toggle" type="button">
                                  <span class="caret"></span>
                                </button>
                                <ul role="menu" class="dropdown-menu pull-right">
                                  <li><a href="#">Reply to All</a></li>
                                  <li><a href="#">Forward</a></li>
                                  <li><a href="#">Print</a></li>
                                  <li><a href="#">Delete Message</a></li>
                                  <li><a href="#">Report Spam</a></li>
                                </ul>
                            </div>
                            
                        </div><!-- pull-right -->
                        
                        <div class="btn-group mr10">
                            <h4 style="margin:0px;text-transform:uppercase;font-weight:600;">Live Preview</h4>
                        </div>
                        
                        <div class="read-panel" style="height:649px;">
                            
                            <div class="media">
                                <a href="#" class="pull-left">
                                    <img alt="" src="<?php echo Config::get('app.url');?>aset/images/user-default.png" class="media-object">
                                </a>
                                <div class="media-body">
                                    <span class="media-meta pull-right">Yesterday at 1:30am</span>
                                    <h4 class="text-primary">Adiminstrator</h4>
                                    <small class="text-muted">From: admin@continuum.com</small>
                                </div>
                            </div><!-- media -->
                            
                            <h4 class="email-subject">Lorem ipsum dolor sit amet, consectetur adipisicing elit</h4>
                            
                            <p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritati.</p>
                            <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non</p>
                            
                            <h4 class="email-subject">Lorem ipsum dolor sit amet, consectetur adipisicing elit</h4>
                            <p><strong>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</strong></p>
                            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritati.</p>
                            <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non</p>
                        
                        </div><!-- read-panel -->
                        
                    </div><!-- panel-body -->
                </div>
            
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
    selector: "#tinymcetextarea",
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
@stop
