
<?php
if (!defined('BASEPATH')) {
	exit('No direct script access allowed');
}

class Login_Model extends CI_Model {
	function __construct() {
		parent::__construct();
	}

	public function get_user_data_from_email($email) {
		$this->db->select('*');
		$this->db->from('users');
		$this->db->where('email', $email);
		$query = $this->db->get();
		if ($query->num_rows() > 0) {
			return $ret = $query->row();
		}
	}

	public function get_user_hash_from_email($email) {

		$this->db->select('password');
		$this->db->from('users');
		$this->db->where('email', $email);
		$query = $this->db->get();
		if ($query->num_rows() > 0) {
			$ret = $query->row();
			return $ret->password;
		}
	}

	public function check_email_verify_onlogin() {
		$this->db->select('*');
		$this->db->from('users');
		$this->db->where('email', $this->input->post('email'));
		$this->db->where('user_status', 1);
		$query = $this->db->get();
		return $query->num_rows();
	}

}