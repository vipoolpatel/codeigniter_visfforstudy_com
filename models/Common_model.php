<?php
if (!defined('BASEPATH')) {
	exit('No direct script access allowed');
}

class Common_model extends CI_Model {
	function __construct() {
		parent::__construct();
	}

	public function timezone(){
		if(empty($this->session->userdata('timezone')))
		{
			try {
			    $ip     = $_SERVER['REMOTE_ADDR'];
				$json   = file_get_contents( 'http://ip-api.com/json/' . $ip);
				$ipData = json_decode( $json, true);

				if(!empty($ipData['timezone']))
				{
					$this->session->set_userdata(array('timezone' => $ipData['timezone']));
					date_default_timezone_set($ipData['timezone']);	
				}
			}
			catch (Exception $e) {
			   
			}
		}	
		else
		{
			date_default_timezone_set($this->session->userdata('timezone'));	
		}
	}

	public function curl_request_big_bluebutton($meet_name, $code,$id_,$duration)
    {
    	$getbluebutton = $this->db->where('id',1);
    	$getbluebutton = $this->db->get('bigbluebutton')->row();

        $set_name = urlencode($meet_name);


        $string = "createname=".$set_name."&duration=".$duration."&meetingID=".$code."&attendeePW=".$id_."&moderatorPW=".$code."";
        $salt = $getbluebutton->salt;
        $sha = sha1($string.$salt);
        $link = "name=".$set_name."&duration=".$duration."&meetingID=".$code."&attendeePW=".$id_."&moderatorPW=".$code."&checksum=".$sha;
        $final_url = ''.$getbluebutton->url.'api/create?'.$link;
    
        $curl = curl_init();
        curl_setopt_array($curl, array(
        CURLOPT_URL => $final_url,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS => "",
        CURLOPT_HTTPHEADER => array(
            "cache-control: no-cache",
            ),
        ));
        $response = curl_exec($curl);
        $err = curl_error($curl);
        curl_close($curl);
        if ($err) {
            echo "cURL Error #:" . $err;
        } else {
            return $response;
        }  
    }

	public function sendEmail($to, $subject, $htmlMessage) {
		$this->load->library('email');
		$this->load->helper('email');


		$config = array(
		    'protocol'  => 'smtp',
		    'smtp_host' => 'smtp.mailtrap.io',
		    'smtp_port' => 2525,
		    'smtp_user' => '68a2f1b36dd521',
		    'smtp_pass' => '8cd41ba70e2e5b',
		    'mailtype'  => 'html',
		    'charset'   => 'utf-8'
		);	


		$this->email->initialize($config);
	    $this->email->set_mailtype("html");
	    $this->email->set_newline("\r\n");
	    $this->email->to($to);
	    $this->email->from('hardikdayani1@gmail.com', 'CI402');
	    $this->email->subject($subject);
	    $this->email->message($htmlMessage);
	    @$this->email->send();

	}

	public function sendEmailCC($to, $subject, $htmlMessage, $cc = '') {
		$this->load->library('email');
		$this->load->helper('email');


		$config = array(
		    'protocol'  => 'smtp',
		    'smtp_host' => 'smtp.mailtrap.io',
		    'smtp_port' => 2525,
		    'smtp_user' => '68a2f1b36dd521',
		    'smtp_pass' => '8cd41ba70e2e5b',
		    'mailtype'  => 'html',
		    'charset'   => 'utf-8'
		);	
		
		$this->email->initialize($config);
		$this->email->set_mailtype("html");
	    $this->email->set_newline("\r\n");
		$this->email->from('hardikdayani1@gmail.com', 'VISF For Study');
		$this->email->to($to);
		if (!empty($cc)) {
			$this->email->cc($cc);
		}
		$this->email->subject($subject);
		$this->email->message($htmlMessage);
		@$this->email->send();
	}

