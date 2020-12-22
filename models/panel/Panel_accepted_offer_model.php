<?php
if (!defined('BASEPATH')) {
	exit('No direct script access allowed');
}

class Panel_accepted_offer_model extends CI_Model {
	function __construct() {
		parent::__construct();
	}

	public function countAcceptedOffer()
    {
      $this->db->select('offer_send.*,admin.first_name as teacher_first_name,admin.last_name as teacher_last_name,student.first_name as student_first_name,student.last_name as student_last_name,category.category_name,users.profile_pic');
      $this->db->from('offer_send');
      $this->db->join('users as admin', 'offer_send.user_id = admin.id');
      $this->db->join('users as student', 'offer_send.student_id = student.id');
      $this->db->join('category', 'offer_send.category_id = category.id');
      $this->db->join('users', 'users.id = offer_send.user_id');
      $this->db->where('offer_send.demand_id', '');
      $this->db->where('offer_send.status', 2);
      $this->db->where('offer_send.is_student', 1);
      return $this->db->count_all_results ();
    }


    public function getAcceptedOffer($limit = NULL, $offset = NULL)
    {
        $this->db->select('offer_send.*,admin.first_name as teacher_first_name,admin.last_name as teacher_last_name,student.first_name as student_first_name,student.last_name as student_last_name,category.category_name,users.profile_pic,users.first_name,users.last_name');
        $this->db->from('offer_send');
        $this->db->join('users as admin', 'offer_send.user_id = admin.id');
        $this->db->join('users as student', 'offer_send.student_id = student.id');
        $this->db->join('category', 'offer_send.category_id = category.id');
        $this->db->join('users', 'users.id = offer_send.user_id');
        $this->db->where('offer_send.demand_id', '');
        $this->db->where('offer_send.status', 2);
        $this->db->where('offer_send.is_student', 1);
        $this->db->limit ( $limit, $offset );
        $this->db->order_by('id','desc');
        $q = $this->db->get ();
        return $q->result ();
    }

     public function viewAcceptedOffer($id)
    {
        $this->db->select('offer_send.*,admin.first_name as teacher_first_name,admin.last_name as teacher_last_name,student.first_name as student_first_name,student.last_name as student_last_name,category.category_name,users.profile_pic,users.first_name,users.last_name');
        $this->db->from('offer_send');
        $this->db->join('users as admin', 'offer_send.user_id = admin.id');
        $this->db->join('users as student', 'offer_send.student_id = student.id');
        $this->db->join('category', 'offer_send.category_id = category.id');
        $this->db->join('users', 'users.id = offer_send.user_id');
        $this->db->where('offer_send.is_student', 1);
        $this->db->where('offer_send.id', $id);
        $q = $this->db->get();
        return $q->row();
    }

    public function countAcceptedDemandOffer()
    {
        $this->db->select('offer_send.*,admin.first_name as teacher_first_name,admin.last_name as teacher_last_name,student.first_name as student_first_name,student.last_name as student_last_name,category.category_name,demands.demands_title,users.profile_pic,users.first_name,users.last_name');
        $this->db->from('offer_send');
        $this->db->join('users as admin', 'offer_send.user_id = admin.id');
        $this->db->join('users as student', 'offer_send.student_id = student.id');
        $this->db->join('category', 'offer_send.category_id = category.id');
        $this->db->join('demands', 'offer_send.demand_id = demands.id');
        $this->db->join('users', 'users.id = offer_send.user_id');
        $this->db->where('offer_send.is_student', 1);
        $this->db->where('offer_send.status', 2);
        return $this->db->count_all_results ();
    }

    public function getAcceptedDemandOffer($limit = NULL, $offset = NULL)
    {
        $this->db->select('offer_send.*,admin.first_name as teacher_first_name,admin.last_name as teacher_last_name,student.first_name as student_first_name,student.last_name as student_last_name,category.category_name,demands.demands_title,users.profile_pic,users.first_name,users.last_name');
        $this->db->from('offer_send');
        $this->db->join('users as admin', 'offer_send.user_id = admin.id');
        $this->db->join('users as student', 'offer_send.student_id = student.id');
        $this->db->join('category', 'offer_send.category_id = category.id');
        $this->db->join('demands', 'offer_send.demand_id = demands.id');
        $this->db->join('users', 'users.id = offer_send.user_id');
        $this->db->where('offer_send.is_student', 1);
        $this->db->where('offer_send.status', 2);
        $this->db->limit ( $limit, $offset );
        $this->db->order_by('id','desc');
        $q = $this->db->get ();
        return $q->result ();
    }

     public function viewAcceptedDemandOffer($id)
    {
        $this->db->select('offer_send.*,admin.first_name as teacher_first_name,admin.last_name as teacher_last_name,student.first_name as student_first_name,student.last_name as student_last_name,category.category_name,demands.demands_title,users.profile_pic,users.first_name,users.last_name');
        $this->db->from('offer_send');
        $this->db->join('users as admin', 'offer_send.user_id = admin.id');
        $this->db->join('users as student', 'offer_send.student_id = student.id');
        $this->db->join('category', 'offer_send.category_id = category.id');
        $this->db->join('demands', 'offer_send.demand_id = demands.id');
        $this->db->join('users', 'users.id = offer_send.user_id');
        $this->db->where('offer_send.is_student', 1);
        $this->db->where('offer_send.status', 2);
        $this->db->where('offer_send.id', $id);
        $q = $this->db->get();
        return $q->row();
    }


}