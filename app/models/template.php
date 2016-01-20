<?php
class template extends Eloquent{
	protected $table = 'template';
	protected $primaryKey = 'id_template';
	function get_all(){
		return template::all();
	}
	function get_id($id){
		return template::find($id);
	}
}