<?php
if (! defined ( 'BASEPATH' ))	exit ( 'No direct script access allowed' );
class Panel_offer_model extends CI_Model {
	function __construct() {
		parent::__construct ();
	}

    public function countOffer()
	{
            $this->db->select('offer_send.*,ad.first_name as tf_name,ad.last_name as tl_name ,ad.profile_pic,category.category_name,st.first_name as sf_name,st.last_name as sl_name,demands.demands_title');
            $this->db->from('offer_send');
            $this->db->join('users as ad','offer_send.user_id = ad.id');
            $this->db->join('users as st','offer_send.student_id = st.id');
            $this->db->join('category','offer_send.category_id = category.id','left');
            $this->db->join('demands','offer_send.demand_id = demands.id','left');
              if(!empty($this->input->get('status')))
            {
                  $this->db->where('offer_send.status',$this->input->get('status'));
            }
           
            return $this->db->count_all_results ();

	}

	public function getOffer($limit = NULL, $offset = NULL)
	{

            $this->db->select('offer_send.*,ad.first_name as tf_name,ad.last_name as tl_name ,ad.profile_pic,category.category_name,st.first_name as sf_name,st.last_name as sl_name,demands.demands_title');
            $this->db->from('offer_send');
            $this->db->join('users as ad','offer_send.user_id = ad.id');
            $this->db->join('users as st','offer_send.student_id = st.id');
            $this->db->join('category','offer_send.category_id = category.id','left');
            $this->db->join('demands','offer_send.demand_id = demands.id','left');
              if(!empty($this->input->get('status')))
            {
                  $this->db->where('offer_send.status',$this->input->get('status'));
            }
         
            
            $this->db->limit ( $limit, $offset );
            $this->db->order_by('id','desc');
            $query = $this->db->get ();
            return $query->result ();


	}

	public function viewOffer($id)
	{

            $this->db->select('offer_send.*,ad.first_name as tf_name,ad.last_name as tl_name ,ad.profile_pic,category.category_name,st.first_name as sf_name,st.last_name as sl_name,demands.demands_title');
            $this->db->from('offer_send');
            $this->db->join('users as ad','offer_send.user_id = ad.id');
            $this->db->join('users as st','offer_send.student_id = st.id');
            $this->db->join('category','offer_send.category_id = category.id','left');
             $this->db->join('demands','offer_send.demand_id = demands.id','left');
            $this->db->where('offer_send.id',$id);
         
            
            $query = $this->db->get();
            return $query->row();


	}

}
?>