	public function sendEmailAttachment($to, $subject, $htmlMessage, $pdf_name = '') {
		$this->load->library('email');
		$this->load->helper('email');
		$config = array(
		    'protocol'  => 'smtp',
		    'smtp_host' => 'smtp.mailtrap.io',
		    'smtp_port' => 2525,
		    'smtp_user' => '68a2f1b36dd521',
		    'smtp_pass' => '8cd41ba70e2e5b',
		    'mailtype'  => 'html',
		    'charset'   => 'utf-8'
		);	
		
		$this->email->initialize($config);
		$this->email->set_mailtype("html");
	    $this->email->set_newline("\r\n");
		$this->email->from('hardikdayani1@gmail.com', 'VISF For Study');
		$this->email->to($to);
		$this->email->subject($subject);
		$this->email->message($htmlMessage);
		if (!empty($pdf_name)) {
			$this->email->attach($pdf_name);
		}
		@$this->email->send();
	}
    // Find a student start
	public function countFindastudent()
    {
        $this->db->select('demands.*,users.first_name,users.last_name,users.profile_pic,demand_type.demand_type_name,level_of_student.level_of_student_name,category.category_name,language.language_name');
        $this->db->from('demands');
        $this->db->join('users','users.id = demands.user_id');
        $this->db->join('demand_type', 'demand_type.id = demands.demand_type_id');
        $this->db->join('level_of_student', 'level_of_student.id = demands.level_of_student_id');
        $this->db->join('category', 'category.id = demands.category_id');
        $this->db->join('language', 'language.id = demands.language_id');

        // Search Box start
        if ($this->input->get('category_id')) 
        {
			$this->db->like('category.category_name', $this->input->get('category_id'));
		}
		if ($this->input->get('year')) 
		{
		    $this->db->like('demands.required_date', $this->input->get('year'));
		}

		if ($this->input->get('level_of_student_id')) {
			$this->db->like('demands.level_of_student_id', $this->input->get('level_of_student_id'));
		}
		if ($this->input->get('language_id')) {
			$this->db->like('demands.language_id', $this->input->get('language_id'));
		}
		if ($this->input->get('request_type_id')) {
			$this->db->like('demands.demand_type_id', $this->input->get('request_type_id'));
		}

        // Search Box end
        return $this->db->count_all_results ();

    }



	public function getFindastudent($limit = NULL, $offset = NULL)
	{
	    $this->db->select('demands.*,users.first_name,users.last_name,users.profile_pic,demand_type.demand_type_name,level_of_student.level_of_student_name,category.category_name,language.language_name');
        $this->db->from('demands');
        $this->db->join('users','users.id = demands.user_id');
        $this->db->join('demand_type', 'demand_type.id = demands.demand_type_id');
        $this->db->join('level_of_student', 'level_of_student.id = demands.level_of_student_id');
        $this->db->join('category', 'category.id = demands.category_id');
        $this->db->join('language', 'language.id = demands.language_id');
        // Search Box start
        if ($this->input->get('category_id')) 
        {
			$this->db->like('category.category_name', $this->input->get('category_id'));
		}
		if ($this->input->get('year')) {
			$this->db->like('demands.required_date', $this->input->get('year'));
		}
		if ($this->input->get('level_of_student_id')) {
			$this->db->like('demands.level_of_student_id', $this->input->get('level_of_student_id'));
		}
		if ($this->input->get('language_id')) {
			$this->db->like('demands.language_id', $this->input->get('language_id'));
		}
		if ($this->input->get('request_type_id')) {
			$this->db->like('demands.demand_type_id', $this->input->get('request_type_id'));
		}

        // Search Box end
        $this->db->where('demands.status','2');
    	$this->db->limit($limit, $offset);
        $this->db->order_by('id','desc');
        $query = $this->db->get ();
        return $query->result ();
	}

	public function getPopupLoaddataStudent($id)
	{
	    $this->db->select('demands.*,users.first_name,users.last_name,users.profile_pic,demand_type.demand_type_name,level_of_student.level_of_student_name,category.category_name,language.language_name');
        $this->db->from('demands');
        $this->db->join('users','users.id = demands.user_id');
        $this->db->join('demand_type', 'demand_type.id = demands.demand_type_id');
        $this->db->join('level_of_student', 'level_of_student.id = demands.level_of_student_id');
        $this->db->join('category', 'category.id = demands.category_id');
        $this->db->join('language', 'language.id = demands.language_id');
        $this->db->where('demands.status','2');
        $this->db->where('demands.id',$id);
        $query = $this->db->get();
        return $query->row();
	}

// Find A student End

