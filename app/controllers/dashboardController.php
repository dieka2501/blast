<?php
class dashboardController Extends BaseController{
	protected $layout = "template";
	function __consturct(){
		date_default_timezone_set('Asia/Jakarta');
	}
	function index(){
		View::share('big_title','Dashboard');
		$this->layout->content = View::make('dashboard/index');
	}
}