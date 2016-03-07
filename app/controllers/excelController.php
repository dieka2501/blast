<?php
class excelController Extends BaseController{
	function __construct(){
		date_default_timezone_set('Asia/Jakarta');
		$this->path 		= app_path().'/aset/xls/';
		$this->receiver 	= new receiver;
	}

	function do_upload(){
		if(Input::hasFile('fileupload')){
			$image 		= Input::file('fileupload');
			$filename 	= $image->getClientOriginalName();
			$image->move($this->path,$filename);
			Excel::load($this->path.$filename,function($reader){
				$result = $reader->get();
				// var_dump($reader->nama);
				foreach ($result as $key => $value) {
					$insert['receiver_name'] 	= $value->nama;
					$insert['receiver_email'] 	= $value->email;
					$insert['receiver_status'] 	= 1;
					$insert['created_at'] 		= date('Y-m-d H:i:s');
					$this->receiver->add($insert);
					// echo $value->nama.'~~~'.$value->email.'<br>';
				}
				
				// echo $reader->dump();
			});
			Session::flash('notip','<div class="alert alert-success">Data receiver berhasil diimport</div>');
			return Redirect::to('/blast/receiver/list');
		}else{
			Session::flash('notip','<div class="alert alert-danger">File Tidak Ada</div>');
			return Redirect::to('/blast/receiver/list');
		}
	}
}