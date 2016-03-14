<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="shortcut icon" href="<?php echo Config::get('app.url');?>aset/images/favicon.png" type="image/png">

  <title>Quantum Blast</title>

  <link href="<?php echo Config::get('app.url');?>aset/css/style.default.css" rel="stylesheet">
  <link href="<?php echo Config::get('app.url');?>aset/css/jquery-ui-1.10.3.css" rel="stylesheet">
  <link href="<?php echo Config::get('app.url');?>aset/css/bootstrap-wysihtml5.css" rel="stylesheet">
  <link href="<?php echo Config::get('app.url');?>aset/css/prettyPhoto.css" rel="stylesheet">

  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
  <script src="js/html5shiv.js"></script>
  <script src="js/respond.min.js"></script>
  <![endif]-->
  <style type="text/css">
  .back-prev {
    position: absolute;
    top: 75px;
    left: 10px;
  }
  </style>
</head>

<body class="horizontal-menu">
<section>
  
  <div class="leftpanel">
    
    <div class="logopanel">
        <h1><img src="<?php echo Config::get('app.url');?>aset/images/mail.png"> Quantum Blast</h1>
    </div>
    
    <div class="leftpanelinner">
        
        <div class="visible-xs hidden-sm hidden-md hidden-lg">   
            <div class="media userlogged">
                <img alt="" src="<?php echo Config::get('app.url');?>aset/images/user-default.png" class="media-object">
                <div class="media-body">
                    <h4>Administrator</h4>
                    <span>"Sample"</span>
                </div>
            </div>
          
            <h5 class="sidebartitle actitle">Account</h5>
            <ul class="nav nav-pills nav-stacked nav-bracket mb30">
              <li><a href="#"><i class="fa fa-sign-out"></i> <span>Sign Out</span></a></li>
            </ul>
        </div>
      
      <h5 class="sidebartitle">Navigation</h5>
      
    </div>
  </div>
  
  <div class="mainpanel">
    
    <div class="headerbar">
      
      <div class="header-left">
        
        <div class="logopanel">
            <h1><img src="<?php echo Config::get('app.url');?>aset/images/mail.png"> Quantum Blast</h1>
        </div>
        
        <div class="topnav">
            <a class="menutoggle"><i class="fa fa-bars"></i></a>
            
            <ul class="nav nav-horizontal">
                <li><a href="<?php echo Config::get('app.url');?>public/"><i class="fa fa-bar-chart-o"></i> <span>Dashboard</span></a></li>
                <li><a href="<?php echo Config::get('app.url');?>public/blast/create"><i class="fa fa-envelope-o"></i> <span>Create New Email</span></a></li>
                <li><a href="<?php echo Config::get('app.url');?>public/blast/receiver/choose"><i class="fa fa-envelope-o"></i> <span>Send From Template</span></a></li>
                <li><a href="<?php echo Config::get('app.url');?>public/blast/receiver/list"><i class="fa fa-envelope-o"></i> <span>List Email Receiver</span></a></li>
                <!-- <li class="nav-parent"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="fa fa-tags"></i> Master <span class="caret"></span></a>
                    <ul class="dropdown-menu children">
                        <li><a href="<?php echo Config::get('app.url');?>public/table"><i class="fa fa-caret-right"></i> Category</a></li>
                        <li><a href="<?php echo Config::get('app.url');?>public/table"><i class="fa fa-caret-right"></i> Brand</a></li>
                    </ul>
                </li> -->
                <!-- <li><a href="index-2.html"><i class="fa fa-user"></i> <span>Admin</span></a></li> -->
                <li><a class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="glyphicon glyphicon-search"></i></a>
                    <div class="dropdown-menu">
                        <form action="#" method="post">
                            <input type="text" class="form-control" name="keyword" placeholder="Search here..." />
                        </form>
                    </div>
                </li>
            </ul>
        </div>
          
      </div>
      
      <div class="header-right">
        <ul class="headermenu">
          <li>
            <div class="btn-group">
              <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                <img src="<?php echo Config::get('app.url');?>aset/images/user-default.png" alt="" />
                Administrator
                <span class="caret"></span>
              </button>
              <ul class="dropdown-menu dropdown-menu-usermenu pull-right">
                <li><a href="#"><i class="glyphicon glyphicon-log-out"></i> Log Out</a></li>
              </ul>
            </div>
          </li>
        </ul>
      </div>
    </div>
    
    <!-- content -->
    @yield('mailcontent')
    <!-- /content -->
    
  </div>
  <div class="back-prev">
      <a href="{{Config::get('app.url')}}public/blast/create?id={{$idstemp}}" class="btn btn-warning"><i class="fa fa-chevron-left"></i> BACK</a>
  </div>
