@extends('template')
@section('content')
<div class="block-flat">
	<div class="content">
  		<div class="table-responsive">
    		<div class="row">
      			<div class="col-sm-12">
				    <div class="pull-right">

				    </div>
				    <div class="pull-left">
							
				    </div> 
            {{Session::get('notip')}}
      				<div class="clearfix"></div>
      				<!-- <div class="container"> -->
              {{Form::open(array('url'=>'/blast/template/edit','method'=>'POST'))}}
      					@for($i = 0; $i < $cacah;$i++)
      						<?php
      								$odd 	           = ($i*2)+1;
      								$even 	         = ($i*2);
                      $templateodd     = isset($template[$odd]) ?  "<img src='".Config::get('app.url')."aset/mail/".$template[$odd]->file.".png' width='200' height='400'><br> ".Form::radio('id_template',$template[$odd]->id_template) : "";
                      $templateeven    = isset($template[$even]) ?  "<img src='".Config::get('app.url')."aset/mail/".$template[$even]->file.".png' width='200' height='400'><br>".Form::radio('id_template',$template[$even]->id_template) : "";
      						?>
      					<div class='row'>
      						<div class="col-md-6">

      							 {{$templateeven}}
              
      						</div>
      						<div class="col-md-6">
                    {{$templateodd}}
      							 
      						</div>
      					</div>
      					@endfor
                <div class="row">
                    <div class="col-md-12 text-right">
                          <button type='submit' class="btn btn-primary">Choose</button>
                    </div>
                </div>
              {{Form::close()}}
      				<!-- </div> -->
      			</div>
    		</div>
		    
  		</div>
	</div>
</div>        
@stop
