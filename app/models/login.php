<?php
class login Extends Eloquent{
	protected $table = 'login';
	function get_username($username,$password){	
		return DB::table($this->table)->where('username',$username)->where('password',$password)->first();
	} 
}