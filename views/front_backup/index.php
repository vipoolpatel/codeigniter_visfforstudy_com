
<?php
$this->load->view('front/header/header.php');
?>

<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/auth/style.css">
<link rel="stylesheet" href="<?=base_url()?>assets/assets/assets/css/animate.css">
<link rel="stylesheet" href="<?=base_url()?>assets/assets/assets/css/carousel.css">

  </head>
  <body>
 <!-- Navbar -->
	<?php
	$this->load->view('front/header/menu.php');
	?>



<!-- Section -->
<div class="jumbotron text-center mb-0">
	<div class="d-inline-block">
		<h1>Learn on your Schedule</h1> 
		<p>Study any topic,anywhere,anytime</p> 
		<form action="<?=base_url()?>find-a-tutor" method="get" name="submitData">
			<div class="input-group">

				<input type="text" class="form-control" size="50" placeholder="Try search 'Math'" 
				 name="category_of_teacher" value="<?=!empty($this->input->get('category_of_teacher')) ? $this->input->get('category_of_teacher') : ''?>">

				<button type="submit" class="btn" value="Search"><svg class="bi bi-search" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
					<path fill-rule="evenodd" d="M10.442 10.442a1 1 0 011.415 0l3.85 3.85a1 1 0 01-1.414 1.415l-3.85-3.85a1 1 0 010-1.415z" clip-rule="evenodd"/>
					<path fill-rule="evenodd" d="M6.5 12a5.5 5.5 0 100-11 5.5 5.5 0 000 11zM13 6.5a6.5 6.5 0 11-13 0 6.5 6.5 0 0113 0z" clip-rule="evenodd"/>
					</svg>
				</button>
			</div>		
		</form>
	</div>
</div>





<!-- Why US -->
<div class="row col-lg-12 p-0 m-0">
	<div class="col-lg-7 why-us container-fluid text-left">
		<h2 class="mb-4 text-center">Five Reasons to Choose Us</h2>
		<div class="d-inline-block">
			<img class="img-fluid mr-5  mb-4" src="<?=base_url()?>assets/assets/school.png"><span>Career advancement and hobbies</span>
		</div>
		<div class="d-inline-block">
			<img class="img-fluid mr-5  mb-4" src="<?=base_url()?>assets/assets/desk.png"><span>Flexible schedule and environment</span>
		</div>
		<div class="d-inline-block">
			<img class="img-fluid mr-5  mb-4" src="<?=base_url()?>assets/assets/video (1).png"><span>More choice of course topics</span>
		</div>
		<div class="d-inline-block">
			<img class="img-fluid mr-5 mb-4" src="<?=base_url()?>assets/assets/teacher.png"><span>Qualified Teachers</span>
		</div>
		<div class="d-inline-block">
			<img class="img-fluid mr-5  mb-4" src="<?=base_url()?>assets/assets/presentation.png"><span>Large Group of Students</span>
		</div>
	</div>
	<div class="col-lg-5  p-0">
		<img class="img-fluid float-right" src="<?=base_url()?>assets/assets/Shape-10-copy-2233.png">
	</div>
</div>






<!--Top-content -->
<div class="top-content">
	<div class="container-fluid">
		<div id="carousel-example" class="carousel slide" data-ride="carousel">
			<div class="carousel-inner row w-100 mx-auto" role="listbox">




				<?php
   foreach ($get_home_data as $key =>  $value) {

   ?>
			<?php if ($key == 0) { ?>
				<div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3 active">  
			<?php } else{ ?>
			     <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3 active">  
			<?php }?>


     
					<div class="main-top">
						<!-- <button class="btn online">Online</button> -->
						<?php
			            $datas = 'backed/uploads/profile/'.$value->profile_pic;
			            if (file_exists($datas) && !empty($value->profile_pic)) {
			            ?>
			            <img class="img-fluid profile-img" src="<?=base_url()?>backed/uploads/profile/<?=$value->profile_pic?>" style="height: 275px;">
			            <?php } else{ ?>
			            <img class="img-fluid profile-img" src="<?=base_url();?>backed/uploads/user.jpg" style="height: 275px;">
			            <?php }?>
						<!-- <img class="img-fluid profile-img" src="<?=base_url()?>assets/assets/img.png"> -->
						<div class="info">
							<ul class="list-inline slick-star mt-3 mb-1">
							<h3 class="d-inline-block mr-4 mb-0"><?=$value->first_name?> <?=$value->last_name?></h3>
							<li><img class="img-fluid d-inline-block" src="<?=base_url()?>assets/assets/starr.png"></li>
							<li><img class="img-fluid d-inline-block" src="<?=base_url()?>assets/assets/starr.png"></li>
							<li><img class="img-fluid d-inline-block" src="<?=base_url()?>assets/assets/starr.png"></li>
							<li><img class="img-fluid d-inline-block" src="<?=base_url()?>assets/assets/starr.png"></li>
							<li><img class="img-fluid d-inline-block" src="<?=base_url()?>assets/assets/star11.png"></li>
							</ul>
							<sup><?=$value->category_of_teacher?> Teacher</sup>
							<span class="d-block mt-3">Average Reply Time : <small>1 Hour</small></span>
							<span class="d-block mb-3">Repeat Students: <small>15</small></span>
							<h4 class="d-inline-block"> <?=date('H:i', strtotime($value->created_date));?></h4>
							<h3 class="d-inline-block mr-2 ml-2 custom-rate">Rate per Hour</h3>
							<h5 class="d-inline-block"><?=$value->hour_per_rate?>$</h5>
							<sub><?=date('l,d M', strtotime($value->created_date));?></sub>
							<!-- <p><?=$value->description?></p> -->
							<div class="text-center">
								<a href="<?=base_url();?>course-detail/<?=$value->id?>"><button class="btn btn-default" id="view_pro">View Profile</button></a>	
							</div>
						</div>
					</div>
				</div>

				<?php } ?>



			</div>
			<a class="carousel-control-prev mt-4 mb-4" href="#carousel-example" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"><i class="fas fa-chevron-left"></i></span>
			<span class="sr-only">Previous</span>
			</a>
			<a class="carousel-control-next mt-4 mb-4" href="#carousel-example" role="button" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"><i class="fas fa-chevron-right"></i></span>
			<span class="sr-only">Next</span>
			</a>
		</div>
	</div>
