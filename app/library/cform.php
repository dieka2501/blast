<?php
class cform{
	function __construct(){

	}
	function generate_old($name,$data){
		if($data[0]['element'] == 'text'){
			$html = "<input type='text' name='".$name."' id='".$name."' class='form-control' placeholder='".$data[0]['label']."' value='".$data[0]['value']."''>";
		}elseif($data[0]['element'] == 'file'){
			$html = "<input type='file' name='".$name."' id='".$name."' value='".$data[0]['value']."'>";
		}elseif($data[0]['element'] == 'textarea'){
			$html = "<textarea name='".$name."' id='".$name."' class='form-control tinymce' placeholder='".$data[0]['label']."'>".$data[0]['value']."</textarea>";
		}
		return $html;
	}
	function generate($name,$element,$label,$value){
		if($element == 'text'){
			$html = "<input type='text' name='".$name."' id='".$name."' class='form-control' placeholder='".$label."' value='".$value."''>";
		}elseif($element == 'file'){
			$html = "";
			if($value != null){
				$html .= "<input type='hidden' name='".$name."' value='".$value."'>";
				$html .= '<img src="'.Config::get('app.url').'aset/upload/'.Session::get('image').'" class="img-responsive" height="50px" alt="" /> '; 
			}
			$html .= "<input type='file' name='".$name."' id='".$name."' placeholder='".$label."'>";
		}elseif($element == 'textarea'){
			$html = "<textarea name='".$name."' id='".$name."' class='form-control tinymce' placeholder='".$label."'>".$value."</textarea>";
		}
		return $html;
	}
	
}