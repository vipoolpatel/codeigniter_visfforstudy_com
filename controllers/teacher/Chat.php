<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Chat extends CI_Controller {

	public function __construct() {
		parent::__construct();

		if (!$this->session->userdata('user_logged_in') || ($this->session->userdata('user_is_admin') != '2')) {
			redirect('login');
			exit();
		}
	}

	public function index() {
		
		$this->load->view('teacher/chat/chat');
	}

}