</div>





<!-- As Teacher -->
<div class="as-teacher row p-0 m-0 mt-5 pt-5">
	<div class="col-lg-5 p-0 d-inline-block">
		<img class="img-fluid float-left" src="<?=base_url()?>assets/assets/Shape-side.png">
	</div>
	<div class="col-lg-7 float-right d-inline-block join-teacher">
		<a href="<?=base_url()?>find-a-tutor"><button class="capsule">Join as Teacher</button></a>
	</div>
<div class="col-lg-12 teacher-content p-0">
	<div class="col-lg-5 p-0">
		<img class="img-fluid float-left" src="<?=base_url()?>assets/assets/Shape-10-copys.png">
	</div>
	<div class="col-lg-7 float-right pt-5 mt-5 feature">
		<div class="key-points-t">
			<div class="mt-2 mb-2"><img class="img-fluid" src="<?=base_url()?>assets/assets/teamwork.png"><span>Free Registration</span></div>
			<div class="mt-2 mb-2"><img class="img-fluid" src="<?=base_url()?>assets/assets/get-hired.png"><span>Access thousands of Students for Free</span></div>
			<div class="mt-2 mb-2"><img class="img-fluid" src="<?=base_url()?>assets/assets/video.png"><span>Free Online Classes</span></div>
			<div class="mt-2 mb-2"><img class="img-fluid" src="<?=base_url()?>assets/assets/book.png"><span>Payment Guaranteed for Each lecture</span></div>
		</div>
		<div class="join-as-t">
			<a href="<?=base_url()?>find-a-tutor"><button class="btn as-tutor">Join as Tutor</button></a>
		</div>
	</div>
</div>
</div>





<!-- As Student -->
<div class="as-student d-inline-block row p-0 m-0">
	<div class="col-lg-12 text-center">
		<a href="<?=base_url()?>find-a-student"><button class="capsule">Join as Student</button></a>
	</div>
	<div class="col-lg-12 p-0">
	<div class="col-lg-7 d-inline-block pt-5 mt-5 feature feature-stu">
		<div class="key-points-s">
			<div class="mt-2 mb-2"><img class="img-fluid" src="<?=base_url()?>assets/assets/teamwork.png"><span>Find a Tutor</span></div>
			<div class="mt-2 mb-2"><img class="img-fluid" src="<?=base_url()?>assets/assets/get-hired.png"><span>Book Tutor</span></div>
			<div class="mt-2 mb-2"><img class="img-fluid" src="<?=base_url()?>assets/assets/video.png"><span>Online Classes </span></div>
			<div class="mt-2 mb-2"><img class="img-fluid" src="<?=base_url()?>assets/assets/book.png"><span>All learning material provided by tutors for Free</span></div>
		</div>
	
		<div class="join-as-t">
				<a href="<?=base_url()?>find-a-student"><button class="btn as-tutor">Join as Students</button></a>
		</div>
	</div>
	<div class="col-lg-5 d-inline-block float-right learning">
		<img class="img-fluid float-right" src="<?=base_url()?>assets/assets/undraw_learning_2q1h.png">
	</div>
</div>
</div>





<!-- About Us -->
<div class="col-lg-12 pr-0 main-about">
	<div class="col-lg-9 about text-center">
		<button class="capsule mb-5">Live Chat</button>
		<img class="img-fluid" src="<?=base_url()?>assets/assets/live.jpg">
	</div>
	<div class="col-lg-3 p-0 float-right about-side">
		<img class="img-fluid float-right" src="<?=base_url()?>assets/assets/Shape-stu.png">
	</div>
</div>
<div class="col pl-0 d-inline-block about-content">
<div class="col-lg-6 p-0 d-inline-block">
	<img class="img-fluid" src="<?=base_url()?>assets/assets/Shape-about.png">
</div>
<div class="col-lg-6 d-inline-block about-info">
	<div class="d-inline-block mb-5">
		<button class="capsule">About Us</button>
	</div>
	<p>Visitor Education is an online education company with head-
quarters in the UK(Sheffield) and a presence in China (Beijing).
We aim to provide a professional online tutoring platform and 
allow students to excel by offering tutoring 
   and educational support programs.</p>
</div>
</div>
<!-- Footer -->





<?php
$this->load->view('front/header/footer.php');
?>


		<script src="<?=base_url()?>assets/assets/assets/js/jquery-migrate-3.0.0.min.js"></script>
		<script src="<?=base_url()?>assets/assets/assets/js/jquery.backstretch.min.js"></script>
        <script src="<?=base_url()?>assets/assets/assets/js/wow.min.js"></script>
        <script src="<?=base_url()?>assets/assets/assets/js/scripts.js"></script>
		
  </body>
</html>