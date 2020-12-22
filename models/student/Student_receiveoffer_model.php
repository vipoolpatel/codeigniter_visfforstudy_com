<?php
if (! defined ( 'BASEPATH' ))	exit ( 'No direct script access allowed' );
class Student_receiveoffer_model extends CI_Model {
	function __construct() {
		parent::__construct ();
	}



	public function countReceiveoffer()
	{
            $this->db->select('offer_send.*,users.first_name,users.last_name,users.profile_pic,category.category_name');
            $this->db->from('offer_send');
            $this->db->join('users','offer_send.user_id = users.id');
            $this->db->join('category','offer_send.category_id = category.id','left');
            $this->db->where('offer_send.student_id',$this->session->userdata('user_id'));
            $this->db->where('offer_send.status','2');
            $this->db->where('offer_send.demand_id','');
            return $this->db->count_all_results ();

	}

	public function getReceiveoffer($limit = NULL, $offset = NULL)
	{

            $this->db->select('offer_send.*,users.first_name,users.last_name,users.profile_pic,category.category_name');
            $this->db->from('offer_send');
            $this->db->join('users','offer_send.user_id = users.id');
            $this->db->join('category','offer_send.category_id = category.id','left');
            $this->db->where('offer_send.student_id',$this->session->userdata('user_id'));
            $this->db->where('offer_send.status','2');
            $this->db->where('offer_send.demand_id','');
            $this->db->limit ( $limit, $offset );
            $this->db->order_by('id','desc');
            $query = $this->db->get ();
            return $query->result ();


	}
      public function viewReceiveoffer($id)
      {

            $this->db->select('offer_send.*,users.first_name,users.last_name,users.profile_pic,category.category_name');
            $this->db->from('offer_send');
            $this->db->join('users','offer_send.user_id = users.id');
            $this->db->join('category','offer_send.category_id = category.id','left');
            $this->db->where('offer_send.student_id',$this->session->userdata('user_id'));
            $this->db->where('offer_send.status','2');
            $this->db->where('offer_send.id', $id);
            

            $q = $this->db->get();
            return $q->row();


      }


}