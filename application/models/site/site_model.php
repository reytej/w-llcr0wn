<?php
class Site_model extends CI_Model{

	public function __construct()
	{
		parent::__construct();
	}
	function change_db($name){
		$this->db = $this->load->database($name, TRUE);
	}
	public function get_image($img_id=null,$img_ref_id=null,$img_tbl=null,$args=array(),$result=true){
		$this->db->select('*');
		$this->db->from('images');
		if (!is_null($img_id)){
			if (is_array($img_id))
				$this->db->where_in('images.img_id',$img_id);
			else
				$this->db->where('images.img_id',$img_id);
		}
		if (!is_null($img_ref_id)){
			if (is_array($img_id))
				$this->db->where_in('images.img_ref_id',$img_ref_id);
			else
				$this->db->where('images.img_ref_id',$img_ref_id);
		}
		if (!is_null($img_tbl)){
			if (is_array($img_tbl))
				$this->db->where_in('images.img_tbl',$img_tbl);
			else
				$this->db->where('images.img_tbl',$img_tbl);
		}
		if(!empty($args)){
			foreach ($args as $col => $val) {
				if(is_array($val)){
					if(!isset($val['use'])){
						$this->db->where_in($col,$val);
					}
					else{
						$func = $val['use'];
						if(isset($val['third']))
							$this->db->$func($col,$val['val'],$val['third']);
						else
							$this->db->$func($col,$val['val']);
					}
				}
				else
					$this->db->where($col,$val);
			}
		}

		$query = $this->db->get();
		if($result){
			return $query->result();
		}
		else{
			return $query;
		}
	}
	public function get_tbl($table=null,$args=array(),$order=array(),$joinTables=null,$result=true,$select='*',$group=null,$limit=null,$count_only=false){
		$this->db->select($select);
		$this->db->from($table);
		if (!is_null($joinTables) && is_array($joinTables)) {
			foreach ($joinTables as $k => $v) {
				if(is_array($v)){
					$this->db->join($k,$v['content'],(!empty($v['mode']) ? $v['mode'] : 'inner'));
				}
				else{
					$this->db->join($k,$v);
				}
			}
		}
		if(!empty($args)){
			foreach ($args as $col => $val) {
				if(is_array($val)){
					if(!isset($val['use'])){
						$this->db->where_in($col,$val);
					}
					else{
						$func = $val['use'];
						if(isset($val['third']))
							$this->db->$func($col,$val['val'],$val['third']);
						else
							$this->db->$func($col,$val['val']);
					}
				}
				else
					$this->db->where($col,$val);
			}
		}
		if($group != null){
			$this->db->group_by($group);
		}
		if($limit != null){
			if(is_array($limit))
				$this->db->limit($limit[0],$limit[1]);
			else
				$this->db->limit($limit);
		}
		if(count($order) > 0){
			foreach ($order as $col => $val) {
				$this->db->order_by($col,$val);
			}
		}
		if($count_only){
			return $this->db->count_all_results();
		}
		else{
			$query = $this->db->get();
			if($result){
				return $query->result();
			}
			else{
				return $query;
			}
		}
	}
	public function get_spcfc_row($table,$tbl_key,$val,$args=array(),$order=array(),$joinTables=null,$result=true,$select='*',$group=null,$limit=null,$count_only=false){
		$this->db->select($select);
		$this->db->from($table);
		if (!is_null($joinTables) && is_array($joinTables)) {
			foreach ($joinTables as $k => $v) {
				if(is_array($v))
					$this->db->join($k,$v['content'],(!empty($v['mode']) ? $v['mode'] : 'inner'));
				else{
					$this->db->join($k,$v);
				}
			}
		}
		$this->db->where_in($tbl_key,$val);
		if(!empty($args)){
			foreach ($args as $col => $val) {
				if(is_array($val)){
					if(!isset($val['use'])){
						$this->db->where_in($col,$val);
					}
					else{
						$func = $val['use'];
						if(isset($val['third']))
							$this->db->$func($col,$val['val'],$val['third']);
						else
							$this->db->$func($col,$val['val']);
					}
				}
				else
					$this->db->where($col,$val);
			}
		}
		if($group != null){
			$this->db->group_by($group);
		}
		if($limit != null){
			if(is_array($limit))
				$this->db->limit($limit[0],$limit[1]);
			else
				$this->db->limit($limit);
		}
		if(count($order) > 0){
			foreach ($order as $col => $val) {
				$this->db->order_by($col,$val);
			}
		}
		if($count_only){
			return $this->db->count_all_results();
		}
		else{
			$query = $this->db->get();
			$res = $query->result();
			if($result){
				if($res)
					return $res[0];
				else
					return false;
			}
			else{
				return $query;
			}
		}
	}
	public function get_tbl_cols($tbl=null){
		$cols = null;
		if($tbl != null){
			$cols = $this->db->list_fields($tbl);
		}
		return $cols;
	}
	public function add_tbl_batch($table_name,$items){
		$this->db->insert_batch($table_name,$items);
		return $this->db->insert_id();
	}
	public function add_tbl($table_name,$items,$set=array()){
		if(!empty($set)){
			foreach ($set as $key => $val) {
				$this->db->set($key, $val, FALSE);
			}
		}
		$this->db->insert($table_name,$items);
		return $this->db->insert_id();
	}
	public function update_tbl($table_name,$table_key,$items,$id){
		$this->db->where($table_key,$id);
		$this->db->update($table_name,$items);
		return $this->db->last_query();
	}
	public function delete_tbl_batch($table_name=null,$args=null){
		if(!empty($args)){
			foreach ($args as $col => $val) {
				if(is_array($val)){
					if(!isset($val['use'])){
						$this->db->where_in($col,$val);
					}
					else{
						$func = $val['use'];
						$this->db->$func($col,$val['val']);
					}
				}
				else
					$this->db->where($col,$val);
			}
		}
		$this->db->delete($table_name);
	}
	public function delete_tbl($table_name=null,$args=null){
		if(!empty($args)){
			foreach ($args as $col => $val) {
				if(is_array($val)){
					if(!isset($val['use'])){
						$this->db->where_in($col,$val);
					}
					else{
						$func = $val['use'];
						$this->db->$func($col,$val['val']);
					}
				}
				else
					$this->db->where($col,$val);
			}
		}
		$this->db->delete($table_name);
	}
	public function get_user_details($id=null,$username=null,$password=null,$pin=null){
		$this->db->trans_start();
			$this->db->select('users.*, user_roles.role as user_role,user_roles.access as access, user_roles.id as user_role_id');
			$this->db->from('users');
			$this->db->join('user_roles','users.role = user_roles.id','LEFT');
			if($id != null){
				$this->db->where('users.id',$id);
			}
			if($pin != null){
				$this->db->where('users.pin',$pin);
			}
			if($username != null && $password != null){
				$this->db->where('users.username',$username);
				$this->db->where('users.password',md5($password));
			}
			$this->db->where('users.inactive',0);
			$query = $this->db->get();
			$result = $query->result();
		$this->db->trans_complete();


		if(count($result) > 0){
			if(count($result) == 1){
				return $result[0];
			}
			else{
				return $result;
			}
		}
		else{
			return array();
		}
	}

