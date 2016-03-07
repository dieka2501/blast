@extends('template')
@section('content')
<div class="pageheader">
  <h2>Choose Template</h2>
  <div class="breadcrumb-wrapper">
    <span class="label">You are here:</span>
    <ol class="breadcrumb">
      <li><a href="#">Home</a></li>
      <li class="active">Sample Page</li>
    </ol>
  </div>
</div>

<div class="contentpanel panel-email">
    {{Form::open(array('url'=>'/blast/template/edit','method'=>'POST'))}}
    <div class="col-md-8 col-lg-8 col-md-offset-2 col-lg-offset-2">
    <div class="row filemanager">
        @for($i = 0; $i < $cacah ;$i++)
            <?php 
                $odd             = ($i*2)+1;
                $even            = ($i*2);
                if(isset($template[$odd])){
                    $imageodd      = $template[$odd]->file;
                    $idtemplateodd = $template[$odd]->id_template;
                }else{
                  $imageodd      = "";
                  $idtemplateodd = "";
                }
                if(isset($template[$even])){
                    $imageeven      = $template[$even]->file;
                    $idtemplateeven = $template[$even]->id_template;
                }
            ?>
        <div class="col-sm-4 document">
          <div class="thmb">
            <div class="ckbox ckbox-default">
              <label for="check2"></label>
            </div>
            <div class="thmb-prev">
              <a href="<?php echo Config::get('app.url');?>aset/mail/{{$imageodd}}.png" data-rel="prettyPhoto">
                <img src="<?php echo Config::get('app.url');?>aset/mail/{{$imageodd}}.png" class="img-responsive" alt="" />
              </a>
            </div>
            <h5 class="fm-title"><a href="<?php echo Config::get('app.url');?>aset/images/template/1.png" data-rel="prettyPhoto">Template Name</a></h5>
            <small class="text-muted">Category</small>
            <div class="text-center"><input type="radio" id="" name="id_template" value="{{$idtemplateodd}}" /></div>
          </div><!-- thmb -->
        </div>
        <div class="col-sm-4 document">
          <div class="thmb">
            <div class="ckbox ckbox-default">
              <label for="check2"></label>
            </div>
            <div class="thmb-prev">
                <a href="<?php echo Config::get('app.url');?>aset/mail/{{$imageeven}}.png" data-rel="prettyPhoto">
                <img src="<?php echo Config::get('app.url');?>aset/mail/{{$imageeven}}.png" class="img-responsive" alt="" />
              </a>
            </div>
            <h5 class="fm-title"><a href="<?php echo Config::get('app.url');?>aset/images/template/2.png" data-rel="prettyPhoto">Template Name</a></h5>
            <small class="text-muted">Category</small>
            <div class="text-center"><input type="radio" id="" name="id_template" value="{{$idtemplateeven}}" /></div>
          </div><!-- thmb -->
        </div><!-- col-sm-3 -->
        @endfor
    </div><!-- row -->
    <div class="row">
        <div class="col-md-12 text-right">
              <button type='submit' class="btn btn-primary">Choose</button>
        </div>
    </div>
    </div>
     {{Form::close()}}
</div>
@stop
