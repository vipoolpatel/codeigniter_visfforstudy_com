<?php
if (!defined('BASEPATH')) {
	exit('No direct script access allowed');
}

class Teacher_dashboard_model extends CI_Model {
	function __construct() {
		parent::__construct();
	}

	public function countTotalCourse()
	{
		$this->db->from('course');
		$this->db->where('course.user_id', $this->session->userdata('user_id'));
    	return $this->db->count_all_results();
	}
	public function countPendingCourse()
	{
		$this->db->from('course');
    	$this->db->where('course.status', '1');
    	$this->db->where('course.user_id', $this->session->userdata('user_id'));
    	$var = $this->db->get()->num_rows();
    	return $var;
	}
	
	public function countOffer()
	{
		$this->db->from('offer_send');
		$this->db->where('offer_send.user_id', $this->session->userdata('user_id'));
		$var = $this->db->get()->num_rows();
    	return $var;
	}
	public function countPendingOffer()
	{
		$this->db->from('offer_send');
		$this->db->where('offer_send.status', '1');
		$this->db->where('offer_send.user_id', $this->session->userdata('user_id'));
		$var = $this->db->get()->num_rows();
    	return $var;
	}

	public function countBookedOffer()
	{
		$this->db->from('offer_send');
		$this->db->where('offer_send.demand_id', '');
        $this->db->where('offer_send.status', 2);
        $this->db->where('offer_send.user_id',$this->session->userdata('user_id'));
		$var = $this->db->get()->num_rows();
    	return $var;
	}

	public function countBookedCourse()
	{
		$this->db->from('order_course');
		$this->db->where('order_course.user_id', $this->session->userdata('user_id'));
		return $this->db->count_all_results();
	}

	public function countApprovedCourse()
	{
		$this->db->from('course');
    	$this->db->where('course.status', '2');
    	$this->db->where('course.user_id', $this->session->userdata('user_id'));
    	$var = $this->db->get()->num_rows();
    	return $var;
	}
	public function countApprovedOffer()
	{
		$this->db->from('offer_send');
    	$this->db->where('offer_send.status', '2');
    	$this->db->where('offer_send.user_id', $this->session->userdata('user_id'));
    	$var = $this->db->get()->num_rows();
    	return $var;
	}
	public function countBookedDemand()
	{
		$this->db->from('offer_send');
		$this->db->where('demand_id !=', '');
    	$this->db->where('offer_send.is_student', 1);
        $this->db->where('offer_send.status', 2);
    	$this->db->where('offer_send.user_id', $this->session->userdata('user_id'));
    	$var = $this->db->get()->num_rows();
    	return $var;
	}

}