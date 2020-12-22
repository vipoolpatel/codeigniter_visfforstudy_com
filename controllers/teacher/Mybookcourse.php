<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mybookcourse extends CI_Controller {

	public function __construct() {
		parent::__construct();

		if (!$this->session->userdata('user_logged_in') || ($this->session->userdata('user_is_admin') != '2')) {
			redirect('login');
			exit();
		}
		$this->load->model('teacher/teacher_my_book_course_model', '', TRUE);

		$this->load->model('common_model', '', TRUE);
		$this->common_model->timezone();

	}

	public function index() {
		redirect('teacher/mybookcourse/my_book_course_list');
	}

	public function my_book_course_list() {

		$this->load->library('pagination');

	    $total = $this->teacher_my_book_course_model->countMyBookCourse();
	    $per_page = 30;
	    $data['list'] = $this->teacher_my_book_course_model->getMyBookCourse($per_page, $this->uri->segment(4));
	    $base_url = base_url(). '/teacher/mybookcourse/my_book_course_list';
	    $config ['base_url'] = $base_url;
	    $config ['total_rows'] = $total;
	    $config ['per_page'] = $per_page;
	    $config ['uri_segment'] = '4';
	    $this->pagination->initialize ( $config );

	    $getuser = $this->db->where('id',$this->session->userdata('user_id'));
		$getuser = $this->db->get('users')->row();
		$data['getuser'] = $getuser;
		
		$this->load->view('teacher/my_book_course/my_book_course_list', $data);
	}

}

