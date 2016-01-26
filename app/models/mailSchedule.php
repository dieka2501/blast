<?php
Class mailSchedule Extends Eloquent{
	protected $table 		= 'mail_schedule';
	protected $primaryKey 	= 'id_schedule';
	function add($data){
		return mailSchedule::insertGetId($data);
	}
}