	public function countFindatutor()
	{
  		$this->db->select('users.*,level_of_student.level_of_student_name,category.category_name,GROUP_CONCAT(language.language_name SEPARATOR ",") as language_name');
        $this->db->from('users');
        $this->db->join('level_of_student', 'level_of_student.id = users.level_of_teacher','left');
        $this->db->join('category', 'category.id = users.category_id','left');

        $this->db->join('user_language', 'user_language.user_id = users.id','left');
        $this->db->join('language', 'language.id = user_language.language_id','left');

        $this->db->where('users.is_admin','2');
        $this->db->where('users.user_status','1');   

        if($this->input->get('level_id')) {
            $this->db->where( 'users.level_of_teacher', $this->input->get('level_id'));
        }

        if ($this->input->get('category_id')) {
		     $this->db->where('users.category_id', $this->input->get('category_id'));
     	}
     	
        if ($this->input->get('language_id')) {
		     $this->db->where('user_language.language_id', $this->input->get('language_id'));
     	}
     	if ($this->input->get('category_of_teacher')) {
		     $this->db->where('category.category_name', $this->input->get('category_of_teacher'));
     	}
     
    	if($this->input->get('level_of_teacher')) {
            $this->db->where( 'users.level_of_teacher', $this->input->get('level_of_teacher'));
        }

  		// if ($this->input->get('year')) {
		// 	$this->db->like('users.created_date', $this->input->get('year'));
		// }

		// if ($this->input->get('tutor_sort')) {

			// 	if ($this->input->get('tutor_sort') == 1) {
			// 		$date = date('Y-m-d');
			// 		$this->db->like('users.created_date',$date);
			// 	}

			// 	if ($this->input->get('tutor_sort') == 2) {
			// 		 $this->db->where('users.experience_of_teacher is NOT NULL', NULL, FALSE);   
			// 	}
     	
		// }

        $this->db->group_by('users.id');
        $this->db->order_by('users.id','desc');
        $query = $this->db->get();
        return $query->num_rows();
	}

	public function getFindatutor($limit = NULL, $offset = NULL)
	{
        $this->db->select('users.*,level_of_student.level_of_student_name,category.category_name,GROUP_CONCAT(language.language_name SEPARATOR ",") as language_name');
        $this->db->from('users');
        $this->db->join('level_of_student', 'level_of_student.id = users.level_of_teacher','left');
        $this->db->join('category', 'category.id = users.category_id','left');

        $this->db->join('user_language', 'user_language.user_id = users.id','left');
        $this->db->join('language', 'language.id = user_language.language_id','left');

        $this->db->where('users.is_admin','2');
        $this->db->where('users.user_status','1');   

        if($this->input->get('level_id')) {
            $this->db->where( 'users.level_of_teacher', $this->input->get('level_id'));
        }
        if($this->input->get('level_of_teacher')) {
            $this->db->where( 'users.level_of_teacher', $this->input->get('level_of_teacher'));
        }

        if ($this->input->get('category_id')) {
		     $this->db->where('users.category_id', $this->input->get('category_id'));
     	}
     	if ($this->input->get('category_of_teacher')) {
		     $this->db->where('category.category_name', $this->input->get('category_of_teacher'));
     	}

        if ($this->input->get('language_id')) {
		     $this->db->where('user_language.language_id', $this->input->get('language_id'));
     	}

  //    	if ($this->input->get('year')) {
		// 	$this->db->like('users.created_date', $this->input->get('year'));
		// }

		// if ($this->input->get('tutor_sort')) {

		// 	if ($this->input->get('tutor_sort') == 1) {
		// 		$date = date('Y-m-d');
		// 		$this->db->like('users.created_date',$date);
		// 	}

		// 	if ($this->input->get('tutor_sort') == 2) {
		// 		 $this->db->where('users.experience_of_teacher is NOT NULL', NULL, FALSE);   
		// 	}
		// }

        $this->db->limit($limit, $offset);
        $this->db->group_by('users.id');
        $this->db->order_by('users.id','desc');
        $query = $this->db->get();
        return $query->result();
	}

