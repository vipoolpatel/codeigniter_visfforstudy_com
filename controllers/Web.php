<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Web extends CI_Controller {

	public function __construct() {
		parent::__construct();

		// if (!empty($this->session->userdata('user_logged_in'))) {
		// 	redirect(base_url());
		// 	exit();
		// }

		

		
	}
	public function index() {
       $this->load->view('front/web/web');
	}
}