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
}