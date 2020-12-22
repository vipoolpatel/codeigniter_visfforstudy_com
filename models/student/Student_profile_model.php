<?php
if (!defined('BASEPATH')) {
	exit('No direct script access allowed');
}

class Student_profile_model extends CI_Model {
	function __construct() {
		parent::__construct();
	}
	public function getUsersData($id) {
		$this->db->where('id', $id);
		$this->db->from('users');
		$q = $this->db->get();
		return $q->row();
	}
}
?>