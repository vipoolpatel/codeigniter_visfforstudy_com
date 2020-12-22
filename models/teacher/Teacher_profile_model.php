<?php
if (!defined('BASEPATH')) {
	exit('No direct script access allowed');
}

class Teacher_profile_model extends CI_Model {
	function __construct() {
		parent::__construct();
	}
	public function getUsersData($id) {
		$this->db->where('id', $id);
		$this->db->from('users');
		$q = $this->db->get();
		return $q->row();
	}



	public function countQulification(){

		$this->db->select('*');
        $this->db->from('qulification');
        $this->db->where('user_id',$this->session->userdata('user_id'));
        return $this->db->count_all_results ();

	}

	public function getQulification($limit = NULL, $offset = NULL){

		  $this->db->select('*');
          $this->db->from('qulification');
          $this->db->where('user_id',$this->session->userdata('user_id'));
	    
	       
	        $this->db->limit ( $limit, $offset );
	        $this->db->order_by('id','desc');
	        $q = $this->db->get ();
	        return $q->result ();
    }
}