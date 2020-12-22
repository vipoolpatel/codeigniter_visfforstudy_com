<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Becometutor extends CI_Controller {

	public function __construct() {
		parent::__construct();

		// if (!empty($this->session->userdata('user_logged_in'))) {
		// 	redirect(base_url());
		// 	exit();
		// }
		$this->load->model('Common_model', '', TRUE);


		

		
	}

    public function index() {
        redirect('front/become_tutor/become_tutor');
        
    }

	

}