<?php
if (! defined ( 'BASEPATH' ))	exit ( 'No direct script access allowed' );
class Student_dashboard_model extends CI_Model {
	function __construct() {
		parent::__construct ();
	}

	public function countDemand()
	{
		$this->db->from('demands');
		$this->db->where('demands.user_id', $this->session->userdata('user_id'));
    	return $this->db->count_all_results();
	}
	public function countPendingDemand()
	{
		$this->db->from('demands');
    	$this->db->where('demands.status', '1');
    	$this->db->where('demands.user_id', $this->session->userdata('user_id'));
    	$var = $this->db->get()->num_rows();
    	return $var;
	}
	public function countApprovedDemand()
	{
		$this->db->from('demands');
    	$this->db->where('demands.status', '2');
    	$this->db->where('demands.user_id', $this->session->userdata('user_id'));
    	$var = $this->db->get()->num_rows();
    	return $var;
    }

    public function countBookedOffer()
    {
    	$this->db->from('offer_send');
    	$this->db->where('offer_send.demand_id', '0');
        $this->db->where('offer_send.status', 2);
        $this->db->where('offer_send.is_student', 1);
		$this->db->where('offer_send.student_id',$this->session->userdata('user_id'));
    	$var = $this->db->get()->num_rows();
    	return $var;
    }
    public function countBookedDemand()
    {
    	$this->db->from('offer_send');
    	$this->db->where('offer_send.is_student', 1);
    	$this->db->where('offer_send.status', 2);
    	$this->db->where('offer_send.demand_id != ', '');
		$this->db->where('offer_send.student_id',$this->session->userdata('user_id'));
    	$var = $this->db->get()->num_rows();
    	return $var;
    }
    public function countBookedCourse()
    {
    	$this->db->from('order_course');
		$this->db->where('order_course.student_id', $this->session->userdata('user_id'));
    	return $this->db->count_all_results();
    }
}