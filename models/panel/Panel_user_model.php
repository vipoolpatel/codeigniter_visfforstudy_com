<?php
if (!defined('BASEPATH')) {
	exit('No direct script access allowed');
}

class Panel_user_model extends CI_Model {
	function __construct() {
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


    public function countStaff()
    {
           $this->db->from('users');
        $this->db->where('users.is_admin', '1');
        $this->db->where('users.is_staff', '1');
        
        return $this->db->count_all_results();

    }
    
    

}