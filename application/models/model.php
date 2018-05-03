<?php
/**
* 
*/
class model extends CI_Model{
	function gets(){
	}
	function get(){}
	public function add($data){
		$this->db->insert("user",$data);
	}
	function edit(){}
	function del(){}
}
	
?>