<?php
if (! defined ( 'BASEPATH' ))	exit ( 'No direct script access allowed' );
class Panel_course_model extends CI_Model {
	function __construct() {
		parent::__construct ();
	}



	public function countCourse()
	{
            $this->db->select('course.*,users.first_name,users.last_name');
            $this->db->from('course');
            $this->db->join('users','course.user_id = users.id');
            // $this->db->join('class', 'class.id = course.class_id');
            $this->db->join('category','course.category_id = category.id','left');
            if(!empty($this->input->get('status')))
            {
                  $this->db->where('course.status',$this->input->get('status'));
            }
            return $this->db->count_all_results ();

	}

	public function getCourse($limit = NULL, $offset = NULL)
	{

            $this->db->select('course.*,users.first_name,users.last_name,category.category_name');
            $this->db->from('course');
            $this->db->join('users','course.user_id = users.id');
            // $this->db->join('class', ' course.class_id = class.id');
            $this->db->join('category','course.category_id = category.id','left');
            if(!empty($this->input->get('status')))
            {
                  $this->db->where('course.status',$this->input->get('status'));
            }
            
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
            // $this->db->join('class', ' course.class_id = class.id');
            $this->db->join('category','course.category_id = category.id','left');
            
            $this->db->where('course.id', $id);
            $query = $this->db->get();
            return $query->row();
      }


}