<?php
class excelController Extends BaseController{
	function __construct(){
		date_default_timezone_set('Asia/Jakarta');
		$this->path 		= base_path().'/aset/xls/';
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
					$getemail = $this->receiver->get_email($value->email);
					if(count($getemail) == 0){
						if($value->email != NULL ){
							$insert['receiver_name'] 				= ($value->nama == NULL)?"":$value->nama;
							$insert['receiver_email'] 				= ($value->email == NULL)?"":$value->email;
							$insert['receiver_region'] 				= ($value->kota == NULL)?"":$value->kota;
							$insert['receiver_company'] 			= ($value->perusahaan == NULL)?"":$value->perusahaan;
                            $insert['receiver_position'] 			= ($value->jabatan == NULL)?"":$value->jabatan;
                            $insert['receiver_purpose'] 			= ($value->tujuan == NULL)?"":$value->tujuan ;
                            $insert['receiver_nature_business'] 	= ($value->nature_business == NULL)?"":$value->nature_business;
                            $insert['receiver_country']	 			= ($value->negara == NULL)?"":$value->negara;
                            $insert['receiver_phone'] 				= ($value->telepon == NULL)?"":$value->telepon;
                            $insert['receiver_address'] 			= ($value->alamat == NULL)?"":$value->alamat;
                            $insert['receiver_business'] 			= ($value->bidang == NULL)?"":$value->bidang;
                            $insert['receiver_interest_product'] 	= ($value->interest_product == NULL)?"":$value->interest_product;
                            $insert['receiver_source_information'] 	= ($value->source_information == NULL)?"":$value->source_information;
							$insert['receiver_status'] 				= 1;
							$insert['created_at'] 					= date('Y-m-d H:i:s');
							$this->receiver->add($insert);		
						}
						
					}
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