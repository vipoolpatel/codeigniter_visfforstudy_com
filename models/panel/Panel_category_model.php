<?php
if (! defined ( 'BASEPATH' )) exit ( 'No direct script access allowed' );
class Panel_category_model extends CI_Model {
      function __construct() {
            parent::__construct ();
      }



      public function countCategory()
      {
            $this->db->select('*');
            $this->db->from('category');
           
            return $this->db->count_all_results ();

      }

      public function getCategory($limit = NULL, $offset = NULL)
      {
            $this->db->select('category.*,cat.category_name as parent_category_name');
            $this->db->from('category');
            $this->db->join('category as cat', 'cat.id = category.parent_id','left');
            $this->db->limit ( $limit, $offset );

            $this->db->order_by('id','desc');
            $query = $this->db->get ();
            return $query->result ();


      }


}