<?php
$this->load->view('front/header/header.php');
?>

    <link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/auth/student_register.css">
      
  </head>
  <body>
 <!-- Navbar -->
<?php
$this->load->view('front/header/menu.php');
?>

<!-- Registration-form -->
<div class="container text-center">
	<div class="col-lg-12 d-inline-block main-register">
		<h1><?=get_phrase('registration')?></h1>
		<span class="d-block mb-5"><?=get_phrase('please_choose_the_role')?></span>
		<div class="col-lg-5 student-form d-inline-block text-left">
			<?php
			$this->load->view('message.php');
			?>
			<form method="POST" action="">
			<div class="form-group">
				<label><?=get_phrase('your_first_name')?></label>
				<input type="text" name="first_name" required="" value="<?=set_value('first_name')?>" class="form-control" placeholder="<?=get_phrase('your_first_name')?>">
			</div>
			<div class="form-group">
				<label><?=get_phrase('your_email')?></label>
				<input type="email" class="form-control" required="" name="email" placeholder="<?=get_phrase('your_email')?>" value="<?=set_value('email')?>">
			</div>
			<div class="form-group">
				<label><?=get_phrase('your_password')?></label>
				<input type="password" class="form-control" name="password" required="" placeholder="<?=get_phrase('your_password')?>">
			</div>
			<div class="form-group">
				<label><?=get_phrase('your_confirm_password')?></label>
				<input type="password" class="form-control" name="confirm_password" required placeholder="<?=get_phrase('your_confirm_password')?>">
			</div>		
			<div class="form-group">
				<?php
					$firstNumber_acc = mt_rand(0, 9);
					$secondNumber_acc = mt_rand(0 ,9);
					echo $firstNumber_acc . '+' . $secondNumber_acc;
				?>
			
				<input type="hidden" name="current_captcha" value="<?=$firstNumber_acc + $secondNumber_acc?>">
				<input type="text" name="captcha" required  class="form-control" value="" placeholder="Verification Code" >
			</div>		
			<div class="form-group">
				<button class="btn" value="submit" type="submit"><?=get_phrase('sign_up')?></button>
				
				<a style="color: #FF6D6D;display: block;margin-top: 21px;" href="<?=base_url()?>login"><?=get_phrase('login')?></a>
			</div>
		</form>
		</div>
		<div class="col-lg-7 d-inline-block float-right student-material text-left">
		<div class="">
		<div class="mt-2 mb-2"><img class="img-fluid" src="<?=base_url()?>assets/auth/student_register/img/teamwork.png"><span><?=get_phrase('find_a_tutor')?></span></div>
		<div class="mt-2 mb-2"><img class="img-fluid" src="<?=base_url()?>assets/auth/student_register/img/get-hired.png"><span><?=get_phrase('book_tutor')?></span></div>
		<div class="mt-2 mb-2"><img class="img-fluid" src="<?=base_url()?>assets/auth/student_register/img/video.png"><span><?=get_phrase('online_classes')?></span></div>
		<div class="mt-2 mb-2"><img class="img-fluid" src="<?=base_url()?>assets/auth/student_register/img/book.png"><span><?=get_phrase('all_learning_material_provided_by_tutors_for_free')?></span></div>
	</div>
		</div>
	</div>
</div>
<!-- Footer -->


<?php
$this->load->view('front/header/footer.php');
 ?>


		
		<script src="<?=base_url();?>assets/auth/student_register/js/jquery-migrate-3.0.0.min.js"></script>
        <script src="assets/assets/js/jquery.backstretch.min.js"></script>
        <script src="assets/assets/js/wow.min.js"></script>
        <script src="assets/assets/js/scripts.js"></script>

  </body>
</html>
