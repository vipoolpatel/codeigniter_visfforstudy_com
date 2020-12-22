<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Demands extends CI_Controller {

	public function __construct() {
		parent::__construct();

		if (!$this->session->userdata('user_logged_in') || ($this->session->userdata('user_is_admin') != '3')) {
			redirect('login');
			exit();
		}
		$this->load->model('student/student_demands_model', '', TRUE);

		$this->load->model('common_model', '', TRUE);
		$this->common_model->timezone();
	
	}

	public function demand_list() {
	    $this->load->library('pagination');

        $total = $this->student_demands_model->countDemands();
        $per_page = 30;
        $data['list'] = $this->student_demands_model->getDemands($per_page, $this->uri->segment(4));
        $base_url = base_url(). '/student/demands/demand_list';
        $config ['base_url'] = $base_url;
        $config ['total_rows'] = $total;
        $config ['per_page'] = $per_page;
        $config ['uri_segment'] = '4';
        $config['reuse_query_string'] = TRUE;
        $this->pagination->initialize ( $config );
		
		$this->load->view('student/demands/demands', $data);
	}

	public function add_demands()
	{
		if (!empty($_POST)) {

			$GMT    = new DateTimeZone("GMT");
			$date   = new DateTime($this->input->post('required_date').' '.$this->input->post('start_time'), $GMT);
			$date =  $date->format('Y-m-d h:i:s A');

			$lesson_date = strtotime($date);
			$lesson_time = strtotime($date);
		
			
			$data = array(
                'user_id' => $this->session->userdata('user_id'),
				'demand_type_id' => !empty($this->input->post('demand_type_id')) ? $this->input->post('demand_type_id') : '',
				'level_of_student_id'=> !empty($this->input->post('level_of_student_id')) ? $this->input->post('level_of_student_id') : '',
				'category_id' => !empty($this->input->post('category_id')) ? $this->input->post('category_id') : '',
				'required_date'=> date('Y-m-d', strtotime($this->input->post('required_date'))),
				'start_time'=> !empty($this->input->post('start_time')) ? $this->input->post('start_time') : '',
				'demands_title' =>  !empty($this->input->post('demands_title')) ? $this->input->post('demands_title') : '',
				'language_id' => $this->input->post('language_id'),
				'rate_per_hour' => !empty($this->input->post('rate_per_hour')) ? $this->input->post('rate_per_hour') : '0',
				'demands_description' => !empty($this->input->post('demands_description')) ? $this->input->post('demands_description') : '',
				'status' => '1',
				'is_notification' => '2',
				'lesson_date' => $lesson_date,
				'lesson_time' => $lesson_time,
				'duration' => $this->input->post('duration'),
				'created_date' => date('Y-m-d H:i:s'), 		
			);

		    $this->db->insert('demands', $data);
			$this->session->set_flashdata('success', 'Demand successfully created.');
			redirect('student/demands/demand_list');
		}

		$data['demandsTypeList'] = $this->db->get('demand_type')->result();
		$data['LevelofStudent'] = $this->db->get('level_of_student')->result();
		$data['GetLanguage'] = $this->db->get('language')->result();

		$result = $this->db->where('status','1');
        $result = $this->db->get('category')->result();
		$data['DemandSubject'] = $result;
		
		$this->load->view('student/demands/add_demands', $data);	
	}

	public function edit_demands($id)
	{
		if(!empty($_POST))
        {
	        $GMT    = new DateTimeZone("GMT");
			$date   = new DateTime($this->input->post('required_date').' '.$this->input->post('start_time'), $GMT );
			$date =  $date->format('Y-m-d h:i:s A');

			$lesson_date = strtotime($date);
			$lesson_time = strtotime($date);
		

            $data = array(
                'demand_type_id' => !empty($this->input->post('demand_type_id')) ? $this->input->post('demand_type_id') : '',
				'level_of_student_id'=> !empty($this->input->post('level_of_student_id')) ? $this->input->post('level_of_student_id') : '',
				'category_id' => !empty($this->input->post('category_id')) ? $this->input->post('category_id') : '',
				'language_id' => $this->input->post('language_id'),
				'required_date'=> date('Y-m-d', strtotime($this->input->post('required_date'))),
				'start_time'=> !empty($this->input->post('start_time')) ? $this->input->post('start_time') : '',
				'demands_title' =>  !empty($this->input->post('demands_title')) ? $this->input->post('demands_title') : '',
				'rate_per_hour' => !empty($this->input->post('rate_per_hour')) ? $this->input->post('rate_per_hour') : '0',
				'demands_description' => !empty($this->input->post('demands_description')) ? $this->input->post('demands_description') : '',
				'lesson_date' => $lesson_date,
				'lesson_time' => $lesson_time,
				'duration' => $this->input->post('duration'),
				 'created_date' => date('Y-m-d H:i:s'),         
            );

            $this->db->where('id',$this->input->post('id'));
            $this->db->update('demands',$data);

            $this->session->set_flashdata('success', 'Demand Updated Successfully');
            redirect('student/demands/demand_list');
        }

        $data['demandsTypeList'] = $this->db->get('demand_type')->result();
		$data['LevelofStudent'] = $this->db->get('level_of_student')->result();
		$data['GetLanguage'] = $this->db->get('language')->result();
		
		$result = $this->db->where('status','1');
        $result = $this->db->get('category')->result();
		$data['DemandSubject'] = $result;

		$get = $this->db->where('id',$id);
        $get = $this->db->get('demands')->row();
		$data['edit_data'] = $get;

		$this->load->view('student/demands/edit_demands', $data);
	}

	public function delete_demands($id)
	{
		$this->db->where('id',$id);
        $this->db->delete('demands');

        $this->session->set_flashdata('success', 'Demands Deleted Successfully');
        redirect('student/demands/demand_list');
	}

	public function view_demands($id)
	{  
	    $get = $this->student_demands_model->viewDemands($id);
        if($get->is_notification != '2'){
			$updatedata = $this->db->set('is_notification','0');
			$updatedata = $this->db->where('id',$id);
			$updatedata = $this->db->update('demands');
		}
		$data['value'] = $get;
		$this->load->view('student/demands/view_demands', $data);	
	}


	public function received_offer()
	{
		$this->load->library('pagination');

        $total = $this->student_demands_model->countReceived();
        $per_page = 30;
        $data['list'] = $this->student_demands_model->getReceived($per_page, $this->uri->segment(4));
        $base_url = base_url(). '/student/demands/received_offer';
        $config ['base_url'] = $base_url;
        $config ['total_rows'] = $total;
        $config ['per_page'] = $per_page;
        $config ['uri_segment'] = '4';
        $config['reuse_query_string'] = TRUE;
        $this->pagination->initialize ( $config );


    	$getuser = $this->db->where('id',$this->session->userdata('user_id'));
		$getuser = $this->db->get('users')->row();
		$data['getuser'] = $getuser;
        
		
		$this->load->view('student/demands/received_offer', $data);
	}

	public function view_received_offer($id)
	{
        $updatedata = $this->db->set('is_notification','0');
		$updatedata = $this->db->where('id',$id);
		$updatedata = $this->db->update('offer_send');
		

		$getuser = $this->db->where('id',$this->session->userdata('user_id'));
		$getuser = $this->db->get('users')->row();
		$data['getuser'] = $getuser;

		$data['value'] = $this->student_demands_model->viewReceivedOffer($id);
		$this->load->view('student/demands/view_received_offer', $data);	
	}

	
	public function is_student_status()
	{
		$this->db->set('is_student', $this->input->post('is_student'));
		$data = $this->db->where('id', $this->input->post('id'));
		$data = $this->db->update('offer_send');

		if (!empty($this->input->post('is_student')) == '1') 
		{
			 $this->session->set_flashdata('success', 'Offer successfully accepted');
		}
		else
		{
			 $this->session->set_flashdata('success', 'Offer successfully rejected');
		}
       
		echo json_encode($data);
	}




}