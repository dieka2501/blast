<?php
class detailMail Extends Eloquent{
	protected $table 		= 'mail_detail';
	protected $primaryKey 	= "id_mail_detail";
	function add($data){
		return detailMail::insertGetId($data);
	}
	function get_idmail($id){
		return detailMail::where('mail_id',$id)->get();
	}
}