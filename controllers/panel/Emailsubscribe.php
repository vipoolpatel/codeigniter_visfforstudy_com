<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Emailsubscribe extends CI_Controller {

	public function __construct() {
		parent::__construct();

			if (empty($this->session->userdata('user_logged_in')) || trim($this->session->userdata('user_is_admin')) == '3' || trim($this->session->userdata('user_is_admin')) == '2'){
			
			redirect('logout');
			exit();
		}
		$this->load->model('panel/panel_email_subscribe_model', '', TRUE);
	}

	public function index() {
			redirect('panel/emailsubscribe/email_subscribe_list');
	}
	public function email_subscribe_list()
	{
	    $this->load->library('pagination');

        $total = $this->panel_email_subscribe_model->countEmailSubscribe();
        $per_page = 40;
        $data['list'] = $this->panel_email_subscribe_model->getEmailSubscribe($per_page, $this->uri->segment(4));
        $base_url = base_url(). '/panel/emailsubscribe/email_subscribe_list';
        $config ['base_url'] = $base_url;
        $config ['total_rows'] = $total;
        $config ['per_page'] = $per_page;
        $config ['uri_segment'] = '4';
        $this->pagination->initialize ( $config );

		$this->load->view('panel/email_subscribe/email_subscribe_list', $data);
	}

	public function delete_email_subscribe($id)
	{
		$this->db->where('id',$id);
        $this->db->delete('subscribe_email');
     
        $this->session->set_flashdata('success', 'Email Subscribe Deleted Successfully');
		redirect('panel/emailsubscribe/email_subscribe_list');
	}

}