<?php
if (!defined('BASEPATH')) {
	exit('No direct script access allowed');
}

class Student_demands_model extends CI_Model {
	function __construct() {
		parent::__construct();
	}

	public function countDemands()
	{
		$this->db->select('demands.*,users.first_name,users.last_name,demand_type.demand_type_name,level_of_student.level_of_student_name,category.category_name,users.profile_pic,language.language_name');
        $this->db->from('demands');
        $this->db->join('users', 'users.id = demands.user_id');
        $this->db->join('demand_type', 'demand_type.id = demands.demand_type_id');
        $this->db->join('language', 'language.id = demands.language_id');
        $this->db->join('level_of_student', 'level_of_student.id = demands.level_of_student_id');
        $this->db->join('category', 'category.id = demands.category_id');
        $this->db->where('demands.user_id', $this->session->userdata('user_id'));
        if(!empty($this->input->get('status')))
        {
            $this->db->where('demands.status', $this->input->get('status'));
        }   
        return $this->db->count_all_results ();
	}
	public function getDemands($limit = NULL, $offset = NULL)
	{
	    $this->db->select('demands.*,users.first_name,users.last_name,demand_type.demand_type_name,level_of_student.level_of_student_name,category.category_name,users.profile_pic,language.language_name');
        $this->db->from('demands');
        $this->db->join('users', 'users.id = demands.user_id');
        $this->db->join('demand_type', 'demand_type.id = demands.demand_type_id');
         $this->db->join('language', 'language.id = demands.language_id');
        $this->db->join('level_of_student', 'level_of_student.id = demands.level_of_student_id');
        $this->db->join('category', 'category.id = demands.category_id');
        $this->db->where('demands.user_id', $this->session->userdata('user_id'));
        if(!empty($this->input->get('status')))
        {
            $this->db->where('demands.status', $this->input->get('status'));
        }
        
        $this->db->limit ( $limit, $offset );
        $this->db->order_by('id','desc');
        $q = $this->db->get ();
        return $q->result ();
	}
	public function viewDemands($id)
    {
        $this->db->select('demands.*,users.first_name,users.last_name,demand_type.demand_type_name,level_of_student.level_of_student_name,category.category_name,users.profile_pic');
        $this->db->from('demands');
        $this->db->join('users', 'users.id = demands.user_id');
        $this->db->join('demand_type', 'demand_type.id = demands.demand_type_id');
        $this->db->join('level_of_student', 'level_of_student.id = demands.level_of_student_id');
        $this->db->join('category', 'category.id = demands.category_id');
        $this->db->where('demands.user_id', $this->session->userdata('user_id'));
        $this->db->where('demands.id', $id);
        $q = $this->db->get();
        return $q->row();

    }

    public function countReceived()
    {
         $this->db->select('offer_send.*,users.first_name,users.last_name,users.profile_pic,category.category_name,demands.demands_title');
        $this->db->from('offer_send');
        $this->db->join('users','offer_send.user_id = users.id');
        $this->db->join('category','offer_send.category_id = category.id','left');
        $this->db->join('demands','offer_send.demand_id = demands.id');
        $this->db->where('offer_send.student_id',$this->session->userdata('user_id'));
        $this->db->where('offer_send.status','2');


         
        return $this->db->count_all_results ();
    }

    public function getReceived($limit = NULL, $offset = NULL)
    {
        $this->db->select('offer_send.*,users.first_name,users.last_name,users.profile_pic,category.category_name,demands.demands_title');
        $this->db->from('offer_send');
        $this->db->join('users','offer_send.user_id = users.id');
        $this->db->join('category','offer_send.category_id = category.id','left');
        $this->db->join('demands','offer_send.demand_id = demands.id');
        $this->db->where('offer_send.student_id',$this->session->userdata('user_id'));
        $this->db->where('offer_send.status','2');

       
        $this->db->limit ( $limit, $offset );
        $this->db->order_by('id','desc');
        $q = $this->db->get ();
        return $q->result ();
    }
    public function viewReceivedOffer($id)
    {
        $this->db->select('offer_send.*,users.first_name,users.last_name,users.profile_pic,category.category_name,demands.demands_title');
        $this->db->from('offer_send');
        $this->db->join('users','offer_send.user_id = users.id');
        $this->db->join('category','offer_send.category_id = category.id','left');
        $this->db->join('demands','offer_send.demand_id = demands.id');
        $this->db->where('offer_send.id', $id);
        $q = $this->db->get();
        return $q->row();
    }


}