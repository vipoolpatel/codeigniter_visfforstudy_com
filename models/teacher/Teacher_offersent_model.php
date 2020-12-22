<?php
if (!defined('BASEPATH')) {
	exit('No direct script access allowed');
}

class Teacher_offersent_model extends CI_Model {
	function __construct() {
		parent::__construct();
	}



    public function countOffersend(){
         $this->db->select('offer_send.*,users.first_name,users.last_name,users.profile_pic,category.category_name,users.first_name,users.last_name');
        $this->db->from('offer_send');
        $this->db->join('category', 'category.id = offer_send.category_id');
        $this->db->join('users', 'users.id = offer_send.student_id','left');
        $this->db->where('offer_send.user_id', $this->session->userdata('user_id'));
        if(!empty($this->input->get('status')))
            {
                  $this->db->where('offer_send.status',$this->input->get('status'));
            }

    
        return $this->db->count_all_results ();
    }

    public function getOffersend($limit = NULL, $offset = NULL){

        $this->db->select('offer_send.*,users.first_name,users.last_name,users.profile_pic,category.category_name,users.first_name,users.last_name');
        $this->db->from('offer_send');
        $this->db->join('category', 'category.id = offer_send.category_id');
        $this->db->join('users', 'users.id = offer_send.student_id','left');
        $this->db->where('offer_send.user_id', $this->session->userdata('user_id'));
          if(!empty($this->input->get('status')))
            {
                  $this->db->where('offer_send.status',$this->input->get('status'));
            }

        $this->db->limit ( $limit, $offset );
        $this->db->order_by('id','desc');
        $q = $this->db->get ();
        return $q->result ();
    }
  
  
    public function viewOfferSend($id){
        $this->db->select('offer_send.*,users.first_name,users.last_name,users.profile_pic,category.category_name,users.profile_pic');
        $this->db->from('offer_send');
        $this->db->join('users','users.id = offer_send.student_id');
        $this->db->join('category', 'category.id = offer_send.category_id');
        $this->db->where('offer_send.user_id', $this->session->userdata('user_id'));
    
        $this->db->where('offer_send.id', $id);
        $q = $this->db->get();
        return $q->row();
    }

}