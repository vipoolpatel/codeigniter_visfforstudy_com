<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Coursedetail extends CI_Controller {

	public function __construct() {
		parent::__construct();

		// if (!empty($this->session->userdata('user_logged_in'))) {
		// 	redirect(base_url());
		// 	exit();
		// }

		$this->load->model('Common_model', '', TRUE);

		
	}
	public function index($id) {

	    $data['getCourse']  = $this->Common_model->getCourse($id);
	    $data['getUser']  = $this->Common_model->getUser($id);
	    $data['getOffer']  = $this->Common_model->getOffer($id);
	    $data['getQulification']  = $this->Common_model->getQulification($id);
	    $data['getOtherlectures']  = $this->Common_model->getOtherlectures($id);
	   
	    $this->load->view('front/find_a_tutor/tutor_course_detail', $data);
	}
}