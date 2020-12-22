
<?php
$this->load->view('front/auth/header/header.php');
?>




	<!-- start: signup options -->
	<section class="signup-options-section">
		<div class="container-fluid">
			<div class="row">
				<div class="col-12">					
					<div class="signup-options text-center">
						<h2 class="signup-options-title">Sign up</h2>
						<p class="signup-options-desc">Please choose your role for sign up</p>

						<div class="signup-roles d-flex justify-content-center">
							<a href="<?=base_url();?>become-student" class="single-role student-role">
								<div class="signup-role-img">
									<img src="assets/img/student-studying.png" alt="student-studying">
								</div>
								<h2 class="signup-role-title text-capitalize">Student</h2>
							</a>
							<a href="<?=base_url();?>become-tutor" class="single-role teacher-role">
								<div class="signup-role-img">
									<img src="assets/img/tutor-at-board.png" alt="tutor-teaching">
								</div>
								<h2 class="signup-role-title text-capitalize">Teacher</h2>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- end: signup options -->

<?php
$this->load->view('front/auth/header/footer.php');
?>
