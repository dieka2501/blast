<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="images/favicon.png">

    <title>Quantum Blast Administration</title>

      <!-- Bootstrap core CSS -->
    <link href="<?php echo Config::get('app.url');?>aset/js/bootstrap/dist/css/bootstrap.css" rel="stylesheet" />
    <link href="<?php echo Config::get('app.url');?>aset/js/jquery.gritter/css/jquery.gritter.css" rel="stylesheet" />

    <link href="<?php echo Config::get('app.url');?>aset/fonts/font-awesome-4/css/font-awesome.min.css" rel="stylesheet" />

      <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
      <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <![endif]-->
    <link href="<?php echo Config::get('app.url');?>aset/js/jquery.nanoscroller/nanoscroller.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo Config::get('app.url');?>aset/js/jquery.easypiechart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo Config::get('app.url');?>aset/js/bootstrap.switch/bootstrap-switch.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo Config::get('app.url');?>aset/js/bootstrap.datetimepicker/css/bootstrap-datetimepicker.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo Config::get('app.url');?>aset/js/jquery.select2/select2.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo Config::get('app.url');?>aset/js/bootstrap.slider/css/slider.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo Config::get('app.url');?>aset/js/jquery.datatables/bootstrap-adapter/css/datatables.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo Config::get('app.url');?>aset/css/style.css" rel="stylesheet" type="text/css" />
    <style type="text/css">
    #adminmenuwrap {
      display: none;
    }
    </style>
</head>

