<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct() {
		parent::__construct();

		if (empty($this->session->userdata('user_logged_in')) || trim($this->session->userdata('user_is_admin')) == '3' || trim($this->session->userdata('user_is_admin')) == '2'){
			
			redirect('logout');
			exit();
		}
		$this->load->model('panel/panel_user_model', '', TRUE);
	}

	public function index() {
		redirect('panel/user/user_list');
	}

	public function user_list(){
          
       // $data =  $this->db->where('is_admin','1');
       // $data =  $this->db->where('is_staff','0');
       // $data = $this->db->get('users')->num_rows();
       // $result['admin'] = $data;

        $data['totalAdmin'] = $this->panel_user_model->countAdmin();
        $data['totalTeacher'] = $this->panel_user_model->countTeacher();
        $data['totalStudent'] = $this->panel_user_model->countStudent();
        $data['totalStaff'] = $this->panel_user_model->countStaff();

    	$this->load->view('panel/user/user_list', $data);
    }

}