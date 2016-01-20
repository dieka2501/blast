@extends('template')
@section('content')
<div class="pageheader">
  <h2>Table</h2>
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
                <!-- table -->
                <div class="table-responsive">
                  <div class="row">
                    <div class="col-sm-12">
                    <div class="pull-right">
                    <input type="text" aria-controls="datatable" class="form-control" placeholder="Search">
                    </div>
                    <div class="pull-left">
                    <select size="1" class="form-control">
                    <option value="10" selected="selected">10</option>
                    <option value="25">25</option>
                    <option value="50">50</option>
                    <option value="100">100</option>
                    </select>
                    </div>
                    <div class="clearfix"></div>
                    </div>
                  </div>
                  <table class="table table-bordered mb30" style="margin-top:20px;">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>Table Header</th>
                        <th>Table Header</th>
                        <th>Table Header</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>1</td>
                        <td>Darana</td>
                        <td>Sukma</td>
                        <td>Vidya</td>
                      </tr>
                      <tr>
                        <td>1</td>
                        <td>Darana</td>
                        <td>Sukma</td>
                        <td>Vidya</td>
                      </tr>
                      <tr>
                        <td>1</td>
                        <td>Darana</td>
                        <td>Sukma</td>
                        <td>Vidya</td>
                      </tr>
                      <tr>
                        <td>1</td>
                        <td>Darana</td>
                        <td>Sukma</td>
                        <td>Vidya</td>
                      </tr>
                      <tr>
                        <td>1</td>
                        <td>Darana</td>
                        <td>Sukma</td>
                        <td>Vidya</td>
                      </tr>
                      <tr>
                        <td>1</td>
                        <td>Darana</td>
                        <td>Sukma</td>
                        <td>Vidya</td>
                      </tr>
                      <tr>
                        <td>1</td>
                        <td>Darana</td>
                        <td>Sukma</td>
                        <td>Vidya</td>
                      </tr>
                    </tbody>
                  </table>
                  </div>
                <!-- /table -->
                </div><!-- panel-body -->
                <div class="panel-footer">
                    <a href="<?php echo Config::get('app.url');?>public/blast_email" class="btn btn-success"><i class="fa fa-arrow-left"></i> Kembali</a>
                </div>
            </div><!-- panel -->
            
        </div><!-- col-sm-9 -->
        
    </div><!-- row -->
</div>
@stop
