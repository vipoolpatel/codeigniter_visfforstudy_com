<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Course extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();

		if (!$this->session->userdata('user_logged_in') || ($this->session->userdata('user_is_admin') != '2')) {
			redirect('login');
			exit();
		}

		$this->load->model('teacher/teacher_course_model', '', TRUE);
		

		$this->load->model('common_model', '', TRUE);
		$this->common_model->timezone();
	}
	
	
	public function index() {
		redirect('teacher/course/overview');
	}

	public function overview(){

		$result = $this->db->where('user_id',$this->session->userdata('user_id'));
		$result = $this->db->where('user_status','1');
		$result = $this->db->get('course')->num_rows();
		$data['course'] = $result;

		$result = $this->db->where('user_id',$this->session->userdata('user_id'));
		$result = $this->db->where('user_status','1');
		$result = $this->db->where('status','2');
		$result = $this->db->get('course')->num_rows();
		$data['publish_course'] = $result;

		$result = $this->db->where('user_id',$this->session->userdata('user_id'));
		$result = $this->db->where('user_status','1');
		$result = $this->db->where('status','1');
		$result = $this->db->get('course')->num_rows();
		$data['pending_course'] = $result;

		$this->load->view('teacher/course/overview',$data);
	}

	public function course_list(){

		    $this->load->library('pagination');

	        $total = $this->teacher_course_model->countCourse();
	        $per_page = 30;
	        $data['publish_course'] = $this->teacher_course_model->getCourse($per_page, $this->uri->segment(4));
	        $base_url = base_url(). '/teacher/course/course_list';
	        $config ['base_url'] = $base_url;
	        $config ['total_rows'] = $total;
	        $config ['per_page'] = $per_page;
	        $config ['uri_segment'] = '4';
	        $config['reuse_query_string'] = TRUE;
	        $this->pagination->initialize ( $config );
	     	$this->load->view('teacher/course/course_list',$data);
	}

	public function add_course(){


		if(!empty($_POST)){

			if (!empty($_FILES["image"]["name"])) {
				$name = $_FILES["image"]["name"];

				$image = date('ymdhis').'.jpg';

				$folder = "backed/teacher/course/";
				move_uploaded_file($_FILES["image"]["tmp_name"], $folder . $image);
				
				
				$config['image_library'] = 'gd2';
				$config['source_image'] = "backed/teacher/course/" . $image . "";
				$config['new_image'] = "backed/teacher/course/" . $image . "";
				$config['create_thumb'] = FALSE;
				$config['maintain_ratio'] = FALSE;
				$config['width'] = 200;
				$config['height'] = 200;
				$this->load->library('image_lib', $config);
				$this->image_lib->resize();
				
			} else {
				$image = '';
			} 

			if (!empty($_FILES["course_video"]["name"])) {
				$namev = $_FILES["course_video"]["name"];
				$course_video = 'video_'.date('Ymdhis') . $namev;
				$folder = "backed/teacher/course/";
				move_uploaded_file($_FILES["course_video"]["tmp_name"], $folder . $course_video);

			} else {
				$course_video = '';
			} 



			$data =  array(
				'user_id' => $this->session->userdata('user_id'),
				'category_id' => $this->input->post('category_id'),
				'course_title' => $this->input->post('course_title'),
				'image' => $image,
				'course_video' => $course_video,
				'hour_per_rate' => $this->input->post('hour_per_rate'),
				'description' => $this->input->post('description'),
				'status' => '1',
				'is_notification' => '2',
				'created_date' => date('Y-m-d H:i:s'),
			);

			$this->db->insert('course', $data);
		   	$insert_id = $this->db->insert_id();

		   	if(!empty($this->input->post('subject')))
		   	{
		   		$level_name = $this->input->post('level');

		   		foreach ($this->input->post('subject') as $key => $value) {
				    $subject = array(
				       	'subject_name' => $value,
	    		       	'level_name' => $level_name[$key],
				      	'course_id' => $insert_id,
				      	'created_date' => date('Y-m-d H:i:s'),
			        );

		       		$this->db->insert('subject',$subject);
		   		}
		   	}


	     	$lesson_date1 = $this->input->post('lesson_date'); 
	     	$lesson_time1 = $this->input->post('lesson_time');
	     	$duration = $this->input->post('duration');



            for ($i=0; $i < count($lesson_date1); $i++) { 

		        $meeting_id 	  = substr(md5(rand(100000000, 200000000)), 0, 6);
            	$meeting_password = substr(md5(rand(100000000, 200000000)), 0, 6);
            
		        $this->common_model->curl_request_big_bluebutton($this->input->post('course_title'),$meeting_id,$meeting_password,$duration[$i]);

	    		$GMT   = new DateTimeZone("GMT");
				$date  = new DateTime($lesson_date1[$i].' '.$lesson_time1[$i], $GMT );
				$date  = $date->format('Y-m-d h:i:s A');
			
				$lesson_date = strtotime($date);
				$lesson_time = strtotime($date);

		        $data1 = array(
			       	'lesson_date' => $lesson_date,
			       	'lesson_time' => $lesson_time,
			       	'duration' => $duration[$i],
			      	'course_id' => $insert_id,
			      	'meeting_id' => $meeting_id,
			      	'meeting_password' => $meeting_password,
			      	'created_date' => date('Y-m-d H:i:s'),
		        );

		        $this->db->insert('course_lesson',$data1);
		    }



			$this->session->set_flashdata('success', 'Course Successfully Created.');
			redirect(base_url().'teacher/course/view_course/'.$insert_id);
		}

		$result = $this->db->where('status','1');
        $result = $this->db->get('category')->result();
		$data['category'] = $result;

		$data['class'] = $this->db->get('class')->result();
		$this->load->view('teacher/course/add_course',$data);
	}


	public function edit_course($id){

		 if (!empty($_POST)) {
	            if (!empty($_FILES["image"]["name"])) {
          			$pic_file = date('ymdhis') . $_FILES["image"]["name"];
          			$pic_file = date('ymdhis').'.jpg';
	                $folder = "backed/teacher/course/";
	                move_uploaded_file($_FILES["image"]["tmp_name"], $folder . $pic_file);

	                $config['image_library'] = 'gd2';
					$config['source_image'] = "backed/teacher/course/" . $pic_file . "";
					$config['new_image'] = "backed/teacher/course/" . $pic_file . "";
					$config['create_thumb'] = FALSE;
					$config['maintain_ratio'] = FALSE;
					$config['width'] = 200;
					$config['height'] = 200;
					$this->load->library('image_lib', $config);
					$this->image_lib->resize();


                	if (!empty($this->input->post('old_imagename')) && file_exists('backed/teacher/course/'.$this->input->post('old_imagename'))) {
	                    unlink('backed/teacher/course/'.$this->input->post('old_imagename'));
                    }

            



	            } else {
	                $pic_file = $this->input->post('old_imagename');
	            }


	    		if (!empty($_FILES["course_video"]["name"])) {
					$namev = $_FILES["course_video"]["name"];
					$course_video = 'video_'.date('Ymdhis') . $namev;
					$folder = "backed/teacher/course/";
					move_uploaded_file($_FILES["course_video"]["tmp_name"], $folder . $course_video);

					if (!empty($this->input->post('old_videoname')) && file_exists('backed/teacher/course/'.$this->input->post('old_videoname'))) {
	                    unlink('backed/teacher/course/'.$this->input->post('old_videoname'));
                    }

				} else {
					$course_video = $this->input->post('old_videoname');;
				} 
		     
				$array = array(
					'category_id' => $this->input->post('category_id'),
				    'course_title' => $this->input->post('course_title'),
					'image' => $pic_file,
					'course_video' => $course_video,
					'hour_per_rate' => $this->input->post('hour_per_rate'),
					'available_date' =>  date('Y-m-d', strtotime($this->input->post('available_date'))),
					'start_time' => $this->input->post('start_time'),
			    	'end_time' => $this->input->post('end_time'),
					'description' => $this->input->post('description'),
				);

				$this->db->where('id', $this->input->post('id'));
				$this->db->update('course', $array);



			   	if(!empty($this->input->post('subject')))
			   	{
			   		$level_name = $this->input->post('level');
			   		$subject_id = $this->input->post('subject_id');

			   		foreach ($this->input->post('subject') as $key => $value) {

			   			if(!empty($subject_id[$key]))
			   			{
		   					$subject = array(
						       	'subject_name' => $value,
			    		       	'level_name' => $level_name[$key],
						      	'created_date' => date('Y-m-d H:i:s'),
					        );

					        $this->db->where('id',$subject_id[$key]);
		   					$this->db->update('subject',$subject);
			   			}
			   			else
			   			{
			   				$subject = array(
						       	'subject_name'  => $value,
			    		       	'level_name'	=> $level_name[$key],
						      	'course_id' 	=> $this->input->post('id'),
						      	'created_date' 	=> date('Y-m-d H:i:s'),
					        );

					        $this->db->insert('subject',$subject);
			   			}
			   		}
			   	}

	
		     	$lesson_date1 = $this->input->post('lesson_date'); 
		     	$lesson_time1 = $this->input->post('lesson_time');
		     	$duration = $this->input->post('duration');

		     	if (!empty($lesson_date1)) {
				     		
	                for ($i=0; $i < count($lesson_date1); $i++) 
				    { 

				    	$meeting_id 	  = substr(md5(rand(100000000, 200000000)), 0, 6);
            			$meeting_password = substr(md5(rand(100000000, 200000000)), 0, 6);
            
		        		$this->common_model->curl_request_big_bluebutton($this->input->post('course_title'),$meeting_id,$meeting_password,$duration[$i]);


				    	$GMT    = new DateTimeZone("GMT");
						$date   = new DateTime($lesson_date1[$i].' '.$lesson_time1[$i], $GMT );
						$date =  $date->format('Y-m-d h:i:s A');

						$lesson_date = strtotime($date);
						$lesson_time = strtotime($date);


				        $data1 = array(
					       	'lesson_date' => $lesson_date,
		    		       	'lesson_time' => $lesson_time,
		    		       	'duration' => $duration[$i],
					      	'course_id' =>$this->input->post('id'),
					      	'meeting_id' => $meeting_id,
			      			'meeting_password' => $meeting_password,
					      	'created_date' => date('Y-m-d H:i:s'),

				        );
	                    $this->db->insert('course_lesson',$data1);
					}
	            }

				$this->session->set_flashdata('success', 'Course Updated Successfully');
			
				redirect(base_url().'teacher/course/view_course/'.$this->input->post('id'));
			}

        $result = $this->db->where('id',$id);
		$result = $this->db->get('course')->row();
		$data['edit_data'] = $result;

		$result1 = $this->db->where('status','1');
        $result1 = $this->db->get('category')->result();
		$data['category'] = $result1;

		$result2 = $this->db->where('course_id',$id);
        $result2 = $this->db->get('course_lesson')->result();
		$data['course_lesson'] = $result2;


		$subject = $this->db->where('course_id',$id);
        $subject = $this->db->get('subject')->result();
		$data['subject'] = $subject;

		// $data['class'] = $this->db->get('class')->result();
		$this->load->view('teacher/course/edit_course',$data);

	} 


	public function delete_course($id){

		$get_del = $this->db->where('id', $id);
		$get_del = $this->db->get('course')->row();

		if (file_exists('backed/teacher/course/'.$get_del->image)) {
	           unlink('backed/teacher/course/' . $get_del->image);
		}

		 $this->db->where('id',$id);
		 $this->db->delete('course');
   
		 $this->session->set_flashdata('success', 'Course Delete Successfully');
		 redirect('teacher/course');
	}


	public function delete_course_lesson(){

		 $data = $this->db->where('id',$this->input->post('id'));
		 $data = $this->db->delete('course_lesson');

		 echo json_encode($data);
   
   }

   public function delete_course_subject(){
   	    $data = $this->db->where('id',$this->input->post('id'));
		$data = $this->db->delete('subject');
		echo json_encode($data);   
   }

	public function view_course($id)
	{
       $get = $this->db->where('id',$id);
       $get = $this->db->get('course')->row();

        if($get->is_notification != '2'){
			$updatedata = $this->db->set('is_notification','0');
			$updatedata = $this->db->where('id',$id);
			$updatedata = $this->db->update('course');
		}

		$result = $this->db->where('course_id',$id);
		$result = $this->db->get('course_lesson')->result();
		$data['course_lesson'] = $result;


		$subject = $this->db->where('course_id',$id);
		$subject = $this->db->get('subject')->result();
		$data['subject'] = $subject;


		$getuser = $this->db->where('id',$this->session->userdata('user_id'));
		$getuser = $this->db->get('users')->row();
		$data['getuser'] = $getuser;

		$data['value'] = $this->teacher_course_model->ViewCourse($id);
		$this->load->view('teacher/course/view_course', $data);
	}

}
?>