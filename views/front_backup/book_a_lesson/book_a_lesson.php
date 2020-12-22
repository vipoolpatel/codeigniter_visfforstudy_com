<?php
$this->load->view('front/header/header.php');
?>
    <link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?=base_url();?>assets/css/boolalessaion.css">
        
  </head>
  <body>
 <!-- Navbar -->

<?php
$this->load->view('front/header/menu.php');
?>

	<!-- Small screen Navbar-->
<div class="lg-none mt-2 mb-2">
  	<button type="button" class="ml-4 button-s" data-toggle="collapse" data-target="#demo"><svg class="bi bi-search" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="	http://www.w3.org/2000/svg">
					<path fill-rule="evenodd" d="M10.442 10.442a1 1 0 011.415 0l3.85 3.85a1 1 0 01-1.414 1.415l-3.85-3.85a1 1 0 010-1.415z" clip-rule="evenodd"/>
					<path fill-rule="evenodd" d="M6.5 12a5.5 5.5 0 100-11 5.5 5.5 0 000 11zM13 6.5a6.5 6.5 0 11-13 0 6.5 6.5 0 0113 0z" clip-rule="evenodd"/>
					</svg>
	</button>
	<div id="demo" class="collapse mt-4">
  		<div class="input-group col-lg-3 col-xs-2">
			<input type="text" class="form-control" placeholder="<?=get_phrase('try_search_math')?>" aria-label="Recipient's username" aria-describedby="button-addon2">
			<div class="input-group-append">
				<button class="btn btn-default" type="button" id="button-addon2"><svg class="bi bi-search" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="	http://www.w3.org/2000/svg">
					<path fill-rule="evenodd" d="M10.442 10.442a1 1 0 011.415 0l3.85 3.85a1 1 0 01-1.414 1.415l-3.85-3.85a1 1 0 010-1.415z" clip-rule="evenodd"/>
					<path fill-rule="evenodd" d="M6.5 12a5.5 5.5 0 100-11 5.5 5.5 0 000 11zM13 6.5a6.5 6.5 0 11-13 0 6.5 6.5 0 0113 0z" clip-rule="evenodd"/>
					</svg>
				</button>
			</div>
		</div>
	<div class="input-group col-lg-2 col-xs-12 select-drop mt-4">
		<input type="text" class="form-control" aria-label="Text input with dropdown button" placeholder="Select level : Primary">
		<div class="input-group-append">
			<div class="dropdown">
				<button class="btn btn-default" type="button" data-toggle="dropdown">
					<svg class="bi bi-chevron-down" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
					<path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 01.708 0L8 10.293l5.646-5.647a.5.5 0 01.708.708l-6 6a.5.5 0 01-.708 0l-6-6a.5.5 0 010-.708z" clip-rule="evenodd"/>
					</svg>
				</button>
				<ul class="dropdown-menu list-inline">
					<li><a href="#"><?=get_phrase('primary')?></a></li>
					<li><a href="#"><?=get_phrase('secondary')?></a></li>
					<li><a href="#"><?=get_phrase('intermediate')?></a></li>
				</ul>
			</div>
		</div>
	</div>
  </div>
</div>

<!-- Book-lesson -->
<div class="container-fluid mt-5 mb-5">
	<div class="row">
		<div class="col-lg-4 col-md-6 d-inline-block book-lesson">
		<h2 class="mb-5"><?=get_phrase('book_your_lesson')?></h2>
		<form class="form-group line-40">
			<label><?=get_phrase('what_subjects_do_you_want_to_learn?')?></label>
			<select class="form-control">
				<option><?=get_phrase('math')?></option>
				<option><?=get_phrase('physics')?></option>
				<option><?=get_phrase('chemistry')?></option>
				<option><?=get_phrase('biology')?></option>
			</select>
			<label><?=get_phrase('whats_the_aim_for_your_booking?')?></label>
			<select class="form-control">
				<option><?=get_phrase('prepare_for_exam')?></option>
				<option><?=get_phrase('improve_the_knowledge')?></option>
				<option><?=get_phrase('to_improve_skill')?></option>
			</select>
			<label><?=get_phrase('whats_your_level?')?> </label>
			<select class="form-control">
				<option><?=get_phrase('middle')?></option>
				<option><?=get_phrase('secondary')?></option>
				<option><?=get_phrase('intermediate')?></option>
				<option><?=get_phrase('university')?></option>
			</select>
		</form>
		<div class="backgd-grey ">
			<label><?=get_phrase('whats_the_time_do_you_want_to_book?')?> </label>
				<div class="pt-3 pb-5 pr-3 pl-3">
					<div class="d-block mt-3 mb-3">
						<h3 class="d-inline-block"><?=get_phrase('teacher_available_time')?> </h3><span>10:00</span>
					</div>	
					<h3 class="d-inline-block"><?=get_phrase('i_may_have_several_other_time_available_today')?></h3> <span>13:00-14:00</span><h3 class="d-inline-block mr-2 ml-2">&</h3><span>16:00-17:00</span>
					<div class="mt-4 mb-4">
						<h3 class="mr-3"><?=get_phrase('pick_a_date')?></h3><input type="Date">
					</div>
			   </div>	
		</div>
		<div class="custom-demand mt-5 mb-5">
			<label><?=get_phrase('other_demands')?>: </label>
			<input type="text" name="" placeholder="type your demands" class="form-control">
		</div>
		<div class="text-center d-block">
			<button class="btn"><?=get_phrase('book_now')?></button>
		</div>
	</div>
		<div class="col-lg-8 col-md-6 d-inline-block our-moto float-right pt-5 pl-5 pb-5 pr-0">
			
			<div class="d-inline-block pr-3">
				<img  class="d-block img-fluid" src="<?=base_url();?>assets/assets/undraw_forgot_password_gi2d (1).jpg">
				<img src="<?=base_url();?>assets/assets/Path 19.png">
			<p>100% Satisfaction guarantee if you are not satisfied with our lesson,
we will find the other teacher for free until you are 100% satisfied.
No questions asked</p>
	<img class="img-fluid float-right" src="<?=base_url();?>assets/assets/Quote.png">
			</div>
		<div class=" col-lg-12 float-right d-inline-block side-img p-0">
		<img class="float-right img-fluid" src="<?=base_url();?>assets/assets/Shape-stu.png">
	</div>
</div>
</div>
</div>

<!-- Footer -->
<?php
$this->load->view('front/header/footer.php');
?>
  </body>
</html>