<?php
if (! defined ( 'BASEPATH' ))	exit ( 'No direct script access allowed' );
class Panel_email_subscribe_model extends CI_Model {
	function __construct() {
		parent::__construct ();
	}



	public function countEmailSubscribe()
	{
            $this->db->select('*');
            $this->db->from('subscribe_email');
            
            return $this->db->count_all_results ();

	}
	public function getEmailSubscribe($limit = NULL, $offset = NULL)
	{

            $this->db->select('*');
            $this->db->from('subscribe_email');
            
            $this->db->limit ( $limit, $offset );
            $this->db->order_by('id','desc');
            $query = $this->db->get ();
            return $query->result ();


	}
}