<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Acceptedoffer extends CI_Controller {

	public function __construct() {
		parent::__construct();

		if (!$this->session->userdata('user_logged_in') || ($this->session->userdata('user_is_admin') != '3')) {
			redirect('login');
			exit();
		}
		$this->load->model('student/student_accepted_offer_model', '', TRUE);

		$this->load->model('common_model', '', TRUE);
		$this->common_model->timezone();
	}

	public function index() {
      redirect('student/acceptedoffer/accepted_offer_list');
		
	}

	public function accepted_offer_list()
	{
		$this->load->library('pagination');

        $total = $this->student_accepted_offer_model->countAcceptedOffer();
        $per_page = 30;
        $data['list'] = $this->student_accepted_offer_model->getAcceptedOffer($per_page, $this->uri->segment(4));
        $base_url = base_url(). '/student/acceptedoffer/accepted_offer_list';
        $config ['base_url'] = $base_url;
        $config ['total_rows'] = $total;
        $config ['per_page'] = $per_page;
        $config ['uri_segment'] = '4';
      //  $config['reuse_query_string'] = TRUE;
        $this->pagination->initialize ( $config );

        $getuser = $this->db->where('id',$this->session->userdata('user_id'));
		$getuser = $this->db->get('users')->row();
		$data['getuser'] = $getuser;

		$this->load->view('student/accepted_offer/accepted_offer_list', $data);
	}
	public function view_accepted_offer($id)
	{
	    $getuser = $this->db->where('id',$this->session->userdata('user_id'));
		$getuser = $this->db->get('users')->row();
		$data['getuser'] = $getuser;

		$data['value'] = $this->student_accepted_offer_model->viewAcceptedOffer($id);
		$this->load->view('student/accepted_offer/view_accepted_offer', $data);
	}


	public function accepted_demand_offer_list()
	{
		$this->load->library('pagination');

		$total = $this->student_accepted_offer_model->countAcceptedDemandOffer();
		$per_page = 30;
		$data['list'] = $this->student_accepted_offer_model->getAcceptedDemandOffer($per_page, $this->uri->segment(4));
		$base_url = base_url(). '/student/acceptedoffer/accepted_demand_offer_list';
		$config ['base_url'] = $base_url;
        $config ['total_rows'] = $total;
        $config ['per_page'] = $per_page;
        $config ['uri_segment'] = '4';
        $this->pagination->initialize ( $config );

       $getuser = $this->db->where('id',$this->session->userdata('user_id'));
		$getuser = $this->db->get('users')->row();
		$data['getuser'] = $getuser;


		$this->load->view('student/accepted_offer/accepted_demand_offer_list', $data);	
	}

	public function view_accepted_demand_offer($id)
	{
	   $getuser = $this->db->where('id',$this->session->userdata('user_id'));
		$getuser = $this->db->get('users')->row();
		$data['getuser'] = $getuser;
		
		$data['value'] = $this->student_accepted_offer_model->viewAcceptedDemandOffer($id);
		$this->load->view('student/accepted_offer/view_accepted_demand_offer', $data);
	}
}
