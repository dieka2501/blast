<?php
class template extends Eloquent{
	protected $table = 'template';
	protected $primaryKey = 'id_template';
	function get_all(){
		return template::orderBy('id_template','DESC')->get();
	}
	function get_id($id){
		return template::find($id);
	}
	function get_last(){
		return template::orderBy('id_template','DESC')->first();
	}
}