<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Classroom extends CI_Controller {

	public function __construct() {
		parent::__construct();

		if (!$this->session->userdata('user_logged_in') || ($this->session->userdata('user_is_admin') != '2')) {
			redirect('login');
			exit();
		}
	}

	public function index() {

		$data['class_list'] = $this->db->get('class')->result(); 
		$this->load->view('teacher/classroom/classroom',$data);
	}

	public function classroom_list(){
         $this->load->view('teacher/classroom/classroom_list');
	}

	public function class_create(){

		if(!empty($_POST)){

			$data =  array(
				'class_name' => $this->input->post('class_name'), 
				'created_date' => date('Y-m-d H:i:s'),
			);

			$this->db->insert('class', $data);
			$this->session->set_flashdata('success', 'Class Successfully Insert');
			redirect('teacher/classroom');
			
		}
	}


	public function class_delete($id){

		$this->db->where('id',$id);
		$this->db->delete('class');
		$this->session->set_flashdata('success', 'Class Delete Successfully');
		redirect('teacher/classroom');
	}

	public function edit_class(){

		$data = $this->db->where('id',$this->input->post('id'));
		$data = $this->db->get('class')->row();

		echo json_encode($data);
	}

	public function class_update(){

		 $this->db->set('class_name',$this->input->post('class_name'));
		 $this->db->where('id',$this->input->post('id'));
		 $this->db->update('class');
		 $this->session->set_flashdata('success', 'Class Successfully Update');
	     redirect('teacher/classroom');

	}

}