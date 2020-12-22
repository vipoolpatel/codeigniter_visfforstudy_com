<?php
$this->load->view('front/header/header.php');
?>
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/coursedetailsnew.css">
  </head>
  <body>
 <!-- Navbar -->
<?php
$this->load->view('front/header/menu.php');
?>
<!-- Course-page-0 -->
<div class="container-fluid course-page">
	<!-- <div class="row"> -->
		<div class="col-lg-3 col-sm-12 col-md-3 other-lectures d-inline-block p-0">
			<div class="col-lg-12 other-l-top">
				<h2>Other Lectures</h2>
			</div>
			<?php foreach ($getOtherlectures as $value3) { ?>

			<div class="col-lg-12 backgd-grey pt-4 pb-4">
				<div class="col-lg-6 col-6  col-md-12  d-inline-block">

					<?php 
					 $datas = 'backed/uploads/profile/'.$value3->profile_pic;
				        if (!empty($value3->profile_pic) && file_exists($datas)) {
				        ?>
				       <img class="img-fluid" src="<?=base_url()?>backed/uploads/profile/<?=$value3->profile_pic?>">

				        <?php } else{ ?>

						<img class="img-fluid" src="<?=base_url();?>backed/uploads/user.jpg">
						
						<?php }?>

					<!-- <img class="img-fluid" src="<?=base_url();?>assets/assets/Rectangle 132.png"> -->
				</div>
				<div class="col-lg-6 col-6 col-md-12 sm-responsive d-inline-block float-right">
					<a href="<?=base_url()?>course-detail/<?=$value3->id?>"><span>What is <?=$value3->category_of_teacher?>?</span></a>
					<p><?php 
                       if (!empty($value3->about_us)) {
                       	  echo  ($value3->about_us);
                       }else{
                          echo "I am ".$value3->category_of_teacher." teacher" ;
                       }
					   ?>

					</p>
				</div>
			</div>
				
			<?php } ?>
			
			<!-- <div class="col-lg-12 backgd-grey pt-4 pb-4">
				<div class="col-lg-6 col-6 col-md-12 d-inline-block">
					<img class="img-fluid" src="<?=base_url();?>assets/assets/Rectangle 132.png">
				</div>
				<div class="col-lg-6 col-6 col-md-12 sm-responsive d-inline-block float-right">
					<span>What is Math?</span>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
				</div>
			</div>
			<div class="col-lg-12 backgd-grey pt-4 pb-4">
				<div class="col-lg-6 col-6 col-md-12 d-inline-block">
					<img class="img-fluid" src="<?=base_url();?>assets/assets/Rectangle 132.png">
				</div>
				<div class="col-lg-6 col-6 d-inline-block col-md-12 sm-responsive float-right">
					<span>What is Math?</span>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
				</div>
			</div>
			<div class="col-lg-12 backgd-grey pt-4 pb-4">
				<div class="col-lg-6 col-6 col-md-12 d-inline-block">
					<img class="img-fluid" src="<?=base_url();?>assets/assets/Rectangle 132.png">
				</div>
				<div class="col-lg-6 col-6 d-inline-block col-md-12 sm-responsive float-right">
					<span>What is Math?</span>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
				</div>
			</div>
 -->
		</div>
		
	<div class="col-lg-9 col-sm-12 col-md-9 d-inline-block float-right">
		<div class="">
	<?php
	foreach ($getCourse as $value1) {
	
	    $datas = 'backed/teacher/course/'.$value1->image;
        if (!empty($value1->image) && file_exists($datas)) {
        ?>
        	<div class="embed-responsive embed-responsive-16by9 mt-5 mb-5">
  		<video controls allowfullscreen>
              <source id="video-id" src="<?=base_url()?>backed/teacher/course/<?=$value1->image?>" type="video/mp4">
         </video>

		</div>

 	<?php
   	} 
	}
    ?>
		<h1 class="text-center font-play mb-5">How to Solve Complex Math Problems?</h1>
		<div class="col-lg-12 features">
			<div class="form-inline form-head">
				<ul class="list-inline m-0">
					<li><a href="#">Subject</a></li>
				</ul>

			</div>
			<div class="pt-3 pb-5 pr-3 pl-3">
				<h3>Subject Name: <span><?=$getUser->category_of_teacher?></span></h3>	
				<h3>Subject Level: <span><?=$getUser->level_of_student_name?></span></h3>
			</div>
			
		</div>
		<div class="col-lg-12 features">
			<div class="form-inline form-head">
				<ul class="list-inline m-0">
					<li><a href="#">Qualification</a></li>
				</ul>

			</div>
			<?php foreach ($getQulification as $key => $value2) { 
                  if ($key != 0) { ?>
                  	<hr/> 
                  <?php } ?>
				
				 <div class="pt-3 pb-5 pr-3 pl-3">
					<h3>Duration: <span><?=date('Y.m', strtotime($value2->start_year));?> - <?=date('Y.m', strtotime($value2->end_year));?></span></h3>	
					<h3>University: <span><?=$value2->university_name?></span></h3>
					<h3>Degree:<span><?=$value2->degree?></span></h3>
					<h3>Major: <span><?=$value2->major?></span></h3>
				</div>
			<?php } ?>
			 
			 </div>
			 <br/>
		
		</div>
	</div>

	
