<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Offersent extends CI_Controller {

	public function __construct() {
		parent::__construct();

		if (!$this->session->userdata('user_logged_in') || ($this->session->userdata('user_is_admin') != '2')) {
			redirect('login');
			exit();
		}
		$this->load->model('teacher/teacher_offersent_model', '', TRUE);

		$this->load->model('common_model', '', TRUE);
		$this->common_model->timezone();
	}

	public function index() {
		redirect('teacher/offersent/add_offer');
	}

	public function add_offer(){
		if (!empty($_POST)) {
			$GMT    = new DateTimeZone("GMT");
			$date   = new DateTime($this->input->post('required_date').' '.$this->input->post('start_time'), $GMT );
			$date =  $date->format('Y-m-d h:i:s A');

			$lesson_date = strtotime($date);
			$lesson_time = strtotime($date);


	    	$meeting_id 	  = substr(md5(rand(100000000, 200000000)), 0, 6);
			$meeting_password = substr(md5(rand(100000000, 200000000)), 0, 6);
            
			$this->common_model->curl_request_big_bluebutton($this->input->post('course_title'),$meeting_id,$meeting_password,$this->input->post('duration'));

			$data = array(
                'user_id' 			=> $this->session->userdata('user_id'),
                'title' 			=> !empty($this->input->post('title')) ? $this->input->post('title') : '',
				'category_id' 		=> !empty($this->input->post('category_id')) ? $this->input->post('category_id') : '',
				'student_id' 		=> !empty($this->input->post('student_id')) ? $this->input->post('student_id') : $this->uri->segment('4'),
				'required_date'		=> date('Y-m-d', strtotime($this->input->post('required_date'))),
				'start_time'		=> !empty($this->input->post('start_time')) ? $this->input->post('start_time') : '',
				'hour_per_rate' 	=>  !empty($this->input->post('hour_per_rate')) ? $this->input->post('hour_per_rate') : '',
				'description' 		=> !empty($this->input->post('description')) ? $this->input->post('description') : '',
				'status' 			=> '1',
				'is_notification' 	=> '2',
				'lesson_date' 		=> $lesson_date,
				'lesson_time' 		=> $lesson_time,
				'meeting_id' 		=> $meeting_id,
				'meeting_password'  => $meeting_password,
				'duration' 			=> $this->input->post('duration'),
				'created_date' 		=> date('Y-m-d H:i:s'), 
				'demand_id' 		=> !empty($this->uri->segment('5')) ? $this->uri->segment('5') : '', 
            );

		    $this->db->insert('offer_send', $data);
			$this->session->set_flashdata('success', 'Offer successfully sent.');

			redirect(base_url().'teacher/offersent/teacher_offer_send');

		}


		$result = $this->db->where('status','1');
        $result = $this->db->get('category')->result();
		$data['category'] = $result;


		$result1 = $this->db->where('is_admin','3');
        $result1 = $this->db->get('users')->result();
		$data['student'] = $result1;
  
        if (!empty($this->uri->segment('4'))) {
        	$result2 = $this->db->where('id',$this->uri->segment('4'));
            $result2 = $this->db->get('users')->row();
			$data['student1'] = $result2;
        }
	        
		$this->load->view('teacher/offersent/add_offersent',$data);
	}

	

	public function teacher_offer_send() {

		$this->load->library('pagination');

	    $total = $this->teacher_offersent_model->countOffersend();
	    $per_page = 40;
	    $data['teacher_offer_send'] = $this->teacher_offersent_model->getOffersend($per_page, $this->uri->segment(4));
	    $base_url = base_url(). '/teacher/offersent/teacher_offer_send';
	    $config ['base_url'] = $base_url;
	    $config ['total_rows'] = $total;
	    $config ['per_page'] = $per_page;
	    $config ['uri_segment'] = '4';
	    $this->pagination->initialize ( $config );

		$this->load->view('teacher/offersent/teacher_demand',$data);
	}


	public function edit_teacher_offer($id){
		if (!empty($_POST)) {

		    $GMT    = new DateTimeZone("GMT");
			$date   = new DateTime($this->input->post('required_date').' '.$this->input->post('start_time'), $GMT );
			$date =  $date->format('Y-m-d h:i:s A');

			$lesson_date = strtotime($date);
			$lesson_time = strtotime($date);
			

	    	$meeting_id 	  = substr(md5(rand(100000000, 200000000)), 0, 6);
			$meeting_password = substr(md5(rand(100000000, 200000000)), 0, 6);
            
			$this->common_model->curl_request_big_bluebutton($this->input->post('course_title'),$meeting_id,$meeting_password,$this->input->post('duration'));



			$data = array(
				'title' => !empty($this->input->post('title')) ? $this->input->post('title') : '',
                'category_id' 	=> !empty($this->input->post('category_id')) ? $this->input->post('category_id') : '',
                'student_id' 	=> !empty($this->input->post('student_id')) ? $this->input->post('student_id') : '',
				'required_date'	=> date('Y-m-d', strtotime($this->input->post('required_date'))),
				'start_time'	=> !empty($this->input->post('start_time')) ? $this->input->post('start_time') : '',
				'hour_per_rate' =>  !empty($this->input->post('hour_per_rate')) ? $this->input->post('hour_per_rate') : '',
				'description' 	=> !empty($this->input->post('description')) ? $this->input->post('description') : '0',
				'lesson_date' 	=> $lesson_date,
				'lesson_time' 	=> $lesson_time,
				'meeting_id' 	=> $meeting_id,
				'meeting_password' => $meeting_password,
				'duration' => $this->input->post('duration'),
			);
			
            $this->db->where('id',$this->input->post('id'));
		    $this->db->update('offer_send', $data);
			$this->session->set_flashdata('success', 'Offer successfully update.');
			redirect('teacher/offersent/teacher_offer_send');
		}

		$result = $this->db->where('status','1');
        $result = $this->db->get('category')->result();
		$data['category'] = $result;

		$result1 = $this->db->where('is_admin','3');
        $result1 = $this->db->get('users')->result();
		$data['student'] = $result1;

		$get = $this->db->where('id',$id);
        $get = $this->db->get('offer_send')->row();
		$data['edit_data'] = $get;

        $this->load->view('teacher/offersent/edit_teacher_offer',$data);
	}


	public function delete_teacher_offer($id){
		 $this->db->where('id',$id);
		 $this->db->delete('offer_send');
   
		 $this->session->set_flashdata('success', 'Offer Delete Successfully');
		 redirect('teacher/offersent/teacher_offer_send');
	}


	public function view_teacher_offer_send($id)
	{
  	    $get = $this->teacher_offersent_model->viewOfferSend($id);
        if($get->is_notification != '2')
        {
        	if ($get->status == '2') 
        	{
        		$updatedata = $this->db->set('is_notification','3');
				$updatedata = $this->db->where('id',$id);
				$updatedata = $this->db->update('offer_send');        	
        	}
        	elseif($get->status == '3')
        	{
        		$updatedata = $this->db->set('is_notification','0');
				$updatedata = $this->db->where('id',$id);
				$updatedata = $this->db->update('offer_send');
        	}
	    }
		

		$data['value'] = $get;
		$this->load->view('teacher/offersent/view_teacher_offer_send', $data);
	}
	
}
?>