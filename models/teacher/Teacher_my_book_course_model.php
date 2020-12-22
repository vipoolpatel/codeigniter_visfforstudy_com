<?php
if (!defined('BASEPATH')) {
	exit('No direct script access allowed');
}

class Teacher_my_book_course_model extends CI_Model {
	function __construct() {
		parent::__construct();
	}


	public function countMyBookCourse(){

		$this->db->select('order_course.*,course_lesson.lesson_date,course_lesson.lesson_time,course_lesson.duration,course.course_title,users.first_name,users.last_name,course_lesson.meeting_id,course_lesson.meeting_password');
        $this->db->from('order_course');
        $this->db->join('course_lesson','course_lesson.id = order_course.lesson_id');
        $this->db->join('course','course.id = order_course.course_id');
        $this->db->join('users','users.id = order_course.student_id');
       
       
       
        $this->db->where('order_course.user_id', $this->session->userdata('user_id'));
       

        return $this->db->count_all_results ();

	}

	public function getMyBookCourse($limit = NULL, $offset = NULL){

		$this->db->select('order_course.*,course_lesson.lesson_date,course_lesson.lesson_time,course_lesson.duration,course.course_title,users.first_name,users.last_name,course_lesson.meeting_id,course_lesson.meeting_password');
        $this->db->from('order_course');
        $this->db->join('course_lesson','course_lesson.id = order_course.lesson_id');
        $this->db->join('course','course.id = order_course.course_id');
        $this->db->join('users','users.id = order_course.student_id');
       
       
       
        $this->db->where('order_course.user_id', $this->session->userdata('user_id'));
       
        $this->db->limit ( $limit, $offset );
	    $this->db->order_by('id','desc');
	    $q = $this->db->get ();
	    return $q->result ();
    }



}