</div>
<div class="main-teacher">
	<img class="img-fluid side" src="<?=base_url();?>assets/assets/Shape-side.png">
	<div class="col-lg-12 main-teacher-user d-inline-block text-left mt-0 mb-5">
	<div class="col-lg-4 align-top t-profile d-inline-block">

     <?php

        $datas = 'backed/uploads/profile/'.$getUser->profile_pic;
        if (!empty($getUser->profile_pic) && file_exists($datas)) {
        ?>
       <img class="img-fluid" style="width: 70%;border-radius: 50%;" src="<?=base_url()?>backed/uploads/profile/<?=$getUser->profile_pic?>">

        <?php } else{ ?>

		<img class="img-fluid"  style="width: 50%;" src="<?=base_url();?>backed/uploads/user.jpg">
		<?php }?>


	<!-- 	<div class="text-center on-sm-left">
			<button class=" capsule mt-4 mb-4">Online</button>
		</div> -->
		<div class="form-group">
			<span class="d-inline-block rating mr-3">Rating:</span>	
			<li><img class="img-fluid d-inline-block" src="<?=base_url();?>assets/assets/starr.png"></li>
			<li><img class="img-fluid d-inline-block" src="<?=base_url();?>assets/assets/starr.png"></li>
			<li><img class="img-fluid d-inline-block" src="<?=base_url();?>assets/assets/starr.png"></li>
			<li><img class="img-fluid d-inline-block" src="<?=base_url();?>assets/assets/starr.png"></li>
			<li><img class="img-fluid d-inline-block" src="<?=base_url();?>assets/assets/star11.png"></li>
		</div>
		<div class="form-group">
			<i class="fas fa-user"></i>
			<span>Repeat Students: 15</span>
		</div>
		<div class="form-group">
			<img class="img-fluid" src="<?=base_url();?>assets/assets/customer-support.jpg">
			<span>Average Reply Time: 1 Hour</span>
		</div>
		<button class="btn book-lesson">Book a Lesson</button>
		</div>
		<div class="col-lg-4  t-profile d-inline-block">
			<div class="text-left small-center">
				<div class="form-group">
				<h2 class="d-inline-block"><?=$getUser->first_name?> <?=$getUser->last_name?>
					<strong class="d-block"><?=$getUser->category_of_teacher?>  Teacher</strong>
				</h2>
					<img class="img-fluid d-inline-block ml-4 mr-2" src="<?=base_url();?>assets/assets/success.png">
					<h3 class="d-inline-block"><?=date('H:i', strtotime($getUser->created_date));?><small class="d-block"><?=date('l,d M', strtotime($getUser->created_date));?></small></h3>
				</div>
				<div class="form-group">
					<span >Hourly Rate: </span><h4 class="d-inline-block ml-3"> <?=$getUser->hour_per_rate?>$/hour</h4>
				</div>
				<p><?=$getUser->about_us?></p>
			</div>
		</div>
	</div>
