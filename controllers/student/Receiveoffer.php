<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Receiveoffer extends CI_Controller {

	public function __construct() {
		parent::__construct();

		if (!$this->session->userdata('user_logged_in') || ($this->session->userdata('user_is_admin') != '3')) {
			redirect('login');
			exit();
		}
		$this->load->model('student/student_receiveoffer_model', '', TRUE);

		$this->load->model('common_model', '', TRUE);
		$this->common_model->timezone();

	}

	public function index() {
		redirect('student/receiveoffer/receiveoffer_list');
	}

	public function receiveoffer_list(){
          
		$this->load->library('pagination');

        $total = $this->student_receiveoffer_model->countReceiveoffer();
        $per_page = 40;
        $data['list'] = $this->student_receiveoffer_model->getReceiveoffer($per_page, $this->uri->segment(4));
        $base_url = base_url(). '/student/receiveoffer/receiveoffer_list';
        $config ['base_url'] = $base_url;
        $config ['total_rows'] = $total;
        $config ['per_page'] = $per_page;
        $config ['uri_segment'] = '4';
        $this->pagination->initialize ( $config );

    	$getuser = $this->db->where('id',$this->session->userdata('user_id'));
		$getuser = $this->db->get('users')->row();
		$data['getuser'] = $getuser;

		$this->load->view('student/receiveoffer/receiveoffer',$data);
	}

	public function view_receiveoffer($id){

		$updatedata = $this->db->set('is_notification','0');
		$updatedata = $this->db->where('id',$id);
		$updatedata = $this->db->update('offer_send');

		$getuser = $this->db->where('id',$this->session->userdata('user_id'));
		$getuser = $this->db->get('users')->row();
		$data['getuser'] = $getuser;

		$data['value'] = $this->student_receiveoffer_model->viewReceiveoffer($id);
		$this->load->view('student/receiveoffer/view_receiveoffer',$data);
	}


	public function accept_offer($id)
	{
		$offer_send = $this->db->where('id',$id);
		$offer_send = $this->db->get('offer_send')->row();

		$setting = $this->db->where('id',1);
		$setting = $this->db->get('setting')->row();
		
        $paypalId = trim($setting->paypal_email);

        if($setting->type == 'live')
        {
        	$paypal_url = $setting->paypal_live;
        }
        else
        {
        	$paypal_url = $setting->paypal_sandbox;
        }

        $query = array();
        $query['business'] 		= $paypalId;
        $query['cmd'] 			= '_xclick';
        $query['item_name'] 	= $offer_send->title;
        $query['no_shipping'] 	= '1';
        $query['item_number'] 	= base64_encode($id);
        $query['amount'] 		= $offer_send->hour_per_rate;
        $query['currency_code'] = 'USD';
        $query['cancel_return'] = ''.base_url().'student/receiveoffer/cancel_accept_offer';
        $query['return'] 		= ''.base_url().'student/receiveoffer/reponse_accept_offer';

        $query_string 			= http_build_query($query);

        header('Location: '.$paypal_url.'' . $query_string);
        exit();
	}

	public function reponse_accept_offer() {

		$id = base64_decode($this->input->get('item_number'));
		$offer_send = $this->db->where('id',$id);
		$offer_send = $this->db->get('offer_send')->row();
        
        if (!empty($offer_send)) {
            $status = $this->input->get('st');
	        if ($status == 'Completed') {
        		$update = $this->db->where('id',$id);
        		$update = $this->db->set('is_student',1);
        		$update = $this->db->update('offer_send');

        		$this->session->set_flashdata('success', 'Thank you! Payment successfully done and offer successfully accepted.');
        		if(!empty($offer_send->demand_id))
        		{
        			redirect(base_url().'student/demands/received_offer');   	
    			}
    			else
    			{
    				redirect(base_url().'student/receiveoffer/receiveoffer_list');   		
    			}	
	        }
	        else
	        {
	    		$this->session->set_flashdata('error', 'Due to some error please try again.');
				redirect(base_url().'student/receiveoffer/receiveoffer_list');    	
	        }
	    }
	    else
	    {
	    	$this->session->set_flashdata('error', 'Due to some error please try again.');
			redirect(base_url().'student/receiveoffer/receiveoffer_list');	
	    }

	}

	public function cancel_accept_offer() {
		$this->session->set_flashdata('error', 'Due to some error please try again.');
		redirect(base_url().'student/receiveoffer/receiveoffer_list');
	}

}


?>