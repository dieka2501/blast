<?php
class receiverMail Extends Eloquent{
	protected $table = "receiver_mail";
	function get_idmail($id){
		return DB::table($this->table)
				->join('receiver','receiver_mail.receiver_id','=','receiver.id_receiver')
				->join('mail','receiver_mail.mail_id','=','mail.id')
				->where('receiver.receiver_status','1')
				->where('mail.id',$id)->get();
	}
}