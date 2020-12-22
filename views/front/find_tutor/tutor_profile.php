<?php
   $this->load->view('front/header/header.php');
   ?>
<?php
   $this->load->view('front/header/menu.php');
   ?>
<!-- start: hero area -->
<section class="hero-area">
   <div class="hero-bg" style="background-image: url(<?=base_url();?>assets/img/banner-bg/banner-bg-2.jpg);"></div>
   <div class="hero-overlay"></div>
   <div class="container h-100">
      <div class="row justify-content-center align-items-lg-center h-100">
         <!-- user profile summery -->
         <div class="col-12 col-lg-4 profile-summary order-2 order-lg-1">
            <div class="user-profile text-center text-capitalize">
               <div class="profile-image">
                  <?php
                     $datas = 'backed/uploads/profile/'.$getUser->profile_pic;
                     if (file_exists($datas) && !empty($getUser->profile_pic)){
                     ?>
                  <img src="<?=base_url();?>backed/uploads/profile/<?=$getUser->profile_pic?>" alt="profile-picture">
                  <?php } else { ?>
                  <img src="<?=base_url();?>assets/img/tutor-profile/icon400400.jpg" alt="profile-picture">
                  <?php
                     }
                     ?>
                  <span class="lesson-rate">
                  <span class="price">$<?=$getUser->hour_per_rate?></span>
                  <span class="text">/hour</span>
                  </span>
               </div>
               <h3 class="profile-name"><?=ucwords($getUser->first_name)?> <?=ucwords($getUser->last_name)?></h3>
               <?php
                  if(!empty($getUser->experience_of_teacher)) {
                  ?>
               <p class="profile-designation"><?=$getUser->experience_of_teacher?> Years Experienced</p>
               <?php }
                  ?>
               <div class="rating">
                  <span class="stars">
                  <span><i class="fas fa-star"></i></span>
                  <span><i class="fas fa-star"></i></span>
                  <span><i class="fas fa-star"></i></span>
                  <span><i class="fas fa-star"></i></span>
                  <span><i class="fas fa-star"></i></span>
                  </span>
                  <span class="point">4.00</span>
                  <span class="text">Rating</span>
               </div>
               <?php
if(!empty($getUser->about_us))
{
?>
               <a href="#bio" class="button scrolls view-bio thin-bg">View my bio</a>
           <?php }
           ?>
               <div class="short-info">
                  <p class="d-flex justify-content-between">
                     <span class="label">Repeat student</span>
                     <span class="value">15</span>
                  </p>
                  <p class="d-flex justify-content-between">
                     <span class="label">Average reply time</span>
                     <span class="value">1 Hour</span>
                  </p>
                  <p class="d-flex justify-content-between">
                     <span class="label">Level</span>
                     <span class="value"><?=ucwords($getUser->level_of_student_name)?></span>
                  </p>
                  <p class="d-flex justify-content-between">
                     <span class="label">Local time</span>
                     <span class="value"><?=date('d-m-Y', strtotime($getUser->created_date));?> <?=date('h:i A', strtotime($getUser->created_date));?></span>
                  </p>
               </div>
               <a href="#" class="button book-lesson deep-bg">Book a Lesson</a>
            </div>
         </div>
         <!-- hero main content -->
         <div class="col-12 col-lg-8 ml-lg-auto order-1 order-lg-2 h-100">
            <!-- hero main content -->
            <div class="hero-main-content">
               <h1 class="hero-title-name text-capitalize"><?=ucwords($getUser->first_name)?> <?=ucwords($getUser->last_name)?></h1>
               <div class="rating">
                  <span class="stars">
                  <span><i class="fas fa-star"></i></span>
                  <span><i class="fas fa-star"></i></span>
                  <span><i class="fas fa-star"></i></span>
                  <span><i class="fas fa-star"></i></span>
                  <span><i class="fas fa-star"></i></span>
                  </span>
                  <span class="point">4.00</span>
                  <span class="text">Rating</span>
               </div>
               <h3 class="hero-subtitle text-capitalize"><?=ucwords($getUser->category_name)?></h3>
            </div>
            <!-- profile hero menu -->
            <nav class="hero-menu-tabs-container">
