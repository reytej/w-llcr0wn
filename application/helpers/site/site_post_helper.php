<?php
function init_post($excludes=null) { 
    $CI =& get_instance();
    $items = array();
    $ex = array();
    if($excludes != null){
        if(is_array($excludes)){
            $ex = $excludes;
        }
        else{
            $ex[] = $excludes;
        }
    }
    if($CI->input->post()){
        foreach ($CI->input->post() as $name => $val) {
            if(!in_array($name,$ex))
                $items[$name] = $val;
        }
    }
    return $items;
}
function get_post($name){
    $CI =& get_instance();
    return $CI->input->post($name);
}
function init_creator($items) {
     $CI =& get_instance();
     $date = $CI->site_model->get_db_now();
     $user = $CI->session->userdata('user');
     $items['create_date'] = date('Y-m-d H:i:s', strtotime($date));
     $items['creator'] = $user['id'];
     return $items;
}
function init_get($excludes=null) { 
    $CI =& get_instance();
    $items = array();
    $ex = array();
    if($excludes != null){
        if(is_array($excludes)){
            $ex = $excludes;
        }
        else{
            $ex[] = $excludes;
        }
    }
    if($CI->input->get()){
        foreach ($CI->input->get() as $name => $val) {
            if(!in_array($name,$ex))
                $items[$name] = $val;
        }
    }
    return $items;
}
?>