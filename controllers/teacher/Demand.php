<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Demand extends CI_Controller {

	public function __construct() {
		parent::__construct();

		if (!$this->session->userdata('user_logged_in') || ($this->session->userdata('user_is_admin') != '2')) {
			redirect('login');
			exit();
		}
		$this->load->model('teacher/teacher_demand_model', '', TRUE);

		$this->load->model('common_model', '', TRUE);
		$this->common_model->timezone();

	}

	public function index() {
		redirect('teacher/demand/demand_list');
	}



	public function demand_list() {
   	    $this->load->library('pagination');
	    $total = $this->teacher_demand_model->countDemand();
	    $per_page = 30;
	    $data['student_offer_send'] = $this->teacher_demand_model->getDemand($per_page, $this->uri->segment(4));
	    $base_url = base_url(). '/teacher/demand/demand_list';
	    $config ['base_url'] = $base_url;
	    $config ['total_rows'] = $total;
	    $config ['per_page'] = $per_page;
	    $config ['uri_segment'] = '4';
	    $config['reuse_query_string'] = TRUE;
	    $this->pagination->initialize ( $config );
    	$this->load->view('teacher/demand/demand_list',$data);
 	}


    public function view_demand($id)
	{
		$data['value'] = $this->teacher_demand_model->viewDemand($id);
		$this->load->view('teacher/demand/view_demand', $data);	
	}

	
}
?>