	public function getCourse($id)
	{
		$this->db->select('course.*');
		$this->db->from('course');
		$this->db->where('user_id', $id);
	    $this->db->where('user_status','1');
        $this->db->where('status','2');
 		$q = $this->db->get();
        return $q->result();
	}

	public function getSubject($id)
	{
		$this->db->select('subject.*');
		$this->db->from('subject');
		$this->db->join('course','course.id = subject.course_id');
		$this->db->where('course.user_id', $id);
	    $this->db->where('course.user_status','1');
        $this->db->where('course.status','2');
 		$q = $this->db->get();
        return $q->result();
	}

	public function getUser($id)
	{
		$this->db->select('users.*,level_of_student.level_of_student_name,category.category_name');
		$this->db->from('users');
		$this->db->join('level_of_student', 'level_of_student.id = users.level_of_teacher','left');
		$this->db->join('category', 'category.id = users.category_id','left');
		$this->db->where('users.id', $id);
 		$q = $this->db->get();
        return $q->row();
	}

	public function getOffer($id)
	{
		$this->db->select('offer_send.*');
		$this->db->from('offer_send');
		$this->db->where('user_id', $id);
 		$q = $this->db->get();
        return $q->result();
	}

	public function getQulification($id)
	{
		$this->db->from('qulification');
		$this->db->where('user_id', $id);
 		$q = $this->db->get();
        return $q->result();
	}


	public function getOtherstudent($id){

		$this->db->from('users');
		$this->db->where('users.id', $id);
 		$q = $this->db->get()->row();
        
        $this->db->select('demands.*,category.category_name,language.language_name,users.profile_pic,users.first_name,users.last_name,demand_type.demand_type_name,level_of_student.level_of_student_name');

        $this->db->from('demands');
        $this->db->join('category', 'category.id = demands.category_id','left');
        $this->db->join('language', 'language.id = demands.language_id','left');
        $this->db->join('users', 'users.id = demands.user_id','left');
        $this->db->join('demand_type', 'demand_type.id = demands.demand_type_id', 'left');
        $this->db->join('level_of_student', 'level_of_student.id = demands.level_of_student_id','left');

       // $this->db->where('demands.category_id',$q->category_id);
        $this->db->where_not_in('demands.id', $id);
        $qu = $this->db->get();
        return $qu->result();

	}



	public function getHomedata(){
		 $this->db->select('users.*,qulification.university_name,qulification.degree,qulification.major,qulification.description,level_of_student.level_of_student_name,');
        $this->db->from('users');
        $this->db->join('qulification','qulification.id = users.qulification_id');
        $this->db->join('level_of_student', 'level_of_student.id = users.level_of_teacher');
        $this->db->where('users.is_admin','2');
        $this->db->where('users.user_status','1');

        
        $this->db->order_by('id','desc');
        $query = $this->db->get();
        return $query->result();
	}

	public function getDemand($id)
	{
		$this->db->select('demands.*,users.profile_pic,users.first_name,users.last_name,demand_type.demand_type_name,level_of_student.level_of_student_name,category.category_name');
		$this->db->from('demands');
		$this->db->join('users','users.id = demands.user_id');
		$this->db->join('demand_type','demand_type.id = demands.demand_type_id');
		$this->db->join('level_of_student','level_of_student.id = demands.level_of_student_id');
		$this->db->join('category','category.id = demands.category_id');

		
	//	$this->db->where('user_id', $id);
	//	$this->db->where('demands.status','2');
 	    $this->db->where('demands.id', $id);
 		$q = $this->db->get();
        return $q->row();
	}



	

}
