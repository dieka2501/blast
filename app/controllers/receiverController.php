<?php
class receiverController Extends BaseController{
	protected $layout = "template";
	function __construct(){
		$this->receiver 	= new receiver;
		$this->mailblast 	= new mailblast;
		$this->detail 		= new detailMail;
		$this->rm 			= new receiverMail;
		$this->kategori 	= new kategori;
	}

	function index(){
		$input_position 		    = Session::get('position');
		$input_region               = Session::get('region');
		$input_country              = Session::get('country');
		$input_lob 					= Session::get('lob');
		$input_interest 			= Session::get('interest');
		$purpose 					= Session::get('purpose');
		$source 					= Session::get('source');
		$email 						= Session::get('email');
 		$getalltemplate 	= $this->mailblast->get_all_detail();
		$arr_mail[0] 		= "-- Select Name Email -- ";
		foreach ($getalltemplate as $mailtemplate) {
			$arr_mail[$mailtemplate->id] = $mailtemplate->mail_name;
		}
		$arr_mail_name 			= $arr_mail;
		$get_region 			= $this->receiver->get_region();
		$getjabatan             = $this->receiver->get_position();
        $getregion              = $this->receiver->get_region();
        $getcountry             = $this->receiver->get_country();
        $getlob                 = $this->receiver->get_lob();
        // $getinterest            = $this->kategori->get_all();
        $getinterest 			= $this->receiver->get_interest();
        // var_dump($getjabatan);
		$arr_region 			= [''=>'--Choose Region--'];
		if(count($get_region) > 0){
			foreach ($get_region as $regions) {
				if($regions->receiver_region != "" ){
					$arr_region[$regions->receiver_region] = ucfirst($regions->receiver_region);	
				}
				
			}	
		}
		// var_dump($arr_region);
		$arr_position                    = [''=>'--Choose Position--'];
        foreach ($getjabatan as $jabatans) {
            if($jabatans->receiver_position != ""){
                $arr_position[strtolower($jabatans->receiver_position)] = strtoupper($jabatans->receiver_position);
            }
            
        }
 		// var_dump($arr_position);
        $arr_country                    = [''=>'--Choose Country--'];
        foreach ($getcountry as $countrys) {
            if($countrys->receiver_country != ""){
                $arr_country[strtolower($countrys->receiver_country)] = strtoupper($countrys->receiver_country);
            }
            
        }
        $arr_lob                    = [''=>'--Choose Business--'];
        foreach ($getlob as $lobs) {
            if($lobs->receiver_business != ""){
                if(strpos($lobs->receiver_business, ",") !== FALSE){
                    $explodebidang = explode(',', $lobs->receiver_business);
                    foreach ($explodebidang as $expbidang) {
                        if(array_search($expbidang, $arr_lob) === false ){
                            $arr_lob[strtolower($expbidang)] = strtoupper($expbidang);    
                        }
                    }
                }else{
                    $arr_lob[strtolower($lobs->receiver_business)] = strtoupper($lobs->receiver_business);    
                }
                
            }
            
        }
        $arr_interest                    = [''=>'--Choose Interest Product--'];
        foreach ($getinterest as $interests) {
            if($interests->receiver_interest_product != ""){
                if(strpos($interests->receiver_interest_product, ",") !== FALSE){
                    $explodeinterest = explode(',', $interests->receiver_interest_product);
                    foreach ($explodeinterest as $expinterest) {
                        if(array_search($expinterest, $arr_interest) === false ){
                            $arr_interest[strtolower($expinterest)] = strtoupper($expinterest);    
                        }
                    }
                }else{
                    $arr_interest[strtolower($interests->receiver_interest_product)] = strtoupper($interests->receiver_interest_product);    
                }
                
            }
            
        }
        // $arr_interest                    = [''=>'--Choose Interest Product--'];
        // foreach ($getinterest as $interests) {
        //     $arr_interest[strtolower($interests->nama_kategori)] = strtoupper($interests->nama_kategori);    
        // }

		if(Input::has('id')){
			$id 					= Input::get('id');
			$get_rm 				= $this->rm->get_idmail($id);
			$gettemplateid 			= $this->mailblast->join_template($id);
			$getdetail 				= $this->detail->get_idmail($id);
			$template_name			= $gettemplateid->template_name;
			$template_file 			= $gettemplateid->file;
			$template_id 			= $gettemplateid->template_id;		
			$prev 					= [];
			if(count($getdetail) > 0){
				foreach ($getdetail as $valuemail) {
					$prev[$valuemail->key] = $valuemail->value;
				}	
			}
			
			
			$id_mail_name 			= $id;
			$rm_list 				= [];
			if(count($get_rm) > 0){
				foreach ($get_rm as $rms) {
					$rm_list[]	= $rms->receiver_email;
				}	
			}
			
			$receiver_list 			= implode(',', $rm_list);	
			 $view['prev'] 			= View::make('mail/'.$template_file.'/index',$prev);
		}else{
			// $id 					= Session::get('id');
			// $gettemplateid 			= [];
			$template_id  			= Session::get('template_id');
			// // $arr_mail_name 			= [];
			$id_mail_name 			= Session::get('id_mail_name');
			$receiver_list 			= Session::get('receiver_list');
			
			$template_name  			= Session::get('template_name');
			$template_file 				= Session::get('template_file');
			$view['prev'] 				= "";
		}

		$view['arr_region'] 				 = $arr_region;
		$view['region'] 					 = $input_region;
		$view['arr_mail_name'] 				 = $arr_mail_name;
		$view['id_mail_name']	 			 = $id_mail_name;
		$view['template_name']	 			 = $template_name;
		$view['template_id']	 			 = $template_id;
		$view['template_file']	 			 = $template_file;
		$view['receiver_list']	 			 = $receiver_list;
		$view['arr_position']                = $arr_position;
        $view['position']                    = $input_position;
        $view['arr_region']                  = $arr_region;
        $view['region']                      = $input_region;
        $view['arr_country']                 = $arr_country;
        $view['country']                     = $input_country; 
        $view['arr_lob']                     = $arr_lob;
        $view['lob']                         = $input_lob; 
        $view['arr_interest_product']        = $arr_interest;
        $view['interest_product']            = $input_interest; 
        $view['purpose']                     = $purpose;
        $view['source']                      = $source; 
        $view['email']                       = $email; 
		
		$view['subject_mail']	 				= Session::get('subject_mail');
		// $view['prev'] 				= View::make('mail/template_ara/index',$prev);
		$this->layout->content = View::make('blast_email/receiver_new',$view);
	}
	function autocomplete(){
		$term 			= Input::get('term');
		$getdata 		= $this->receiver->like_email($term);
		$arr_data 		= [];
		foreach ($getdata as $datas) {
			$arr_data[]	= ['id'=>$datas->id_receiver,'label'=>$datas->receiver_email." <".$datas->receiver_name.">",'value'=>$datas->receiver_email];
		}
		return Response::json($arr_data);
	}
	function json_mail_template(){
		$ids 		= Input::get('ids');
		$getdata 	= $this->mailblast->join_template($ids);
		return Response::json($getdata);
	}
}