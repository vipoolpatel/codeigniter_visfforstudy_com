<?php
if (!defined('BASEPATH')) {
	exit('No direct script access allowed');
}

class Teacher_course_model extends CI_Model {
	function __construct() {
		parent::__construct();
	}



    public function countCourse()
    {
        $this->db->select('course.*,category.category_name');
        $this->db->from('course');
        // $this->db->join('class', 'class.id = course.class_id');
        $this->db->join('category','course.category_id = category.id','left');
        $this->db->where('course.user_id',$this->session->userdata('user_id'));
        $this->db->where('course.user_status','1');

         if(!empty($this->input->get('status')))
        {
              $this->db->where('course.status',$this->input->get('status'));
        }
          

        return $this->db->count_all_results ();
    }


    public function getCourse($limit = NULL, $offset = NULL)
    {
        $this->db->select('course.*,category.category_name');
        $this->db->from('course');
        // $this->db->join('class', 'class.id = course.class_id');
        $this->db->join('category','course.category_id = category.id','left');
        $this->db->where('user_id',$this->session->userdata('user_id'));
        $this->db->where('course.user_status','1');

         if(!empty($this->input->get('status')))
        {
              $this->db->where('course.status',$this->input->get('status'));
        }
          
       
        $this->db->limit ( $limit, $offset );
        $this->db->order_by('id','desc');
        $q = $this->db->get ();
        return $q->result ();
    }

    public function ViewCourse($id)
    {
        $this->db->select('course.*,category.category_name,users.first_name,users.last_name');
        $this->db->from('course');
        // $this->db->join('class', 'class.id = course.class_id');
        $this->db->join('category','course.category_id = category.id','left');
        $this->db->join('users', 'users.id = course.user_id');
        $this->db->where('course.id',$id);
        $q = $this->db->get();
        return $q->row();
       
    }



}
?>