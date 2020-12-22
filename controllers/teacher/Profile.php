<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Profile extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();

		if (!$this->session->userdata('user_logged_in') || ($this->session->userdata('user_is_admin') != '2')) {
			redirect('login');
			exit();
		}
		$this->load->model('teacher/teacher_profile_model', '', TRUE);
	}
	
	
	public function index() {
		redirect('teacher/profile/profile_list');
	}


	public function profile_list(){


		if (!empty($_POST)) 
		{
			if (!empty($_FILES["profile_pic"]["name"])) 
			{
				$profile_pic = $_FILES["profile_pic"]["name"];
				$array_name = explode(".", $profile_pic);
				$ext = end($array_name);
				$profile_pic = date('ymdhis') . 'teacher.' . $ext;
				$folder = "backed/uploads/profile/";
				move_uploaded_file($_FILES["profile_pic"]["tmp_name"], $folder . $profile_pic);

				$config['image_library'] = 'gd2';
				$config['source_image'] = "backed/uploads/profile/" . $profile_pic . "";
				$config['new_image'] = "backed/uploads/profile/" . $profile_pic . "";
				$config['create_thumb'] = FALSE;
				$config['maintain_ratio'] = FALSE;
				$config['width'] = 400;
				$config['height'] = 400;

				
				$this->load->library('image_lib', $config);
				$this->image_lib->resize();


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
				'first_name' => $this->input->post('first_name'),
				'last_name' => $this->input->post('last_name'),
				'profile_pic' => $profile_pic,
				'category_id' => $this->input->post('category_id'),
				'level_of_teacher' => $this->input->post('level_of_teacher'),
				'experience_of_teacher' => $this->input->post('experience_of_teacher'),
				'hour_per_rate' => $this->input->post('hour_per_rate'),
				'about_us' => !empty($this->input->post('about_us')) ? $this->input->post('about_us') : '',
			);

			$update = $this->db->where('id', $this->session->userdata('user_id'));
			$update = $this->db->update('users', $update_data);

			$delete = $this->db->where('user_id', $this->session->userdata('user_id'));
			$delete = $this->db->delete('user_language');

			foreach ($this->input->post('language_id') as $language_id) {
					$language = array(
						'language_id' => $language_id,
						'user_id' => $this->session->userdata('user_id'),
					);
					 $this->db->insert('user_language', $language);
			}

			$this->session->set_flashdata('success', 'Profile successfully updated');
		}

		 $data['getuser'] = $this->teacher_profile_model->getUsersData($this->session->userdata('user_id'));
         $data['level_of_teacher'] = $this->db->get('level_of_student')->result();
         $data['getCategory'] = $this->db->get('category')->result();

         $data['getLanguage'] = $this->db->get('language')->result();

         $getUserLanguage = $this->db->where('user_id',$this->session->userdata('user_id'));
         $getUserLanguage = $this->db->get('user_language')->result();
         $data['getUserLanguage'] = $getUserLanguage;
	
		 $this->load->view('teacher/profile/profile',$data);
	}


	public function change_password()
	{
		if (!empty($_POST)) {

			$id = $this->session->userdata('user_id');

			$data = $this->db->where('id', $id);
			$data = $this->db->get('users')->row();

			$ol_co_pass = password_verify($this->input->post('oldpass'), $data->password);

			if ($ol_co_pass == '1') {

				$password = $this->input->post('newpass');
				$cpassword = $this->input->post('passconf');

				if ($password == $cpassword) 
				{
					$s_password = password_hash($this->input->post('newpass'), PASSWORD_DEFAULT);

					$this->db->set('password', $s_password);
					$this->db->where('id', $id);
					$this->db->update('users');
					$this->session->set_flashdata('error', '');
					$this->session->set_flashdata('success', 'Password is succesfully changed');
				} 
				else 
				{
					$this->session->set_flashdata('info', 'Password and confirm password is incorrent');
				}

			} 
			else 
			{
				$this->session->set_flashdata('error', 'Your Pawssword is incorrent');
			}
		}

		$this->load->view('teacher/profile/change_password');	
	}


	public function add_qulification(){

       if(!empty($_POST)){

	      	  $data = array(
	      	  	'user_id' => $this->session->userdata('user_id'),
	      	  	'university_name' => $this->input->post('university_name'),
	      	  	'degree' => $this->input->post('degree'),
	      	  	'start_year' => date('Y-m-d', strtotime($this->input->post('start_year'))),
	      	  	'end_year' => date('Y-m-d', strtotime($this->input->post('end_year'))),
	      	  	'major' => $this->input->post('major'),
	      	  	'description' => $this->input->post('description'), 
	      	  	'created_date' => date('Y-m-d H:i:s'),
	      	  );

	      	  $this->db->insert('qulification',$data);
	      	  $last_id = $this->db->insert_id();

              $this->db->set('qulification_id',$last_id);
              $this->db->where('id',$this->session->userdata('user_id'));
              $this->db->update('users');


	      	  $this->session->set_flashdata('success', 'Qulificaiton Successfully Insert');
		    	redirect('teacher/profile/qulification_detail');
      }

	   $this->load->view('teacher/profile/add_qulification');	
	}

	public function qulification_detail(){

		    $this->load->library('pagination');
	        $total = $this->teacher_profile_model->countQulification();
	        $per_page = 40;
	        $data['qu_detail'] = $this->teacher_profile_model->getQulification($per_page, $this->uri->segment(4));
	        $base_url = base_url(). '/teacher/profile/qulification_detail';
	        $config ['base_url'] = $base_url;
	        $config ['total_rows'] = $total;
	        $config ['per_page'] = $per_page;
	        $config ['uri_segment'] = '4';
	        $this->pagination->initialize ( $config );
			$this->load->view('teacher/profile/qulification_detail',$data);	
	}

	public function delete_qulification($id){

           $this->db->where('id',$id);
           $this->db->delete('qulification');
           $this->session->set_flashdata('success', 'Qulificaiton Delete Successfully');
		   redirect('teacher/profile/qulification_detail');

	}

	public function edit_qulification($id){

		 if (!empty($_POST)) {
	          
				$array = array(

					'university_name' => $this->input->post('university_name'),
		      	  	'degree' => $this->input->post('degree'),
		      	  	'start_year' => date('Y-m-d', strtotime($this->input->post('start_year'))),
	      	     	'end_year' => date('Y-m-d', strtotime($this->input->post('end_year'))),
		      	  	'major' => $this->input->post('major'),
		      	  	'description' => $this->input->post('description'),
					

				);

				$this->db->where('id', $this->input->post('id'));
				$this->db->update('qulification', $array);

				$this->session->set_flashdata('success', 'Qulificaiton Updated Successfully');
				redirect('teacher/profile/qulification_detail');
			}
        
        $result = $this->db->where('id', $id);
        $result = $this->db->get('qulification')->row();
        $data['edit_data'] = $result;
		$this->load->view('teacher/profile/edit_qulification',$data);	

	}
}
?>