	public function get_db_now($format='php',$dateOnly=false){
		if($dateOnly)
			$query = $this->db->query("SELECT DATE(now()) as today");
		else
			$query = $this->db->query("SELECT now() as today");
		$result = $query->result();
		foreach($result as $val){
			$now = $val->today;
		}
		if($format=='php')
			return date('m/d/Y H:i:s',strtotime($now));
		else
			return $now;
	}

	public function update_language($items,$id){
		$this->db->trans_start();
		$this->db->where('id',$id);
		$this->db->update('users',$items);
		$this->db->trans_complete();
		return $this->db->last_query();
	}

	public function get_company_profile(){
		$this->db->trans_start();
			$this->db->select('company_profile.*');
			$this->db->from('company_profile');
			$query = $this->db->get();
			$result = $query->result();
		$this->db->trans_complete();
		return $result[0];
	}

	public function get_custom_val($tbl,$col,$where=null,$val=null,$returnAll=false){
		if(is_array($col)){
			$colTxt = "";
			foreach ($col as $col_txt) {
				$colTxt .= $col_txt.",";
			}
			$colTxt = substr($colTxt,0,-1);
			$this->db->select($tbl.".".$colTxt);
		}
		else{
			$this->db->select($tbl.".".$col);
		}
		$this->db->from($tbl);

		if($where != '' || $val != '')
			$this->db->where($tbl.".".$where,$val);
		
		$query = $this->db->get();
		$result = $query->result();
		if($returnAll){
			return $result;
		}
		else{
			if(count($result) > 0){
				if(count($result) == 1)
					return $result[0];
				else
					return $result;
			}
			else
				return "";
		}
	}

