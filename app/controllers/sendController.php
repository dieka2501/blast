<?php
class sendController Extends BaseController{
	protected $layout = "template";
	function __construct(){
		date_default_timezone_set('Asia/Jakarta');
		$this->receiver = new receiver;
		$this->mail 	= new mailblast;
		$this->dm 		= new detailMail;
		$this->rm 		= new receiverMail;
		$this->ms 		= new mailSchedule;
	}

	function index(){

	}
	function do_send(){
		$send_to 			= Input::get('send_to');
		$subject 			= Input::get('subject_mail');
		$id_mail_name 		= Input::get('id_mail_name'); 
		$sending 			= [];
		if($send_to == 1){
			$getreceiver = $this->receiver->get_all();
			foreach ($getreceiver as $receivers) {
				$sending[] = $receivers->receiver_email;
			}
		}else{
			$arr_send 	= Input::get('receiver_list');
			// $arr_send  	= explode(',', $sender);
			// $sending 	= $arr_send;
			foreach ($arr_send as $arr_sends) {
				if($arr_sends != " "){
					$sending[] 	= $arr_sends;
					
				}
			}
			// die;
		// 	$inputregion = Input::get('region');
		// 	if($inputregion[0] !="" ) {
				
		// 		foreach ($inputregion as $regions) {
		// 			$getregion = $this->receiver->get_byregion($regions);
		// 			foreach ($getregion as $reg) {
		// 				if(!in_array($reg->receiver_email,$sending)){
		// 					array_push($sending, $reg->receiver_email);
		// 				}
		// 			}
		// 		}
		// 	}
		}
		
		// var_dump($sending);die;
		if(Input::has('checkschedule')==false){
			// 
			$get_data_email 		= $this->mail->join_template($id_mail_name);
			$get_dm 				= $this->dm->get_idmail($id_mail_name);
			foreach ($get_dm as $dms) {
				$dataemail[$dms->key] 	= $dms->value;
			}
			// $dataemail['header'] 	= $get_data_email->mail_header;
			// $dataemail['content'] 	= $get_data_email->mail_content;
			// $dataemail['image'] 	= $get_data_email->mail_image;
			// $dataemail['twitter'] 	= $get_data_email->mail_twitter;
			// $dataemail['facebook'] 	= $get_data_email->mail_facebook;
			// $dataemail['email'] 	= $get_data_email->mail_email;
			// $dataemail['linkedin'] 	= $get_data_email->mail_linkedin;
			
			$template 				= $get_data_email->file;
			$datasend['to'] 		= $sending;
			$datasend['subject']	= $subject;
			$datasend['from']		= "mailblast@data-driven.asia";
			Mail::queue('mail/'.$template."/index",$dataemail,function($message) use ($datasend){
				$message->to($datasend['to'])->from($datasend['from'])->subject($datasend['subject']);	
			});	
			$ms['mail_id'] 			= $id_mail_name;
			$ms['mail_subject'] 	= $subject;
			$ms['send_time'] 		= date('Y-m-d H:i:s');
			$ms['is_schedule'] 		= 0;
			$ms['created_at'] 		= date('Y-m-d H:i:s');
		}else{
			// var_dump($sending);die;
			$datetime 				= Input::get('schedule');
			$ms['mail_id'] 			= $id_mail_name;
			$ms['mail_subject'] 	= $subject;
			$ms['send_time'] 		= $datetime;
			$ms['is_schedule'] 		= 1;
			$ms['created_at'] 		= date('Y-m-d H:i:s');
			
		}
		$idschedule 			= $this->ms->add($ms);
		foreach ($sending as $sendings) {
			// if(!empty($sendings)){
				$rm['mail_id'] 			= $idschedule;
				$rm['receiver_id'] 		= $sendings;
				$rm['created_at'] 		= date('Y-m-d H:i:s');
				$this->rm->add($rm);	
			// }
			
		}
		Session::flash('notip','<div class="alert alert-success">Email telah dikirim</div>');
		return Redirect::to('/blast');
	}
}