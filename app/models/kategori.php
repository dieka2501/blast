<?php
class kategori Extends Eloquent{
	protected $table 		= "kategori";
	protected $primaryKey 	= "id";
	function get_all(){
		return kategori::orderBy('nama_kategori')->get();
	}
}