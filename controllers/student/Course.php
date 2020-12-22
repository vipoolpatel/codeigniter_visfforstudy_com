<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Course extends CI_Controller {

	public function __construct() {
		parent::__construct();

		if (!$this->session->userdata('user_logged_in') || ($this->session->userdata('user_is_admin') != '3')) {
			redirect('login');
			exit();
		}
		$this->load->model('student/student_course_model', '', TRUE);

		$this->load->model('common_model', '', TRUE);
		$this->common_model->timezone();
	}

	public function index() {
      redirect('student/course/course_list');
		
	}

	public function course_list(){

		$this->load->library('pagination');

        $total = $this->student_course_model->countCourse();
        $per_page = 30;
        $data['list'] = $this->student_course_model->getCourse($per_page, $this->uri->segment(4));
        $base_url = base_url(). '/student/course/course_list';
        $config ['base_url'] = $base_url;
        $config ['total_rows'] = $total;
        $config ['per_page'] = $per_page;
        $config ['uri_segment'] = '4';
        $this->pagination->initialize($config);
		
		
		$this->load->view('student/course/course',$data);

	}

	public function view_course($id)
	{
		$result = $this->db->where('course_id',$id);
		$result = $this->db->get('course_lesson')->result();
		$data['course_lesson'] = $result;
		
		$subject = $this->db->where('course_id',$id);
		$subject = $this->db->get('subject')->result();
		$data['subject'] = $subject;
		

		$getuser = $this->db->where('id',$this->session->userdata('user_id'));
		$getuser = $this->db->get('users')->row();
		$data['getuser'] = $getuser;

		$data['value'] = $this->student_course_model->viewCourse($id);
		$this->load->view('student/course/view_course',$data);
	}




	public function pay_now_course($id) {
		$course_lesson = $this->db->where('id',$id);
		$course_lesson = $this->db->get('course_lesson')->row();


		$getcourse = $this->db->where('id',$course_lesson->course_id);
		$getcourse = $this->db->get('course')->row();



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
        $query['item_name'] 	= $getcourse->course_title;
        $query['no_shipping'] 	= '1';
        $query['item_number'] 	= base64_encode($id);
        $query['amount'] 		= $getcourse->hour_per_rate;
        $query['currency_code'] = 'USD';
        $query['cancel_return'] = ''.base_url().'student/course/cancel_course_booking';
        $query['return'] 		= ''.base_url().'student/course/accept_course_booking';

        $query_string 			= http_build_query($query);

        header('Location: '.$paypal_url.'' . $query_string);
        exit();



	}


	public function accept_course_booking() {

		$id = base64_decode($this->input->get('item_number'));
		$course_lesson = $this->db->where('id',$id);
		$course_lesson = $this->db->get('course_lesson')->row();
        
        if (!empty($course_lesson)) {

            $status = $this->input->get('st');

	        if ($status == 'Completed') {

				$getcourse = $this->db->where('id',$course_lesson->course_id);
				$getcourse = $this->db->get('course')->row();


				$data1 =  array(
					'lesson_id' => $id,
					'course_id' => $getcourse->id,
					'student_id' => $this->session->userdata('user_id'),
					'user_id' => $getcourse->user_id, 
					'course_price' => $getcourse->hour_per_rate, 
					'created_date' => date('Y-m-d H:i:s'),
				);

				$this->db->insert('order_course',$data1);
		
        		$this->session->set_flashdata('success', 'Thank you! Payment successfully done and Course successfully booked.');
        		
    			redirect(base_url().'student/mybookcourse/my_book_course_list');   	

	        }
	        else
	        {
	    		$this->session->set_flashdata('error', 'Due to some error please try again.');
				redirect(base_url().'student/course/course_list');    	
	        }
	    }
	    else
	    {
	    	$this->session->set_flashdata('error', 'Due to some error please try again.');
			redirect(base_url().'student/course/course_list');	
	    }

	}

	public function cancel_course_booking() {
		$this->session->set_flashdata('error', 'Due to some error please try again.');
		redirect(base_url().'student/course/course_list');
	}



}