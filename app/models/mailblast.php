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
	function get_all_detail(){
		return mailblast::join('mail_detail',$this->table.'.id','=','mail_detail.mail_id')
						->orderBy($this->table.'.mail_name','ASC')->get();
	}
	function join_template($id){
		return DB::table($this->table)
				->join('template','mail.template_id','=','template.id_template')
				->where('mail.id',$id)
				->first();
	}
	function get_ten(){
		return mailblast::orderBy('id','DESC')->take(5)->get();
	}
}