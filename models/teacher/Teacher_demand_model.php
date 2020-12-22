<?php
if (!defined('BASEPATH')) {
	exit('No direct script access allowed');
}

class Teacher_demand_model extends CI_Model {
	function __construct() {
		parent::__construct();
	}


	public function countDemand(){

		$this->db->select('demands.*,users.first_name,users.last_name,users.profile_pic,demand_type.demand_type_name,level_of_student.level_of_student_name,category.category_name');
        $this->db->from('demands');
        $this->db->join('users','users.id = demands.user_id');
        $this->db->join('demand_type', 'demand_type.id = demands.demand_type_id');
        $this->db->join('level_of_student', 'level_of_student.id = demands.level_of_student_id');
        $this->db->join('category', 'category.id = demands.category_id');
        $this->db->where('demands.status','2');
        // $this->db->where('category.status','1');

        return $this->db->count_all_results ();

	}

	public function getDemand($limit = NULL, $offset = NULL){

		$this->db->select('demands.*,users.first_name,users.last_name,users.profile_pic,demand_type.demand_type_name,level_of_student.level_of_student_name,category.category_name');
        $this->db->from('demands');
        $this->db->join('users','users.id = demands.user_id');
        $this->db->join('demand_type', 'demand_type.id = demands.demand_type_id');
        $this->db->join('level_of_student', 'level_of_student.id = demands.level_of_student_id');
        $this->db->join('category', 'category.id = demands.category_id');
        $this->db->where('demands.status','2');
        // $this->db->where('category.status','1');
        
	       
	        $this->db->limit ( $limit, $offset );
	        $this->db->order_by('id','desc');
	        $q = $this->db->get ();
	        return $q->result ();
    }



    public function viewDemand($id)
    {
        $this->db->select('demands.*,users.first_name,users.last_name,demand_type.demand_type_name,level_of_student.level_of_student_name,category.category_name,users.profile_pic');
        $this->db->from('demands');
        $this->db->join('users', 'users.id = demands.user_id');
        $this->db->join('demand_type', 'demand_type.id = demands.demand_type_id');
        $this->db->join('level_of_student', 'level_of_student.id = demands.level_of_student_id');
        $this->db->join('category', 'category.id = demands.category_id');
      //  $this->db->where('demands.user_id', $this->session->userdata('user_id'));
        $this->db->where('demands.id', $id);
        $q = $this->db->get();
        return $q->row();

    }
   

}