<?php
class sendController Extends BaseController{
	protected $layout = "template";
	function __construct(){
		$this->receiver = new receiver;
		$this->mail 	= new mailblast;
	}
	function index(){

	}
	function do_send(){
		$send_to 			= Input::get('send_to');
		$subject 			= Input::get('subject_mail');
		$id_mail_name 		= Input::get('id_mail_name'); 
		if($send_to == 1){
			$getreceiver = $this->receiver->get_all();
			foreach ($getreceiver as $receivers) {
				$sending[] = $receivers->receiver_email;
			}
		}else{
			$sender 	= Input::get('receiver_list');
			$sending 	= explode(',', $sender);
		}
		$get_data_email 		= $this->mail->join_template($id_mail_name);
		$dataemail['header'] 	= $get_data_email->mail_header;
		$dataemail['content'] 	= $get_data_email->mail_content;
		$dataemail['image'] 	= $get_data_email->mail_image;
		$dataemail['twitter'] 	= $get_data_email->mail_twitter;
		$dataemail['facebook'] 	= $get_data_email->mail_facebook;
		$dataemail['email'] 	= $get_data_email->mail_email;
		$dataemail['linkedin'] 	= $get_data_email->mail_linkedin;
		$template 				= $get_data_email->file;
		$datasend['to'] 		= $sending;
		$datasend['subject']	= $subject;
		$datasend['from']		= "kotarominami@data-driven.asia";
		Mail::queue('mail/'.$template."/index",$dataemail,function($message) use ($datasend){
			$message->to($datasend['to'])->from($datasend['from'])->subject($datasend['subject']);	
		});
		return $this->layout->content = View::make('dashboard/index');
	}
}