<?php
class mailblast Extends Eloquent{
	protected $table 		= 'mail';
	protected $primaryKey 	= "id";
	function add($data){
		return DB::table($this->table)->insertGetId($data);
	}
	function get_all(){
		return mailblast::all();
	}
	function join_template($id){
		return DB::table($this->table)
				->join('template','mail.template_id','=','template.id_template')
				->where('mail.id',$id)
				->first();
	}
}