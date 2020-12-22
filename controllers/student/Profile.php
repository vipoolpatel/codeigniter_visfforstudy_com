<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Profile extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();

		if (!$this->session->userdata('user_logged_in') || ($this->session->userdata('user_is_admin') != '3')) {
			redirect('login');
			exit();
		}
		$this->load->model('student/student_profile_model', '', TRUE);
	}
	
	
	public function index() {
         redirect('student/profile/profile_setting');
	}


	public function profile_setting(){
			if (!empty($_POST)) 
	     	{
	     		$profile_pic = '';
			if (!empty($_FILES["profile_pic"]["name"])) 
			{
				$profile_pic = $_FILES["profile_pic"]["name"];
				$array_name = explode(".", $profile_pic);
				$ext = end($array_name);
				$profile_pic = date('ymdhis') . 'student.' . $ext;
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
				'about_us' => $this->input->post('about_us'),
				'profile_pic' => $profile_pic,
			);

			$update = $this->db->where('id', $this->session->userdata('user_id'));
			$update = $this->db->update('users', $update_data);

			$this->session->set_flashdata('success', 'Profile successfully updated');

		}


		$data['getuser'] = $this->student_profile_model->getUsersData($this->session->userdata('user_id'));

		

		$this->load->view('student/profile/profile', $data);
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

				if ($password == $cpassword) {

					$s_password = password_hash($this->input->post('newpass'), PASSWORD_DEFAULT);

					$this->db->set('password', $s_password);
					$this->db->where('id', $id);
					$this->db->update('users');
					$this->session->set_flashdata('error', '');
					$this->session->set_flashdata('success', 'Password is succesfully changed');

				} else {
					$this->session->set_flashdata('info', 'Password and confirm password is incorrent');
				}

			} else {
				$this->session->set_flashdata('error', 'Your Pawssword is incorrent');
			}
		}

		$this->load->view('student/profile/change_password');	
	}
}
?>