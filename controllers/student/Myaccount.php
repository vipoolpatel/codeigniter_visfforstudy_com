<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Myaccount extends CI_Controller {

	public function __construct() {
		parent::__construct();

		if (!$this->session->userdata('user_logged_in') || ($this->session->userdata('user_is_admin') != '3')) {
			redirect('login');
			exit();
		}
	}

	public function index() {
		$rows = $this->db->where('is_admin', '3');
		$rows = $this->db->where('id', $this->session->userdata('user_id'));
		$rows = $this->db->get('users')->row();
		$data['list'] = $rows;
		$this->load->view('student/my_account/my_account', $data);
	}

}
?>