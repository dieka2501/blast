<?php
class apiController Extends BaseController{
	function __construct(){
		date_default_timezone_set('Asia/Jakarta');
		$this->receiver = new receiver;
	}
	function add_receiver(){
		if(Input::has('name') && Input::has('email')){
			$name 	= Input::get('name');
			$email 	= Input::get('email');
			$region = Input::get('region');
			if(count($this->receiver->get_email($email)) == 0){
				$insert['receiver_name'] 	= $name;
				$insert['receiver_email'] 	= $email;
				$insert['receiver_region'] 	= $region;
				$insert['receiver_status'] 	= 1;
				$insert['created_at'] 		= date('Y-m-d H:i:s');
				$ids = $this->receiver->add($insert);
				if($ids > 0){
					return Response::json(array('status'=>true,'alert'=>"Insert data success"));	
				}else{
					return Response::json(array('status'=>false,'alert'=>"Insert data failed"));	
				}	
			}
		}else{
			return Response::json(array('status'=>false,'alert'=>"Missing Parameter name or email"));
		}
	}
}