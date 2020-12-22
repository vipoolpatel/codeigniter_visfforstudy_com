<?php
if (!defined('BASEPATH')) {
	exit('No direct script access allowed');
}

class Student_accepted_offer_model extends CI_Model {
	function __construct() {
		parent::__construct();
	}

	public function countAcceptedOffer()
    {
       $this->db->select('offer_send.*,users.first_name,users.last_name,users.profile_pic,category.category_name');
       $this->db->from('offer_send');
       $this->db->join('users', 'users.id = offer_send.user_id');
       $this->db->join('category', 'category.id = offer_send.category_id');
       $this->db->where('offer_send.status', 2);
       $this->db->where('offer_send.demand_id', '');
       $this->db->where('offer_send.is_student', 1);
       $this->db->where('offer_send.student_id',$this->session->userdata('user_id'));
       return $this->db->count_all_results ();
    }


    public function getAcceptedOffer($limit = NULL, $offset = NULL)
    {
        $this->db->select('offer_send.*,users.first_name,users.last_name,users.profile_pic,category.category_name');
        $this->db->from('offer_send');
        $this->db->join('users', 'users.id = offer_send.user_id');
        $this->db->join('category', 'category.id = offer_send.category_id');
        $this->db->where('offer_send.status', 2);
        $this->db->where('offer_send.is_student', 1);
        $this->db->where('offer_send.demand_id', '');
        $this->db->where('offer_send.student_id',$this->session->userdata('user_id'));
        $this->db->limit ( $limit, $offset );
        $this->db->order_by('id','desc');
        $q = $this->db->get ();
        return $q->result ();
    }

    public function countAcceptedDemandOffer()
    {
        $this->db->select('offer_send.*,users.first_name,users.last_name,users.profile_pic,category.category_name,demands.demands_title');
        $this->db->from('offer_send');
        $this->db->join('users', 'users.id = offer_send.user_id');
        $this->db->join('category', 'category.id = offer_send.category_id');
        $this->db->join('demands', 'demands.id = offer_send.demand_id');
        $this->db->where('offer_send.is_student', 1);
        $this->db->where('offer_send.status', 2);
        $this->db->where('offer_send.student_id',$this->session->userdata('user_id'));
        return $this->db->count_all_results ();
    }

    public function getAcceptedDemandOffer($limit = NULL, $offset = NULL)
    {
        $this->db->select('offer_send.*,users.first_name,users.last_name,users.profile_pic,category.category_name,demands.demands_title');
        $this->db->from('offer_send');
        $this->db->join('users', 'users.id = offer_send.user_id');
        $this->db->join('category', 'category.id = offer_send.category_id');
        $this->db->join('demands', 'demands.id = offer_send.demand_id');
        $this->db->where('offer_send.is_student', 1);
        $this->db->where('offer_send.status', 2);
        $this->db->where('offer_send.student_id',$this->session->userdata('user_id'));
        $this->db->limit ( $limit, $offset );
        $this->db->order_by('id','desc');
        $q = $this->db->get ();
        return $q->result ();
    }

    public function viewAcceptedDemandOffer($id)
    {
        $this->db->select('offer_send.*,users.first_name,users.last_name,users.profile_pic,category.category_name,demands.demands_title');
        $this->db->from('offer_send');
        $this->db->join('users', 'users.id = offer_send.user_id');
        $this->db->join('category', 'category.id = offer_send.category_id');
        $this->db->join('demands', 'demands.id = offer_send.demand_id');
        $this->db->where('offer_send.is_student', 1);
        $this->db->where('offer_send.id', $id);
        $this->db->where('offer_send.student_id',$this->session->userdata('user_id'));
        $q = $this->db->get();
        return $q->row();
    }

    public function viewAcceptedOffer($id)
    {
        $this->db->select('offer_send.*,users.first_name,users.last_name,users.profile_pic,category.category_name');
        $this->db->from('offer_send');
        $this->db->join('users', 'users.id = offer_send.user_id');
        $this->db->join('category', 'category.id = offer_send.category_id');
        $this->db->where('offer_send.is_student', 1);
        $this->db->where('offer_send.demand_id', '');
        $this->db->where('offer_send.id', $id);
        $this->db->where('offer_send.student_id',$this->session->userdata('user_id'));
        $q = $this->db->get();
        return $q->row();
    }
}