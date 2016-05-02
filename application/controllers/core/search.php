<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Search extends CI_Controller {
    public function __construct(){
        parent::__construct();        
        $this->load->helper('site/pagination_helper');
    }
    public function list($table){
        $pagi = null;
        $args = array();
        $post = array();
        $total_rows = 30;

        if($this->input->post('pagi'))
            $pagi = $this->input->post('pagi');
        
        if(count($this->input->post()) > 0){
            $post = $this->input->post();
        }

        // if($this->input->post('menu_name')){
        //     $lk  =$this->input->post('menu_name');
        //     $args["(menus.menu_name like '%".$lk."%' OR menus.menu_short_desc like '%".$lk."%')"] = array('use'=>'where','val'=>"",'third'=>false);
        // }
        // if($this->input->post('menu_cat_id')){
        //     $args['menus.menu_cat_id'] = array('use'=>'where','val'=>$this->input->post('menu_cat_id'));
        // }
        // if($this->input->post('inactive')){
        //     $args['menus.inactive'] = array('use'=>'where','val'=>$this->input->post('inactive'));
        // }
        // $join["menu_categories"] = array('content'=>"menus.menu_cat_id = menu_categories.menu_cat_id");
        
        $join = array();
        $select = "";

        $count = $this->site_model->get_tbl($table,$args,array(),$join,true,$select,null,null,true);
        $page = paginate('search/list/'.$table,$count,$total_rows,$pagi);
        $items = $this->site_model->get_tbl($table,$args,array(),$join,true,$select,null,$page['limit']);
        
        $json = array();
        if(count($items) > 0){
            $ids = array();
            foreach ($items as $res) {
                $link = $this->make->A(fa('fa-edit fa-lg'),base_url().'menu/form/'.$res->menu_id,array('return'=>'true'));
                $json[$res->menu_id] = array(
                    "id"=>$res->menu_id,   
                    "title"=>"[".$res->menu_code."] ".ucwords(strtolower($res->menu_name)),   
                    "desc"=>ucwords(strtolower($res->menu_short_desc)),   
                    "subtitle"=>ucwords(strtolower($res->menu_cat_name)),   
                    "caption"=>"PHP ".num($res->cost),
                    "date_reg"=>sql2Date($res->reg_date),
                    "inactive"=>($res->inactive == 0 ? 'No' : 'Yes'),
                    "link"=>$link
                );
            }
            // $images = $this->site_model->get_image(null,null,'menus',array('images.img_ref_id'=>$ids)); 
            // foreach ($images as $res) {
            //     if(isset($json[$res->img_ref_id])){
            //         $js = $json[$res->img_ref_id];
            //         $js['image'] = $res->img_path;
            //         $json[$res->img_ref_id] = $js;
            //     }
            // }
        }
        echo json_encode(array('rows'=>$json,'page'=>$page['code'],'post'=>$post));
    }
}