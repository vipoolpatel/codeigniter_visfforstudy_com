<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->helper('cookie');

		  $this->load->model('Common_model', '', TRUE);
	}

	public function index() {

		$data['body'] = 'home';

		$data['get_home_data'] = $this->Common_model->getHomedata();

		$this->load->view('front/index', $data);
	}



	public function setLanguageCookie(){
		$lang = $this->input->post('lang');
		$cookie= array(
           'name'   => 'language',
           'value'  => $lang,                            
           'expire' => '30000000',                                                                                   
           'secure' => TRUE
       );
       $this->input->set_cookie($cookie);
       return true;
   }

	public function logout() {
		$this->session->unset_userdata('user_logged_in');
		$this->session->unset_userdata('user_id');
		$this->session->unset_userdata('user_account_name');
		$this->session->unset_userdata('user_is_admin');
		redirect('login');
	}
	public function subscribe_email()
	{
		if (!empty($this->input->post('email'))) {
			$email = $this->input->post('email');
			$check = $this->db->where('email', $email);
			$check = $this->db->get('subscribe_email')->num_rows();
			if ($check == 0) {
				$array = array(
				  'email' => $email,
				  'created_date' => date('Y-m-d H:i:s')
				);

				$this->db->insert('subscribe_email', $array);
				$json['success'] = true;
	 		    $json['message'] = 'success';
			}
			else {
				$json['success'] = false;
				$json['message'] = 'Email already register';
			}



			}else{
				$json['success'] = false;
				$json['message'] = 'Please enter your email address';
			}
	    echo json_encode($json);
	}



}