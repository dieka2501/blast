<?php
class dashboardController Extends BaseController{
	protected $layout = "template";
	function __construct(){
		date_default_timezone_set('Asia/Jakarta');
		$this->mail 	= new mailblast;
	}
	function index(){
		View::share('big_title','Dashboard');
		$getten 			= $this->mail->get_ten();
		$view['maillist'] 	= $getten;
		$this->layout->content = View::make('dashboard/list',$view);
	}
}