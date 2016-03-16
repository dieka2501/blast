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
              {{Form::open(array('url'=>'/blast/template/submit','method'=>'POST','files'=>true))}}
      					<div class='row'>
      						<div class="col-md-4">
      							 <img src='{{Config::get("app.url")}}aset/mail/{{$template}}.png' width='300' height='400'> 
                     {{Form::hidden('id_template',$id_template)}}
      						</div>
      						<div class="col-md-8">
                     <?php $jform = json_decode($form,true); ?>
                     <?php //var_dump($jform) ;die;?>
                     <?php foreach ($jform as $key => $value) {
                        echo "<div class='row'>";
                          echo "<div class='col-md-12'>";
                              echo "<div class='form-group'>";
                                echo "<label>".ucfirst($value[0]['label'])."</label>";
                                      echo $generate->generate($key,$value); 
                              
                              echo "</div>";
                          echo "</div>";
                          // echo "<div class='col-md-6'>";
                              
                          // echo "</div>";
                        echo "</div>";
                        // echo ;
                     }
                      ?>
      							 
      						</div>
      					</div>
                <div class="row">
                    <div class="col-md-6 text-left">
                          <a href="{{Config::get('app.url')}}public/blast/create" class="btn btn-warning">Back</a>
                    </div>
                    <div class="col-md-6 text-right">
                          <button type='submit' class="btn btn-primary">Preview</button>
                    </div>
                    
                </div>
              {{Form::close()}}
      				<!-- </div> -->
      			</div>
    		</div>
		    
  		</div>
	</div>
</div> 
<script type="text/javascript" src="{{Config::get('app.url')}}aset/js/jquery.js"></script> 
<script type="text/javascript" src="{{Config::get('app.url')}}aset/tinymce/jquery.tinymce.min.js"></script>
<script type="text/javascript" src="{{Config::get('app.url')}}aset/tinymce/tinymce.min.js"></script>
<script type="text/javascript" src="{{Config::get('app.url')}}aset/tinymce/plugin.min.js"></script>
<script type="text/javascript">
  tinymce.init({
    selector: "textarea",
    menubar:false,
    plugins: "insertdatetime",
    plugins: "link code fullscreen",
    toolbar: [
        "undo | redo | styleselect | bold italic | link | fullscreen | alignleft | aligncenter |  alignright | insertdatetime | removeformat | cut | copy | paste | bullist| numlist | outdent| indent |"
    ],
    insertdatetime_formats: ["%Y.%m.%d", "%H:%M"],
 });
</script> 
@stop
