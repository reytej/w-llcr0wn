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
	public function add_category($data=array()){
		$this->db->set('create_date', 'NOW()', FALSE);
		$this->db->insert('item_categories',$data);
		$id = $this->db->insert_id();
		return $id;
	}
}
?>