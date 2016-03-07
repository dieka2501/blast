<?php
class loginController Extends BaseController{
	function __construct(){
		$this->login = new login;
	}
	function index(){
		return View::make('login');
	}
	function get_login(){
		if(Input::has('email_login') && Input::has('password')){
			$username 					= Input::get('email_login');
			$password 					= md5(Input::get('password'));
			$get_data 					= $this->login->get_username($username,$password);
			if(count($get_data)>0){
				Session::put('login',true);
				Session::put('username',$username);
				// Session::put('role',$get_data->role);
				return Response::json(array('login'=>true,'alert'=>"Login success"));
			}else{
				return Response::json(array('login'=>false,'alert'=>"Username & Password does not exist"));
			}
		}else{
			return Response::json(array('login'=>false,'alert'=>"Username & Password cannot leave blank"));
		}
	}
	function logout(){
		Session::flush();
		return Redirect::to(Config::get('app.url').'public/admin');
	}
}