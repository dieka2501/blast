<?php
class TestMandrillController Extends BaseController{
	function __construct(){
		date_default_timezone_set('Asia/Jakarta');
	}
	function get_info(){
		$response = Email::users()->info();
		var_dump($response['stats']['all_time']);
	}
}