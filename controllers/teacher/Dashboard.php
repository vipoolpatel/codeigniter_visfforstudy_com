<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct() {
		parent::__construct();

		if (!$this->session->userdata('user_logged_in') || ($this->session->userdata('user_is_admin') != '2')) {
			redirect('login');
			exit();
		}
		$this->load->model('teacher/teacher_dashboard_model', '', TRUE);
	}

	public function index() {
		$data['totalTotalCourse'] = $this->teacher_dashboard_model->countTotalCourse();
		$data['totalPendingCourse'] = $this->teacher_dashboard_model->countPendingCourse();
	
		$data['totalOffer'] = $this->teacher_dashboard_model->countOffer();
		$data['totalPendingOffer'] = $this->teacher_dashboard_model->countPendingOffer();
		$data['totalBookedOffer'] = $this->teacher_dashboard_model->countBookedOffer();
		$data['totalBookedCourse'] = $this->teacher_dashboard_model->countBookedCourse();

		$data['totalApprovedCourse'] = $this->teacher_dashboard_model->countApprovedCourse();
		$data['totalBookedDemand'] = $this->teacher_dashboard_model->countBookedDemand();

		$data['totalApprovedOffer'] = $this->teacher_dashboard_model->countApprovedOffer();

		$this->load->view('teacher/dashboard/dashboard', $data);
	}


}