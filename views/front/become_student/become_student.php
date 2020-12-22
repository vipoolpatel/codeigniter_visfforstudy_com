<?php
$this->load->view('front/header/header.php');
?>


<?php
$this->load->view('front/header/menu.php');
?>

<!-- start: hero area -->
	<section class="hero-area">
		<div class="hero-bg" style="background-image: url(assets/img/banner-bg/banner-bg-7.jpg);"></div>
		<div class="hero-overlay"></div>
		<div class="container h-100">
			<div class="row align-items-center h-100">
				<!-- hero main content -->
				<div class="col-12 col-lg-7">
					<div class="hero-main-content">
						<h1 class="hero-title">Become a Student in EduVisffor</h1>
						<p class="hero-description">
							Get verified Teacher in visffor. We are always there to Support You. We Guaranty your payment. Pay for what You Want To Learn. 
						</p>
						<div class="hero-action-btn-box">
							<a href="#registrationFormSec" class="hero-action-btn register-btn scrolls">Registration now</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- end: hero area -->



	<!-- start: main content -->
	<div id="main-content" class="main-content">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<!-- start: registration features -->
					<section class="registration-features text-center">
						<div class="row">
							<div class="col-12 col-sm-6 col-lg-3 mb-4 mb-md-5 mb-lg-0">
								<div class="single-reg-feature">
									<div class="reg-feature-icon">
										<img src="assets/img/iconic-teacher.png" alt="teacher-icon">
									</div>
									<h3 class="reg-feature-label">
										Find a Tutor
									</h3>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-lg-3 mb-4 mb-md-5 mb-lg-0">
								<div class="single-reg-feature">
									<div class="reg-feature-icon">
										<i class="far fa-user"></i>
									</div>
									<h3 class="reg-feature-label">
										Book the Tutor
									</h3>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-lg-3 mb-4 mb-sm-0">
								<div class="single-reg-feature">
									<div class="reg-feature-icon">
										<img src="assets/img/iconic-free-course.png" alt="course-icon">
									</div>
									<h3 class="reg-feature-label">
										Free Online Classroom
									</h3>
								</div>
							</div>
							<div class="col-12 col-sm-6 col-lg-3 mb-0 mb-sm-0">
								<div class="single-reg-feature">
									<div class="reg-feature-icon">
										<img src="assets/img/iconic-book-open.png" alt="open-book-icon">
									</div>
									<h3 class="reg-feature-label">
										All Learning Materials Provided by Tutors for Free
									</h3>
								</div>
							</div>
						</div>
					</section>
					<!-- end: registration features -->

					<!-- start: registration form -->
					<section id="registrationFormSec" class="registration-form-sec">
						<div class="row justify-content-xl-between">
							<!-- registration form -->
<div class="col-12 col-md-10 col-lg-5 col-xl-5">
	<div class="reg-form-sec-inner">
		<h3 class="reg-form-title">Registration Here</h3>
		<p class="reg-form-desc">
			(After register, please active your account form your email if you didn't receive it, please also check your spam).
		</p>
		<?php
			$this->load->view('message.php');
			?>
		<form action="" class="registration-form" method="POST">
			<div class="form-group">
				<label for="reg-fname">Your Full Name</label>
				<input type="text" name="first_name" required value="<?=set_value('first_name')?>" class="reg-fname form-control" placeholder="Type your full name">
			</div>
			<div class="form-group">
				<label for="reg-email">Your Email</label>
				<input type="email" name="email" required value="<?=set_value('email')?>" class="reg-email form-control" placeholder="Type your email">
			</div>
			<div class="form-group">
				<label for="reg-pass">Your Password</label>
				<input type="password" name="password" required class="reg-pass form-control" placeholder="Enter a password">
			</div>
			<div class="form-group">
				<label for="reg-cpass">Confirm Password</label>
				<input type="password" name="confirm_password" required class="reg-cpass form-control" placeholder="Re-enter password">
			</div>
			<div class="form-group">
				<label for="reg-verify">
					<?php
					$firstNumber_acc = mt_rand(0, 9);
					$secondNumber_acc = mt_rand(0 ,9);
					echo $firstNumber_acc . '+' . $secondNumber_acc;
				?>
				</label>
				<input type="hidden" name="current_captcha" value="<?=$firstNumber_acc + $secondNumber_acc?>">
				<input type="text" name="captcha" class="reg-verify form-control" placeholder="Verification code" required>
			</div>
			
			<button type="submit" value="submit" class="reg-signup-btn">Sign up</button>
		</form>
	</div>
</div>

							<div class="col-12 col-lg-7 col-xl-6 mt-5 mt-lg-0">
								<div class="reg-form-guide h-100 d-flex align-items-center">
									<div class="tabulation w-100">
										<ul class="nav nav-tabs">
											<li>
												<a data-toggle="tab" href="#howToTab" class="active">How to become a Student</a>
											</li>
											<li>
												<a data-toggle="tab" href="#rolesTab">Student roles</a>
											</li>
											<li><a data-toggle="tab" href="#paymentTab">Payment roles</a></li>
										</ul>
										<div class="tab-content">
											<div id="howToTab" class="tab-pane in active">
												<ul class="reg-form-guide-list">
													<li class="single-guide">
														Register your account on website.
													</li>
													<li class="single-guide">
														Browse thousands of teachers according to your demands.
													</li>
													<li class="single-guide">
														Book the teacher's available time and start your lesson on schedule.  
													</li>
												</ul>
											</div>
											<div id="rolesTab" class="tab-pane">
												<ul class="reg-form-guide-list">
													<li class="single-guide">
														Student role one. Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem, impedit.
													</li>
													<li class="single-guide">
														Student role two. Lorem ipsum dolor sit amet consectetur adipisicing.
													</li>
													<li class="single-guide">
														Student role three. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil.
													</li>
												</ul>
											 </div>
											<div id="paymentTab" class="tab-pane">
												<ul class="reg-form-guide-list">
													<li class="single-guide">
														Payment role one. Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem, impedit.
													</li>
													<li class="single-guide">
														Payment role two. Lorem ipsum dolor sit amet consectetur adipisicing.
													</li>
													<li class="single-guide">
														Payment role three. Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil.
													</li>
												</ul>								
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</section>
					<!-- end: registration form -->
				</div>
			</div>
		</div>
	</div>
	<!-- end: main content -->



<?php
$this->load->view('front/header/footer.php');
?>
