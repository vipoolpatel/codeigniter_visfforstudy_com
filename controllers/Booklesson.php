<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Booklesson extends CI_Controller {

	public function __construct() {
		parent::__construct();

		// if (!empty($this->session->userdata('user_logged_in'))) {
		// 	redirect(base_url());
		// 	exit();
		// }

		

		
	}
	public function index() {
       redirect('front/book_lesson/book_lesson');
	}

	public function book_lesson() {
	   $data['body'] = 'booking lesson';
       $this->load->view('front/book_lesson/book_lesson', $data);
	}
}