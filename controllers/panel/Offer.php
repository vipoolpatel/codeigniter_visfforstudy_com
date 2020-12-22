<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Offer extends CI_Controller {

	public function __construct() {
		parent::__construct();

			if (empty($this->session->userdata('user_logged_in')) || trim($this->session->userdata('user_is_admin')) == '3' || trim($this->session->userdata('user_is_admin')) == '2'){
			
			redirect('logout');
			exit();
		}
			$this->load->model('panel/panel_offer_model', '', TRUE);
	}

	public function index() {
		redirect('panel/offer/offer_list');
		
	}

	public function offer_list(){

		$this->load->library('pagination');

        $total = $this->panel_offer_model->countOffer();
        $per_page = 30;
        $data['list'] = $this->panel_offer_model->getOffer($per_page, $this->uri->segment(4));
        $base_url = base_url(). '/panel/offer/offer_list';
        $config ['base_url'] = $base_url;
        $config ['total_rows'] = $total;
        $config ['per_page'] = $per_page;
        $config ['uri_segment'] = '4';
        $this->pagination->initialize ( $config );

		$this->load->view('panel/offer/offer_list',$data);

	}

	public function view_offer($id){

		$get = $this->db->where('id',$id);
		$get = $this->db->get('offer_send')->row();

		if ($get->is_notification != '1') {

			$updatedata = $this->db->set('is_notification','0');
			$updatedata = $this->db->where('id',$id);
			$updatedata = $this->db->update('offer_send');
				
		}

	
		 $data['value'] = $this->panel_offer_model->viewOffer($id);
		 $this->load->view('panel/offer/view_offer',$data);
	}


	public function change_status(){

		if ($this->input->post('status') == '2' || $this->input->post('status') == '3') {
			 $this->db->set('is_notification', '1');
		}	

		$this->db->set('status', $this->input->post('status'));
		$data = $this->db->where('id', $this->input->post('id'));
		$data = $this->db->update('offer_send');


		$this->session->set_flashdata('success', 'Status successfully changed.');

		echo json_encode($data);
	}

	public function delete_offer($id){
        
		$this->db->where('id',$id);
        $this->db->delete('offer_send');
     
        $this->session->set_flashdata('success', 'Offer successfully deleted.');
        redirect('panel/offer/offer_list');
	}




}
?>