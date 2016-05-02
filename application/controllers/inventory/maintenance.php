<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Maintenance extends CI_Controller {
	var $data = null;
	public function categories(){
        $this->load->helper('site/site_forms_helper');   
        $th = array('Code','Name','Date Added','Inactive');
        $data = $this->syter->spawn('categories');        
        $data['code'] = create_rtable('item_categories','cat_id','categories-tbl',$th,null,true,'grid');
        $data['load_js'] = 'inventory/maintenance';
        $data['use_js'] = 'categorylist';
        $data['page_no_padding'] = true;
        $this->load->view('page',$data);
	}
    public function get_categories($asJson=true){
        $post = array();
        $page = "";
        
        $select = 'item_categories.*';
        $join = array();
        $where = array();
        $order['cat_name'] = 'desc';
        $items = $this->site_model->get_tbl('item_categories',$where,$order,$join,true,$select);
        $json = array();
        if(count($items) > 0){
            
            foreach ($items as $res) {
                $json[$res->cat_id] = array(
                    "title"=>$res->code,   
                    "subtitle"=>$res->cat_name,   
                    "caption"=>sql2Date($res->create_date),
                    "inactive"=>($res->inactive == 0 ? 'No' : 'Yes')
                );
                $ids[] = $res->cat_id;
            }
        }
        if($asJson){
            echo json_encode(array('rows'=>$json,'page'=>"",'post'=>$post));
        }
        else{
            return array('rows'=>$json,'page'=>"",'post'=>$post);   
        }
    }



    public function contents(){
        $this->load->helper('site/site_forms_helper');   
        $th = array('Code','Category','Content');
        $data = $this->syter->spawn('contents');        
        $data['code'] = create_rtable('contents','id','contents-tbl',$th,null,false,'list');
        $data['load_js'] = 'inventory/maintenance';
        $data['use_js'] = 'contentlist';
        $data['page_no_padding'] = true;
        $this->load->view('page',$data);
    }
    public function get_contents($id=null,$asJson=true){
        $post = array();
        $page = "";
        $select = 'contents.*';
        $join = array();
        $where = array();
        $order['id'] = 'desc';
        $items = $this->site_model->get_tbl('contents',$where,$order,$join,true,$select);
        
        $json = array();
        if(count($items) > 0){
            // echo var_dump($items);
            foreach ($items as $res) {
                $json[$res->id] = array(
                    "title"=>$res->code,   
                    "subtitle"=>$res->category,   
                    "caption"=>$res->content
                );
                $ids[] = $res->id;
            }
        }
        if($asJson){
            echo json_encode(array('rows'=>$json,'page'=>"",'post'=>$post));
        }
        else{
            return array('rows'=>$json,'page'=>"",'post'=>$post);   
        }
    }

public function uom(){
        $this->load->helper('site/site_forms_helper');   
        $th = array('Code','Name','Inactive');
        $data = $this->syter->spawn('uom');        
        $data['code'] = create_rtable('uom','id','uom-tbl',$th,null,true,'grid');
        $data['load_js'] = 'inventory/maintenance';
        $data['use_js'] = 'uomlist';
        $data['page_no_padding'] = true;
        $this->load->view('page',$data);
    }
    public function get_uom($asJson=true){
        $post = array();
        $page = "";
        
        $select = 'uom.*';
        $join = array();
        $where = array();
        $order['name'] = 'desc';
        $items = $this->site_model->get_tbl('uom',$where,$order,$join,true,$select);
        $json = array();
        if(count($items) > 0){
            foreach ($items as $res) {
                $json[$res->id] = array(
                    "title"=>$res->code,   
                    "subtitle"=>$res->name,   
                    "inactive"=>($res->inactive == 0 ? 'No' : 'Yes')
                );
                $ids[] = $res->id;
            }
        }
        if($asJson){
            echo json_encode(array('rows'=>$json,'page'=>"",'post'=>$post));
        }
        else{
            return array('rows'=>$json,'page'=>"",'post'=>$post);   
        }
    }


}