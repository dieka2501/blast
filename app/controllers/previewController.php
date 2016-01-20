<?php
class previewController Extends BaseController{
	protected $layout = "template";
	function __construct(){
		$this->mail 	= new mailblast;
	}
	function index(){
		if(Input::has('id')){
			$ids 		= Input::get('id');
			$getdata 	= $this->mail->get_id($ids);
			
		}else{
			Session::flash('notip','<div class="alert alert-warning">Tidak ada template yang dipilih</div>');
			return Redirect::to('/blast/create');
		}
	}
}