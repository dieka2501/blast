<?php
class verifyController Extends BaseController{
	function __construct(){
		date_default_timezone_set('Asia/Jakarta');
		$this->receiver = new receiver;
	}
	function index(){
		return View::make('verify.index');
	}
	function do_verify(){
		if(Input::has('email')){
			$email 		= Input::get('email');
			$getemail 	= $this->receiver->get_email($email);
			if(count($getemail)>0){
				
			}else{
				$status = FALSE;
				$alert 	= "Email tidak diketemukan, silakan periksa kembali email anda.";	
			}
		}else{
			$status = FALSE;
			$alert 	= "Paramater email harus diisi.";

		}
		return Response::json(['status'=>$status,'alert'=>$alert]);
	}
}