<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="shortcut icon" href="images/favicon.png">

	<title>Quantum Blast</title>

	<!-- Bootstrap core CSS -->
	<link href="<?php echo Config::get('app.url');?>aset/js/bootstrap/dist/css/bootstrap.css" rel="stylesheet">

	<link rel="stylesheet" href="<?php echo Config::get('app.url');?>aset/fonts/font-awesome-4/css/font-awesome.min.css">

	<!-- Custom styles for this template -->
	<link href="<?php echo Config::get('app.url');?>aset/css/style.css" rel="stylesheet" />	

</head>

<body style="background:#2E2E36">

	<div id="cl-wrapper" class="login-container">
		<div class="middle-login">
			<div class="block-flat">
				<div id="notip"></div>
				<div class="header">							
					<!-- <img class="logo-img" src="" alt="logo" width="100" /> -->
				</div>
				<div>
					<form action="<?php echo Config::get('app.url');?>public/login" style="margin-bottom: 0px !important;" class="form-horizontal" method="post">
						<div class="content">
							<h4 class="title">Login Access</h4>
							<div class="form-group">
								<div class="col-sm-12">
									<div class="input-group">
										<span class="input-group-addon"><i class="fa fa-user"></i></span>
										<input type="text" placeholder="Username" class="form-control" name="username" id='username' autofocus>
									</div>
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-12">
									<div class="input-group">
										<span class="input-group-addon"><i class="fa fa-lock"></i></span>
										<input type="password" placeholder="Password" class="form-control" name="password" id='password'>
									</div>
								</div>
							</div>
						</div>
						<div class="foot">
							<button class="btn btn-default" type="button" id='btn-login'>LOGIN</button>
						</div>
					</form>
				</div>
			</div>
			<div class="text-center out-links"><a href="#">&copy; 2015 Powered by iMaker</a></div>
		</div> 
	</div>

<script src="<?php echo Config::get('app.url');?>aset/js/jquery.js"></script>
<script type="text/javascript" src="<?php echo Config::get('app.url');?>aset/js/behaviour/general.js"></script>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="<?php echo Config::get('app.url');?>aset/js/behaviour/voice-commands.js"></script>
<script src="<?php echo Config::get('app.url');?>aset/js/bootstrap/dist/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo Config::get('app.url');?>aset/js/jquery.flot/jquery.flot.js"></script>
<script type="text/javascript" src="<?php echo Config::get('app.url');?>aset/js/jquery.flot/jquery.flot.pie.js"></script>
<script type="text/javascript" src="<?php echo Config::get('app.url');?>aset/js/jquery.flot/jquery.flot.resize.js"></script>
<script type="text/javascript" src="<?php echo Config::get('app.url');?>aset/js/jquery.flot/jquery.flot.labels.js"></script>
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
					$('#notip').css('font-size','22px');
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
