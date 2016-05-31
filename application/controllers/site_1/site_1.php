<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class site_1 extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
        $this->load->helper('site/site_forms_helper');  
        $data['contents'] = $this->site_model->content_get();

		$this->load->view('site_parts/head');
        $this->load->view('site_parts/menu');
		$this->load->view('site_parts/body',$data);
        $this->load->view('site_parts/footer');
	}
        public function gallery(){  
        $this->load->helper('site/site_forms_helper');  
        $data['categories'] = $this->site_model->categories_get();
        
        $this->load->view('site_parts/head');
        $this->load->view('site_parts/menu');
        $this->load->view('site_parts/gallery',$data);
        $this->load->view('site_parts/footer');
    }
       public function about(){ 
        $this->load->helper('site/site_forms_helper');  
        $data['contents'] = $this->site_model->content_get();
 
        $this->load->view('site_parts/head');
        $this->load->view('site_parts/menu');
        $this->load->view('site_parts/about',$data);
        $this->load->view('site_parts/footer');
    }
    public function wallpaper(){
        $this->load->helper('site/site_forms_helper');  
        $data['wallpaper'] = $this->site_model->wallpaper_get();

        $this->load->view('site_parts/head');
        $this->load->view('site_parts/menu');
        $this->load->view('site_parts/gallery1/wallpaper',$data);
        $this->load->view('site_parts/footer');
    }
    public function carpets(){
        $this->load->helper('site/site_forms_helper');  
        $data['carpets'] = $this->site_model->carpets_get();

        $this->load->view('site_parts/head');
        $this->load->view('site_parts/menu');
        $this->load->view('site_parts/gallery1/carpets',$data);
        $this->load->view('site_parts/footer');        
    }
    public function window_covering(){
        $this->load->helper('site/site_forms_helper');  
        $data['window_covering'] = $this->site_model->window_covering_get();

        $this->load->view('site_parts/head');
        $this->load->view('site_parts/menu');
        $this->load->view('site_parts/gallery1/window_coverings',$data);
        $this->load->view('site_parts/footer');        
    }

    public function pcv_strips(){
        $this->load->helper('site/site_forms_helper');  
        $data['pcv_strips'] = $this->site_model->pcv_strips_get();

        $this->load->view('site_parts/head');
        $this->load->view('site_parts/menu');
        $this->load->view('site_parts/gallery1/pcv_strips',$data);
        $this->load->view('site_parts/footer');        
    }
    public function swing_door(){
        $this->load->helper('site/site_forms_helper');  
        $data['swing_door'] = $this->site_model->swing_door_get();

        $this->load->view('site_parts/head');
        $this->load->view('site_parts/menu');
        $this->load->view('site_parts/gallery1/swing_door',$data);
        $this->load->view('site_parts/footer');        
    }
    public function hi_speed_door(){
        $this->load->helper('site/site_forms_helper');  
        $data['hi_speed_door'] = $this->site_model->hi_speed_door_get();

        $this->load->view('site_parts/head');
        $this->load->view('site_parts/menu');
        $this->load->view('site_parts/gallery1/hi_speed_door',$data);
        $this->load->view('site_parts/footer');        
    }
    public function anti_static_panel(){
        $this->load->helper('site/site_forms_helper');  
        $data['anti_static_panel'] = $this->site_model->anti_static_panel_get();

        $this->load->view('site_parts/head');
        $this->load->view('site_parts/menu');
        $this->load->view('site_parts/gallery1/anti_static_panel',$data);
        $this->load->view('site_parts/footer');        
    }
    public function contact(){
        $this->load->helper('site/site_forms_helper');  
        $data['contents'] = $this->site_model->content_get();

        $this->load->view('site_parts/head');
        $this->load->view('site_parts/menu');
        $this->load->view('site_parts/contact',$data);
        $this->load->view('site_parts/footer');        
    }
   public function categories(){
        $this->load->helper('site/site_forms_helper');  
        $data['categories'] = $this->site_model->categories_get();


        $this->load->view('site_parts/head');
        $this->load->view('site_parts/menu');
        $this->load->view('site_parts/categories',$data);
        $this->load->view('site_parts/footer');        
    }
   public function interior(){
        $this->load->helper('site/site_forms_helper');  
        $data['categories'] = $this->site_model->categories_get();

        $this->load->view('site_parts/head');
        $this->load->view('site_parts/menu');
        $this->load->view('site_parts/interior',$data);
        $this->load->view('site_parts/footer');        
    }
   public function industrial(){
        $this->load->helper('site/site_forms_helper');  
        $data['categories'] = $this->site_model->categories_get();

        $this->load->view('site_parts/head');
        $this->load->view('site_parts/menu');
        $this->load->view('site_parts/industrial',$data);
        
        $this->load->view('site_parts/footer');        
    }
    public function update($id=null)
    {
        $this->load->model('site_model');
        $data['contents'] = array();
        if($id != null){
            $data['contents'] = $this->site_model->show_edit_contents($id);
        }
        if($this->input->post('update_content')){
             $update = array(
                'image' => $this->input->post('contentimage'),
                'title' => $this->input->post('contenttitle'),
                'description' => $this->input->post('contentdescription')

             );
             $this->site_model->edit_contents_record($this->input->post('contentid'),$update);
             header('Location: ' . base_url() . '../wallcr0wn/site_1?');
        }   
        $this->load->view('site_parts/head');
        $this->load->view('site_parts/menu');
        $this->load->view('site_parts/update/body_update',$data);
        $this->load->view('site_parts/footer');
    }
    public function update2($id=null)
    {
        $this->load->model('site_model');
        $data['contents'] = array();
        if($id != null){
            $data['contents'] = $this->site_model->show_edit_contents($id);
        }

        $this->load->view('site_parts/head');
        $this->load->view('site_parts/menu');
        $this->load->view('site_parts/update/body_update2',$data);
        $this->load->view('site_parts/footer');
    }
    public function update3($id=null)
    {
        $this->load->model('site_model');
        $data['contents'] = array();
        if($id != null){
            $data['contents'] = $this->site_model->show_edit_contents($id);
        }

        $this->load->view('site_parts/head');
        $this->load->view('site_parts/menu');
        $this->load->view('site_parts/update/body_update3',$data);
        $this->load->view('site_parts/footer');
    }
    public function update4($id=null)
    {
        $this->load->model('site_model');
        $data['contents'] = array();
        if($id != null){
            $data['contents'] = $this->site_model->show_edit_contents($id);
        }

        $this->load->view('site_parts/head');
        $this->load->view('site_parts/menu');
        $this->load->view('site_parts/update/body_update4',$data);
        $this->load->view('site_parts/footer');
    }
    public function update5($id=null)
    {
        $this->load->model('site_model');
        $data['contents'] = array();
        if($id != null){
            $data['contents'] = $this->site_model->show_edit_contents($id);
        }
  
        $this->load->view('site_parts/head');
        $this->load->view('site_parts/menu');
        $this->load->view('site_parts/update/body_update5',$data);
        $this->load->view('site_parts/footer');
    }
    public function cat_edit($id=null)
    {
        $this->load->model('site_model');
        $data['categories'] = array();
        if($id != null){
            $data['categories'] = $this->site_model->show_edit_categories($id);
        }
        if($this->input->post('edit_category')){
             $update = array(
                'image' => $this->input->post('categoryimage'),
                'cat_name' => $this->input->post('categorytitle'),
                'description' => $this->input->post('categorydescription')

             );
             $this->site_model->edit_categories_record($this->input->post('categoryid'),$update);
             header('Location: ' . base_url() . '../wallcr0wn/site_1?');
        }   
        $this->load->view('site_parts/head');
        $this->load->view('site_parts/menu');
        $this->load->view('site_parts/update/categories_edit',$data);
        $this->load->view('site_parts/footer');
    }
    public function wallpaper_edit($id=null)
    {
        $this->load->model('site_model');
        $data['wallpaper'] = array();
        if($id != null){
            $data['wallpaper'] = $this->site_model->show_edit_wallpaper($id);
        }
        if($this->input->post('edit_wallpaper')){
             $update = array(
                'image' => $this->input->post('wallpaperimage'),
                'title' => $this->input->post('wallpapertitle'),
                'description' => $this->input->post('wallpaperdescription')

             );
             $this->site_model->edit_wallpaper_record($this->input->post('wallpaperid'),$update);
             header('Location: ' . base_url() . '../wallcr0wn/site_1?');
        }   
        $this->load->view('site_parts/head');
        $this->load->view('site_parts/menu');
        $this->load->view('site_parts/update/wallpaper_edit',$data);
        $this->load->view('site_parts/footer');
    }
    public function carpets_edit($id=null)
    {
        $this->load->model('site_model');
        $data['carpets'] = array();
        if($id != null){
            $data['carpets'] = $this->site_model->show_edit_carpets($id);
        }
        if($this->input->post('edit_carpets')){
             $update = array(
                'image' => $this->input->post('carpetsimage'),
                'title' => $this->input->post('carpetstitle'),
                'description' => $this->input->post('carpetsdescription')

             );
             $this->site_model->edit_carpets_record($this->input->post('carpetsid'),$update);
             header('Location: ' . base_url() . '../wallcr0wn/site_1?');
        }   
        $this->load->view('site_parts/head');
        $this->load->view('site_parts/menu');
        $this->load->view('site_parts/update/carpets_edit',$data);
        $this->load->view('site_parts/footer');
    }
    public function window_coverings_edit($id=null)
    {
        $this->load->model('site_model');
        $data['window_coverings'] = array();
        if($id != null){
            $data['window_coverings'] = $this->site_model->show_edit_window_coverings($id);
        }
        if($this->input->post('edit_window_coverings')){
             $update = array(
                'image' => $this->input->post('windowcoveringsimage'),
                'title' => $this->input->post('windowcoveringstitle'),
                'description' => $this->input->post('windowcoveringsdescription')

             );
             $this->site_model->edit_window_coverings_record($this->input->post('windowcoveringsid'),$update);
             header('Location: ' . base_url() . '../wallcr0wn/site_1?');
        }   
        $this->load->view('site_parts/head');
        $this->load->view('site_parts/menu');
        $this->load->view('site_parts/update/window_covering_edit',$data);
        $this->load->view('site_parts/footer');
    }
    public function pcv_strips_edit($id=null)
    {
        $this->load->model('site_model');
        $data['pcv_strips'] = array();
        if($id != null){
            $data['pcv_strips'] = $this->site_model->show_edit_pcv_strips($id);
        }
        if($this->input->post('edit_pcv_strips')){
             $update = array(
                'image' => $this->input->post('pcv_stripsimage'),
                'title' => $this->input->post('pcv_stripstitle'),
                'description' => $this->input->post('pcv_stripsdescription')

             );
             $this->site_model->edit_pcv_strips_record($this->input->post('pcv_stripsid'),$update);
             header('Location: ' . base_url() . '../wallcr0wn/site_1?');
        }   
        $this->load->view('site_parts/head');
        $this->load->view('site_parts/menu');
        $this->load->view('site_parts/update/pcv_strips_edit',$data);
        $this->load->view('site_parts/footer');
    }
    public function swing_door_edit($id=null)
    {
        $this->load->model('site_model');
        $data['swing_door'] = array();
        if($id != null){
            $data['swing_door'] = $this->site_model->show_edit_swing_door($id);
        }
        if($this->input->post('edit_swing_door')){
             $update = array(
                'image' => $this->input->post('swing_doorimage'),
                'title' => $this->input->post('swing_doortitle'),
                'description' => $this->input->post('swing_doordescription')

             );
             $this->site_model->edit_swing_door_record($this->input->post('swing_doorid'),$update);
             header('Location: ' . base_url() . '../wallcr0wn/site_1?');
        }   
        $this->load->view('site_parts/head');
        $this->load->view('site_parts/menu');
        $this->load->view('site_parts/update/swing_door_edit',$data);
        $this->load->view('site_parts/footer');
    }
        public function hi_speed_door_edit($id=null)
    {
        $this->load->model('site_model');
        $data['hi_speed_door'] = array();
        if($id != null){
            $data['hi_speed_door'] = $this->site_model->show_edit_hi_speed_door($id);
        }
        if($this->input->post('edit_hi_speed_door')){
             $update = array(
                'image' => $this->input->post('hi_speed_doorimage'),
                'title' => $this->input->post('hi_speed_doortitle'),
                'description' => $this->input->post('hi_speed_doordescription')

             );
             $this->site_model->edit_hi_speed_door_record($this->input->post('hi_speed_doorid'),$update);
             header('Location: ' . base_url() . '../wallcr0wn/site_1?');
        }   
        $this->load->view('site_parts/head');
        $this->load->view('site_parts/menu');
        $this->load->view('site_parts/update/hi_speed_door_edit',$data);
        $this->load->view('site_parts/footer');
    }
        public function anti_static_panel_edit($id=null)
    {
        $this->load->model('site_model');
        $data['anti_static_panel'] = array();
        if($id != null){
            $data['anti_static_panel'] = $this->site_model->show_edit_anti_static_panel($id);
        }
        if($this->input->post('edit_anti_static_panel')){
             $update = array(
                'image' => $this->input->post('anti_static_panelimage'),
                'title' => $this->input->post('anti_static_paneltitle'),
                'description' => $this->input->post('anti_static_paneldescription')

             );
             $this->site_model->edit_anti_static_panel_record($this->input->post('anti_static_panelid'),$update);
             header('Location: ' . base_url() . '../wallcr0wn/site_1?');
        }   
        $this->load->view('site_parts/head');
        $this->load->view('site_parts/menu');
        $this->load->view('site_parts/update/anti_static_panel_edit',$data);
        $this->load->view('site_parts/footer');
    }
