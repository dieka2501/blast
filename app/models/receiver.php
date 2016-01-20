<?php
class receiver Extends Eloquent{
	protected $table = "receiver";
	function get_all(){

		return DB::table($this->table)->where('receiver_status',1)->get();
	}
	function like_email($email){
		return DB::table($this->table)
				->where('receiver_email','like','%'.$email.'%')
				->get();
	}
}