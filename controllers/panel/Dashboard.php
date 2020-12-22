<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct() {
		parent::__construct();

		

		if (empty($this->session->userdata('user_logged_in')) || trim($this->session->userdata('user_is_admin')) == '3' || trim($this->session->userdata('user_is_admin')) == '2'){
			
			redirect('logout');
			exit();
		}
		$this->load->model('panel/panel_dashboard_model', '', TRUE);
	}

	public function index() {

		$data['totalAdmin'] = $this->panel_dashboard_model->countAdmin();
		$data['totalTeacher'] = $this->panel_dashboard_model->countTeacher();
		$data['totalStudent'] = $this->panel_dashboard_model->countStudent();
		$data['totalCourse'] = $this->panel_dashboard_model->countCourse();
        $data['totalPendingCourse'] = $this->panel_dashboard_model->countPendingCourse();
        $data['totalApprovedCourse'] = $this->panel_dashboard_model->countApprovedCourse();
        $data['totalOffer'] = $this->panel_dashboard_model->countOffer();
        $data['totalPendingOffer'] = $this->panel_dashboard_model->countPendingOffer();
        $data['totalApprovedOffer'] = $this->panel_dashboard_model->countApprovedOffer();
        $data['totalDemand'] = $this->panel_dashboard_model->countDemand();
        $data['totalPendingDemand'] = $this->panel_dashboard_model->countPendingDemand();
        $data['totalApprovedDemand'] = $this->panel_dashboard_model->countApprovedDemand();
        $data['totalBookedCourse'] = $this->panel_dashboard_model->countBookedCourse();
        $data['totalBookedOffer'] = $this->panel_dashboard_model->countBookedOffer();
        $data['totalBookedDemand'] = $this->panel_dashboard_model->countBookedDemand();

        

		$this->load->view('panel/dashboard/dashboard', $data);
	}

}