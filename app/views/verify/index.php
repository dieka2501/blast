<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!-- This file has been downloaded from Bootsnipp.com. Enjoy! -->
    <title>IndobuildTech Email Verification</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet">
    <style type="text/css">
        
/* Space out content a bit */
body {
  padding-top: 20px;
  padding-bottom: 20px;
}

/* Everything but the jumbotron gets side spacing for mobile first views */
.header,
.marketing,
.footer {
  padding-right: 15px;
  padding-left: 15px;
}

/* Custom page header */
.header {
  border-bottom: 1px solid #e5e5e5;
}
/* Make the masthead heading the same height as the navigation */
.header h3 {
  padding-bottom: 19px;
  margin-top: 0;
  margin-bottom: 0;
  line-height: 40px;
}

/* Custom page footer */
.footer {
  padding-top: 19px;
  color: #777;
  border-top: 1px solid #e5e5e5;
}

/* Customize container */
@media (min-width: 768px) {
  .container {
    max-width: 730px;
  }
}
.container-narrow > hr {
  margin: 30px 0;
}

/* Main marketing message and sign up button */
.jumbotron {
  text-align: center;
  border-bottom: 1px solid #e5e5e5;
}
.jumbotron .btn {
  padding: 14px 24px;
  font-size: 21px;
}

/* Supporting marketing content */
.marketing {
  margin: 40px 0;
}
.marketing p + h4 {
  margin-top: 28px;
}

/* Responsive: Portrait tablets and up */
@media screen and (min-width: 768px) {
  /* Remove the padding we set earlier */
  .header,
  .marketing,
  .footer {
    padding-right: 0;
    padding-left: 0;
  }
  /* Space out the masthead */
  .header {
    margin-bottom: 30px;
  }
  /* Remove the bottom border on the jumbotron for visual effect */
  .jumbotron {
    border-bottom: 0;
  }
}
    </style>
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
    <h1 class="we"><img src="<?php echo Config::get('app.url')?>aset/images/logoindobuildtech.png">Please Verify Your Email</h1>
	<div class="col-lg-12 well">
	<div class="row">
				<form method="POST" action=''>
					<div id='notip'></div>
					<div class="col-sm-12">
						<div class="form-group">
							<label>Email Address</label>
							<input type="email" placeholder="Enter Email Address Here.." class="form-control" name='email' id='email' value="" required> 
						</div>	
						<div class='row'>
							<div class='col-sm-6'>
								<button type="submit" class="btn btn-lg btn-info">Submit</button>							
							</div>
							<!-- <div class='col-sm-6 text-right'>
								<button type="button" class="btn btn-lg btn-danger" id='btn-reset'>Reset</button>							
							</div> -->
						</div>
					
					</div>
				</form> 
				</div>
	</div>
	</div>
<script type="text/javascript">
	$(document).ready(function(){
		$('#email').change(function(){
			var email = $(this).val();
			$.post('<?php echo Config::get("app.url")?>public/validemail',{
				'email':email
			},function(data){
				
				if(data.status){
					$('#name').val(data.data.nama_visitor);
					$('#address').val(data.data.alamat);
					$('#company').val(data.data.perusahaan);
					$('#phone_number').val(data.data.phone);
					$('#region').val(data.data.region);
					$('#country').val(data.data.country);
					$('#position').val(data.data.jabatan);
					$('#lob').val(data.data.bidang);
					$('#nb').val(data.data.nature_business);
					$('#purpose').val(data.data.purpose);
					$('#ids').val(data.data.id);
					var interest 		= data.data.interest_product;
					
					var expint 	 		= interest.split(',');
					var countinterest   = expint.length;
					console.log(interest);
					console.log(expint[0]);
					console.log(countinterest);
					for (var i = 0; i < countinterest; i++) {
						var idinterest = expint[i].replace(/ |&|,/gi, "");
						console.log(idinterest);
						$("#"+idinterest).prop( "checked", true );
					}



				}
			});
		});

		$('#btn-submit').click(function(){
			var name 		= $('#name').val();
			var email 		= $('#email').val();
			var address 	= $('#address').val();
			var company 	= $('#company').val();
			var phone 		= $('#phone_number').val();
			var region 		= $('#region').val();
			var ids 		= $('#ids').val();
			var lob 		= $('#lob').val();
			var country 	= $('#country').val();
			var company 	= $('#company').val();
			var nb 			= $('#nb').val();
			var purpose 	= $('#purpose').val();
			var position 	= $('#position').val();
			var kat 		= [];
			$('.kategori:checked').each(function(){
				if($(this).val() != 'undefined'){
					kat.push($(this).val()); 	
				}
			});
			$.post('<?php echo Config::get("app.url")?>public/register',{
				'name' : name,
				'address' : address,
				'company' : company,
				'email' : email,
				'phone_number':phone,
				'region':region,
				'ids':ids,
				'kategori':kat,
				'lob':lob,
				'country':country,
				'nb':nb,
				'purpose':purpose,
				'position':position,
				'company':company

			},function(data){
				console.log(data);
				if(data.status){
					var htmlalert = "<div class='alert alert-success' role='alert'>"+data.alert+"</div>";
					$('.kategori').prop('checked',false);
					$('#notip').html(htmlalert).show().fadeOut(10000);
					$('#name').val('');
					$('#email').val('');
					$('#address').val('');
					$('#company').val('');
					$('#region').val('');
					$('#phone_number').val('');
					$('#country').val('');
					$('#nb').val('');
					$('#purpose').val('');
					$('#position').val('');
					$('#company').val('');
					$('#ids').val('');
					var win = window.open('<?php Config::get("app.url")?>print/'+data.data.id,'__blank');
					if(win){
						win.focus();
					}else{
						alert('Please Allow Popups For This Site');
					}
				}else{
					var htmlalert = "<div class='alert alert-danger' role='alert'>"+data.alert+"</div>";
					$('#notip').html(htmlalert);
				}	
			});
		});

		$(this).ajaxStart(function(data){
			$('#btn-submit').html('Loading....');
		}).ajaxStop(function(data){
			$('#btn-submit').html('Submit');
		});
	});
</script>
</body>
</html>
