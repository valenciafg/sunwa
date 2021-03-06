<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Roles extends MX_Controller {
        
    
        public function __construct() {

        parent::__construct();
        if($this->session->all_userdata('language') != '')
        {
            $this->language = $this->session->userdata('language');
        }
        else
        {
            $this->language = $this->config->item('default_language');
        }
        //$this->language = ($this->session->all_userdata('language')) ? $this->session->userdata('language') : $this->config->item('default_language'); 
         if (! $this->session->userdata('username'))
        {
            redirect('site/home/login','refresh');; // the user is not logged in, redirect them!
        }
        $this->lang->load($this->language,  $this->language);
        $this->load->model('roles/roles_model');         
//         $this->lang->load('leftmenu', 'english');
//        $this->lang->load('dashboard', 'english');
    }
	public function index()
	{
                $data['page'] = 'role';
                $data['roles'] = $this->roles_model->get_all_roles();
               $this->load->view('roles_view', $data);
	}
        public function add_role()
	{
          $data['name'] = $this->input->post('role'); 
          $data['description'] = $this->input->post('description'); 
          $this->roles_model->add_role($data);
          redirect('roles');
	}
        public function update_role()
        {
            
            $id = $this->input->post('edit_role_id');
            $data['name'] = $this->input->post('edit_role'); 
          $data['description'] = $this->input->post('edit_description'); 
          $this->roles_model->update_role($data,$id);
          redirect('roles');
        }
         public function get_role_info()
        {
            $role_id = $this->input->post('role_id');
           $data['role'] = $this->roles_model->get_role_info($role_id);
           $data['role'] = $data['role'][0];
           $this->load->view('roles/role_edit', $data);
        }
}

/* End of file users.php */
/* Location: ./application/modules/users/controllers/users.php */