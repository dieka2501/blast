<?php
class receiverController Extends BaseController{
	protected $layout = "template";
	function __construct(){
		$this->receiver 	= new receiver;
		$this->mailblast 	= new mailblast;
		$this->detail 		= new detailMail;
		$this->rm 			= new receiverMail;
	}

	function index(){
		$getalltemplate 	= $this->mailblast->get_all();
		$arr_mail[0] 		= "-- Select Name Email -- ";
		foreach ($getalltemplate as $mailtemplate) {
			$arr_mail[$mailtemplate->id] = $mailtemplate->mail_name;
		}
		$arr_mail_name 			= $arr_mail;
		$get_region 			= $this->receiver->get_region();
		$arr_region 			= [''=>'--Choose region--'];
		if(count($get_region) > 0){
			foreach ($get_region as $regions) {
				if($regions->receiver_region != "" ){
					$arr_region[$regions->receiver_region] = ucfirst($regions->receiver_region);	
				}
				
			}	
		}
		
		if(Input::has('id')){
			$id 					= Input::get('id');
			$get_rm 				= $this->rm->get_idmail($id);
			$gettemplateid 			= $this->mailblast->join_template($id);
			$getdetail 				= $this->detail->get_idmail($id);
			$template_name			= $gettemplateid->template_name;
			$template_file 			= $gettemplateid->file;
			$template_id 			= $gettemplateid->template_id;		
			$prev 					= [];
			if(count($getdetail) > 0){
				foreach ($getdetail as $valuemail) {
					$prev[$valuemail->key] = $valuemail->value;
				}	
			}
			
			
			$id_mail_name 			= $id;
			$rm_list 				= [];
			if(count($get_rm) > 0){
				foreach ($get_rm as $rms) {
					$rm_list[]	= $rms->receiver_email;
				}	
			}
			
			$receiver_list 			= implode(',', $rm_list);	
			 $view['prev'] 			= View::make('mail/'.$template_file.'/index',$prev);
		}else{
			// $id 					= Session::get('id');
			// $gettemplateid 			= [];
			$template_id  			= Session::get('template_id');
			// // $arr_mail_name 			= [];
			$id_mail_name 			= Session::get('id_mail_name');
			$receiver_list 			= Session::get('receiver_list');
			
			$template_name  			= Session::get('template_name');
			$template_file 				= Session::get('template_file');
			$view['prev'] 				= "";
		}

		$view['arr_region'] 		= $arr_region;
		$view['region'] 			= Session::get('region');
		$view['arr_mail_name'] 		= $arr_mail_name;
		$view['id_mail_name']	 	= $id_mail_name;
		$view['template_name']	 	= $template_name;
		$view['template_id']	 	= $template_id;
		$view['template_file']	 	= $template_file;
		$view['receiver_list']	 	= $receiver_list;
		
		$view['subject_mail']	 	= Session::get('subject_mail');
		// $view['prev'] 				= View::make('mail/template_ara/index',$prev);
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