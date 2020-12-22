<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct() {
		parent::__construct();

		if (!$this->session->userdata('user_logged_in') || ($this->session->userdata('user_is_admin') != '3')) {
			redirect('login');
			exit();
		}
			$this->load->model('student/student_dashboard_model', '', TRUE);
	}

	public function index() {
		$data['totalDemand'] = $this->student_dashboard_model->countDemand();
		$data['totalPendingDemand'] = $this->student_dashboard_model->countPendingDemand();
		$data['totalApprovedDemand'] = $this->student_dashboard_model->countApprovedDemand();
		$data['totalBookedOffer'] = $this->student_dashboard_model->countBookedOffer();
		$data['totalBookedDemand'] = $this->student_dashboard_model->countBookedDemand();
		$data['totalBookedCourse'] = $this->student_dashboard_model->countBookedCourse();
		
		$this->load->view('student/dashboard/dashboard', $data);
	}

}