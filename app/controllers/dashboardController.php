<?php
class dashboardController Extends BaseController{
	protected $layout = "template";
	function __construct(){
		date_default_timezone_set('Asia/Jakarta');
		$this->mail 	= new mailblast;
	}
	function index(){
		View::share('big_title','Dashboard');
		$stats 		= Email::users()->info();
		// var_dump($response['stats']['all_time']);
		$getten 			= $this->mail->get_ten();
		$view['stats'] 		= $stats['stats']['all_time'];
		$view['maillist'] 	= $getten;
		$this->layout->content = View::make('dashboard/list',$view);
	}
}