<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bookcourse extends CI_Controller {

	public function __construct() {
		parent::__construct();

			if (empty($this->session->userdata('user_logged_in')) || trim($this->session->userdata('user_is_admin')) == '3' || trim($this->session->userdata('user_is_admin')) == '2'){
			
			redirect('logout');
			exit();
		}
			$this->load->model('panel/panel_bookcourse_model', '', TRUE);
	}

	public function index() {
		redirect('panel/bookcourse/book_course_list');
		
	}

	public function book_course_list(){

		$this->load->library('pagination');

        $total = $this->panel_bookcourse_model->countBookcourse();
        $per_page = 40;
        $data['list'] = $this->panel_bookcourse_model->getBookcourse($per_page, $this->uri->segment(4));
        $base_url = base_url(). '/panel/bookcourse/book_course_list';
        $config ['base_url'] = $base_url;
        $config ['total_rows'] = $total;
        $config ['per_page'] = $per_page;
        $config ['uri_segment'] = '4';
        $this->pagination->initialize ( $config );

        $getuser = $this->db->where('id',$this->session->userdata('user_id'));
		$getuser = $this->db->get('users')->row();
		$data['getuser'] = $getuser;
		
		
      	$this->load->view('panel/book_course/book_course_list',$data);

	}

	


}
?>