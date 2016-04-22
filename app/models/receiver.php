<?php
class receiver Extends Eloquent{
	protected $table = "receiver";
	protected $primaryKey = "id_receiver";
	function get_all(){

		return DB::table($this->table)->where('receiver_status',1)->get();
	}
	function like_email($email){
		return DB::table($this->table)
				->where('receiver_email','like','%'.$email.'%')
				->get();
	}
	function get_page(){
		return receiver::where('receiver_status',1)->orderBy($this->primaryKey,1)->paginate(20);
	}
	function add($data){
		return receiver::insertGetId($data);
	}
	function get_email($email){
		return receiver::where('receiver_email',$email)->first();
	}
	function get_id($id){
		return receiver::find($id);
	}
	function edit($id,$data){
		return receiver::where($this->primaryKey,$id)->update($data);
	}
	function del($id){
		return receiver::where($this->primaryKey,$id)->delete();
	}
	function get_region(){
		return receiver::select('receiver_region')->distinct()->orderBy('receiver_region','ASC')->get();
	}
	function get_byregion($region){
		return receiver::where('receiver_region',$region)->get();
	}
	function get_position(){
		return receiver::select('receiver_position')->distinct()->orderBy('receiver_position','ASC')->get();
	}
	function get_country(){
		return receiver::select('receiver_country')->distinct()->orderBy('receiver_country','ASC')->get();
	}
	function get_lob(){
		return receiver::select('receiver_business')->distinct()->orderBy('receiver_business','ASC')->get();
	}
	function get_interest(){
		return receiver::select('receiver_interest_product')->distinct()->orderBy('receiver_interest_product','ASC')->get();
	}
	function get_advance_filter($position,$region,$country,$lob,$interest_product ,$purpose ,$source,$email){
		$sqlposition 	= "`receiver_position` like '%' AND ";
		$sqlregion		= "`receiver_region` like '%' AND ";
		$sqlinterest	= "`receiver_interest_product` like '%' AND";
		$sqlcountry		= "`receiver_country` like '%' AND ";
		$sqllob			= "`receiver_business` like '%' AND "; 
		$sqlpurpose		= "`receiver_purpose` like '%' AND ";
		$sqlsource		= "`receiver_source_information` like '%' AND ";
		$sqlemail		= "`receiver_email` like '%'";
		$cposition 		= count($position);
		// var_dump($position[0]);die;
		if($position[0]!=""){
			$sqlposition 	= "(";
			for ($pstn=0; $pstn < $cposition ; $pstn++) { 
				if(isset($position[$pstn+1])){
					$sqlposition 	.= " `receiver_position` = '".$position[$pstn]."' OR ";		
				}else{
					$sqlposition 	.= " `receiver_position` = '".$position[$pstn]."'";
				}
			}
			$sqlposition 	.= ") AND ";
		}
		

		$cregion 		= count($region);
		// var_dump($region);die;
		// $sqlregion 		= "";
		if($region[0]!=""){
			$sqlregion 		= "(";
			for ($rgn = 0; $rgn < $cregion ; $rgn++) { 
				if(isset($region[$rgn+1])){
					$sqlregion 	.= "`receiver_region` = '".$region[$rgn]."' OR ";		
				}else{
					$sqlregion 	.= "`receiver_region` = '".$region[$rgn]."'";
				}
			}
			$sqlregion 		.= ") AND ";	
		}
		
		if($country[0]!=""){
			$ccountry 		= count($country);
			$sqlcountry 	= "(";
			for ($ctn=0; $ctn < $ccountry; $ctn++) { 
				if(isset($country[$ctn+1])){
					$sqlcountry 	.= "`receiver_country` ='".$country[$ctn]."' OR ";		
				}else{
					$sqlcountry 	.= "`receiver_country` ='".$country[$ctn]."'";
				}
			}
			$sqlcountry 	.= ") AND ";	
		}
		
		if($lob[0]!=""){
			$clob 	 		= count($lob);
			$sqllob 		= "(";
			for ($cacahlob=0; $cacahlob < $clob; $cacahlob++) { 
				if(isset($country[$cacahlob+1])){
					$sqllob 	.= "`receiver_nature_business` like '%".$lob[$cacahlob]."%' OR ";		
				}else{
					$sqllob 	.= "`receiver_nature_business` like '%".$lob[$cacahlob]."%'";
				}
			}
			$sqllob 		.= ") AND ";	
		}
		

		
		if($interest_product[0]!=""){
			$cinterest 		= count($interest_product);
			$sqlinterest 	= "(";
			for ($intr=0; $intr < $cinterest; $intr++) { 
				if(isset($interest_product[$intr+1])){
					$sqlinterest 	.= "`receiver_interest_product` like '%".$interest_product[$intr]."%' OR ";		
				}else{
					$sqlinterest 	.= "`receiver_interest_product` like '%".$interest_product[$intr]."%' ";
				}
			}
			$sqlinterest 	.= ") AND";	
		}
		

		
		if($purpose != ""){
			if(strpos($purpose, ",") !== FALSE){
				$exppurpose 	= explode(',',$purpose);
				$cpurpose 		= count($exppurpose);
				$sqlpurpose 	= "(";
				for ($pps=0; $pps < $cpurpose; $pps++) { 
					if(isset($purpose[$pps+1])){
						$sqlpurpose 	.= "`receiver_purpose` like '%".$exppurpose[$pps]."%' OR ";		
					}else{
						$sqlpurpose 	.= "`receiver_purpose` like '%".$exppurpose[$pps]."%'";
					}
				}
				$sqlpurpose 	.= ") AND ";	
			}else{
				$sqlpurpose 	= "(`receiver_purpose` like '%".$purpose."%' ) AND ";
			}
				
		}
		

		
		if($source !=  ""){
			$expsource 		= explode(',', $source);
			$csource 		= count($expsource);
			$sqlsource 		= "(";
			for ($scr=0; $scr < $csource; $scr++) { 
				if(isset($expsource[$scr+1])){
					$sqlsource 	.= "`receiver_source_information` like '%".$expsource[$scr]."%' OR ";		
				}else{
					$sqlsource 	.= "`receiver_source_information` like '%".$expsource[$scr]."%'";
				}
			}
			$sqlsource 		.= ") AND ";	
		}
		

		
		if($email != ""){
			$expemail 		= explode(',', $email);
			$cemail 		= count($expemail);
			$sqlemail 		= "(";
			for ($ml=0; $ml < $cemail; $ml++) { 
				if(isset($expemail[$ml+1])){
					$sqlemail 	.= "`receiver_email` like '%".$expemail[$ml]."%' OR ";		
				}else{
					$sqlemail 	.= "`receiver_email` like '%".$expemail[$ml]."%'";
				}
			}
			$sqlemail 		.= ")";	
		}
		

		$query = "SELECT * FROM receiver WHERE ".$sqlposition.$sqlregion.$sqlinterest.$sqlcountry.$sqllob.$sqlpurpose.$sqlsource.$sqlemail." ORDER BY receiver_name ASC";
		echo $query;
		// return DB::select($query);
		// return DB::statement($query);
	}


}