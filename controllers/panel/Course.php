<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Course extends CI_Controller {

	public function __construct() {
		parent::__construct();

			if (empty($this->session->userdata('user_logged_in')) || trim($this->session->userdata('user_is_admin')) == '3' || trim($this->session->userdata('user_is_admin')) == '2'){
			
			redirect('logout');
			exit();
		}
			$this->load->model('panel/panel_course_model', '', TRUE);
	}

	public function index() {
		redirect('panel/course/course_list');
		
	}
	public function course_list() {

		$this->load->library('pagination');

        $total = $this->panel_course_model->countCourse();
        $per_page = 30;
        $data['list'] = $this->panel_course_model->getCourse($per_page, $this->uri->segment(4));
        $base_url = base_url(). '/panel/course/course_list';
        $config ['base_url'] = $base_url;
        $config ['total_rows'] = $total;
        $config ['per_page'] = $per_page;
        $config ['uri_segment'] = '4';
        $config['reuse_query_string'] = TRUE;
        $this->pagination->initialize ( $config );

		$this->load->view('panel/course/course_list',$data);
	}



	public function add_course() {

		if(!empty($_POST)){

			if (!empty($_FILES["image"]["name"])) {
				$name = $_FILES["image"]["name"];
				$image = date('ymdhis').'.jpg';
				$folder = "backed/teacher/course/";
				move_uploaded_file($_FILES["image"]["tmp_name"], $folder . $image);


				$config['image_library'] = 'gd2';
				$config['source_image'] = "backed/teacher/course/" . $image . "";
				$config['new_image'] = "backed/teacher/course/" . $image . "";
				$config['create_thumb'] = FALSE;
				$config['maintain_ratio'] = FALSE;
				$config['width'] = 200;
				$config['height'] = 200;
				$this->load->library('image_lib', $config);
				$this->image_lib->resize();

			} else {
				$image = '';
			} 

			$data =  array(
				'user_id' => $this->session->userdata('user_id'),
				'class_id' => $this->input->post('class'),
				'category_id' => $this->input->post('category_id'),
				'course_title' => $this->input->post('course_title'),
				'image' => $image,
                // 'image_type' => $image_type,
				'hour_per_rate' => $this->input->post('hour_per_rate'),
				'available_date' => date('Y-m-d', strtotime($this->input->post('available_date'))),
				'start_time' => $this->input->post('start_time'),
				'end_time' => $this->input->post('end_time'),
				'description' => $this->input->post('description'),
				'status' => '1',
				'user_status' => $this->input->post('user_status'),
				'created_date' => date('Y-m-d H:i:s'),
			);

			$this->db->insert('course', $data);
			$this->session->set_flashdata('success', 'Course Successfully Insert');
			redirect('panel/course/course_list');
		}
        
        $result = $this->db->where('status','1');
        $result = $this->db->get('category')->result();
		$data['category'] = $result;
		
		$data['class'] = $this->db->get('class')->result();
		$this->load->view('panel/course/add_course',$data);
	}





	public function edit_course($id) {

		 if (!empty($_POST)) {
		 	
	            if (!empty($_FILES["image"]["name"])) {
          			$pic_file = date('ymdhis') . $_FILES["image"]["name"];
          			$pic_file = date('ymdhis').'.jpg';
	                $folder = "backed/teacher/course/";
	                move_uploaded_file($_FILES["image"]["tmp_name"], $folder . $pic_file);

	                $config['image_library'] = 'gd2';
					$config['source_image'] = "backed/teacher/course/" . $pic_file . "";
					$config['new_image'] = "backed/teacher/course/" . $pic_file . "";
					$config['create_thumb'] = FALSE;
					$config['maintain_ratio'] = FALSE;
					$config['width'] = 200;
					$config['height'] = 200;
					$this->load->library('image_lib', $config);
					$this->image_lib->resize();


                	if (file_exists('backed/teacher/course/'.$this->input->post('old_imagename'))) {
	                    unlink('backed/teacher/course/'.$this->input->post('old_imagename'));
                    }

	            } else {
	                $pic_file = $this->input->post('old_imagename');
	            }
 
				$array = array(

					'class_id' => $this->input->post('class'),
					'category_id' => $this->input->post('category_id'),
				    'course_title' => $this->input->post('course_title'),
					'image' => $pic_file,
					'hour_per_rate' => $this->input->post('hour_per_rate'),
					'available_date' =>  date('Y-m-d', strtotime($this->input->post('available_date'))),
					'start_time' => $this->input->post('start_time'),
			    	'end_time' => $this->input->post('end_time'),
			    	'user_status' => $this->input->post('user_status'),
					'description' => $this->input->post('description'),
			
				);

				$this->db->where('id', $this->input->post('id'));
				$this->db->update('course', $array);

				$this->session->set_flashdata('success', 'Course Updated Successfully');
				redirect('panel/course');
			}

        $result = $this->db->where('id',$id);
		$result = $this->db->get('course')->row();
		$data['edit_data'] = $result;
        
        $result1 = $this->db->where('status','1');
        $result1 = $this->db->get('category')->result();
		$data['category'] = $result1;

		$data['class'] = $this->db->get('class')->result();
		$this->load->view('panel/course/edit_course',$data);
	}


	public function change_status(){

		if ($this->input->post('status') == '2' || $this->input->post('status') == '3') {
			 $this->db->set('is_notification', '1');
		}

		$this->db->set('status', $this->input->post('status'));
		$data = $this->db->where('id', $this->input->post('id'));
		$data = $this->db->update('course');

		if ($this->input->post('status') == '2') {
			 $this->session->set_flashdata('success', 'Course Approved Successfully');
		}else if($this->input->post('status') == '3'){
			 $this->session->set_flashdata('success', 'Course Reject Successfully');
		}

		echo json_encode($data);
	}


	public function user_status(){



		$this->db->set('user_status', $this->input->post('status'));
		$data = $this->db->where('id', $this->input->post('id'));
		$data = $this->db->update('course');

		if ($this->input->post('status') == '1') {
			 $this->session->set_flashdata('success', 'Course Active Successfully');
		}else{
			 $this->session->set_flashdata('success', 'Course Inactive Successfully');
		}

		echo json_encode($data);
	}


	public function delete_course($id)
	{


		$get_del = $this->db->where('id', $id);
		$get_del = $this->db->get('course')->row();

		if (file_exists('backed/teacher/course/'.$get_del->image)) {
	           unlink('backed/teacher/course/' . $get_del->image);
		}
		
		$this->db->where('id',$id);
        $this->db->delete('course');
     
        $this->session->set_flashdata('success', 'Course Deleted Successfully');
        redirect('panel/course');
	}

	public function view_course($id)
	{

		$updatedata = $this->db->set('is_notification','0');
		$updatedata = $this->db->where('id',$id);
		$updatedata = $this->db->update('course');


		$result = $this->db->where('course_id',$id);
		$result = $this->db->get('course_lesson')->result();
		$data['course_lesson'] = $result;

		$subject = $this->db->where('course_id', $id);
		$subject = $this->db->get('subject')->result();
		$data['subject'] = $subject;

		$data['value'] = $this->panel_course_model->viewCourse($id);
		$this->load->view('panel/course/view_course', $data);
	}
	
	
}