<?php
class listReceiverController Extends BaseController{
	protected $layout = "template";
	function __construct(){
		date_default_timezone_set('Asia/Jakarta');
		$this->receiver = new receiver;
	}
	function index(){
		$view['page'] 		   = $this->receiver->get_page(); 
		$view['notip'] 		   = Session::get('notip');
		$view['url'] 		   = Config::get('app.url').'public/blast/receiver/upload';
		$this->layout->content = View::make('list_receiver.list',$view);
	}
	function create(){

		$view['title'] 				= "Create Person";
		$view['url'] 				= Config::get('app.url').'public/blast/receiver/create';
		$view['id'] 				= Session::get('id');
		$view['receiver_email'] 	= Session::get('receiver_email');
		$view['receiver_name']  	= Session::get('receiver_name');
		$view['receiver_status']  	= Session::get('receiver_status');
		$view['receiver_region']  	= Session::get('receiver_region');
		$view['notip'] 				= Session::get('notip');
		$this->layout->content 		= View::make('list_receiver.form',$view);
	}
	function do_create(){
		if(Input::has('receiver_email') && Input::has('receiver_name')){
			$email 		= Input::get('receiver_email');
			$name 		= Input::get('receiver_name');	
			$status 	= Input::get('receiver_status');
			$region 	= Input::get('receiver_region');
			$insert['receiver_name'] 	= $name;
			$insert['receiver_email'] 	= $email;
			$insert['receiver_status'] 	= $status;
			$insert['receiver_region'] 	= strtolower($region);
			$insert['created_at'] 		= date('Y-m-d H:i:s');
			if(count($this->receiver->get_email($email)) == 0){
				$ids = $this->receiver->add($insert);
				if($ids > 0){
					Session::flash('notip',"<div class='alert alert-success'>Create Receiver, success!</div>");	
				}else{
					Session::flash('notip',"<div class='alert alert-danger'>Create Receiver, failed!</div>");	
				}
				return Redirect::to('blast/receiver/list');
			}else{
				Session::flash('notip',"<div class='alert alert-danger'>Email is exists</div>");	
				return Redirect::to('blast/receiver/create');
			}
			
			
		}else{
			Session::flash('notip',"<div class='alert alert-danger'>Email and Name must be filled</div>");
			return Redirect::to('blast/receiver/create');
		}
	}
	function edit($id){
		if($id != ""){
			// $id 		= Input::get('id');
			$getdata 	= $this->receiver->get_id($id);
			$view['title'] 				= "Edit Person";
			$view['url'] 				= Config::get('app.url').'public/blast/receiver/edit';
			$view['id'] 				= $id;
			$view['receiver_email'] 	= $getdata->receiver_email;
			$view['receiver_name']  	= $getdata->receiver_name;
			$view['receiver_status']  	= $getdata->receiver_status;
			$view['receiver_region']  	= $getdata->receiver_region;
			$view['notip'] 				= Session::get('notip');
			$this->layout->content 		= View::make('list_receiver.form',$view);

		}else{
			Session::flash('notip',"<div class='alert alert-danger'>Missing parameter id</div>");	
			return Redirect::to('blast/receiver/list');
		}
		
	}
	function do_edit(){
		if(Input::has('receiver_email') && Input::has('receiver_name')){
			$id 		= Input::get('id');
			$email 		= Input::get('receiver_email');
			$name 		= Input::get('receiver_name');
			$status 	= Input::get('receiver_status');
			$region 	= Input::get('receiver_region');
			$insert['receiver_name'] 	= $name;
			$insert['receiver_email'] 	= $email;
			$insert['receiver_status'] 	= $status;
			$insert['receiver_region'] 	= strtolower($region);
			$insert['updated_at'] 		= date('Y-m-d H:i:s');
			if(true){
				// $ids = $this->receiver->add($insert);
				if($this->receiver->edit($id,$insert)){
					Session::flash('notip',"<div class='alert alert-success'>Update Receiver, success!</div>");	
				}else{
					Session::flash('notip',"<div class='alert alert-danger'>Update Receiver, failed!</div>");	
				}
				return Redirect::to('blast/receiver/list');
			}else{
				Session::flash('notip',"<div class='alert alert-danger'>Email is exists</div>");	
				return Redirect::to('blast/receiver/create');
			}
			
			
		}else{
			Session::flash('notip',"<div class='alert alert-danger'>Email and Name must be filled</div>");
			return Redirect::to('blast/receiver/create');
		}	
	}
	function del($id){
		$this->receiver->del($id);
		Session::flash('notip',"<div class='alert alert-danger'>Receiver Deleted!</div>");
		return Redirect::to('blast/receiver/list');
	}
}