	public function update_profile($user,$id){
		$this->db->where('id', $id);
		$this->db->update('users', $user);
		return $this->db->last_query();
	}
    function wallpaper_get()
    {
        $query = $this->db->get('wallpaper');
        $query_result = $query->result();
        return $query_result;
    }
    function carpets_get()
    {
        $query = $this->db->get('carpets');
        $query_result = $query->result();
        return $query_result;
    }
    function window_covering_get()
    {
        $query = $this->db->get('window_coverings');
        $query_result = $query->result();
        return $query_result;
    }
    function pcv_strips_get()
    {
        $query = $this->db->get('pcv_strips');
        $query_result = $query->result();
        return $query_result;
    }
    function swing_door_get()
    {
        $query = $this->db->get('swing_door');
        $query_result = $query->result();
        return $query_result;
    }
    function hi_speed_door_get()
    {
        $query = $this->db->get('hi_speed_door');
        $query_result = $query->result();
        return $query_result;
    }
    function anti_static_panel_get()
    {
        $query = $this->db->get('anti_static_panel');
        $query_result = $query->result();
        return $query_result;
    }
    function categories_get()
    {
		$query = $this->db->get('item_categories');
		$query_result = $query->result();
		return $query_result;
    }
    function content_get()
    {
		$query = $this->db->get('contents');
		$query_result = $query->result();
		return $query_result;
    }

    function show_edit_contents($id=0)
    {
      $results = $this->db->get_where('contents',array('id'=>$id));
      return $results->result();
    }

    function edit_contents_record($id,$contents){
        $this->db->where('id' , $id);
        $this->db->update('contents' , $contents);
    }

    function edit_contents_record2($id,$contents){
        $this->db->where('id' , $id);
        $this->db->update('contents' , $contents);
    }
    function show_edit_categories($id=0)
    {
      $results = $this->db->get_where('item_categories',array('cat_id'=>$id));
      return $results->result();
    }

    function edit_categories_record($id,$contents){
        $this->db->where('cat_id' , $id);
        $this->db->update('item_categories' , $contents);
    }
    function show_edit_wallpaper($id=0)
    {
      $results = $this->db->get_where('wallpaper',array('id'=>$id));
      return $results->result();
    }

    function edit_wallpaper_record($id,$contents){
        $this->db->where('id' , $id);
        $this->db->update('wallpaper' , $contents);
    }
    function show_edit_carpets($id=0)
    {
      $results = $this->db->get_where('carpets',array('id'=>$id));
      return $results->result();
    }
    function edit_carpets_record($id,$contents){
        $this->db->where('id' , $id);
        $this->db->update('carpets' , $contents);
    }
    function show_edit_window_coverings($id=0)
    {
      $results = $this->db->get_where('window_coverings',array('id'=>$id));
      return $results->result();
    }
    function edit_window_coverings_record($id,$contents){
        $this->db->where('id' , $id);
        $this->db->update('window_coverings' , $contents);
    }
    function show_edit_pcv_strips($id=0)
    {
      $results = $this->db->get_where('pcv_strips',array('id'=>$id));
      return $results->result();
    }
    function edit_pcv_strips_record($id,$contents){
        $this->db->where('id' , $id);
        $this->db->update('pcv_strips' , $contents);
    }
    function show_edit_swing_door($id=0)
    {
      $results = $this->db->get_where('swing_door',array('id'=>$id));
      return $results->result();
    }
    function edit_swing_door_record($id,$contents){
        $this->db->where('id' , $id);
        $this->db->update('swing_door' , $contents);
    }
    function show_edit_hi_speed_door($id=0)
    {
      $results = $this->db->get_where('hi_speed_door',array('id'=>$id));
      return $results->result();
    }
    function edit_hi_speed_door_record($id,$contents){
        $this->db->where('id' , $id);
        $this->db->update('hi_speed_door' , $contents);
    }
    function show_edit_anti_static_panel($id=0)
    {
      $results = $this->db->get_where('anti_static_panel',array('id'=>$id));
      return $results->result();
    }
    function edit_anti_static_panel_record($id,$contents){
        $this->db->where('id' , $id);
        $this->db->update('anti_static_panel' , $contents);
    }
}
?>