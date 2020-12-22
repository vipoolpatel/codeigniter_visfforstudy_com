<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category extends CI_Controller {

	public function __construct() {
		parent::__construct();

			if (empty($this->session->userdata('user_logged_in')) || trim($this->session->userdata('user_is_admin')) == '3' || trim($this->session->userdata('user_is_admin')) == '2'){
			
			redirect('logout');
			exit();
		}
			$this->load->model('panel/panel_category_model', '', TRUE);
	}

	public function index() {
		redirect('panel/category/category_list');
		
	}



	public function category_list() {

		$this->load->library('pagination');

		$total = $this->panel_category_model->countCategory();
		$per_page = 40;
		$data['list'] = $this->panel_category_model->getCategory($per_page, $this->uri->segment(4));
		$base_url = base_url() . '/panel/category/category_list';

		$config['base_url'] = $base_url;
		$config['total_rows'] = $total;
		$config['per_page'] = $per_page;
		$config['uri_segment'] = '4';
		$this->pagination->initialize($config);

		$this->load->view('panel/category/category_list',$data);
	}




	public function add_category()
	{

		if (!empty($_POST)) {

			 $data = array(
					'parent_id' => !empty($this->input->post('parent_id')) ? $this->input->post('parent_id') : 0,
					'category_name' => !empty($this->input->post('category_name')) ? $this->input->post('category_name') : '',
					'status' => !empty($this->input->post('status')) ? $this->input->post('status') : '1',
					'created_date' => date('Y-m-d H:i:s'),
					'updated_date' => date('Y-m-d H:i:s'),
				);

				$this->db->insert('category', $data);

				$this->session->set_flashdata('SUCCESS', get_phrase('category_created_successfully'));
				redirect('panel/category/category_list');

		
	    }

		$data['category_list'] = $this->db->get('category')->result();
		$this->load->view('panel/category/add_category',$data);
	}




	public function edit_category($id)
	{

		if (!empty($_POST)) {

				$array = array(
					'parent_id' => $this->input->post('parent_id'),
					'category_name' => $this->input->post('category_name'),
					'status' => $this->input->post('status'),
					'updated_date' => date('Y-m-d H:i:s'),
				);

				$this->db->where('id', $this->input->post('id'));
				$this->db->update('category', $array);

				$this->session->set_flashdata('SUCCESS', get_phrase('category_updated_successfully'));
				redirect('panel/category/category_list');
			
		}
            

        $data['getCategory'] = $this->panel_category_model->getCategory();
        $edit_list = $this->db->where('id', $id);
		$edit_list = $this->db->get('category')->row();
		$data['edit_list'] = $edit_list;
		$this->load->view('panel/category/edit_category',$data);
	}


	public function change_status() {

		$this->db->set('status', $this->input->post('status'));
		$data = $this->db->where('id', $this->input->post('id'));
		$data = $this->db->update('category');
		if ($this->input->post('status') == '1') {
			 $this->session->set_flashdata('success', 'Category Active Successfully');
		}else{
			 $this->session->set_flashdata('success', 'Category Inactive Successfully');
		}

		echo json_encode($data);
	}

	public function delete_category($id){

		$this->db->where('parent_id',$id);
		$this->db->delete('category');

		
		$this->db->where('id',$id);
		$this->db->delete('category');
		$this->session->set_flashdata('SUCCESS', get_phrase('category_delete_successfully'));

	}

}