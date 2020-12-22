<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct() {
		parent::__construct();

			if (empty($this->session->userdata('user_logged_in')) || trim($this->session->userdata('user_is_admin')) == '3' || trim($this->session->userdata('user_is_admin')) == '2'){
			
			redirect('logout');
			exit();
		}
		$this->load->model('panel/panel_admin_model', '', TRUE);
	}

	public function index() {
		redirect('panel/admin/admin_list');
		
	}
	public function admin_list() {
		$this->load->library('pagination');

        $total = $this->panel_admin_model->countAdmin();
        $per_page = 40;
        $data['list'] = $this->panel_admin_model->getAdmin($per_page, $this->uri->segment(4));
        $base_url = base_url(). '/panel/admin/admin_list';
        $config ['base_url'] = $base_url;
        $config ['total_rows'] = $total;
        $config ['per_page'] = $per_page;
        $config ['uri_segment'] = '4';
        $this->pagination->initialize ( $config );

		$this->load->view('panel/admin/admin_list', $data);
	}
	public function admin_profile($id)
	{
		$rows = $this->db->where('id', $id);
		$rows = $this->db->get('users')->row();
		$data['list'] = $rows;
		$this->load->view('panel/admin/admin_profile', $data);
	}
	public function admin_update($id)
	{
		if (!empty($_POST)) 
		{
			if (!empty($_FILES["profile_pic"]["name"])) 
			{
				$profile_pic = $_FILES["profile_pic"]["name"];
				$array_name = explode(".", $profile_pic);
				$ext = end($array_name);
				$profile_pic = date('ymdhis') . 'admin.' . $ext;
				$folder = "backed/uploads/profile/";
				move_uploaded_file($_FILES["profile_pic"]["tmp_name"], $folder . $profile_pic);

			
				if (!empty($this->input->post('old_imagename')) && $this->input->post('old_imagename') != "") 
				{
					if (file_exists('backed/uploads/profile/' . $this->input->post('old_imagename'))) {
						unlink('backed/uploads/profile/' . $this->input->post('old_imagename'));
					}
				}
			} 
			else 
			{
				$profile_pic = $this->input->post('old_imagename');
			}

			$update_data = array(
				'first_name' => !empty($this->input->post('first_name')) ? $this->input->post('first_name') : '',
                'last_name' => !empty($this->input->post('last_name')) ? $this->input->post('last_name') : '',
                // 'email' => !empty($this->input->post('email')) ? $this->input->post('email') : '',
                'profile_pic' => $profile_pic,

			
				
			);

			$update = $this->db->where('id', $id);
			$update = $this->db->update('users', $update_data);


			$this->session->set_flashdata('success', 'Profile successfully updated');

		}

		// $get = $this->db->where('id',$id);
  		// $get = $this->db->get('users')->row();
  		// $data['edit_data'] = $get;
		$data['edit_data'] = $this->panel_admin_model->getAdminData($id);
		$this->load->view('panel/admin/admin_update', $data);
	}
	public function add_admin()
	{


		if(!empty($_POST))
         {
         	

            $this->form_validation->set_rules('email', 'Email', 'required|is_unique[users.email]');

            if (!empty($_FILES["profile_pic"]["name"])) {
				$name = $_FILES["profile_pic"]["name"];

				$ext = end((explode(".", $name)));
				$profile_pic = date('ymdhis') . 'admin.' . $ext;
				$folder = "backed/uploads/profile/";
				move_uploaded_file($_FILES["profile_pic"]["tmp_name"], $folder . $profile_pic);

			} else {
				$profile_pic = '';
			}

            if ($this->form_validation->run() == TRUE)
            {
                $password =  password_hash('123456',PASSWORD_DEFAULT);
                $array = array(
                    'first_name' => $this->input->post('first_name'),
					'last_name' => $this->input->post('last_name'),
					'email' => $this->input->post('email'),
					'profile_pic' => $profile_pic,
                    'password'     => $password,
                    'created_date' => date('Y-m-d H:i:s'),
                    'is_admin' => '1',
                );

                $this->db->insert('users',$array);

                $this->session->set_flashdata('success', 'Profile Created Successfully');
                redirect('panel/admin/admin_list');
            }
         } 

		$this->load->view('panel/admin/add_admin');
	}

	
    public function detele_admin($id)
    {
        $get_del =  $this->db->where('id',$id);
        $get_del = $this->db->get('users')->row();
        
        if (unlink('backed/uploads/profile/' . $get_del->profile_pic)) {
         }
            $this->db->where('id',$id);
            $this->db->delete('users');
           // $this->db->update('photo',array('pic_image' => ''));

            $this->session->set_flashdata('success', 'Admin Deleted Successfully');
           redirect('panel/admin/admin_list');
    }

}