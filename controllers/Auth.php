<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function __construct() {
		parent::__construct();

		if (!empty($this->session->userdata('user_logged_in'))) {
			redirect(base_url());
			exit();
		}

		$this->load->model('front/Login_Model', '', TRUE);
		$this->load->model('Common_model', '', TRUE);

		
	}


	
	public function signup() {

		$data['body'] = 'registration signup';

		$this->load->view('front/auth/signup', $data);
	}

	public function login()
	{
		$this->load->helper(array('form'));
		$this->load->library('form_validation');


		if (!empty($_POST)) {
			$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
			$this->form_validation->set_rules('password', 'Password', 'required|callback__checkLogin|callback__check_email_verify');
			if ($this->form_validation->run()) {
				$user_data = $this->Login_Model->get_user_data_from_email($this->input->post('email'));

				$this->session->set_userdata(array(
					'user_logged_in' => true,
					'user_id' 		 => $user_data->id,
					'user_first_name' => $user_data->first_name,
					'user_is_admin' => $user_data->is_admin,
				));

				if ($user_data->is_admin == '1' || $user_data->is_admin == '4') {
					redirect($this->config->item('panel_folder') . '/dashboard');
				}
				else if ($user_data->is_admin == '2') {
					redirect(base_url() . 'teacher/dashboard');
				}
				else if ($user_data->is_admin == '3') {
					redirect(base_url() . 'student/dashboard');
				}
			}

		}

		$data['body'] = 'registration login';
		$this->load->view('front/auth/login', $data);
	}
	
	public function forgot_password() {
		if(!empty($_POST))
		{
			$email = $this->input->post('email');
			$get = $this->db->where('email', $email);
			$get = $this->db->get('users');
			if ($get->num_rows() > 0) 
			{

				$string = '';
                $characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
                $max = strlen($characters) - 1;
                for ($i = 0; $i < 8; $i++) {
                    $string .= $characters[mt_rand(0, $max)];
                }
                
                $hashed_password = password_hash($string, PASSWORD_DEFAULT);

                $datadata = array(
                    'password' => $hashed_password,
                );

                $this->db->where('id',$get->row()->id);
                $this->db->update('users',$datadata);
                	
                $data['name'] = $get->row()->first_name;
                $data['password'] = $string;

                $htmlMessage = $this->load->view('mail/forgot_password', $data, true);

				$this->Common_model->sendEmail($this->input->post('email'), 'Forgot Password @ VISF For Study', $htmlMessage);
            	
                
                $this->session->set_flashdata('SUCCESS', 'Password successfully changed please check your email');
                redirect(base_url().'login' );

			}
		 	else 
		    {
				$this->session->set_flashdata('ERROR', 'Email id does not exist');
			}
		}


		$data['body'] = 'registration login';
		$this->load->view('front/auth/forgot_password', $data);
	}


	
	public function _check_email_verify() {
		$count = $this->Login_Model->check_email_verify_onlogin();

		if ($count == 1) {
			return TRUE;
		} else {
			$this->form_validation->set_message('_check_email_verify', get_phrase('email_address_not_verified_please_contact_admin'));
			return FALSE;
		}
	}

	public function _checkLogin() {
		$hashed_password = $this->Login_Model->get_user_hash_from_email($this->input->post('email'));
		if ($hashed_password) {
			if (password_verify($this->input->post('password'), $hashed_password)) {
				return TRUE;
			} else {
				$this->form_validation->set_message('_checkLogin', get_phrase('incorrect_email_address_or_password!'));
				return FALSE;
			}
		} else {
			$this->form_validation->set_message('_checkLogin', get_phrase('incorrect_email_address_or_password!'));
			return FALSE;
		}
	}

	public function become_student() {
		if (!empty($_POST)) {
			$this->load->library('form_validation');
			$this->form_validation->set_rules('first_name', 'First Name', 'required');
			$this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[users.email]');
			$this->form_validation->set_rules('password', 'Password', 'required');
			$this->form_validation->set_rules('confirm_password', 'Confirm Password', 'required|matches[password]');

			if ($this->form_validation->run()) {
				if ($this->input->post('current_captcha') == $this->input->post('captcha')) {
					$password = password_hash($this->input->post('password'), PASSWORD_DEFAULT);

					$array = array(
						'first_name' => $this->input->post('first_name'),
						'email' => $this->input->post('email'),
						'password' => $password,
						'is_admin' => 3,
						'created_date' => date('Y-m-d H:i:s'),
					);
					$this->db->insert('users', $array);
					$this->session->set_flashdata('SUCCESSMSGREGISTER', 'Successfull registration');
					redirect('login');
				} else {
					$this->session->set_flashdata('ERROR', 'Captcha does not match');

				}
			}
		}

		$data['body'] = 'registration student';
        $this->load->view('front/become_student/become_student', $data);
	}

	public function become_tutor() {
		if (!empty($_POST)) {
			$this->load->library('form_validation');
			$this->form_validation->set_rules('first_name', 'First Name', 'required');
			$this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[users.email]');
			$this->form_validation->set_rules('password', 'Password', 'required');
			$this->form_validation->set_rules('confirm_password', 'Confirm Password', 'required|matches[password]');

			if ($this->form_validation->run()) {
				if ($this->input->post('current_captcha') == $this->input->post('captcha')) {
					$password = password_hash($this->input->post('password'), PASSWORD_DEFAULT);

					$array = array(
						'first_name' => $this->input->post('first_name'),
						'email' => $this->input->post('email'),
						'password' => $password,
						'is_admin' => 2,
						'created_date' => date('Y-m-d H:i:s'),
					);
					$this->db->insert('users', $array);
					$this->session->set_flashdata('SUCCESSMSGREGISTER', 'Successfull registration');
					redirect('login');
				} else {
					$this->session->set_flashdata('ERROR', 'Captcha does not match');

				}
			}
		}

		$data['body'] = 'registration tutor';
        $this->load->view('front/become_tutor/become_tutor', $data);
	}


    public function reset_password() {
    	$data['body'] = 'registration login';
		$this->load->view('front/auth/reset_password', $data);
	}






}