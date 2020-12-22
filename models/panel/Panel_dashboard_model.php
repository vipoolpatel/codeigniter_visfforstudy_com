<?php
if (!defined('BASEPATH')) {
	exit('No direct script access allowed');
}

class Panel_dashboard_model extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();
	}

	public function countAdmin()
	{
		$this->db->from('users');
		$this->db->where('users.is_admin', '1');
		$this->db->where('users.is_staff', '0');
		return $this->db->count_all_results();
	}

	public function countTeacher()
	{
		$this->db->from('users');
		$this->db->where('users.is_admin', '2');
		return $this->db->count_all_results();
	}
	public function countStudent()
    {
        $this->db->from('users');
        $this->db->where('users.is_admin', '3');
       
        return $this->db->count_all_results();
    }
    public function countCourse()
    {
    	$this->db->from('course');
    	return $this->db->count_all_results();
    }
    public function countPendingCourse()
    {
    	$this->db->from('course');
    	$this->db->where('course.status', '1');
    	return $this->db->count_all_results();
    }
    public function countApprovedCourse()
    {
    	$this->db->from('course');
    	$this->db->where('course.status', '2');
    	return $this->db->count_all_results();
    }
    public function countOffer()
    {
    	$this->db->from('offer_send');
    	return $this->db->count_all_results();
    }
    public function countPendingOffer()
    {
    	$this->db->from('offer_send');
    	$this->db->where('offer_send.status', '1');
    	return $this->db->count_all_results();
    }
    public function countApprovedOffer()
    {
    	$this->db->from('offer_send');
    	$this->db->where('offer_send.status', '2');
    	return $this->db->count_all_results();
    }
    public function countDemand()
    {
    	$this->db->from('demands');
    	return $this->db->count_all_results();
    }
    public function countPendingDemand()
    {
    	$this->db->from('demands');
    	$this->db->where('demands.status', '1');
    	return $this->db->count_all_results();
    }
    public function countApprovedDemand()
    {
    	$this->db->from('demands');
    	$this->db->where('demands.status', '2');
    	return $this->db->count_all_results();
    }
    public function countBookedCourse()
    {
    	$this->db->from('order_course');
    	return $this->db->count_all_results();
    }
    public function countBookedOffer()
    {
    	$this->db->from('offer_send');
    	$this->db->where('offer_send.demand_id', '');
        $this->db->where('offer_send.status', 2);
        $this->db->where('offer_send.is_student', 1);
    	return $this->db->count_all_results();
    }

    public function countBookedDemand()
    {
    	$this->db->from('offer_send');
        $this->db->where('demand_id !=', '');
    	$this->db->where('offer_send.is_student', 1);
        $this->db->where('offer_send.status', 2);
        return $this->db->count_all_results();
    }
    

}
?>