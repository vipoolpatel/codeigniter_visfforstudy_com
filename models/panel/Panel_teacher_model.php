<?php
if (! defined ( 'BASEPATH' ))	exit ( 'No direct script access allowed' );
class Panel_teacher_model extends CI_Model {
	function __construct() {
		parent::__construct ();
	}



	public function countTeacher()
	{
            $this->db->select('*');
            $this->db->from('users');
            $this->db->where('is_admin', '2');

            return $this->db->count_all_results ();

	}

	public function getTeacher($limit = NULL, $offset = NULL)
	{
            $this->db->select('*');
            $this->db->from('users');
            $this->db->where('is_admin', '2');
            $this->db->limit ( $limit, $offset );

            $this->db->order_by('id','desc');
            $query = $this->db->get();
            return $query->result();
	}
      public function getTeacherData($id) {
            $this->db->where('id', $id);
            $this->db->from('users');
            $q = $this->db->get();
            return $q->row();
      }


}