</section>

<script src="<?php echo Config::get('app.url');?>aset/js/jquery-1.11.1.min.js"></script>
<script src="<?php echo Config::get('app.url');?>aset/js/jquery-ui-1.10.3.min.js"></script>
<script src="<?php echo Config::get('app.url');?>aset/js/jquery-migrate-1.2.1.min.js"></script>
<script src="<?php echo Config::get('app.url');?>aset/js/bootstrap.min.js"></script>
<script src="<?php echo Config::get('app.url');?>aset/js/modernizr.min.js"></script>
<script src="<?php echo Config::get('app.url');?>aset/js/jquery.sparkline.min.js"></script>
<script src="<?php echo Config::get('app.url');?>aset/js/toggles.min.js"></script>
<script src="<?php echo Config::get('app.url');?>aset/js/retina.min.js"></script>
<script src="<?php echo Config::get('app.url');?>aset/js/jquery.cookies.js"></script>
<script src="<?php echo Config::get('app.url');?>aset/js/jquery.prettyPhoto.js"></script>
<script src="<?php echo Config::get('app.url');?>aset/js/wysihtml5-0.3.0.min.js"></script>
<script src="<?php echo Config::get('app.url');?>aset/js/bootstrap-wysihtml5.js"></script>


<script src="<?php echo Config::get('app.url');?>aset/js/custom.js"></script>
<script>
    // HTML5 WYSIWYG Editor
    jQuery('#wysiwyg').wysihtml5({color: true,html:true});

    jQuery(document).ready(function(){
    
    "use strict";
    
    jQuery('.thmb').hover(function(){
      var t = jQuery(this);
      t.find('.ckbox').show();
      t.find('.fm-group').show();
    }, function() {
      var t = jQuery(this);
      if(!t.closest('.thmb').hasClass('checked')) {
        t.find('.ckbox').hide();
        t.find('.fm-group').hide();
      }
    });
    
    jQuery('.ckbox').each(function(){
      var t = jQuery(this);
      var parent = t.parent();
      if(t.find('input').is(':checked')) {
        t.show();
        parent.find('.fm-group').show();
        parent.addClass('checked');
      }
    });
    
    
    jQuery('.ckbox').click(function(){
      var t = jQuery(this);
      if(!t.find('input').is(':checked')) {
        t.closest('.thmb').removeClass('checked');
        enable_itemopt(false);
      } else {
        t.closest('.thmb').addClass('checked');
        enable_itemopt(true);
      }
    });
    
    jQuery('#selectall').click(function(){
      if(jQuery(this).is(':checked')) {
        jQuery('.thmb').each(function(){
          jQuery(this).find('input').attr('checked',true);
          jQuery(this).addClass('checked');
          jQuery(this).find('.ckbox, .fm-group').show();
        });
        enable_itemopt(true);
      } else {
        jQuery('.thmb').each(function(){
          jQuery(this).find('input').attr('checked',false);
          jQuery(this).removeClass('checked');
          jQuery(this).find('.ckbox, .fm-group').hide();
        });
        enable_itemopt(false);
      }
    });
    
    function enable_itemopt(enable) {
      if(enable) {
        jQuery('.itemopt').removeClass('disabled');
      } else {
        
        var ch = false;
        jQuery('.thmb').each(function(){
          if(jQuery(this).hasClass('checked'))
            ch = true;
        });
        
        if(!ch)
          jQuery('.itemopt').addClass('disabled');
      }
    }
    
    jQuery("a[data-rel^='prettyPhoto']").prettyPhoto();
    
  });
    
</script>
<script type="text/javascript">
      jQuery(document).ready(function(){
        // alert('sdsd');
          function split( val ) {
            return val.split( /,\s*/ );
          }
          function extractLast( term ) {
            return split( term ).pop();
          }
          jQuery('#receiver_list').autocomplete({
              source:function(request,response){
                  $.getJSON("{{Config::get('app.url')}}public/autocomplete/receiver",{
                    term:extractLast(request.term)},
                    response);
              },
              search:function(){
                var term = extractLast(this.value);
                if(term.length < 2){
                   return false;
                }
              },
              focus:function(){
                return false;
              },
              select:function(event,ui){
                  var terms = split(this.value);
                  terms.pop();
                  terms.push(ui.item.value);
                  terms.push( "" );
                  this.value = terms.join(", ");
                  return false;
              }
          });
            
      });
</script>
</body>
</html>
