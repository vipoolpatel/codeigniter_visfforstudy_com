<?php
if (! defined ( 'BASEPATH' ))	exit ( 'No direct script access allowed' );
class Student_course_model extends CI_Model {
	function __construct() {
		parent::__construct ();
	}



	public function countCourse()
	{
            $this->db->select('course.*,users.first_name,users.last_name,category.category_name');
            $this->db->from('course');
            $this->db->join('users','course.user_id = users.id');
            // $this->db->join('class', 'class.id = course.class_id');
            $this->db->join('category','course.category_id = category.id','left');
            $this->db->where('course.user_status','1');
            $this->db->where('course.status','2');

            return $this->db->count_all_results ();

	}

	public function getCourse($limit = NULL, $offset = NULL)
	{

            $this->db->select('course.*,users.first_name,users.last_name,category.category_name');
            $this->db->from('course');
            $this->db->join('users','course.user_id = users.id');
            // $this->db->join('class', 'class.id = course.class_id');
            $this->db->join('category','course.category_id = category.id','left');
            $this->db->where('course.user_status','1');
            $this->db->where('course.status','2');

            
            $this->db->limit ( $limit, $offset );
            $this->db->order_by('id','desc');
            $query = $this->db->get ();
            return $query->result ();


	}
      public function viewCourse($id)
      {

            $this->db->select('course.*,users.first_name,users.last_name,category.category_name,users.profile_pic');
            $this->db->from('course');
            $this->db->join('users','course.user_id = users.id');
            // $this->db->join('class', 'class.id = course.class_id');
            $this->db->join('category','course.category_id = category.id','left');
            $this->db->where('course.id', $id);
            $this->db->where('course.user_status','1');
            $this->db->where('course.status','2');

            $q = $this->db->get();
            return $q->row();


      }


}