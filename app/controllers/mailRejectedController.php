<?php
class mailRejectedController Extends BaseController{
	protected $layout = "template";
	function __construct(){
		date_default_timezone_set('Asia/Jakarta');
		$this->email 	= new mailblast;
		$this->curl 	= new curl;
	}

	function index(){
		View::share('big_title','Dashboard');
		$date_from 			= (Input::has('date_from'))?Input::get('date_from'):date('Y').'-01-01';
		$date_to 			= (Input::has('date_to'))?Input::get('date_to'):date('Y')."-12-31";
		$limit 				= (Input::has('limit'))?Input::get('limit'):10;
		$param 				= ['key'=>Config::get('app.mandrill_key'),
							   'query'=>"state:rejected",
							   'date_from'=>$date_from,
							   'date_to'=>$date_to,
							   'limit'=>$limit];
		$url 				= Config::get('app.url_mandrill').'messages/search.json';
		$json 				= json_encode($param);
		$hasil 				= $this->curl->post($url,$json);
		// $mailsent 			= Email::messages()->search();					   
		// var_dump($hasil);die;
		// var_dump($response['stats']['all_time']);
		$view['list'] 			= json_decode($hasil);
		$view['date_from'] 		= $date_from;
		$view['date_to'] 		= $date_to;
		$view['limit']	 		= $limit;
		$this->layout->content  = View::make('email_rejected/list',$view);
	}
}