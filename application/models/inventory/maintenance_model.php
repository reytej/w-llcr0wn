<?php
class Maintenance_model extends CI_Model{
	public function __construct(){
		parent::__construct();
	}
	public function add_contents($data=array()){
		$this->db->insert('contents',$data);
		$id = $this->db->insert_id();
		return $id;
	}
}
?>