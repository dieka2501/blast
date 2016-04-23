<?php
class curl extends Eloquent{
	public function __construct(){}

	public function post($url, $data_string){

		$ch = curl_init($url);                                                                      
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST"); 
		curl_setopt($ch, CURLOPT_FAILONERROR, true);                                                                    
		curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);                                                                  
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); 
		curl_setopt($ch, CURLOPT_HTTPHEADER, array(                                                                          
		    'Content-Type: application/json')                                                                       
		);                                                                                                                   
		 
		$result = curl_exec($ch);
		curl_close($ch);
		return $result;
	}
}