<?php
class cform{
	function __construct(){

	}
	function generate($name,$data){
		if($data[0]['element'] == 'text'){
			$html = "<input type='text' name='".$name."' id='".$name."' class='form-control' value='".$data[0]['value']."''>";
		}elseif($data[0]['element'] == 'file'){
			$html = "<input type='file' name='".$name."' id='".$name."' value='".$data[0]['value']."'>";
		}elseif($data[0]['element'] == 'textarea'){
			$html = "<textarea name='".$name."' id='".$name."' class='form-control tinymce'>".$data[0]['value']."</textarea>";
		}
		return $html;
	}
}