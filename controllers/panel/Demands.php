<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Demands extends CI_Controller {

	public function __construct() {
		parent::__construct();

		if (empty($this->session->userdata('user_logged_in')) || trim($this->session->userdata('user_is_admin')) == '3' || trim($this->session->userdata('user_is_admin')) == '2'){
			
			redirect('logout');
			exit();
		}
		$this->load->model('panel/panel_demands_model', '', TRUE);

		$this->load->model('common_model', '', TRUE);
		$this->common_model->timezone();

	}

	public function index() {
		redirect('panel/demands/demand_list');
	}

	public function demand_list(){
		$this->load->library('pagination');

        $total = $this->panel_demands_model->countDemands();
        $per_page = 40;
        $data['list'] = $this->panel_demands_model->getDemands($per_page, $this->uri->segment(4));
        $base_url = base_url(). '/panel/demands/demand_list';
        $config ['base_url'] = $base_url;
        $config ['total_rows'] = $total;
        $config ['per_page'] = $per_page;
        $config ['uri_segment'] = '4';
      	$config['reuse_query_string'] = TRUE;
        $this->pagination->initialize ( $config );

		$this->load->view('panel/demands/demands', $data);
	}

	public function change_status(){
		
		if ($this->input->post('status') == '2' || $this->input->post('status') == '3') {
			$this->db->set('is_notification', '1');
		}


		$this->db->set('status', $this->input->post('status'));
		$data = $this->db->where('id', $this->input->post('id'));
		$data = $this->db->update('demands');
		
		$this->session->set_flashdata('success', 'Status successfully changed.');

		echo json_encode($data);
	}

	public function add_demands()
	{
		if (!empty($_POST)) {
			
			$data = array(
                'user_id' => $this->session->userdata('user_id'),
				'demand_type_id' => !empty($this->input->post('demand_type_id')) ? $this->input->post('demand_type_id') : '',
				'level_of_student_id'=> !empty($this->input->post('level_of_student_id')) ? $this->input->post('level_of_student_id') : '',
				'category_id' => !empty($this->input->post('category_id')) ? $this->input->post('category_id') : '',
				'required_date'=> date('Y-m-d', strtotime($this->input->post('required_date'))),
				'start_time'=> !empty($this->input->post('start_time')) ? $this->input->post('start_time') : '',
				'end_time'=> !empty($this->input->post('end_time')) ? $this->input->post('end_time') : '',
				'demands_title' =>  !empty($this->input->post('demands_title')) ? $this->input->post('demands_title') : '',
				'rate_per_hour' => !empty($this->input->post('rate_per_hour')) ? $this->input->post('rate_per_hour') : '0',
				'demands_description' => !empty($this->input->post('demands_description')) ? $this->input->post('demands_description') : '',
				'status' => '1',
				'created_date' => date('Y-m-d H:i:s'), 
				 

			);

			    $this->db->insert('demands', $data);
				$this->session->set_flashdata('success', 'Demand Created Successfully');
				redirect('panel/demands');
		}

		$data['demandsTypeList'] = $this->db->get('demand_type')->result();
		$data['LevelofStudent'] = $this->db->get('level_of_student')->result();

		$result = $this->db->where('status','1');
        $result = $this->db->get('category')->result();
		$data['DemandSubject'] = $result;
		$this->load->view('panel/demands/add_demands',$data);
	}

	public function edit_demands($id)
	{
		if(!empty($_POST))
        {
            $data = array(
                'demand_type_id' => !empty($this->input->post('demand_type_id')) ? $this->input->post('demand_type_id') : '',
				'level_of_student_id'=> !empty($this->input->post('level_of_student_id')) ? $this->input->post('level_of_student_id') : '',
				'category_id' => !empty($this->input->post('category_id')) ? $this->input->post('category_id') : '',
				'required_date'=> date('Y-m-d', strtotime($this->input->post('required_date'))),
				'start_time'=> !empty($this->input->post('start_time')) ? $this->input->post('start_time') : '',
				'end_time'=> !empty($this->input->post('end_time')) ? $this->input->post('end_time') : '',
				'demands_title' =>  !empty($this->input->post('demands_title')) ? $this->input->post('demands_title') : '',
				'rate_per_hour' => !empty($this->input->post('rate_per_hour')) ? $this->input->post('rate_per_hour') : '0',
				'demands_description' => !empty($this->input->post('demands_description')) ? $this->input->post('demands_description') : '',
				'created_date' => date('Y-m-d H:i:s'),         
            );

            $this->db->where('id',$this->input->post('id'));
            $this->db->update('demands',$data);

            $this->session->set_flashdata('success', 'Demand Updated Successfully');
             redirect('panel/demands');
        }



		$data['demandsTypeList'] = $this->db->get('demand_type')->result();
		$data['LevelofStudent'] = $this->db->get('level_of_student')->result();
		
		$result = $this->db->where('status','1');
        $result = $this->db->get('category')->result();
		$data['DemandSubject'] = $result;

		$get = $this->db->where('id',$id);
        $get = $this->db->get('demands')->row();
		$data['edit_data'] = $get;

        $this->load->view('panel/demands/edit_demands', $data);
	}
	public function delete_demands($id)
	{
		$this->db->where('id',$id);
        $this->db->delete('demands');
     
        $this->session->set_flashdata('success', 'Demands Deleted Successfully');
        redirect('panel/demands');
	}

	public function view_demands($id)
	{

        $updatedata = $this->db->set('is_notification','0');
		$updatedata = $this->db->where('id',$id);
		$updatedata = $this->db->update('demands');

		$data['value'] = $this->panel_demands_model->viewDemands($id);
		$this->load->view('panel/demands/view_demands', $data);	
	}

	

}