public function wallpaper_delete($id=null)
    {
        $this->load->model('site_model');
        $data['wallpaper'] = array();
        if($id != null){
            $data['wallpaper'] = $this->site_model->show_edit_wallpaper($id);
        }
        if($this->input->post('delete_wallpaper')){
             $delete = array(
                'image' => $this->input->post('wallpaperimage'),
                'title' => $this->input->post('wallpapertitle'),
                'description' => $this->input->post('wallpaperdescription')

             );
             $this->site_model->delete_wallpaper_record($this->input->post('wallpaperid'),$delete);
             header('Location: ' . base_url() . '../wallcr0wn/site_1?');
        }   
        $this->load->view('site_parts/head');
        $this->load->view('site_parts/menu');
        $this->load->view('site_parts/delete/delete_wallpaper',$data);
        $this->load->view('site_parts/footer');
    }           
    public function carpets_delete($id=null)
    {
        $this->load->model('site_model');
        $data['carpets'] = array();
        if($id != null){
            $data['carpets'] = $this->site_model->show_edit_carpets($id);
        }
        if($this->input->post('edit_carpets')){
             $update = array(
                'image' => $this->input->post('carpetsimage'),
                'title' => $this->input->post('carpetstitle'),
                'description' => $this->input->post('carpetsdescription')

             );
             $this->site_model->delete_carpets_record($this->input->post('carpetsid'),$update);
             header('Location: ' . base_url() . '../wallcr0wn/site_1?');
        }   
        $this->load->view('site_parts/head');
        $this->load->view('site_parts/menu');
        $this->load->view('site_parts/update/carpets_edit',$data);
        $this->load->view('site_parts/footer');
    }
    public function window_coverings_delete($id=null)
    {
        $this->load->model('site_model');
        $data['window_coverings'] = array();
        if($id != null){
            $data['window_coverings'] = $this->site_model->show_edit_window_coverings($id);
        }
        if($this->input->post('delete_window_coverings')){
             $update = array(
                'image' => $this->input->post('windowcoveringsimage'),
                'title' => $this->input->post('windowcoveringstitle'),
                'description' => $this->input->post('windowcoveringsdescription')

             );
             $this->site_model->delete_window_covering_record($this->input->post('windowcoveringsid'),$update);
             header('Location: ' . base_url() . '../wallcr0wn/site_1?');
        }   
        $this->load->view('site_parts/head');
        $this->load->view('site_parts/menu');
        $this->load->view('site_parts/delete/delete_window_covering',$data);
        $this->load->view('site_parts/footer');
    }
    public function pcv_strips_delete($id=null)
    {
        $this->load->model('site_model');
        $data['pcv_strips'] = array();
        if($id != null){
            $data['pcv_strips'] = $this->site_model->show_edit_pcv_strips($id);
        }
        if($this->input->post('delete_pcv_strips')){
             $update = array(
                'image' => $this->input->post('pcv_stripsimage'),
                'title' => $this->input->post('pcv_stripstitle'),
                'description' => $this->input->post('pcv_stripsdescription')

             );
             $this->site_model->delete_pcv_strips_record($this->input->post('pcv_stripsid'),$update);
             header('Location: ' . base_url() . '../wallcr0wn/site_1?');
        }   
        $this->load->view('site_parts/head');
        $this->load->view('site_parts/menu');
        $this->load->view('site_parts/delete/delete_pcv_strips',$data);
        $this->load->view('site_parts/footer');
    }
    public function delete_swing_door($id=null)
    {
        $this->load->model('site_model');
        $data['swing_door'] = array();
        if($id != null){
            $data['swing_door'] = $this->site_model->show_edit_swing_door($id);
        }
        if($this->input->post('delete_swing_door')){
             $update = array(
                'image' => $this->input->post('swing_doorimage'),
                'title' => $this->input->post('swing_doortitle'),
                'description' => $this->input->post('swing_doordescription')

             );
             $this->site_model->delete_swing_door_record($this->input->post('swing_doorid'),$update);
             header('Location: ' . base_url() . '../wallcr0wn/site_1?');
        }   
        $this->load->view('site_parts/head');
        $this->load->view('site_parts/menu');
        $this->load->view('site_parts/delete/delete_swing_door',$data);
        $this->load->view('site_parts/footer');
    }
        public function delete_hi_speed_door($id=null)
    {
        $this->load->model('site_model');
        $data['hi_speed_door'] = array();
        if($id != null){
            $data['hi_speed_door'] = $this->site_model->show_edit_hi_speed_door($id);
        }
        if($this->input->post('delete_hi_speed_door')){
             $update = array(
                'image' => $this->input->post('hi_speed_doorimage'),
                'title' => $this->input->post('hi_speed_doortitle'),
                'description' => $this->input->post('hi_speed_doordescription')

             );
             $this->site_model->delete_hi_speed_door_record($this->input->post('hi_speed_doorid'),$update);
             header('Location: ' . base_url() . '../wallcr0wn/site_1?');
        }   
        $this->load->view('site_parts/head');
        $this->load->view('site_parts/menu');
        $this->load->view('site_parts/delete/delete_hi_speed_door',$data);
        $this->load->view('site_parts/footer');
    }
        public function delete_anti_static_panel($id=null)
    {
        $this->load->model('site_model');
        $data['anti_static_panel'] = array();
        if($id != null){
            $data['anti_static_panel'] = $this->site_model->show_edit_anti_static_panel($id);
        }
        if($this->input->post('delete_anti_static_panel')){
             $update = array(
                'image' => $this->input->post('anti_static_panelimage'),
                'title' => $this->input->post('anti_static_paneltitle'),
                'description' => $this->input->post('anti_static_paneldescription')

             );
             $this->site_model->delete_anti_static_panel_record($this->input->post('anti_static_panelid'),$update);
             header('Location: ' . base_url() . '../wallcr0wn/site_1?');
        }   
        $this->load->view('site_parts/head');
        $this->load->view('site_parts/menu');
        $this->load->view('site_parts/delete/delete_anti_static_panel',$data);
        $this->load->view('site_parts/footer');
    }
}?>