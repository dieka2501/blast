<?php
class receiverController Extends BaseController{
	protected $layout = "template";
	function __construct(){
		$this->receiver 	= new receiver;
		$this->mailblast 	= new mailblast;
		$this->rm 			= new receiverMail;
	}

	function index(){
		$getalltemplate 	= $this->mailblast->get_all();
		$arr_mail[0] 		= "-- Select Name Email -- ";
		foreach ($getalltemplate as $mailtemplate) {
			$arr_mail[$mailtemplate->id] = $mailtemplate->mail_name;
		}
		$arr_mail_name 			= $arr_mail;
		if(Input::has('id')){
			$id 					= Input::get('id');
			$get_rm 				= $this->rm->get_idmail($id);
			$gettemplateid 			= $this->mailblast->join_template($id);
			$template_name  		= $gettemplateid->template_name;
			$template_file 			= $gettemplateid->file;
			$name_mail 				= $gettemplateid->mail_name;
			$header 				= $gettemplateid->mail_header;
			$content 				= $gettemplateid->mail_content;
			$image 					= $gettemplateid->mail_image;
			$twitter 				= $gettemplateid->mail_twitter;
			$email 					= $gettemplateid->mail_email;
			$facebook 				= $gettemplateid->mail_facebook;
			$linkedin 				= $gettemplateid->mail_linkedin;
			
			$id_mail_name 			= $id;
			$rm_list 				= [];
			foreach ($get_rm as $rms) {
				$rm_list[]	= $rms->receiver_email;
			}
			$receiver_list 			= implode(',', $rm_list);	

		}else{
			$id 					= Session::get('id');
			$gettemplateid 			= [];
			$template_name  		= Session::get('template_name');
			// $arr_mail_name 			= [];
			$id_mail_name 			= Session::get('id_mail_name');
			$receiver_list 			= Session::get('receiver_list');
			$name_mail 				= Session::get('name_mail');
			$header 				= Session::get('header');
			$content 				= Session::get('content');
			$image 					= Session::get('image');
			$twitter 				= Session::get('twitter');
			$email 					= Session::get('email');
			$facebook 				= Session::get('facebook');
			$linkedin 				= Session::get('linkedin');
			$template_name  		= Session::get('template_name');
			$template_file 			= Session::get('template_file');
		}
		$view['arr_mail_name'] 		= $arr_mail_name;
		$view['id_mail_name']	 	= $id_mail_name;
		$view['template_name']	 	= $template_name;
		$view['template_file']	 	= $template_file;
		$view['receiver_list']	 	= $receiver_list;
		$view['mail_name']	 		= $name_mail;
		$view['header']	 			= $header;
		$view['image']	 			= $image;
		$view['content']	 		= $content;
		$view['twitter']	 		= $twitter;
		$view['email']		 		= $email;
		$view['facebook']		 	= $facebook;
		$view['linkedin']		 	= $linkedin;
		$prev['header'] 			= $header;
		$prev['content'] 			= $content;
		$prev['image']	 			= $image;
		$prev['twitter']			= $twitter;
		$prev['facebook']			= $facebook;
		$prev['email']				= $email;
		$view['subject_mail']	 	= Session::get('subject_mail');
		$view['prev'] 				= View::make('mail/template_ara/index',$prev);
		$this->layout->content = View::make('blast_email/receiver',$view);
	}
	function autocomplete(){
		$term 			= Input::get('term');
		$getdata 		= $this->receiver->like_email($term);
		$arr_data 		= [];
		foreach ($getdata as $datas) {
			$arr_data[]	= ['id'=>$datas->id_receiver,'label'=>$datas->receiver_email." <".$datas->receiver_name.">",'value'=>$datas->receiver_email];
		}
		return Response::json($arr_data);
	}
	function json_mail_template(){
		$ids 		= Input::get('ids');
		$getdata 	= $this->mailblast->join_template($ids);
		return Response::json($getdata);
	}
}