<?php
class editTemplateController Extends BaseController{
	protected $layout = "template";
	function __construct(){
		date_default_timezone_set('Asia/Jakarta');
		$this->html 	= new template;
		$this->mail 	= new mailblast;
		$this->cform 	= new cform;
		$this->path 	= base_path().'/aset/upload/';
	}
	function index(){
		View::share('big_title','Edit Content Template');	
			// $getdata 				= $this->html->get_id($ids);
			// // $view['arr_action'] 	= ['#'=>'Choose An Action','/blast/template/draf'=>'Save As Draft','/blast/template/receiver'=>'Send Blast'];
			// // $view['action'] 		= "";
			if(Input::has('id')){
				$id 		= Input::get('id');
				$getjson 	= $this->html->get_id($id);
			}else{
				$getjson 	= $this->html->get_last();
			}
			$jsonform 					= json_decode($getjson->form);
			$view['template'] 			= $this->html->get_all();
			$view['json'] 				= $getjson->form;
			// $view['form'] 				= $this->cform;

			foreach ($jsonform as $key => $value) {
				$view['html'][] 	= $this->cform->generate($key,$value->element,$value->label,Session::get($key));
				$view['label'][]	= $value->label;
			}
			$view['mail_name']			= Session::get('mail_name');
			// $view['header'] 			= Session::get('header');
			// $view['content'] 			= Session::get('content');
			$view['twitter'] 			= Session::get('twitter');
			$view['email']	 			= Session::get('email');
			$view['facebook'] 			= Session::get('facebook');
			$view['linkedin'] 			= Session::get('linkedin');
			$view['notip'] 				= Session::get('notip');
			$this->layout->content = View::make('blast_email/index',$view);
	}
	function submit_template(){
		$path = base_path().'/aset/upload/';
		$allform 				= $_POST;
		$files 					= $_FILES;
		// var_dump($files);die;
		foreach ($files as $keyfile => $valuefile) {
				$fname 	   = explode(".", $valuefile['name']);
				$ext 	   = end($fname);
				$filename  = strtotime(date('Y-m-d H:i:s')).'.'.$ext;
				$tempname  = $valuefile['tmp_name'];
				move_uploaded_file($tempname, $path.$filename);
				$_POST[$keyfile] = $filename;
		}
		$id_template 			= Input::get('id_template');
		$jsonform 				= json_encode($_POST);
		$insert['template_id']  = $id_template;
		$insert['content'] 		= $jsonform;
		$insert['created_at']	= date('Y-m-d H:i:s');
		$ids = $this->mail->add($insert);
		if($ids > 0){

			// $get_template 	=  $this->html->get_id($id_template);
			// return View::make('mail/'.$get_template->file.'/index');
			return Redirect::to('/blast/preview/'.$ids);
			
		}else{
			return Redirect::to('/blast/create');
		}

	}
	function save_template(){
		$id_template 	= Input::get('id_template');
		$mail_name 		= Input::get('mail_name');
		$header 		= Input::get('header');
		$content 		= Input::get('content');
		$twitter 		= Input::get('twitter');
		$email 	 		= Input::get('email');
		$facebook 		= Input::get('facebook');
		$linkedin 		= Input::get('linkedin');
		if(Input::has('id_template') && Input::has('mail_name')){
			if(Input::hasFile('image')){
				$images 	= Input::file('image');
				$ext 		= $images->getClientOriginalExtension();
				$filename 	= strtotime(date('Y-m-d H:i:s')).'.'.$ext;
				$images->move($this->path,$filename);
				$insert['mail_image'] = $filename;
			}
			$insert['template_id'] 		= $id_template;
			$insert['mail_name'] 		= $mail_name;
			$insert['mail_header'] 		= $header;
			$insert['mail_content'] 	= $content;
			$insert['mail_twitter'] 	= $twitter;
			$insert['mail_email'] 		= $email;
			$insert['mail_facebook'] 	= $facebook;
			$insert['mail_linkedin'] 	= $linkedin;
			$insert['created_at'] 		= date('Y-m-d H:i:s');
			$ids = $this->mail->add($insert);
			if($ids > 0){
				return Redirect::to('/blast/receiver/choose?id='.$ids);
			}else{
				Session::flash('mail_name',$mail_name);
				Session::flash('header',$header);
				Session::flash('content',$content);
				Session::flash('twitter',$twitter);
				Session::flash('email',$email);
				Session::flash('faceboook',$facebook);
				Session::flash('linkedin',$linkedin);
				Session::flash('notip','<div class="alert alert-danger">Oopss ada kesalahan, silahkan ulangi</div>');
				return Redirect::to('/blast/create');
			}
		}else{
			Session::flash('mail_name',$mail_name);
			Session::flash('header',$header);
			Session::flash('content',$content);
			Session::flash('twitter',$twitter);
			Session::flash('email',$email);
			Session::flash('faceboook',$facebook);
			Session::flash('linkedin',$linkedin);
			Session::flash('notip','<div class="alert alert-danger">Template dan nama template harus diisi</div>');
			return Redirect::to('/blast/create');
		}
	}

	function tes_template(){
		return View::make('mail/template2/index');
	}
}