<?php
if (! defined ( 'BASEPATH' ))	exit ( 'No direct script access allowed' );
class Panel_student_model extends CI_Model {
	function __construct() {
		parent::__construct ();
	}



	public function countStudent()
	{
            $this->db->select('*');
            $this->db->from('users');
            $this->db->where('is_admin', '3');

            return $this->db->count_all_results();

	}

	public function getStudent($limit = NULL, $offset = NULL)
	{
            $this->db->select('*');
            $this->db->from('users');
            $this->db->where('is_admin', '3');
            $this->db->limit ( $limit, $offset );

            $this->db->order_by('id','desc');
            $query = $this->db->get();
            return $query->result();


	}
      public function getUsersData($id) {
            $this->db->where('id', $id);
            $this->db->from('users');
            $q = $this->db->get();
            return $q->row();
      }

      



}