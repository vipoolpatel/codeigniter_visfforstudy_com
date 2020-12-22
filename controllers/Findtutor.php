<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Findtutor extends CI_Controller {

	public function __construct() {
		parent::__construct();

         $this->load->model('Common_model', '', TRUE);

         $this->per_page = 5;
		
	}

  public function index() {

     redirect('front/find_tutor/find_tutor');
	}

  public function find_tutor() {

        $this->load->library('pagination');

 
        $total = $this->Common_model->countFindatutor();
        $per_page = $this->per_page;
        $data['list'] = $this->Common_model->getFindatutor($per_page, $this->uri->segment(2));
        $base_url = base_url() . 'find-tutor';

        $config['base_url'] = $base_url;
        $config['total_rows'] = $total;
        $config['per_page'] = $per_page;
        $config['uri_segment'] = '2';
        $config['reuse_query_string'] = TRUE;
        $this->pagination->initialize($config);
   

        $data['level'] = $this->db->get('level_of_student')->result();
        $data['category'] = $this->db->get('category')->result();
        $data['language'] = $this->db->get('language')->result();

        

        $data['body'] = 'profile archive tutor';
        $this->load->view('front/find_tutor/find_tutor', $data);

  }

  public function tutor_profile($id)
  {
      $data['getCourse']  = $this->Common_model->getCourse($id);
      $data['getUser']  = $this->Common_model->getUser($id);
      $data['getOffer']  = $this->Common_model->getOffer($id);
      $data['getQulification']  = $this->Common_model->getQulification($id);
      $data['getSubject']  = $this->Common_model->getSubject($id);

     
      $data['body'] = 'profile single tutor';
      $this->load->view('front/find_tutor/tutor_profile', $data);
  }

}