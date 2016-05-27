<?php

class Users_model extends CI_Model {

    function __construct()
    {
        parent::__construct();
    }
    
    function interior_get()
    {
        $query = $this->db->get('gallery_interior');
        $query_result = $query->result();
        return $query_result;
    }
 
}
?>