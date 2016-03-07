<?php
class chooseTemplateController Extends BaseController{
	protected $layout = "template";
	function __construct(){
		date_default_timezone_set('Asia/Jakarta');
		$this->html = new template;
	}
	function index(){
		View::share('big_title','Choose Template Email');
		$get_template 		   = $this->html->get_all();
		$view['template'] 	   = $get_template;
		$view['cacah'] 		   = ceil(count($get_template)/2);
		$this->layout->content = View::make('blast_email/choose',$view);
	}
}