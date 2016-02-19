<?php
class previewController Extends BaseController{
	protected $layout = "templatepreview";
	function __construct(){
		$this->mail 	= new mailblast;
		$this->template = new template;
		$this->path 	= base_path().'/aset/upload/';

	}
	function index_old(){
		if(Input::has('id_template')){
			$ids 			= Input::get('id_template');
			$mail_name 		= Input::get('mail_name');
			$header 		= Input::get('header');
			$content 		= Input::get('content');
			$twitter 		= Input::get('twitter');
			$email 			= Input::get('email');
			$facebook 		= Input::get('facebook');
			$linkedin 		= Input::get('linkedin');
			if(Input::hasFile('image')){
				$images 	= Input::file('image');
				$ext 		= $images->getClientOriginalExtension();
				$filename 	= strtotime(date('Y-m-d H:i:s')).'.'.$ext;
				$images->move($this->path,$filename);
			}else{
				$filename = Input::get('imagehid');

			}

			$gettemplate			= $this->template->get_id($ids);
			Session::flash('image',$filename);
			Session::flash('id_template',$ids);
			Session::flash('mail_name',$mail_name);
			Session::flash('header',$header);
			Session::flash('content',$content);
			Session::flash('twitter',$twitter);
			Session::flash('email',$email);
			Session::flash('facebook',$facebook);
			Session::flash('linkedin',$linkedin);
			$view['mail_name'] 		= $mail_name;
			$view['template'] 		= $gettemplate->file;
			$view['header'] 		= $header;
			$view['content'] 		= $content;
			$view['twitter'] 		= $twitter;
			$view['email'] 			= $email;
			$view['image'] 			= $filename;
			$view['facebook'] 		= $facebook;
			$view['linkedin'] 		= $linkedin;
			$this->layout->content 	= View::make('mail.'.$view['template'].'.preview',$view);
			
		}else{
			Session::flash('notip','<div class="alert alert-warning">Tidak ada template yang dipilih</div>');
			return Redirect::to('/blast/create');
		}
	}

	function index(){
		$path = base_path().'/aset/upload/';
		if(Input::has('id_template')){
			$ids 			= Input::get('id_template');
			// $mail_name 		= Input::get('mail_name');
			// $header 		= Input::get('header');
			// $content 		= Input::get('content');
			// $twitter 		= Input::get('twitter');
			// $email 			= Input::get('email');
			// $facebook 		= Input::get('facebook');
			// $linkedin 		= Input::get('linkedin');
			$allform 			= $_POST;
			$allimage 			= $_FILES;
			// var_dump($allimage);die;
			foreach ($allimage as $keyfile => $valuefile) {
					if($valuefile['name'] != ""){
						$fname 	   = explode(".", $valuefile['name']);
						$ext 	   = end($fname);
						$filename  = $keyfile.strtotime(date('Y-m-d H:i:s')).'.'.$ext;
						$tempname  = $valuefile['tmp_name'];
						move_uploaded_file($tempname, $path.$filename);
						$allform[$keyfile] = $filename;
						Session::flash($keyfile,$filename);
					// array_push($allform, $arr_file);
					}
			}
			// var_dump($_POST);die;
			// if(Input::hasFile('image')){
			// 	$images 	= Input::file('image');
			// 	$ext 		= $images->getClientOriginalExtension();
			// 	$filename 	= strtotime(date('Y-m-d H:i:s')).'.'.$ext;
			// 	$images->move($this->path,$filename);
			// }else{
			// 	$filename = Input::get('imagehid');

			// }

			$gettemplate			= $this->template->get_id($ids);
			foreach ($allform as $keyform => $valueform) {
				Session::flash($keyform,$valueform);
				$view[$keyform] 		= $valueform;
			}
			// Session::flash('image',$filename);
			// Session::flash('id_template',$ids);
			// Session::flash('mail_name',$mail_name);
			// Session::flash('header',$header);
			// Session::flash('content',$content);
			// Session::flash('twitter',$twitter);
			// Session::flash('email',$email);
			// Session::flash('facebook',$facebook);
			// Session::flash('linkedin',$linkedin);
			// $view['mail_name'] 		= $mail_name;
			$view['template'] 		= $gettemplate->file;
			// $view['header'] 		= $header;
			// $view['content'] 		= $content;
			// $view['twitter'] 		= $twitter;
			// $view['email'] 			= $email;
			// $view['image'] 			= $filename;
			// $view['facebook'] 		= $facebook;
			// $view['linkedin'] 		= $linkedin;
			$this->layout->content 	= View::make('mail.'.$view['template'].'.preview',$view);
			
		}else{
			Session::flash('notip','<div class="alert alert-warning">Tidak ada template yang dipilih</div>');
			return Redirect::to('/blast/create');
		}
	}
}