<body>


  <!-- Fixed navbar -->
  <div id="head-nav" class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="fa fa-gear"></span>
        </button>
        <a class="navbar-brand" href="#"><span>Quantum Blast</span></a>
      </div>
      <div class="navbar-collapse collapse">
      <ul class="nav navbar-nav navbar-right user-nav">
        <li class="dropdown profile_menu">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><img alt="Avatar" src="<?php echo Config::get('app.url');?>aset/images/" width="30" height="30" /><span>Pengaturan</span> <b class="caret"></b></a>
          <ul class="dropdown-menu">   
            <li><a href="<?php echo Config::get('app.url');?>public/admin/logout">Logout / Keluar</a></li>
          </ul>
        </li>
      </ul>     
      </div><!--/.nav-collapse animate-collapse -->
    </div>
  </div>

  
  <div id="cl-wrapper">
    <div class="cl-sidebar" data-position="right" data-step="1" data-intro="<strong>Fixed Sidebar</strong> <br/> It adjust to your needs." >
      <div class="cl-toggle"><i class="fa fa-bars"></i></div>
      <div class="cl-navblock">
        <div class="menu-space">
          <div class="content">
            <div class="side-user">
              <div class="avatar"><img src="<?php echo Config::get('app.url');?>aset/images" alt="Avatar" width="90" /></div>
              <div class="info">
                <a href="#">Administrator</a>
                <img src="<?php echo Config::get('app.url');?>aset/images/state_online.png" alt="Status" /> <span>Online</span>
              </div>
            </div>
            <ul class="cl-vnavigation">
              
              <li><a href="<?php echo Config::get('app.url');?>public/blast"><i class="fa fa-tags nav-icon"></i><span>Dashboard</span></a></li>
              
              <li><a href="<?php echo Config::get('app.url');?>public/blast/create"><i class="fa fa-suitcase"></i><span>Create Mail Blast</span></a></li>
              
              <li><a href="#"><i class="fa fa-bar-chart-o nav-icon"></i><span>Master</span></a>
                  <ul>
                      <li><a href="{{Config::get('app.url')}}public/admin/category">Category</a></li>
                      <li><a href="{{Config::get('app.url')}}public/admin/brand">Brand</a></li>
                  </ul>
              </li>
              <li><a href="<?php echo Config::get('app.url');?>public/admin"><i class="fa fa-bar-chart-o nav-icon"></i><span>Menu</span></a></li>
              
            </ul>
          </div>
        </div>
        <div class="text-right collapse-button" style="padding:7px 9px;">
          <input type="text" class="form-control search" placeholder="Search..." />
          <button id="sidebar-collapse" class="btn btn-default" style=""><i style="color:#fff;" class="fa fa-angle-left"></i></button>
        </div>
      </div>
    </div>

    <div class="container-fluid" id="pcont">
      <div class="page-head">
        <div class="col-md-10">
          <h2>{{{$big_title}}}</h2>
          <!-- <ol class="breadcrumb">
              <li><a href="#">Order</a></li>
            <li class="active">All Order</li>
          </ol> -->
        </div>
      </div>    
    <div class="cl-mcont">
      <div class="row">
        <div class="col-md-12">
          @yield('content')
        </div><!--- -->
      </div>              
      
      </div>
    </div> 
    
  </div>

  <script src="<?php echo Config::get('app.url');?>aset/js/jquery.js" type="text/javascript"></script>
  <script src="<?php echo Config::get('app.url');?>aset/js/jquery.nanoscroller/jquery.nanoscroller.js" type="text/javascript"></script>
  <script src="<?php echo Config::get('app.url');?>aset/js/jquery.sparkline/jquery.sparkline.min.js" type="text/javascript"></script>
  <script src="<?php echo Config::get('app.url');?>aset/js/jquery.easypiechart/jquery.easy-pie-chart.js" type="text/javascript"></script>
  
  <script src="<?php echo Config::get('app.url');?>aset/js/behaviour/general.js" type="text/javascript"></script>
  <script src="<?php echo Config::get('app.url');?>aset/js/jquery.ui/jquery-ui.js" type="text/javascript"></script>
  <script src="<?php echo Config::get('app.url');?>aset/js/jquery.nestable/jquery.nestable.js" type="text/javascript"></script>
  <script src="<?php echo Config::get('app.url');?>aset/js/bootstrap.switch/bootstrap-switch.min.js" type="text/javascript"></script>
  <script src="<?php echo Config::get('app.url');?>aset/js/bootstrap.datetimepicker/js/bootstrap-datetimepicker.min.js" type="text/javascript"></script>
  <script src="<?php echo Config::get('app.url');?>aset/js/jquery.select2/select2.min.js" type="text/javascript"></script>
  <script src="<?php echo Config::get('app.url');?>aset/js/bootstrap.slider/js/bootstrap-slider.js" type="text/javascript"></script>
  <script src="<?php echo Config::get('app.url');?>aset/js/jquery.gritter/js/jquery.gritter.js" type="text/javascript"></script>
  <script src="<?php echo Config::get('app.url');?>aset/js/jquery.datatables/jquery.datatables.min.js" type="text/javascript"></script>
  <script src="<?php echo Config::get('app.url');?>aset/js/jquery.datatables/bootstrap-adapter/js/datatables.js" type="text/javascript"></script>
  <script type="text/javascript">
    
    $(document).ready(function(){
      //initialize the javascript
      App.init();
      // App.dataTables();
      $('#tgl').change(function(){
          var tanggal = $(this).val();
          window.location='<?php echo Config::get("app.url")?>public/order?date='+tanggal;
      });
      
    });
  </script>
  <!-- Bootstrap core JavaScript
  ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
  <script src="<?php echo Config::get('app.url');?>aset/js/behaviour/voice-commands.js" type="text/javascript"></script>
  <script src="<?php echo Config::get('app.url');?>aset/js/bootstrap/dist/js/bootstrap.min.js" type="text/javascript"></script>
  <script src="<?php echo Config::get('app.url');?>aset/js/jquery.flot/jquery.flot.js" type="text/javascript"></script>
  <script src="<?php echo Config::get('app.url');?>aset/js/jquery.flot/jquery.flot.pie.js" type="text/javascript"></script>
  <script src="<?php echo Config::get('app.url');?>aset/js/jquery.flot/jquery.flot.resize.js" type="text/javascript"></script>
  <script src="<?php echo Config::get('app.url');?>aset/js/jquery.flot/jquery.flot.labels.js" type="text/javascript"></script>
  </body>
</html>
