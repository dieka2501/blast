@extends('template')
@section('content')
<div class="pageheader">
  <h2>Preview Email</h2>
  <div class="breadcrumb-wrapper">
    <span class="label">You are here:</span>
    <ol class="breadcrumb">
      <li><a href="#">Home</a></li>
      <li class="active">Sample Page</li>
    </ol>
  </div>
</div>

<div class="contentpanel panel-email">
    <div class="row filemanager">
        
        <div class="col-sm-8 col-lg-8 col-md-offset-2 col-lg-offset-2">
            
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="header clearfix">
                      <nav>
                        <ul class="nav nav-pills pull-right">
                          <li role="presentation" class="active"><a href="#">Home</a></li>
                          <li role="presentation"><a href="#">About</a></li>
                          <li role="presentation"><a href="#">Contact</a></li>
                        </ul>
                      </nav>
                      <h3 class="text-muted">Project name</h3>
                    </div>

                    <div class="jumbotron">
                      <h1>Jumbotron heading</h1>
                      <p class="lead">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
                      <p><a class="btn btn-lg btn-success" href="#" role="button">Sign up today</a></p>
                    </div>

                    <div class="row marketing">
                      <div class="col-lg-6">
                        <h4>Subheading</h4>
                        <p>Donec id elit non mi porta gravida at eget metus. Maecenas faucibus mollis interdum.</p>

                        <h4>Subheading</h4>
                        <p>Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Cras mattis consectetur purus sit amet fermentum.</p>

                        <h4>Subheading</h4>
                        <p>Maecenas sed diam eget risus varius blandit sit amet non magna.</p>
                      </div>

                      <div class="col-lg-6">
                        <h4>Subheading</h4>
                        <p>Donec id elit non mi porta gravida at eget metus. Maecenas faucibus mollis interdum.</p>

                        <h4>Subheading</h4>
                        <p>Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Cras mattis consectetur purus sit amet fermentum.</p>

                        <h4>Subheading</h4>
                        <p>Maecenas sed diam eget risus varius blandit sit amet non magna.</p>
                      </div>
                    </div>

                    <footer class="footer">
                      <p>© 2015 Company, Inc.</p>
                    </footer>
                </div><!-- panel-body -->
                <div class="panel-footer">
                    <a href="<?php echo Config::get('app.url');?>public/blast_email" class="btn btn-success"><i class="fa fa-arrow-left"></i> Kembali</a>
                </div>
            </div><!-- panel -->
            
        </div><!-- col-sm-9 -->
        
    </div><!-- row -->
</div>
@stop
