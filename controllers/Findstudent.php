<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Findstudent extends CI_Controller {

	public function __construct() {

		parent::__construct();
		$this->load->model('Common_model', '', TRUE);
	}

  public function index() {
      redirect(base_url().'find-student');      
  }

	public function find_student() {
    
		    $this->load->library('pagination');

        $total = $this->Common_model->countFindastudent();
        $per_page = 5;
        $data['list'] = $this->Common_model->getFindastudent($per_page, $this->uri->segment(2));
        $base_url = base_url(). 'find-student/';
        $config ['base_url'] = $base_url;
        $config ['total_rows'] = $total;
        $config ['per_page'] = $per_page;
        $config ['uri_segment'] = '2';
        $config['reuse_query_string'] = TRUE;
        $this->pagination->initialize($config);

        $data['level'] = $this->db->get('level_of_student')->result();
        $data['getLanguage'] = $this->db->get('language')->result();
        $data['getDemandType'] = $this->db->get('demand_type')->result();

   	    $data['body'] = 'profile archive student';
        $this->load->view('front/find_student/find_student', $data);
	}

	public function student_profile($id) {

	      $data['getDemand'] = $this->Common_model->getDemand($id);
     // $data['getUser']  = $this->Common_model->getUser($id);
        $data['getOtherstudent']  = $this->Common_model->getOtherstudent($id);
	      $data['body'] = 'profile single student';
        $this->load->view('front/find_student/student_profile', $data);
	}

	

    public function getPopupLoaddata(){

        $id = $this->input->post('id');
      
        $data['value'] = $this->Common_model->getPopupLoaddataStudent($id);

        $result['success'] = $this->load->view('front/find_student/_send_offer', $data, TRUE);
        echo json_encode($result);
  }

  

}