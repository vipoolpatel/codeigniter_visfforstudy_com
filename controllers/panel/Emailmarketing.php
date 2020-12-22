<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Emailmarketing extends CI_Controller {

	public function __construct() {
		parent::__construct();

			if (empty($this->session->userdata('user_logged_in')) || trim($this->session->userdata('user_is_admin')) == '3' || trim($this->session->userdata('user_is_admin')) == '2'){
			
			redirect('logout');
			exit();
		}


		
	}

	public function index() {
		redirect('panel/emailmarketing/email_marketing_list');
	}

	public function email_marketing_list() {
	    $this->load->library('email'); 
		
		if(!empty($_POST))
		{
			$setting  = $this->db->where('id',1);
        	$setting  = $this->db->get('setting')->row();

			$getsmtp  = $this->db->where('id',1);
        	$getsmtp  = $this->db->get('smtp')->row();

			$id = $this->input->post('email');

			if($id == 'All')
			{
				$get = $this->db->where('is_admin', $this->input->post('type'));
				$get = $this->db->get('users')->result();	
			}
			else
			{
				$get = $this->db->where('id', $id);
				$get = $this->db->get('users')->result();
			}

			if(!empty($get))
			{
				foreach($get as $value)
				{

				    $config = array(
			            'protocol'  => $getsmtp->protocol,
			            'smtp_host' => $getsmtp->smtp_host,
			            'smtp_port' => $getsmtp->smtp_port,
			            'smtp_user' => $getsmtp->smtp_user,
			            'smtp_pass' => $getsmtp->smtp_pass,
			            'mailtype'  => 'html',
			            'charset'   => 'utf-8'
			  		);
					
					$data['subject'] = $this->input->post('subject');
					$data['body'] 	 = $this->input->post('body');
					$data['id'] 	 = $value->id;

					$html = $this->load->view('mail/email_marketing', $data,true);

					$this->email->initialize($config);
					$this->email->set_mailtype("html");
				    $this->email->set_newline("\r\n");
				    $this->email->to($value->email);
				    $this->email->from($setting->system_email, $setting->system_name);
				    $this->email->subject($this->input->post('subject'));
				    $this->email->message($html);
				    $this->email->send();
				}
			}

			$this->session->set_flashdata('success', 'Email successfully sent.');
		}

		
		$this->load->view('panel/email_marketing/email_marketing_list');
	}


	public function user_all() {
		$type = $this->input->post('type');
		$getdata = $this->db->where('is_admin',$type);
		$getdata = $this->db->order_by('first_name','asc');
		$getdata = $this->db->get('users')->result();

		$html = '<option value="All">All</option>';
		foreach ($getdata as $value) {
				$html .= ' <option value="'.$value->id.'">'.$value->first_name .' '.$value->last_name .' ('.$value->email.')</option>';
		}

		$json['success'] = $html;
		echo json_encode($json);


	}


}