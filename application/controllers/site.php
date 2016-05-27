<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Site extends CI_Controller {
	public function index(){
		$data = $this->syter->spawn('dashboard');
		$data['code'] = "";
		$this->load->view('page',$data);
		
	}
	public function login(){
		$this->load->helper('site/login_helper');
		$data = $this->syter->spawn(null,false);
		$data['code'] = makeLoginBox();
		$data['add_js'] = 'js/login.js';
		$data['load_js'] = 'site/login';
		$data['use_js'] = 'loginJs';
		$this->load->view('login',$data);
		
	}
	public function go_login(){
		$this->load->model('site/site_model');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$pin = $this->input->post('pin');
		$pin_id = $this->input->post('pin_id');
		$bra = $this->input->post('branch');
		$user = $this->site_model->get_user_details($pin_id,$username,$password,$pin);
		$error_msg = null;
		$path = null;
		$send_redirect = null;

		if(!isset($user->id)){
			$error_msg = "Error! Wrong login!";
		}
		else{
			$img = base_url().'img/user_default.png';
			$resultIMG = $this->site_model->get_image(null,$user->id,'users');
	        if(count($resultIMG) > 0){
	            $img = base_url().$resultIMG[0]->img_path;
	        }
			$session_details['user'] = array(
				"id"=>$user->id,
				"username"=>$user->username,
				"fname"=>$user->fname,
				"lname"=>$user->lname,
				"mname"=>$user->mname,
				"suffix"=>$user->suffix,
				"full_name"=>$user->fname." ".$user->mname." ".$user->lname." ".$user->suffix,
				"role_id"=>$user->user_role_id,
				"role"=>$user->user_role,
				"access"=>$user->access,
				"img"=>$img,
			);
			$this->session->set_userdata($session_details);
			$this->logs_model->add_logs('login',$user->id,$user->fname." ".$user->mname." ".$user->lname." ".$user->suffix." Logged In.",null);
		}
		echo json_encode(array('error_msg'=>$error_msg,'redirect_address'=>$send_redirect));
	}
	public function go_logout(){
		$user = $this->session->userdata('user');
		$this->logs_model->add_logs('logout',$user['id'],$user['full_name']." Logged Out.",null);
		$this->session->sess_destroy();
		redirect(base_url()."login",'refresh');
	}
	public function site_alerts(){
		$site_alerts = array();
		$alerts = array();
		if($this->session->userdata('site_alerts')){
			$site_alerts = $this->session->userdata('site_alerts');
		}

		foreach ($site_alerts as $alert) {
			$alerts[] = $alert;
		}
		echo json_encode(array("alerts"=>$alerts));
	}
	public function clear_site_alerts(){
		if($this->session->userdata('site_alerts'))
			$this->session->unset_userdata('site_alerts');
	}
	public function deactivate_alert(){
		echo "<h4><strong>Are you sure you want to deactivate this?</strong></h4>";
	}
	public function activate_alert(){
		echo "<h4><strong>Are you sure you want to Activate this?</strong></h4>";
	}
	public function deactivate_row(){
		$table = $this->input->post('table');
		$key = $this->input->post('key');
		$id = $this->input->post('id');
		$val = $this->input->post('val');
		$this->site_model->update_tbl($table,$key,array('inactive'=>$val),$id);
	}
}