<?php
if(!empty($getUser->about_us))
{
?>
               <a class="hero-menu-tab" href="#bio">Bio</a>
<?php }
if(!empty($getSubject))
{
?>
	           <a class="hero-menu-tab" href="#subjects">Subjects</a>
               <?php
}
if(!empty($getQulification)) {
?>
               <a class="hero-menu-tab" href="#qualifications">Qualifications</a>
<?php }
?>
               <a class="hero-menu-tab" href="#availability">Availability</a>
               <a class="hero-menu-tab" href="#rating">Rating</a>
               <a class="hero-menu-tab" href="#reviews">Reviews</a>
               <span class="hero-menu-tab-slider"></span>
               <button type="button" id="mobile-menu-closer">x</button>
            </nav>
            <!-- mobile menu button -->
            <span class="mobile-menu-button sticky-head">
            <button type="button" id="mobile-menu-opener">
            <span class="icon"><i class="fas fa-bars"></i></span>
            <span class="text ml-1">Menu</span>
            </button>
            </span>
         </div>
      </div>
   </div>
</section>
<!-- end: hero area -->
<!-- start: main content -->
<div id="main-content" class="main-content">
   <div class="container">
      <div class="row">
         <div class="col-lg-8 ml-lg-auto pl-lg-0">

<?php
if(!empty($getCourse))
{
?>
            <!-- start: lectures -->
            <section id="lectures" class="lectures">
               <div class="row lectures-content">
                  <!-- current lecture -->
                  <div class="col-lg-7 col-xl-8 mb-5 mb-lg-0">
                     <div class="current-lecture">
                        <div class="current-lecture-player">
                           <iframe width="500" height="300" src="https://www.youtube.com/embed/MxjZ0ggysLU" frameborder="0" allow="accelerometer; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                        <div class="lecture-info d-flex justify-content-between">
                           <h4 class="lecture-title">How to Solve Complex Math Problems ?</h4>
                           <span class="lecture-date">Aug 7, 2019</span>
                        </div>
                     </div>
                  </div>
                  <!-- other lectures -->
                  <div class="col-lg-5 col-xl-4 pl-lg-0">
                     <div class="other-lectures">
                        <h4 class="other-lectures-heading text-capitalize">Other lectures</h4>
                        <div class="lectures-container">
                           <?php 
                           
                           $i = 0; 
                           foreach ($getCourse as $value_c) { 
                           	$nowplaying = '';
                           	if($i == 0)
                           	{
                           		$nowplaying = 'now-playing';
                           	}
                           	$i++;

                           	?>
                           	<div class="single-lecture <?=$nowplaying?>">
                           		<?php
                           		if(!empty($value_c->image) && file_exists('backed/teacher/course/'.$value_c->image)){
                           		?>
								<div class="lecture-thumb">
									<img src="<?=base_url()?>backed/teacher/course/<?=$value_c->image?>" alt="lecture">
								</div>
								<?php 
								}
								?>
								<div class="lecture-info">
									<h6 class="lecture-title"><?=$value_c->course_title?></h6>
									<span class="price">$<?=$value_c->hour_per_rate?></span>
									<p class="lecture-detail truncated-text">
										<?=strip_tags(substr($value_c->description,0,100))?>...
									</p>
								</div>
							</div>

                           <?php
                              }
                              ?>
                       
                        </div>
                     </div>
                  </div>
               </div>
            </section>
            <!-- end: lectures -->
<?php }

if(!empty($getUser->about_us))
{
?>

            <!-- start: bio -->
            <section id="bio" class="bio wow fadeInUp">
               <div class="section-content">
                  <!-- section heading -->
                  <div class="section-heading">
                     <span class="iconic-image">
                     <?php
                        $datas = 'backed/uploads/profile/'.$getUser->profile_pic;
                        if (file_exists($datas) && !empty($getUser->profile_pic)){
                        ?>
                     <img src="<?=base_url();?>backed/uploads/profile/<?=$getUser->profile_pic?>" alt="profile-picture">
                     <?php } else { ?>
                     <img src="<?=base_url();?>assets/img/tutor-profile/icon400400.jpg" alt="profile-picture">
                     <?php
                        }
                        ?>
                     </span>
                     <h2 class="section-title">Bio</h2>
                  </div>
                  <!-- inner content -->
                  <div class="inner-content">
                     <h4 class="bio-subtitle text-capitalize"><?=ucwords($getUser->category_name)?></h4>
                     <p>
                        <?=$getUser->about_us?>
                     </p>
                  </div>
               </div>
            </section>
            <!-- end: bio -->
<?php }

