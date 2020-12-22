<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Setting extends CI_Controller {

	public function __construct() {
		parent::__construct();

			if (empty($this->session->userdata('user_logged_in')) || trim($this->session->userdata('user_is_admin')) == '3' || trim($this->session->userdata('user_is_admin')) == '2'){
			
			redirect('logout');
			exit();
		}
		//$this->load->model('panel/panel_setting_model', '', TRUE);
	}

	public function index() {
			redirect('panel/setting/setting_list');
	}
	public function setting_list()
	{
		if(!empty($_POST['id']))
		{
			$data = array(
				'paypal_email' => !empty($this->input->post('paypal_email')) ? $this->input->post('paypal_email'): '',
				'system_email' => !empty($this->input->post('system_email')) ? $this->input->post('system_email'): '',
				'created_date' => date('Y-m-d H:i:s')
			);

			$this->db->where('id', $this->input->post('id'));
			$this->db->update('setting', $data);

			$this->session->set_flashdata('success', 'Setting Updated Successfully');
			redirect('panel/setting/setting_list');
		}
		$row = $this->db->where('id', 1);
		$row = $this->db->get('setting')->row();
		$data['update'] = $row;
		$this->load->view('panel/setting/setting_list', $data);

	}
}