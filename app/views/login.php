<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="shortcut icon" href="<?php echo Config::get('app.url');?>aset/images/favicon.png" type="image/png">

  <title>Login</title>

  <link href="<?php echo Config::get('app.url');?>aset/css/style.default.css" rel="stylesheet">

  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
  <script src="js/html5shiv.js"></script>
  <script src="js/respond.min.js"></script>
  <![endif]-->
</head>

<body class="signin">


<section>
  
    <div class="signinpanel">
        
        <div class="row">
            <div class="col-md-6 col-lg-6 col-md-offset-3 col-lg-offset-3">
                
                <form method="post" action="#">
                    <h4 class="nomargin">Sign In</h4>
                    <p class="mt5 mb20">Login to access your account.</p>
                    <div id="notip"></div>
                    <input type="text" class="form-control uname" placeholder="Username" name='username' id="username"/>
                    <input type="password" class="form-control pword" placeholder="Password" name="password" id="password"/>
                    <a href="#"><small>Forgot Your Password?</small></a>
                    <button class="btn btn-success btn-block" type="button" id="btn-login">Sign In</button>
                    
                </form>
            </div><!-- col-sm-5 -->
            
        </div><!-- row -->
        
        <div class="signup-footer">
            <div class="pull-left">
                &copy; 2014. All Rights Reserved.
            </div>
            <div class="pull-right">
                Created By: Data Driven
            </div>
        </div>
        
    </div><!-- signin -->
  
</section>


<script src="<?php echo Config::get('app.url');?>aset/js/jquery-1.11.1.min.js"></script>
<script src="<?php echo Config::get('app.url');?>aset/js/jquery-migrate-1.2.1.min.js"></script>
<script src="<?php echo Config::get('app.url');?>aset/js/bootstrap.min.js"></script>
<script src="<?php echo Config::get('app.url');?>aset/js/modernizr.min.js"></script>
<script src="<?php echo Config::get('app.url');?>aset/js/jquery.sparkline.min.js"></script>
<script src="<?php echo Config::get('app.url');?>aset/js/jquery.cookies.js"></script>

<script src="<?php echo Config::get('app.url');?>aset/js/toggles.min.js"></script>
<script src="<?php echo Config::get('app.url');?>aset/js/retina.min.js"></script>

<script src="<?php echo Config::get('app.url');?>aset/js/custom.js"></script>
<script>
    jQuery(document).ready(function(){
        
        // Please do not use the code below
        // This is for demo purposes only
        var c = jQuery.cookie('change-skin');
        if (c && c == 'greyjoy') {
            jQuery('.btn-success').addClass('btn-orange').removeClass('btn-success');
        } else if(c && c == 'dodgerblue') {
            jQuery('.btn-success').addClass('btn-primary').removeClass('btn-success');
        } else if (c && c == 'katniss') {
            jQuery('.btn-success').addClass('btn-primary').removeClass('btn-success');
        }
    });
</script>
<script type="text/javascript">
  function login(username,password){
      $.post('<?php echo Config::get("app.url")?>public/login',{
        'email_login':username,
        'password':password
      },function(data){

        //var json = eval('('+data+')');
        //alert(json.alert);
        if(data.login){
          $('#notip').html(data.alert);
          $('#notip').css('color',' #e6efc2');
          $('#notip').css('text-align','center');
          window.location="<?php echo Config::get('app.url')?>public/blast";
        }else{
          $('#notip').html(data.alert).show().fadeOut(5000);
          $('#notip').css('color','#f4bec0');
          $('#notip').css('text-align','center');
          $('#notip').css('font-size','12px');
        }
      });
  }
  $(document).ready(function(){
          $(this).ajaxStart(function(){
            $('#btn-login').html('Loading.......');
          }).ajaxStop(function(){
            $('#btn-login').html('Login');
          })
    });

  $(document).ready(function(){
    //alert('aaaa');
    $('#btn-login').click(function(){
      var username = $('#username').val();
      var password = $('#password').val();
      login(username,password);
    });
    $(this).keypress(function(event){
      if(event.which==13){
        var username = $('#username').val();
        var password = $('#password').val();
        login(username,password); 
      }
    });
  });
</script>
</body>
</html>