if(!empty($getSubject))
{
?>
            <!-- start: subjects -->
            <section id="subjects" class="subjects wow fadeInUp">
               <div class="section-content">
                  <!-- section heading -->
                  <div class="section-heading">
                     <span class="iconic-image">
                     <img src="<?=base_url();?>assets/img/iconic-book.png" alt="subject">
                     </span>
                     <h2 class="section-title">My Subject</h2>
                  </div>
                  <!-- inner content -->
                  <div class="inner-content">
                     <p class="subjects-desc">I teach Following levels</p>
                    
                 	<?php
                 	foreach($getSubject as $value)
                 	{
                 	?>
                     	 <div class="single-subject-detail d-flex">
	                        <div class="detail-column one">
	                           <p class="desc"><?=ucwords($value->subject_name)?></p>
	                        </div>
	                        <div class="detail-column two">
	                           <h5 class="label"> </h5>
	                           <p class="desc"><?=ucwords($value->level_name)?></p>
	                        </div>
                         </div>
                    <?php }
                    ?>
                   
                  </div>
               </div>
            </section>
            <!-- end: subjects -->
<?php
}
if(!empty($getQulification)) {
?>
            <!-- start: qualifications -->
            <section id="qualifications" class="qualifications wow fadeInUp">
               <div class="section-content">
                  <!-- section heading -->
                  <div class="section-heading">
                     <span class="iconic-image">
                     <img src="<?=base_url();?>assets/img/iconic-graduate.png" alt="qualification">
                     </span>
                     <h2 class="section-title">My Qualification</h2>
                  </div>
                  <!-- inner content -->
                  <div class="inner-content">
                  	<?php 
                  	foreach($getQulification as $value)
                  	{
                  	?>

                     <div class="single-qualification">
                        <h5 class="qualific-title"><?=ucwords($value->university_name)?></h5>
                        <div class="qualific-info">
                           <p class="name"><?=ucwords($value->degree)?></p>
                           <p class="levels">Major: <?=ucwords($value->major)?></p>
                           <p class="levels">Duration: <?=$value->start_year?> - <?=$value->end_year?></p>
                        </div>
                        Description: <?=$value->description?>
                     </div>
                     <hr />
                 <?php }
                 ?>

                  </div>
               </div>
            </section>
            <!-- end: qualifications -->
<?php }
?>
            <!-- start: availability -->
            <section id="availability" class="availability wow fadeInUp">
               <div class="section-content">
                  <!-- section heading -->
                  <div class="section-heading">
                     <span class="iconic-image">
                     <img src="<?=base_url();?>assets/img/iconic-calendar.png" alt="calendar">
                     </span>
                     <h2 class="section-title">My Availability</h2>
                  </div>
                  <!-- inner content -->
                  <div class="inner-content">
                     <p class="avail-desc">I am available in This time</p>
                     <table class="avail-table">
                        <thead>
                           <th class="day-name"></th>
                           <th class="day-name">Mon</th>
                           <th class="day-name">Tue</th>
                           <th class="day-name">Wed</th>
                           <th class="day-name">Thu</th>
                           <th class="day-name">Fri</th>
                           <th class="day-name">Sat</th>
                           <th class="day-name">Sun</th>
                        </thead>
                        <tbody>
                           <tr>
                              <th>
                                 <div class="day-period d-flex align-items-center">
                                    <span>
                                    <img src="<?=base_url();?>assets/img/iconic-sun-morning.png" alt="morning">
                                    </span>
                                    <div class="text-left">
                                       <p>Morning</p>
                                       <small>Pre 12pm</small>
                                    </div>
                                 </div>
                              </th>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                           </tr>
                           <tr>
                              <th>
                                 <div class="day-period d-flex align-items-center">
                                    <span>
                                    <img src="<?=base_url();?>assets/img/iconic-sun-afternoon.png" alt="afternoon">
                                    </span>
                                    <div class="text-left">
                                       <p>Afternoon</p>
                                       <small>12 - 4pm</small>
                                    </div>
                                 </div>
                              </th>
                              <td></td>
                              <td>
                                 <span class="checked"><i class="fas fa-check"></i></span>
                              </td>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                           </tr>
                           <tr>
                              <th>
                                 <div class="day-period d-flex align-items-center">
                                    <span>
                                    <img src="<?=base_url();?>assets/img/iconic-moon-evening.png" alt="evening">
                                    </span>
                                    <div class="text-left">
                                       <p>Evening</p>
                                       <small>4 - 7pm</small>
                                    </div>
                                 </div>
                              </th>
                              <td></td>
                              <td>
                                 <span class="checked"><i class="fas fa-check"></i></span>
                              </td>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                           </tr>
                           <tr>
                              <th>
                                 <div class="day-period d-flex align-items-center">
                                    <span>
                                    <img src="<?=base_url();?>assets/img/iconic-moon-late.png" alt="Late">
                                    </span>
                                    <div class="text-left">
                                       <p>Late</p>
                                       <small>7 - 10pm</small>
                                    </div>
                                 </div>
                              </th>
                              <td></td>
                              <td>
                                 <span class="checked"><i class="fas fa-check"></i></span>
                              </td>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                              <td></td>
                           </tr>
                        </tbody>
                     </table>
                  </div>
               </div>
            </section>
            <!-- end: availability -->
            <!-- start: rating -->
            <section id="rating" class="rating-sec wow fadeInUp">
               <div class="section-content">
                  <!-- section heading -->
                  <div class="section-heading">
                     <span class="iconic-image">
                     <img src="<?=base_url();?>assets/img/iconic-register.png" alt="rating">
                     </span>
                     <h2 class="section-title">Students Feedback</h2>
                  </div>
                  <!-- inner content -->
                  <div class="inner-content">
                     <div class="rating">
                        <span class="point">4.00</span>
                        <span class="stars">
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="far fa-star"></i></span>
                        </span>
                     </div>
                     <div class="rating-bars">
                        <div class="single-rating-bar d-flex align-items-center mb-3">
                           <span class="star-label">5 Stars</span>
                           <div class="progress">
                              <div class="progress-bar" role="progressbar" style="width: 90%;" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                           </div>
                           <span class="star-count">(100)</span>
                        </div>
                        <div class="single-rating-bar d-flex align-items-center mb-3">
                           <span class="star-label">4 Stars</span>
                           <div class="progress">
                              <div class="progress-bar" role="progressbar" style="width: 20%;" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                           </div>
                           <span class="star-count">(10)</span>
                        </div>
                        <div class="single-rating-bar d-flex align-items-center mb-3">
                           <span class="star-label">3 Stars</span>
                           <div class="progress">
                              <div class="progress-bar" role="progressbar" style="width: 40%;" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                           </div>
                           <span class="star-count">(8)</span>
                        </div>
                        <div class="single-rating-bar d-flex align-items-center mb-3">
                           <span class="star-label">2 Stars</span>
                           <div class="progress">
                              <div class="progress-bar" role="progressbar" style="width: 10%;" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                           </div>
                           <span class="star-count">(8)</span>
                        </div>
                        <div class="single-rating-bar d-flex align-items-center mb-3">
                           <span class="star-label">1 Stars</span>
                           <div class="progress">
                              <div class="progress-bar" role="progressbar" style="width: 0%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
                           </div>
                           <span class="star-count">(0)</span>
                        </div>
                     </div>
                  </div>
               </div>
            </section>
            <!-- end: rating -->
            <!-- start: reviews -->
            <section id="reviews" class="reviews wow fadeInUp">
               <div class="section-content">
                  <!-- section heading -->
                  <div class="section-heading">
                     <span class="iconic-image">
                     <img src="<?=base_url();?>assets/img/iconic-review.png" alt="review">
                     </span>
                     <h2 class="section-title">Students Reviews</h2>
                  </div>
                  <!-- inner content -->
                  <div class="inner-content">
                     <div class="single-review">
                        <div class="student-img">
                           <img src="<?=base_url();?>assets/img/testimonial/review-testimonial-1.jpg" alt="student-review">
                        </div>
                        <div class="review-info">
                           <h4 class="student-name">Sahed ui</h4>
                           <p class="review-text">
                              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non.
                           </p>
                           <p class="review-meta">
                              <span class="review-date">7 Aug 2020</span>
                              <a href="#" class="review-btn reply">Reply</a>
                              <a href="#" class="review-btn like">Like</a>
                           </p>
                        </div>
                     </div>
                     <div class="single-review">
                        <div class="student-img">
                           <img src="<?=base_url();?>assets/img/testimonial/review-testimonial-1.jpg" alt="student-review">
                        </div>
                        <div class="review-info">
                           <h4 class="student-name">Sahed ui</h4>
                           <p class="review-text">
                              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non.
                           </p>
                           <p class="review-meta">
                              <span class="review-date">7 Aug 2020</span>
                              <a href="#" class="review-btn reply">Reply</a>
                              <a href="#" class="review-btn like">Like</a>
                           </p>
                        </div>
                     </div>
                     <div class="single-review">
                        <div class="student-img">
                           <img src="<?=base_url();?>assets/img/testimonial/review-testimonial-1.jpg" alt="student-review">
                        </div>
                        <div class="review-info">
                           <h4 class="student-name">Sahed ui</h4>
                           <p class="review-text">
                              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non.
                           </p>
                           <p class="review-meta">
                              <span class="review-date">7 Aug 2020</span>
                              <a href="#" class="review-btn reply">Reply</a>
                              <a href="#" class="review-btn like">Like</a>
                           </p>
                        </div>
                     </div>
                  </div>
                  <a href="#" class="more-review-btn">
                  More reviews
                  <i class="fas fa-angle-double-right"></i>
                  </a>
               </div>
            </section>
            <!-- end: reviews -->
         </div>
      </div>
   </div>
</div>
<!-- end: main content -->
<?php
   $this->load->view('front/header/footer.php');
   ?>
