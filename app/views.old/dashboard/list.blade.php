@extends('template')
@section('content')
<div class="block-flat">
	<div class="content">
  		<div class="table-responsive">
    		<div class="row">
      			<div class="col-sm-12">
				    <div class="pull-right">
					    <form method="get" action="<?php echo Config::get('app.url'); ?>public/order">
					        <div class="dataTables_filter" id="datatable_filter">
					          
						        <label><button class="btn btn-primary">Search</button></label>
						        <label><input type="text" aria-controls="datatable" class="form-control" name='cari' placeholder="Search" value=''></label>
						        <label style="margin-right:10px;"></label>
					          
					        </div>
					    </form>  
				    </div>
				    <div class="pull-left">
				        <div id="datatable_length" class="dataTables_length">
				       
				        </div>
				    </div> 
      				<div class="clearfix"></div>
      			</div>
    		</div>
		    DASHBOARD 
  		</div>
	</div>
</div>        
@stop
