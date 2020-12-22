<?php
if (! defined ( 'BASEPATH' ))	exit ( 'No direct script access allowed' );
class Student_mybookcourse_model extends CI_Model {
	function __construct() {
		parent::__construct ();
	}



	public function countMybookcourse()
	{
             $this->db->select('order_course.*,users.first_name,users.last_name,course_lesson.lesson_date,course_lesson.lesson_time,course_lesson.duration,course.course_title,course_lesson.meeting_id,course_lesson.meeting_password');
            $this->db->from('order_course');
            $this->db->join('users','order_course.user_id = users.id');
            $this->db->join('course','order_course.course_id = course.id');
            $this->db->join('course_lesson','order_course.lesson_id = course_lesson.id');
            $this->db->where('order_course.student_id',$this->session->userdata('user_id'));

            return $this->db->count_all_results ();

	}

	public function getMybookcourse($limit = NULL, $offset = NULL)
	{
            $this->db->select('order_course.*,users.first_name,users.last_name,course_lesson.lesson_date,course_lesson.lesson_time,course_lesson.duration,course.course_title,course_lesson.meeting_id,course_lesson.meeting_password');
            $this->db->from('order_course');
            $this->db->join('users','order_course.user_id = users.id');
            $this->db->join('course','order_course.course_id = course.id');
            $this->db->join('course_lesson','order_course.lesson_id = course_lesson.id');
            $this->db->where('order_course.student_id',$this->session->userdata('user_id'));
            $this->db->limit ( $limit, $offset );
            $this->db->order_by('id','desc');
            $query = $this->db->get ();
            return $query->result ();
	}
    


}