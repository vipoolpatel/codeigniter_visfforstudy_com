
<?php
$this->load->view('front/header/header.php');
?>


<?php
$this->load->view('front/header/menu.php');
?>


	<!-- start: hero area -->
	<section class="hero-area">
		<div class="hero-bg" style="background-image: url(assets/img/banner-bg/banner-bg-5.jpg);"></div>
		<div class="hero-overlay"></div>
		<div class="container h-100">
			<div class="row align-items-lg-center h-100">
				<!-- hero main content -->
				<div class="col-12 h-100">
					<!-- hero main content -->
					<div class="hero-main-content">
						<h2 class="hero-title text-capitalize">Book your lesson</h2>
						
						<div class="hero-booking-featuers">
							<ul class="lesson-booking-features reg-form-guide-list">
								<li class="single-booking-feature">
									100% Satisfaction guarantee.
								</li>
								<li class="single-feature">
									Security your payment.
								</li>
								<li class="single-feature">
									You will not pay to teachers directly, if you are unhappy about your lesson. You will get full money refund.
								</li>
							</ul>
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
				<div class="col-lg-12">
					<!-- start: booking section -->
					<section class="booking-section">
						<div class="row">
							<div class="col-lg-10 col-xl-8">
								<div class="find-multi-search-box booking-form-container">
									<form action="index.html" class="booking-form">
										<div class="multi-search-form d-flex align-items-end">
											<div class="input-group">
												<div class="form-group">
													<label for="book-subject-multi">What Subject You Want to learn?</label>
													<select name="book-subject-multi" id="book-subject-multi" class="subject-multi form-control">
														<option >Math</option>
														<option>English</option>
														<option>Chinese</option>
													</select>
												</div>
												<div class="form-group">
													<label for="book-aim-multi">What the Aim for Your Booking?</label>
													<select name="book-aim-multi" id="book-aim-multi" class="book-aim-multi form-control">
														<option selected>Prepare for exam</option>
														<option>Improve skill</option>
													</select>
												</div>
												<div class="form-group">
													<label for="book-level-multi">What's Your Level?</label>
													<select name="book-level-multi" id="book-level-multi" class="level-multi form-control">
														<option>Beginner</option>
														<option selected>Intermediate</option>
														<option>Advanced</option>
													</select>
												</div>
											</div>
										</div>

										<div class="book-form-check custom">
											<h5 class="label">What type of lesson do you need?</h5>
											<div class="form-group d-inline-flex align-items-center mb-0 mr-4">
												<input type="radio" name="book-check" id="book-check-regular" class="reg-check form-check-input" value="regular" checked>
												<label for="book-check-regular" class="form-check-label">Regular</label>
											</div>
											<div class="form-group d-inline-flex align-items-center mb-0">
												<input type="radio" name="book-check" id="book-check-off" class="reg-check form-check-input" value="one-off">
												<label for="book-check-off" class="form-check-label">One off</label>
											</div>
										</div>

										<div class="custom-date-picker">
											<div id="date-picker-box" class="date-picker-box">
												<input type="text" name="book-date" id="book-date" class="book-date" placeholder="Pick a Date">
											</div>
										</div>

										<div class="time-picker">
											<div class="form-group">
												<label for="book-time-from">Available Time</label>
												<p class="time-picker-desc">
													(Time zone changed automatically, so the available time has been changed to your local time automatically.)
												</p>
												<div class="form-check-inline">
													<input type="time" name="book-time-from" id="book-time-from" class="book-time form-control">
													<span class="time-picker-separator">&amp;</span>
													<input type="time" name="book-time-to" id="book-time-to" class="book-time form-control">
												</div>
											</div>
										</div>

										<div class="text-message">
											<div class="form-group">
												<label for="booking-message">What do you want to learn?</label>
												<textarea name="booking-message" id="booking-message" class="booking-message form-control" placeholder="Type here...…." cols="10" rows="5"></textarea>
											</div>
										</div>

										<button type="submit" class="booking-submit-btn reg-signup-btn text-capitalize">Book Now</button>
									</form>									
								</div>
							</div>
						</div>
					</section>
					<!-- end: booking section -->
				</div>
			</div>
		</div>
	</div>
	<!-- end: main content -->




<?php
$this->load->view('front/header/footer.php');
?>
