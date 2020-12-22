<?php
if (! defined ( 'BASEPATH' ))	exit ( 'No direct script access allowed' );
class Panel_bookcourse_model extends CI_Model {
	function __construct() {
		parent::__construct ();
	}



	public function countBookcourse()
	{
            $this->db->select('order_course.*,ad.first_name as tf_name,ad.last_name as tl_name,st.first_name as sf_name,st.last_name as sl_name,course_lesson.lesson_date,course_lesson.lesson_time,course_lesson.duration,course.course_title,course_lesson.meeting_id,course_lesson.meeting_password');
            $this->db->from('order_course');
            $this->db->join('users as ad','order_course.user_id = ad.id');
            $this->db->join('users as st','order_course.student_id = st.id');
            $this->db->join('course','order_course.course_id = course.id');
            $this->db->join('course_lesson','order_course.lesson_id = course_lesson.id');
            return $this->db->count_all_results ();

	}

	public function getBookcourse($limit = NULL, $offset = NULL)
	{
            $this->db->select('order_course.*,ad.first_name as tf_name,ad.last_name as tl_name,st.first_name as sf_name,st.last_name as sl_name,course_lesson.lesson_date,course_lesson.lesson_time,course_lesson.duration,course.course_title,course_lesson.meeting_id,course_lesson.meeting_password');
            $this->db->from('order_course');

            $this->db->join('users as ad','order_course.user_id = ad.id');
            $this->db->join('users as st','order_course.student_id = st.id');
            $this->db->join('course','order_course.course_id = course.id');
            $this->db->join('course_lesson','order_course.lesson_id = course_lesson.id');
            $this->db->limit ( $limit, $offset );
            $this->db->order_by('id','desc');
            $query = $this->db->get ();
            return $query->result();


	}

    
}