</div>
<div class="feedback mb-5">
	<div class="col-lg-8 d-inline-block">
		<h4 class="ml-4 mb-5 mt-5">Students Feedback</h4>
		<div class="list-none col-lg-4 d-inline-block">
			<h5>5.4</h5>
			<li><img class="img-fluid d-inline-block" src="<?=base_url();?>assets/assets/starr.png"></li>
			<li><img class="img-fluid d-inline-block" src="<?=base_url();?>assets/assets/starr.png"></li>
			<li><img class="img-fluid d-inline-block" src="<?=base_url();?>assets/assets/starr.png"></li>
			<li><img class="img-fluid d-inline-block" src="<?=base_url();?>assets/assets/starr.png"></li>
			<li><img class="img-fluid d-inline-block" src="<?=base_url();?>assets/assets/star11.png"></li>
		</div>
		<div class="col-lg-8 list-none d-inline-block float-right">
			<div class="progress">
				<div class="progress-bar" role="progressbar" style="width: 90%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
			</div>
			<div class="progress">
				<div class="progress-bar" role="progressbar" style="width: 75%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>			
			</div>
			<div class="progress">
				<div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
			</div>
			<div class="progress">
				<div class="progress-bar" role="progressbar" style="width:35%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
			</div>
			<div class="progress">
				<div class="progress-bar" role="progressbar" style="width:10%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
			</div>
		</div>
	</div>
	<div class=" col-lg-4 float-right d-inline-block side-img p-0">
		<img class="float-right img-fluid" src="assets/Shape-stu.png">
	</div>
</div>
<div class="col-lg-10 d-inline-block comments">
	<div class="comments-tag col-lg-12 float-left">
		<h6>Comments</h6>
	</div>
	<div class="card d-inline-block">
	    <div class="card-body">
	        <div class="row">
        	    <div class="col-md-2">
        	        <img src="<?=base_url();?>assets/assets/Ellipse 17.jpg" class="img img-rounded img-fluid"/>
        	    </div>
        	    <div class="col-md-10">
        	            <h5 class="user-name float-left">Ronald Hughes</h5>
        	       <span class=" ml-3 text-secondary">12 July</span>
        	        <p>Lorem Ipsum is simply dummy text of the pr make  but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
        	            <a class="reply-btn float- btn text-white btn-danger">Reply</a>
        	    </div>
	        </div>
	        	<div class="card card-inner border-0 col-lg-10 float-right">
            	    <div class="card-body">
            	        <div class="row">
                    	    <div class="col-md-2">
                    	        <img src="<?=base_url();?>assets/assets/Ellipse 18.jpg" class="img img-rounded img-fluid"/>
                    	    </div>
                    	    <div class="col-md-10">
                    	        <h5 class="user-name float-left">Richard Sullivan</h5>
        	      				 <span class=" ml-3 text-secondary">12 July</span>
                    	        <p>Lorem Ipsum is simply dummy text of the pr make  but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                    	       		<a class="reply-btn btn text-white btn-danger">Reply</a>
                    	    </div>
            	        </div>
            	    </div>
	            </div>
	    </div>
	</div>
	<div class="card d-inline-block">
	    <div class="card-body">
	        <div class="row">
        	    <div class="col-md-2">
        	        <img src="<?=base_url();?>assets/assets/Ellipse 19.jpg" class="img img-rounded img-fluid"/>
        	    </div>
        	    <div class="col-md-10">
        	            <h5 class="user-name float-left">Walter Roberts</h5>
        	       <span class=" ml-3 text-secondary">12 July</span>
        	        <p>Lorem Ipsum is simply dummy text of the pr make  but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
        	            <a class="reply-btn float- btn text-white btn-danger">Reply</a>
        	    </div>
	        </div>
	    </div>
	</div>
	<div class="card d-inline-block">
	    <div class="card-body">
	        <div class="row">
        	    <div class="col-md-2">
        	        <img src="<?=base_url();?>assets/assets/Ellipse 20.jpg" class="img img-rounded img-fluid"/>
        	    </div>
        	    <div class="col-md-10">
        	            <h5 class="user-name float-left">Andreea Bailey</h5>
        	       <span class=" ml-3 text-secondary">12 July</span>
        	        <p>Lorem Ipsum is simply dummy text of the pr make  but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
        	            <a class="reply-btn float- btn text-white btn-danger">Reply</a>
        	    </div>
	        </div>
	    </div>
	</div>
	<div class="text-center">
		<button class="btn">See More</button>
	</div>
</div>

<?php
$this->load->view('front/header/footer.php');
?>
  </body>
</html>